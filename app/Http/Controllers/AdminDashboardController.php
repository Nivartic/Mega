<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Driver;
use App\Models\AdminActivityLog;
use App\Models\SystemSetting;
use Illuminate\Http\Request;
use App\Models\BannedEmail;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class AdminDashboardController extends Controller
{
    public function index(Request $request)
    {
        $stats = [
            'totalDrivers' => Driver::count(),
            'activeDrivers' => Driver::where('status', 'activo')->count(),
            'newDriversWeek' => Driver::where('created_at', '>=', now()->subWeek())->count(),
        ];

        $recentUsers = User::orderByDesc('created_at')->limit(10)->get();
        $users = User::orderByDesc('created_at')->paginate(20);

        return view('admin.dashboard', compact('stats', 'recentUsers', 'users'));
    }

    public function stats()
    {
        return response()->json([
            'status' => 'success',
            'data' => [
                'totalDrivers' => Driver::count(),
                'activeDrivers' => Driver::where('status', 'activo')->count(),
                'newDriversWeek' => Driver::where('created_at', '>=', now()->subWeek())->count(),
            ],
        ]);
    }

    public function usersIndex(Request $request)
    {
        $validated = $request->validate([
            'search' => ['nullable', 'string', 'max:100'],
            'sort' => ['nullable', Rule::in(['name', 'email', 'created_at'])],
            'order' => ['nullable', Rule::in(['asc', 'desc'])],
            'page' => ['nullable', 'integer', 'min:1'],
            'per_page' => ['nullable', 'integer', 'min:1', 'max:100'],
        ]);

        $query = User::query();

        if (!empty($validated['search'])) {
            $term = $validated['search'];
            $query->where(function ($q) use ($term) {
                $q->where('name', 'like', "%{$term}%")
                    ->orWhere('email', 'like', "%{$term}%");
            });
        }

        $sort = $validated['sort'] ?? 'created_at';
        $order = $validated['order'] ?? 'desc';
        $query->orderBy($sort, $order);

        $perPage = $validated['per_page'] ?? 10;
        $users = $query->paginate($perPage);

        return response()->json([
            'status' => 'success',
            'data' => $users->items(),
            'meta' => [
                'current_page' => $users->currentPage(),
                'per_page' => $users->perPage(),
                'total' => $users->total(),
                'last_page' => $users->lastPage(),
            ],
        ]);
    }

    public function usersStore(Request $request)
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email'],
            'password' => ['required', 'string', 'min:8'],
            'role' => ['nullable', 'string', 'max:50'],
        ]);

        $user = new User();
        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        if (isset($data['role'])) {
            $user->role = $data['role'];
        }
        $user->save();

        AdminActivityLog::create([
            'user_id' => $request->user()->id,
            'action' => 'users.store',
            'entity_type' => 'User',
            'entity_id' => $user->id,
            'metadata' => ['name' => $user->name, 'email' => $user->email],
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Usuario creado',
            'data' => $user,
        ], 201);
    }

    public function usersUpdate(Request $request, User $user)
    {
        $data = $request->validate([
            'name' => ['nullable', 'string', 'max:100'],
            'email' => ['nullable', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->id)],
            'password' => ['nullable', 'string', 'min:8'],
        ]);

        if (isset($data['name'])) {
            $user->name = $data['name'];
        }
        if (isset($data['email'])) {
            $user->email = $data['email'];
        }
        if (isset($data['password'])) {
            $user->password = Hash::make($data['password']);
        }
        $user->save();

        AdminActivityLog::create([
            'user_id' => $request->user()->id,
            'action' => 'users.update',
            'entity_type' => 'User',
            'entity_id' => $user->id,
            'metadata' => ['changes' => array_keys($data), 'data' => $data],
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Usuario actualizado',
            'data' => $user,
        ]);
    }

    public function usersDestroy(Request $request, User $user)
    {
        $user->delete();

        AdminActivityLog::create([
            'user_id' => $request->user()->id,
            'action' => 'users.destroy',
            'entity_type' => 'User',
            'entity_id' => $user->id,
            'metadata' => ['email' => $user->email],
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Usuario eliminado',
        ]);
    }

    public function setUserRole(Request $request, User $user)
    {
        $data = $request->validate([
            'role' => ['required', 'string', 'max:50'],
        ]);

        $user->role = $data['role'];
        $user->save();

        AdminActivityLog::create([
            'user_id' => $request->user()->id,
            'action' => 'users.set_role',
            'entity_type' => 'User',
            'entity_id' => $user->id,
            'metadata' => ['role' => $user->role],
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Rol asignado',
            'data' => ['id' => $user->id, 'role' => $user->role],
        ]);
    }

    public function recentActivity()
    {
        $recentUsers = User::orderByDesc('created_at')->limit(10)->get();

        return response()->json([
            'status' => 'success',
            'data' => $recentUsers,
        ]);
    }

    public function activityLogs()
    {
        $logs = AdminActivityLog::orderByDesc('created_at')->limit(50)->get();
        return response()->json([
            'status' => 'success',
            'data' => $logs,
        ]);
    }

    public function settingsIndex()
    {
        $settings = SystemSetting::all()->mapWithKeys(fn($s) => [$s->key => $s->value]);
        return response()->json([
            'status' => 'success',
            'data' => $settings,
        ]);
    }

    public function settingsUpdate(Request $request)
    {
        $data = $request->validate([
            'key' => ['required', 'string', 'max:100'],
            'value' => ['nullable', 'string', 'max:1000'],
        ]);

        $setting = SystemSetting::updateOrCreate(
            ['key' => $data['key']],
            ['value' => $data['value'] ?? null]
        );

        AdminActivityLog::create([
            'user_id' => $request->user()->id,
            'action' => 'settings.update',
            'entity_type' => 'SystemSetting',
            'entity_id' => $setting->id,
            'metadata' => ['key' => $setting->key, 'value' => $setting->value],
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return response()->json([
            'status' => 'success',
            'data' => ['key' => $setting->key, 'value' => $setting->value],
        ]);
    }

    public function usersBan(Request $request, User $user)
    {
        // 1. Agregar email a la lista negra
        BannedEmail::firstOrCreate(
            ['email' => $user->email],
            [
                'reason' => 'Inhabilitado por administrador',
                'banned_by' => $request->user()->id
            ]
        );

        // 2. Eliminar usuario (usando la misma lógica que destroy)
        $user->delete();

        // 3. Log de actividad
        AdminActivityLog::create([
            'user_id' => $request->user()->id,
            'action' => 'users.ban',
            'entity_type' => 'User',
            'entity_id' => $user->id,
            'metadata' => ['email' => $user->email, 'action' => 'banned_and_deleted'],
            'ip_address' => $request->ip(),
            'user_agent' => $request->header('User-Agent'),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Usuario inhabilitado y eliminado permanentemente',
        ]);
    }
}
