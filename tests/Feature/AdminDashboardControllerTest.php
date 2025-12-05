<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class AdminDashboardControllerTest extends TestCase
{
    use RefreshDatabase;

    protected function authenticateAdmin()
    {
        $admin = User::factory()->create(['role' => 'admin']);
        $this->be($admin);
        return $admin;
    }

    public function test_admin_dashboard_requires_auth_and_role()
    {
        $this->get('/admin/dashboard')->assertStatus(302); // redirect to login
        $user = User::factory()->create();
        $this->be($user);
        $this->get('/admin/dashboard')->assertStatus(403);
    }

    public function test_admin_stats_json_ok()
    {
        $this->authenticateAdmin();
        $this->get('/admin/stats')
            ->assertOk()
            ->assertJsonStructure(['status','data' => ['totalDrivers','activeDrivers','newDriversWeek']]);
    }

    public function test_users_store_validation()
    {
        $this->authenticateAdmin();
        $this->post('/admin/users', [])
            ->assertStatus(302); // validation redirects
        $this->postJson('/admin/users', [
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => 'password123',
        ])->assertStatus(201)->assertJsonPath('status', 'success');
    }
}