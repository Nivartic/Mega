@extends('shared.Layout')

@section('styles')
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&family=Noto+Sans:wght@400;500;700;900&family=Space+Grotesk:wght@400;500;700" />
  <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
@endsection
@section('content')
  <main class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden"
    style='font-family: "Space Grotesk", "Noto Sans", sans-serif;' role="main" aria-label="Panel de administración">
    <div class="layout-container flex h-full grow flex-col">
      <div class="gap-1 px-6 flex flex-1 justify-center py-5">
        <!-- Sidebar / Menú lateral -->
        <nav class="layout-content-container flex flex-col w-80" aria-label="Menú administrador">
          <div class="flex h-full min-h-[700px] flex-col justify-between bg-slate-50 p-4">
            <div class="flex flex-col gap-4">
              <div class="flex flex-col">
                <h1 class="text-[#0d151c] text-base font-medium leading-normal">MegAgencia</h1>
                <p class="text-[#49779c] text-sm font-normal leading-normal">Admin</p>
              </div>
              <div class="flex flex-col gap-2">
                <div class="flex items-center gap-3 px-3 py-2 rounded-xl bg-[#e7eef4]">
                  <div class="text-[#0d151c]" data-icon="House" data-size="24px" data-weight="fill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                      viewBox="0 0 256 256">
                      <path
                        d="M224,115.55V208a16,16,0,0,1-16,16H168a16,16,0,0,1-16-16V168a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v40a16,16,0,0,1-16,16H48a16,16,0,0,1-16-16V115.55a16,16,0,0,1,5.17-11.78l80-75.48.11-.11a16,16,0,0,1,21.53,0,1.14,1.14,0,0,0,.11.11l80,75.48A16,16,0,0,1,224,115.55Z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Dashboard</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#0d151c]" data-icon="Users" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                      viewBox="0 0 256 256">
                      <path
                        d="M117.25,157.92a60,60,0,1,0-66.5,0A95.83,95.83,0,0,0,3.53,195.63a8,8,0,1,0,13.4,8.74,80,80,0,0,1,134.14,0,8,8,0,0,0,13.4-8.74A95.83,95.83,0,0,0,117.25,157.92ZM40,108a44,44,0,1,1,44,44A44.05,44.05,0,0,1,40,108Zm210.14,98.7a8,8,0,0,1-11.07-2.33A79.83,79.83,0,0,0,172,168a8,8,0,0,1,0-16,44,44,0,1,0-16.34-84.87,8,8,0,1,1-5.94-14.85,60,60,0,0,1,55.53,105.64,95.83,95.83,0,0,1,47.22,37.71A8,8,0,0,1,250.14,206.7Z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Motorizados</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#0d151c]" data-icon="PresentationChart" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                      viewBox="0 0 256 256">
                      <path
                        d="M216,40H136V24a8,8,0,0,0-16,0V40H40A16,16,0,0,0,24,56V176a16,16,0,0,0,16,16H79.36L57.75,219a8,8,0,0,0,12.5,10l29.59-37h56.32l29.59,37a8,8,0,1,0,12.5-10l-21.61-27H216a16,16,0,0,0,16-16V56A16,16,0,0,0,216,40Zm0,136H40V56H216V176ZM104,120v24a8,8,0,0,1-16,0V120a8,8,0,0,1,16,0Zm32-16v40a8,8,0,0,1-16,0V104a8,8,0,0,1,16,0Zm32-16v56a8,8,0,0,1-16,0V88a8,8,0,0,1,16,0Z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Reportes</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#0d151c]" data-icon="Gear" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                      viewBox="0 0 256 256">
                      <path
                        d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160Zm88-29.84q.06-2.16,0-4.32l14.92-18.64a8,8,0,0,0,1.48-7.06,107.21,107.21,0,0,0-10.88-26.25,8,8,0,0,0-6-3.93l-23.72-2.64q-1.48-1.56-3-3L186,40.54a8,8,0,0,0-3.94-6,107.71,107.71,0,0,0-26.25-10.87,8,8,0,0,0-7.06,1.49L130.16,40Q128,40,125.84,40L107.2,25.11a8,8,0,0,0-7.06-1.48A107.6,107.6,0,0,0,73.89,34.51a8,8,0,0,0-3.93,6L67.32,64.27q-1.56,1.49-3,3L40.54,70a8,8,0,0,0-6,3.94,107.71,107.71,0,0,0-10.87,26.25,8,8,0,0,0,1.49,7.06L40,125.84Q40,128,40,130.16L25.11,148.8a8,8,0,0,0-1.48,7.06,107.21,107.21,0,0,0,10.88,26.25,8,8,0,0,0,6,3.93l23.72,2.64q1.49,1.56,3,3L70,215.46a8,8,0,0,0,3.94,6,107.71,107.71,0,0,0,26.25,10.87,8,8,0,0,0,7.06-1.49L125.84,216q2.16.06,4.32,0l18.64,14.92a8,8,0,0,0,7.06,1.48,107.21,107.21,0,0,0,26.25-10.88,8,8,0,0,0,3.93-6l2.64-23.72q1.56-1.48,3-3L215.46,186a8,8,0,0,0,6-3.94,107.71,107.71,0,0,0,10.87-26.25,8,8,0,0,0-1.49-7.06Zm-16.1-6.5a73.93,73.93,0,0,1,0,8.68,8,8,0,0,0,1.74,5.48l14.19,17.73a91.57,91.57,0,0,1-6.23,15L187,173.11a8,8,0,0,0-5.1,2.64,74.11,74.11,0,0,1-6.14,6.14,8,8,0,0,0-2.64,5.1l-2.51,22.58a91.32,91.32,0,0,1-15,6.23l-17.74-14.19a8,8,0,0,0-5-1.75h-.48a73.93,73.93,0,0,1-8.68,0,8,8,0,0,0-5.48,1.74L100.45,215.8a91.57,91.57,0,0,1-15-6.23L82.89,187a8,8,0,0,0-2.64-5.1,74.11,74.11,0,0,1-6.14-6.14,8,8,0,0,0-5.1-2.64L46.43,170.6a91.32,91.32,0,0,1-6.23-15l14.19-17.74a8,8,0,0,0,1.74-5.48,73.93,73.93,0,0,1,0-8.68,8,8,0,0,0-1.74-5.48L40.2,100.45a91.57,91.57,0,0,1,6.23-15L69,82.89a8,8,0,0,0,5.1-2.64,74.11,74.11,0,0,1,6.14-6.14A8,8,0,0,0,82.89,69L85.4,46.43a91.32,91.32,0,0,1,15-6.23l17.74,14.19a8,8,0,0,0,5.48,1.74,73.93,73.93,0,0,1,8.68,0,8,8,0,0,0,5.48-1.74L155.55,40.2a91.57,91.57,0,0,1,15,6.23L173.11,69a8,8,0,0,0,2.64,5.1,74.11,74.11,0,0,1,6.14,6.14,8,8,0,0,0,5.1,2.64l22.58,2.51a91.32,91.32,0,0,1,6.23,15l-14.19,17.74A8,8,0,0,0,199.87,123.66Z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Configuración</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#0d151c]" data-icon="Question" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                      viewBox="0 0 256 256">
                      <path
                        d="M140,180a12,12,0,1,1-12-12A12,12,0,0,1,140,180ZM128,72c-22.06,0-40,16.15-40,36v4a8,8,0,0,0,16,0v-4c0-11,10.77-20,24-20s24,9,24,20-10.77,20-24,20a8,8,0,0,0-8,8v8a8,8,0,0,0,16,0v-.72c18.24-3.35,32-17.9,32-35.28C168,88.15,150.06,72,128,72Zm104,56A104,104,0,1,1,128,24,104.11,104.11,0,0,1,232,128Zm-16,0a88,88,0,1,0-88,88A88.1,88.1,0,0,0,216,128Z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Soporte</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2 mt-4">
                  <a href="#" class="text-[#0d151c] text-sm font-medium leading-normal btn-logout">Cerrar Sesión</a>
                </div>
              </div>
            </div>
          </div>
        </nav>

        <!-- Contenido principal -->
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1" role="region"
          aria-labelledby="admin-dashboard-title">
          <!-- Título del Dashboard -->
          <div class="flex flex-wrap justify-between gap-3 p-4">
            <h1 id="admin-dashboard-title"
              class="text-[#0d151c] tracking-light text-[32px] font-bold leading-tight min-w-72">
              Panel de Administración
            </h1>
          </div>

          <!-- Tarjetas de estadísticas -->
          <div class="flex flex-wrap gap-4 p-4">
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Total Motorizados</p>
              <p class="text-[#0d151c] tracking-light text-2xl font-bold leading-tight">{{ $stats['totalDrivers'] ?? 0 }}
              </p>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Motorizados Activos</p>
              <p class="text-[#0d151c] tracking-light text-2xl font-bold leading-tight">{{ $stats['activeDrivers'] ?? 0 }}
              </p>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Nuevos Motorizados</p>
              <p class="text-[#0d151c] tracking-light text-2xl font-bold leading-tight">
                {{ $stats['newDriversWeek'] ?? 0 }}
              </p>
            </div>
          </div>

          <!-- Lista de Motorizados -->
          <h2 class="text-[#0d151c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Lista de
            Motorizados</h2>

          <!-- Filtros y búsqueda -->
          <div class="px-4 py-3">
            <div class="flex flex-wrap justify-between gap-3 mb-4">
              <div class="flex gap-2">
                <button
                  class="btn-new bg-[#0d151c] text-white px-4 py-2 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-[#0d151c]">Nuevo</button>
                <button
                  class="btn-delete bg-[#e7eef4] text-[#0d151c] px-4 py-2 rounded-lg text-sm font-medium focus:outline-none focus:ring-2 focus:ring-[#0d151c]">Eliminar</button>
              </div>
              <div class="flex gap-2 items-center" role="search" aria-label="Buscar motorizados">
                <div class="search-box flex items-center border border-[#cedde8] rounded-lg overflow-hidden">
                  <input type="text" id="search-driver" placeholder="Buscar motorizado..." aria-label="Buscar motorizado"
                    class="px-3 py-2 outline-none text-sm focus:outline-none focus:ring-2 focus:ring-[#0d151c]">
                  <button class="btn-search bg-[#e7eef4] px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#0d151c]"
                    aria-label="Buscar">
                    <i class="fas fa-search text-[#49779c]"></i>
                  </button>
                </div>
                <select id="filter-status" aria-label="Filtrar por estado"
                  class="border border-[#cedde8] rounded-lg px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-[#0d151c]">
                  <option value="">Estado</option>
                  <option value="activo">Activo</option>
                  <option value="inactivo">Inactivo</option>
                  <option value="suspendido">Suspendido</option>
                </select>
                <select id="sort-by" aria-label="Ordenar por"
                  class="border border-[#cedde8] rounded-lg px-3 py-2 text-sm bg-white focus:outline-none focus:ring-2 focus:ring-[#0d151c]">
                  <option value="">Ordenar por</option>
                  <option value="name">Nombre</option>
                  <option value="rating">Calificación</option>
                  <option value="trips">Viajes completados</option>
                </select>
              </div>
            </div>

            <!-- Tabla de motorizados -->
            <div class="flex overflow-hidden rounded-xl border border-[#cedde8] bg-slate-50 mb-4">
              <table class="flex-1">
                <caption class="sr-only">Tabla de motorizados</caption>
                <thead>
                  <tr class="bg-slate-50">
                    <th scope="col" class="px-4 py-3 text-left text-[#0d151c] text-sm font-medium leading-normal">
                      Motorizado</th>
                    <th scope="col" class="px-4 py-3 text-left text-[#0d151c] text-sm font-medium leading-normal">DNI</th>
                    <th scope="col" class="px-4 py-3 text-left text-[#0d151c] text-sm font-medium leading-normal">
                      Calificación</th>
                    <th scope="col" class="px-4 py-3 text-left text-[#0d151c] text-sm font-medium leading-normal">Plan
                    </th>
                    <th scope="col" class="px-4 py-3 text-left text-[#0d151c] text-sm font-medium leading-normal">Monto
                      diario</th>
                    <th scope="col" class="px-4 py-3 text-left text-[#0d151c] text-sm font-medium leading-normal">Estado
                    </th>
                    <th scope="col" class="px-4 py-3 text-left text-[#0d151c] text-sm font-medium leading-normal">
                      Seleccionar</th>
                  </tr>
                </thead>
                <tbody id="drivers-list-table" aria-live="polite">
                  <!-- Los datos de la tabla se llenarán con JavaScript -->
                </tbody>
              </table>
            </div>

            <!-- Grid de motorizados (para vista móvil) -->
            <div class="drivers-grid hidden md:hidden" id="drivers-list">
              <!-- Los datos del grid se llenarán con JavaScript -->
            </div>

            <!-- Paginación -->
            <div class="pagination flex justify-center gap-2 mt-4">
              <button
                class="btn-page active bg-[#0d151c] text-white w-8 h-8 rounded-md flex items-center justify-center">1</button>
              <button
                class="btn-page bg-[#e7eef4] text-[#0d151c] w-8 h-8 rounded-md flex items-center justify-center">2</button>
              <button
                class="btn-page bg-[#e7eef4] text-[#0d151c] w-8 h-8 rounded-md flex items-center justify-center">3</button>
              <button class="btn-next bg-[#e7eef4] text-[#0d151c] w-8 h-8 rounded-md flex items-center justify-center">
                <i class="fas fa-chevron-right"></i>
              </button>
            </div>
          </div>

          <!-- Sección Recent Activity -->
          <h2 class="text-[#0d151c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Recent
            Activity</h2>
          <div class="px-4 py-3">
            <div class="flex overflow-hidden rounded-xl border border-[#cedde8] bg-slate-50">
              <table class="flex-1">
                <thead>
                  <tr class="bg-slate-50">
                    <th class="px-4 py-3 text-left text-[#0d151c] w-[400px] text-sm font-medium leading-normal">Usuario
                    </th>
                    <th class="px-4 py-3 text-left text-[#0d151c] w-[400px] text-sm font-medium leading-normal">Acción
                    </th>
                    <th class="px-4 py-3 text-left text-[#0d151c] w-[400px] text-sm font-medium leading-normal">Fecha</th>
                  </tr>
                </thead>
                <tbody>
                  @forelse($recentUsers ?? [] as $u)
                    <tr class="border-t border-t-[#cedde8]">
                      <td class="h-[72px] px-4 py-2 w-[400px] text-[#0d151c] text-sm font-normal leading-normal">
                        {{ $u->name }}
                      </td>
                      <td class="h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">Usuario
                        registrado</td>
                      <td class="h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">
                        {{ optional($u->created_at)->format('Y-m-d') }}
                      </td>
                    </tr>
                  @empty
                    <tr class="border-t border-t-[#cedde8]">
                      <td colspan="3"
                        class="h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">No
                        hay
                        actividad reciente</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
          </div>

          <h2 class="text-[#0d151c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Usuarios
            Registrados</h2>
          <div class="px-4 py-3">
            <div class="flex overflow-hidden rounded-xl border border-[#cedde8] bg-slate-50">
              <table class="flex-1" aria-label="Tabla de usuarios registrados">
                <thead>
                  <tr class="bg-slate-50">
                    <th class="px-4 py-3 text-left text-[#0d151c] w-[240px] text-sm font-medium leading-normal">Nombre
                    </th>
                    <th class="px-4 py-3 text-left text-[#0d151c] w-[320px] text-sm font-medium leading-normal">Email</th>
                    <th class="px-4 py-3 text-left text-[#0d151c] w-[160px] text-sm font-medium leading-normal">Rol</th>
                    <th class="px-4 py-3 text-left text-[#0d151c] w-[200px] text-sm font-medium leading-normal">Registrado
                    </th>
                    <th class="px-4 py-3 text-left text-[#0d151c] w-[120px] text-sm font-medium leading-normal">Acciones
                    </th>
                  </tr>
                </thead>
                <tbody id="users-list-table" aria-live="polite" aria-busy="false">
                  @forelse(($users ?? []) as $user)
                    <tr class="border-t border-t-[#cedde8]">
                      <td class="h-[72px] px-4 py-2 text-[#0d151c] text-sm font-normal leading-normal">{{ $user->name }}
                      </td>
                      <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">{{ $user->email }}
                      </td>
                      <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">
                        {{ $user->role ?? '—' }}
                      </td>
                      <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">
                        {{ optional($user->created_at)->format('Y-m-d') }}
                      </td>
                      <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">
                        <button onclick="deleteUser({{ $user->id }}, '{{ $user->name }}')"
                          class="text-red-600 hover:text-red-800 font-medium text-sm focus:outline-none focus:ring-2 focus:ring-red-500 rounded px-2 py-1"
                          title="Eliminar usuario">
                          <i class="fas fa-trash"></i>
                        </button>
                        <button onclick="banUser({{ $user->id }}, '{{ $user->name }}')"
                          class="text-yellow-600 hover:text-yellow-800 font-medium text-sm focus:outline-none focus:ring-2 focus:ring-yellow-500 rounded px-2 py-1 ml-1"
                          title="Inhabilitar usuario">
                          <i class="fas fa-ban"></i>
                        </button>
                      </td>
                    </tr>
                  @empty
                    <tr class="border-t border-t-[#cedde8]">
                      <td colspan="5"
                        class="h-[72px] px-4 py-2 text-center text-[#49779c] text-sm font-normal leading-normal">No
                        hay
                        usuarios registrados</td>
                    </tr>
                  @endforelse
                </tbody>
              </table>
            </div>
            @if(isset($users))
              <div class="mt-3">
                {{ $users->links() }}
              </div>
            @endif
          </div>

        </div>
      </div>
    </div>
  </main>

@endsection

@section('scripts')
  <script src="{{ asset('assets/js/admin.js') }}" defer></script>
  <script src="{{ asset('assets/js/auth.js') }}" defer></script>
  <script>
    // Script adicional para manejar la visualización en tabla
    document.addEventListener('DOMContentLoaded', function () {
      // Función para crear fila de tabla de motorizado
      function createDriverRow(driver) {
        const statusClass = driver.status === 'activo' ? 'text-green-600 font-medium' :
          (driver.status === 'inactivo' ? 'text-yellow-600 font-medium' : 'text-red-600 font-medium');
        const statusText = driver.status === 'activo' ? 'Activo' :
          (driver.status === 'inactivo' ? 'Inactivo' : 'Suspendido');

        const row = document.createElement('tr');
        row.className = 'border-t border-t-[#cedde8]';
        row.innerHTML = `
                          <td class="h-[72px] px-4 py-2 text-[#0d151c] text-sm font-normal leading-normal">${driver.name}</td>
                          <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">${driver.dni}</td>
                          <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">${driver.rating}</td>
                          <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">${driver.plan}</td>
                          <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">${driver.montoDiario}</td>
                          <td class="h-[72px] px-4 py-2 ${statusClass} text-sm font-normal leading-normal">${statusText}</td>
                          <td class="h-[72px] px-4 py-2 text-[#49779c] text-sm font-normal leading-normal">
                            <input type="checkbox" class="driver-select">
                          </td>
                        `;

        return row;
      }

      // Función para cargar motorizados en formato tabla
      function loadDriversTable() {
        const driversListTable = document.getElementById('drivers-list-table');
        if (!driversListTable) return;

        // Indicar que la tabla está actualizándose
        driversListTable.setAttribute('aria-busy', 'true');
        // Limpiar tabla actual
        driversListTable.innerHTML = '';

        // Obtener todos los motorizados (existentes + adicionales)
        const allDrivers = [
          {
            name: 'Nombre motorizado A',
            dni: '12345678',
            rating: 4.8,
            completedTrips: 120,
            tokens: 15,
            totalTrips: 125,
            plan: 'MEGA',
            montoDiario: 150.22,
            status: 'activo'

          },
          {
            name: 'Nombre Motorizado B',
            dni: '87654321',
            rating: 4.5,
            completedTrips: 95,
            tokens: 10,
            totalTrips: 98,
            plan: 'PLATINUM',
            montoDiario: 230.22,
            status: 'inactivo'
          },
          {
            name: 'Nombre Motorizado C',
            dni: '23456789',
            rating: 4.9,
            completedTrips: 150,
            tokens: 20,
            totalTrips: 155,
            plan: 'BLACKMEGA',
            montoDiario: 530.23,
            status: 'suspendido'
          },
          // Agregar aquí los motorizados adicionales si es necesario
        ];

        // Aplicar filtros
        let filteredDrivers = allDrivers;
        const searchInput = document.getElementById('search-driver');
        const filterStatus = document.getElementById('filter-status');
        const sortBy = document.getElementById('sort-by');

        // Filtrar por búsqueda
        if (searchInput && searchInput.value.trim() !== '') {
          const searchTerm = searchInput.value.trim().toLowerCase();
          filteredDrivers = filteredDrivers.filter(driver =>
            driver.name.toLowerCase().includes(searchTerm) ||
            driver.dni.includes(searchTerm)
          );
        }

        // Filtrar por estado
        if (filterStatus && filterStatus.value !== '') {
          filteredDrivers = filteredDrivers.filter(driver =>
            driver.status === filterStatus.value
          );
        }

        // Ordenar
        if (sortBy && sortBy.value !== '') {
          filteredDrivers.sort((a, b) => {
            switch (sortBy.value) {
              case 'name':
                return a.name.localeCompare(b.name);
              case 'rating':
                return b.rating - a.rating;
              case 'trips':
                return b.completedTrips - a.completedTrips;
              default:
                return 0;
            }
          });
        }

        // Mostrar motorizados filtrados en la tabla
        filteredDrivers.forEach(driver => {
          driversListTable.appendChild(createDriverRow(driver));
        });

        // Actualizar mensaje si no hay resultados
        if (filteredDrivers.length === 0) {
          const emptyRow = document.createElement('tr');
          emptyRow.innerHTML = `<td colspan="5" class="h-[72px] px-4 py-2 text-center text-[#49779c] text-sm font-normal leading-normal">No se encontraron motorizados que coincidan con los criterios de búsqueda.</td>`;
          driversListTable.appendChild(emptyRow);
        }
        // Finalizar estado de carga accesible
        driversListTable.removeAttribute('aria-busy');
      }

      // Cargar la tabla inicialmente de forma no bloqueante
      if ('requestIdleCallback' in window) {
        requestIdleCallback(loadDriversTable);
      } else {
        setTimeout(loadDriversTable, 0);
      }

      // Event listeners para la tabla
      const btnSearch = document.querySelector('.btn-search');
      const searchInput = document.getElementById('search-driver');
      const filterStatus = document.getElementById('filter-status');
      const sortBy = document.getElementById('sort-by');

      if (btnSearch) {
        btnSearch.addEventListener('click', loadDriversTable);
      }

      if (searchInput) {
        searchInput.addEventListener('keyup', function (e) {
          if (e.key === 'Enter') {
            loadDriversTable();
          }
        });
      }

      if (filterStatus) {
        filterStatus.addEventListener('change', loadDriversTable);
      }

      if (sortBy) {
        sortBy.addEventListener('change', loadDriversTable);
      }
    });

    // Función para eliminar usuarios
    function deleteUser(userId, userName) {
      if (!confirm(`¿Está seguro de que desea eliminar al usuario "${userName}"?\n\nEsta acción no se puede deshacer y eliminará:\n- El usuario\n- Su perfil de cliente/motorizado (si existe)\n- Todos los datos relacionados`)) {
        return;
      }

      // Obtener el token CSRF
      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

      if (!csrfToken) {
        alert('Error: No se pudo obtener el token CSRF');
        return;
      }

      // Realizar la petición DELETE
      // Usamos la función url() de Laravel para generar la URL correcta, compatible con subdirectorios
      const baseUrl = "{{ url('admin/users') }}";
      
      fetch(`${baseUrl}/${userId}`, {
        method: 'DELETE',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json'
        }
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Error en la respuesta del servidor: ' + response.statusText);
          }
          return response.json();
        })
        .then(data => {
          if (data.status === 'success') {
            alert('Usuario eliminado exitosamente');
            // Recargar la página para actualizar la tabla
            window.location.reload();
          } else {
            alert('Error: ' + (data.message || 'No se pudo eliminar el usuario'));
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Error al eliminar el usuario: ' + error.message);
        });
    }

    // Función para inhabilitar (banear) usuarios
    function banUser(userId, userName) {
      if (!confirm(`¿Está seguro de que desea INHABILITAR al usuario "${userName}"?\n\nEsta acción:\n- Eliminará la cuenta del usuario\n- Bloqueará su correo electrónico permanentemente\n- No se podrá volver a registrar con este correo`)) {
        return;
      }

      const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

      if (!csrfToken) {
        alert('Error: No se pudo obtener el token CSRF');
        return;
      }

      const baseUrl = "{{ url('admin/users') }}";
      
      fetch(`${baseUrl}/${userId}/ban`, {
        method: 'POST',
        headers: {
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': csrfToken,
          'Accept': 'application/json'
        }
      })
        .then(response => {
          if (!response.ok) {
            throw new Error('Error en la respuesta del servidor: ' + response.statusText);
          }
          return response.json();
        })
        .then(data => {
          if (data.status === 'success') {
            alert('Usuario inhabilitado exitosamente');
            window.location.reload();
          } else {
            alert('Error: ' + (data.message || 'No se pudo inhabilitar el usuario'));
          }
        })
        .catch(error => {
          console.error('Error:', error);
          alert('Error al inhabilitar el usuario: ' + error.message);
        });
    }
  </script>
@endsection