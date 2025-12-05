<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil de Motorizado - MegAgencia</title>
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="" />
  <link rel="stylesheet" as="style" onload="this.rel='stylesheet'"
    href="https://fonts.googleapis.com/css2?display=swap&amp;family=Noto+Sans%3Awght%40400%3B500%3B700%3B900&amp;family=Space+Grotesk%3Awght%40400%3B500%3B700" />
  <link rel="stylesheet" href="../../assets/css/main.css">
  <link rel="stylesheet" href="../../assets/css/driver.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
</head>

<body>
  <div class="relative flex size-full min-h-screen flex-col bg-slate-50 group/design-root overflow-x-hidden"
    style='font-family: "Space Grotesk", "Noto Sans", sans-serif;'>
    <div class="layout-container flex h-full grow flex-col">
      <div class="gap-1 px-6 flex flex-1 justify-center py-5">
        <!-- Sidebar / Menú lateral -->
        <div class="layout-content-container flex flex-col w-80">
          <div class="flex h-full min-h-[700px] flex-col justify-between bg-slate-50 p-4">
            <div class="flex flex-col gap-4">
              <!-- Perfil del usuario -->
              <div class="flex gap-3">
                <div class="bg-center bg-no-repeat aspect-square bg-cover rounded-full size-10"
                  style='background-image: url("../../assets/img/driver-avatar.png");'></div>
                <div class="flex flex-col">
                  <h1 class="text-[#0d151c] text-base font-medium leading-normal">
                    {{ $driver->full_name ?? $user->name }}</h1>
                  <p class="text-[#49779c] text-sm font-normal leading-normal">Motorizado</p>
                </div>
              </div>
              <!-- Menú de navegación -->
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
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Inicio</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#0d151c]" data-icon="ListBullets" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                      viewBox="0 0 256 256">
                      <path
                        d="M80,64a8,8,0,0,1,8-8H216a8,8,0,0,1,0,16H88A8,8,0,0,1,80,64Zm136,56H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16Zm0,64H88a8,8,0,0,0,0,16H216a8,8,0,0,0,0-16ZM44,52A12,12,0,1,0,56,64,12,12,0,0,0,44,52Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,116Zm0,64a12,12,0,1,0,12,12A12,12,0,0,0,44,180Z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Viajes</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#0d151c]" data-icon="CurrencyDollar" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                      viewBox="0 0 256 256">
                      <path
                        d="M152,120H136V56h8a32,32,0,0,1,32,32,8,8,0,0,0,16,0,48.05,48.05,0,0,0-48-48h-8V24a8,8,0,0,0-16,0V40h-8a48,48,0,0,0,0,96h8v64H104a32,32,0,0,1-32-32,8,8,0,0,0-16,0,48.05,48.05,0,0,0,48,48h16v16a8,8,0,0,0,16,0V216h16a48,48,0,0,0,0-96Zm-40,0a32,32,0,0,1,0-64h8v64Zm40,80H136V136h16a32,32,0,0,1,0,64Z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Tokens</p>
                </div>
                <div class="flex items-center gap-3 px-3 py-2">
                  <div class="text-[#0d151c]" data-icon="User" data-size="24px" data-weight="regular">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                      viewBox="0 0 256 256">
                      <path
                        d="M230.92,212c-15.23-26.33-38.7-45.21-66.09-54.16a72,72,0,1,0-73.66,0C63.78,166.78,40.31,185.66,25.08,212a8,8,0,1,0,13.85,8c18.84-32.56,52.14-52,89.07-52s70.23,19.44,89.07,52a8,8,0,1,0,13.85-8ZM72,96a56,56,0,1,1,56,56A56.06,56.06,0,0,1,72,96Z">
                      </path>
                    </svg>
                  </div>
                  <p class="text-[#0d151c] text-sm font-medium leading-normal">Perfil</p>
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
                  <div class="rating-section w-full"> <!-- Añadida clase w-full -->
                    <p class="text-[#0d151c] text-base font-medium leading-normal">Calificación</p>
                    <div class="flex rating-stars pt-2">
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star"></i>
                      <i class="fas fa-star-half-alt"></i>
                    </div>
                  </div>
                </div>
                <!-- Botón de cerrar sesión -->
                <form action="{{ route('logout') }}" method="POST" class="mt-2">
                  @csrf
                  <button type="submit"
                    class="flex items-center gap-3 px-3 py-2 w-full rounded-xl hover:bg-[#e7eef4] transition-colors">
                    <div class="text-[#0d151c]" data-icon="SignOut" data-size="24px" data-weight="regular">
                      <svg xmlns="http://www.w3.org/2000/svg" width="24px" height="24px" fill="currentColor"
                        viewBox="0 0 256 256">
                        <path
                          d="M112,216a8,8,0,0,1-8,8H48a16,16,0,0,1-16-16V48A16,16,0,0,1,48,32h56a8,8,0,0,1,0,16H48V208h56A8,8,0,0,1,112,216Zm109.66-93.66-40-40a8,8,0,0,0-11.32,11.32L196.69,120H104a8,8,0,0,0,0,16h92.69l-26.35,26.34a8,8,0,0,0,11.32,11.32l40-40A8,8,0,0,0,221.66,122.34Z">
                        </path>
                      </svg>
                    </div>
                    <p class="text-[#0d151c] text-sm font-medium leading-normal">Cerrar Sesión</p>
                  </button>
                </form>
              </div>
            </div>
          </div>
        </div>

        <!-- Contenido principal -->
        <div class="layout-content-container flex flex-col max-w-[960px] flex-1">
          <div class="flex flex-wrap justify-between gap-3 p-4">
            <p class="text-[#0d151c] tracking-light text-[32px] font-bold leading-tight min-w-72">Dashboard</p>
          </div>

          <!-- Sección de información del motorizado -->
          <h2 class="text-[#0d151c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Información
            del Motorizado</h2>
          <div class="flex flex-wrap gap-4 p-4">
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Id</p>
              <p id="driver-dni" class="text-[#0d151c] tracking-light text-2xl font-bold leading-tight">
                {{ $driver->id ?? 'No disponible' }}</p>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Nombre</p>
              <p id="driver-completed" class="text-[#0d151c] tracking-light text-2xl font-bold leading-tight">
                {{ $driver->full_name ?? $user->name }}</p>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Documentos</p>
              <button id="btn-view-documents"
                class="btn-tokens mt-2 bg-[#0d151c] text-white rounded-xl py-2 px-4 text-sm font-medium">Ver</button>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#FFD700]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Plan</p>
              <p id="driver-status"
                class="status-active text-[#0d151c] tracking-light text-2xl font-bold leading-tight">BLACKMEGA</p>
              <button
                class="btn-edit mt-2 bg-[#0d151c] text-white rounded-xl py-2 px-4 text-sm font-medium">Actualizar</button>
            </div>

          </div>
          <div class="flex flex-wrap gap-4 p-4">

            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Viajes Completados</p>
              <p id="driver-completed" class="text-[#0d151c] tracking-light text-2xl font-bold leading-tight">125</p>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Tokens</p>
              <p id="driver-tokens" class="text-[#0d151c] tracking-light text-2xl font-bold leading-tight">254</p>
              <button
                class="btn-tokens mt-2 bg-[#0d151c] text-white rounded-xl py-2 px-4 text-sm font-medium">Obtener</button>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Estado</p>
              <p id="driver-status"
                class="status-active text-[#0d151c] tracking-light text-2xl font-bold leading-tight">Activo</p>
              <button class="btn-edit mt-2 bg-[#0d151c] text-white rounded-xl py-2 px-4 text-sm font-medium">Editar
                datos</button>
            </div>
            <div class="flex min-w-[158px] flex-1 flex-col gap-2 rounded-xl p-6 bg-[#e7eef4]">
              <p class="text-[#0d151c] text-base font-medium leading-normal">Monto recaudado por día</p>
              <p id="driver-daily-amount" class="text-[#0d151c] tracking-light text-2xl font-bold leading-tight">S/ 0.00
              </p>
              <button id="btn-daily-record"
                class="mt-2 bg-[#0d151c] text-white rounded-xl py-2 px-4 text-sm font-medium">Ver registro</button>
            </div>
          </div>

          <!-- Sección de viajes actuales (similar al ejemplo) -->
          <h2 class="text-[#0d151c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Viajes
            Actuales</h2>
          <div class="px-4 py-3 @container">
            <div class="flex overflow-hidden rounded-xl border border-[#cedde8] bg-slate-50">
              <table class="flex-1">
                <thead>
                  <tr class="bg-slate-50">
                    <th
                      class="table-column-120 px-4 py-3 text-left text-[#0d151c] w-[400px] text-sm font-medium leading-normal">
                      ID de Viaje
                    </th>
                    <th
                      class="table-column-240 px-4 py-3 text-left text-[#0d151c] w-60 text-sm font-medium leading-normal">
                      Estado</th>
                    <th
                      class="table-column-360 px-4 py-3 text-left text-[#0d151c] w-[400px] text-sm font-medium leading-normal">
                      Origen
                    </th>
                    <th
                      class="table-column-480 px-4 py-3 text-left text-[#0d151c] w-[400px] text-sm font-medium leading-normal">
                      Destino
                    </th>
                    <th
                      class="table-column-600 px-4 py-3 text-left text-[#0d151c] w-[400px] text-sm font-medium leading-normal">
                      Tiempo Estimado
                    </th>
                    <th
                      class="table-column-720 px-4 py-3 text-left text-[#0d151c] w-60 text-[#49779c] text-sm font-medium leading-normal">
                      Acción
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="border-t border-t-[#cedde8]">
                    <td
                      class="table-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0d151c] text-sm font-normal leading-normal">
                      #12345</td>
                    <td class="table-column-240 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                      <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#e7eef4] text-[#0d151c] text-sm font-medium leading-normal w-full">
                        <span class="truncate">Pendiente</span>
                      </button>
                    </td>
                    <td
                      class="table-column-360 h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">
                      Av Las flores, Magdalena del Mar
                    </td>
                    <td
                      class="table-column-480 h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">
                      Av Paulipas, San Isidro
                    </td>
                    <td
                      class="table-column-600 h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">
                      15 mins</td>
                    <td
                      class="table-column-720 h-[72px] px-4 py-2 w-60 text-[#49779c] text-sm font-bold leading-normal tracking-[0.015em] cursor-pointer"
                      onclick="openTripModal('#12345')">
                      Ver Detalles
                    </td>
                  </tr>
                  <tr class="border-t border-t-[#cedde8]">
                    <td
                      class="table-column-120 h-[72px] px-4 py-2 w-[400px] text-[#0d151c] text-sm font-normal leading-normal">
                      #67890</td>
                    <td class="table-column-240 h-[72px] px-4 py-2 w-60 text-sm font-normal leading-normal">
                      <button
                        class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-xl h-8 px-4 bg-[#e7eef4] text-[#0d151c] text-sm font-medium leading-normal w-full">
                        <span class="truncate">En Progreso</span>
                      </button>
                    </td>
                    <td
                      class="table-column-360 h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">
                      Av Venezuela, La Victoria
                    </td>
                    <td
                      class="table-column-480 h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">
                      Valle Sana, Miraflores
                    </td>
                    <td
                      class="table-column-600 h-[72px] px-4 py-2 w-[400px] text-[#49779c] text-sm font-normal leading-normal">
                      20 mins</td>
                    <td
                      class="table-column-720 h-[72px] px-4 py-2 w-60 text-[#49779c] text-sm font-bold leading-normal tracking-[0.015em] cursor-pointer"
                      onclick="openTripModal('#67890')">
                      Ver Detalles
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <style>
              @@container (max-width: 120px) {
                .table-column-120 {
                  display: none;
                }
              }

              @@container (max-width: 240px) {
                .table-column-240 {
                  display: none;
                }
              }

              @@container (max-width: 360px) {
                .table-column-360 {
                  display: none;
                }
              }

              @@container (max-width: 480px) {
                .table-column-480 {
                  display: none;
                }
              }

              @@container (max-width: 600px) {
                .table-column-600 {
                  display: none;
                }
              }

              @@container (max-width: 720px) {
                .table-column-720 {
                  display: none;
                }
              }
            </style>
          </div>

          <!-- Sección de viajes completados -->
          <h2 class="text-[#0d151c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Viajes
            Completados</h2>
          <div class="px-4 py-3">
            <div class="flex flex-col gap-4 overflow-hidden rounded-xl border border-[#cedde8] bg-slate-50 p-4">
              <div id="trips-list" class="flex flex-col gap-4">
                <!-- Viaje 1 -->
                <div class="trip-item border-b border-[#cedde8] pb-4">
                  <div class="trip-date text-[#0d151c] font-medium mb-2">05/05/25 11:31 am</div>
                  <div class="trip-details">
                    <p class="text-[#49779c] text-sm mb-1">Trayecto: Av Las flores, Magdalena del Mar - Av Paulipas, San
                      Isidro</p>
                    <p class="text-[#49779c] text-sm">Puntuación:
                      <span class="trip-rating text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </span>
                    </p>
                  </div>
                </div>

                <!-- Viaje 2 -->
                <div class="trip-item border-b border-[#cedde8] pb-4">
                  <div class="trip-date text-[#0d151c] font-medium mb-2">01/05/25 15:10 pm</div>
                  <div class="trip-details">
                    <p class="text-[#49779c] text-sm mb-1">Trayecto: Av Venezuela, La Victoria - Valle Sana, Miraflores
                    </p>
                    <p class="text-[#49779c] text-sm">Puntuación:
                      <span class="trip-rating text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                      </span>
                    </p>
                  </div>
                </div>

                <!-- Viaje 3 -->
                <div class="trip-item border-b border-[#cedde8] pb-4">
                  <div class="trip-date text-[#0d151c] font-medium mb-2">25/04/25 9:51 am</div>
                  <div class="trip-details">
                    <p class="text-[#49779c] text-sm mb-1">Trayecto: Av Jose Pardo, Miraflores - Av Mariñ, Surquillo</p>
                    <p class="text-[#49779c] text-sm">Puntuación:
                      <span class="trip-rating text-yellow-400">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                      </span>
                    </p>
                  </div>
                </div>
              </div>
              <button id="view-more-trips"
                class="btn-view-more self-center bg-[#e7eef4] text-[#0d151c] rounded-xl py-2 px-6 text-sm font-medium">Ver
                más</button>
            </div>
          </div>

          <!-- Sección de registro de motorizado -->
          <h2 class="text-[#0d151c] text-[22px] font-bold leading-tight tracking-[-0.015em] px-4 pb-3 pt-5">Registro de
            Motorizado</h2>
          <div class="px-4 py-3">
            <div
              class="flex flex-col md:flex-row gap-4 overflow-hidden rounded-xl border border-[#cedde8] bg-slate-50 p-4">
              <div class="log-timeline flex-1">
                <div class="log-entry flex items-center gap-3 mb-3">
                  <div class="log-time bg-[#e7eef4] text-[#0d151c] rounded-lg px-3 py-1 text-sm font-medium">8:00 AM
                  </div>
                  <div class="log-description text-[#49779c] text-sm">Iniciando recorrido</div>
                </div>
                <div class="log-entry flex items-center gap-3 mb-3">
                  <div class="log-time bg-[#e7eef4] text-[#0d151c] rounded-lg px-3 py-1 text-sm font-medium">8:15 AM
                  </div>
                  <div class="log-description text-[#49779c] text-sm">Av. La Libertad</div>
                </div>
                <div class="log-entry flex items-center gap-3 mb-3">
                  <div class="log-time bg-[#e7eef4] text-[#0d151c] rounded-lg px-3 py-1 text-sm font-medium">8:30 AM
                  </div>
                  <div class="log-description text-[#49779c] text-sm">Recorrido finalizado</div>
                </div>
              </div>
              <div class="map-container flex-1 rounded-xl overflow-hidden">
                <img src="../../assets/img/map-placeholder.png" alt="Mapa de recorrido" class="w-full h-auto">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="../../assets/js/driver.js"></script>
  <script src="../../assets/js/auth.js" defer></script>
  <!-- Modal de detalles del viaje -->
  <div id="tripDetailsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center">
    <div class="bg-white rounded-xl p-6 max-w-2xl w-full mx-4">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-[#0d151c] text-xl font-bold">Detalles del Viaje</h3>
        <button onclick="closeTripModal()" class="text-[#49779c] hover:text-[#0d151c]">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <!-- Mapa de Google -->
      <div id="tripMap" class="w-full h-64 bg-gray-200 rounded-xl mb-4"></div>

      <!-- Detalles del viaje -->
      <div class="grid grid-cols-2 gap-4">
        <div>
          <p class="text-[#49779c] text-sm mb-2">Precio del viaje:</p>
          <p id="tripPrice" class="text-[#0d151c] font-bold">S/ 25.00</p>
        </div>
        <div>
          <p class="text-[#49779c] text-sm mb-2">Nombre del producto:</p>
          <p id="productName" class="text-[#0d151c]">Paquete Premium</p>
        </div>
        <div>
          <p class="text-[#49779c] text-sm mb-2">Tamaño del producto:</p>
          <p id="productSize" class="text-[#0d151c]">Mediano</p>
        </div>
        <div>
          <p class="text-[#49779c] text-sm mb-2">Hora de salida:</p>
          <p id="departureTime" class="text-[#0d151c]">10:30 AM</p>
        </div>
        <div>
          <p class="text-[#49779c] text-sm mb-2">Hora de llegada:</p>
          <p id="arrivalTime" class="text-[#0d151c]">11:15 AM</p>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal de documentos -->
  <div id="documentsModal" class="fixed inset-0 bg-black bg-opacity-50 hidden items-center justify-center z-50">
    <div class="bg-white rounded-xl p-6 max-w-4xl w-full mx-4">
      <div class="flex justify-between items-center mb-4">
        <h3 class="text-[#0d151c] text-xl font-bold">Documentos del Motorizado</h3>
        <button onclick="closeDocumentsModal()" class="text-[#49779c] hover:text-[#0d151c]">
          <i class="fas fa-times"></i>
        </button>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
        <!-- Lista de documentos -->
        <div class="md:col-span-1 border-r border-[#cedde8] pr-4">
          <h4 class="text-[#0d151c] font-medium mb-3">Mis Documentos</h4>
          <div id="documentsList" class="flex flex-col gap-3 max-h-[400px] overflow-y-auto">
            <!-- Los documentos se cargarán dinámicamente aquí -->
            <div class="flex justify-center items-center h-32">
              <div class="animate-spin rounded-full h-8 w-8 border-b-2 border-[#0d151c]"></div>
            </div>
          </div>
        </div>

        <!-- Visor de documentos -->
        <div class="md:col-span-2">
          <h4 class="text-[#0d151c] font-medium mb-3">Visor de Documentos</h4>
          <div id="documentViewer"
            class="border border-[#cedde8] rounded-xl p-4 flex justify-center items-center h-[400px] bg-slate-100">
            <!-- Imagen del documento -->
            <img id="documentImage" src="" alt="Documento" class="max-w-full max-h-full object-contain hidden">

            <!-- PDF del documento -->
            <iframe id="documentPdf" src="" class="w-full h-full hidden"></iframe>

            <!-- Placeholder cuando no hay documento seleccionado -->
            <div id="documentPlaceholder" class="text-center text-[#49779c]">
              <i class="fas fa-file-alt text-4xl mb-2"></i>
              <p>Selecciona un documento para visualizarlo</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Google Maps Script -->
  <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY"></script>

  <script>
    let map;
    let currentTripId;

    function openTripModal(tripId) {
      currentTripId = tripId;
      const modal = document.getElementById('tripDetailsModal');
      modal.classList.remove('hidden');
      modal.classList.add('flex');

      // Inicializar el mapa
      initMap();

      // Aquí normalmente harías una llamada a tu API para obtener los detalles del viaje
      // Por ahora usaremos datos de ejemplo
      updateTripDetails({
        price: 'S/ 25.00',
        productName: 'Paquete Premium',
        productSize: 'Mediano',
        departureTime: '10:30 AM',
        arrivalTime: '11:15 AM',
        origin: { lat: -12.0864, lng: -77.0444 }, // Coordenadas de ejemplo (Lima)
        destination: { lat: -12.1219, lng: -77.0305 } // Coordenadas de ejemplo
      });
    }

    function closeTripModal() {
      const modal = document.getElementById('tripDetailsModal');
      modal.classList.add('hidden');
      modal.classList.remove('flex');
    }

    function initMap() {
      const mapOptions = {
        zoom: 12,
        center: { lat: -12.0864, lng: -77.0444 }, // Centro en Lima
        styles: [] // Puedes personalizar los estilos del mapa aquí
      };

      map = new google.maps.Map(document.getElementById('tripMap'), mapOptions);
    }

    function updateTripDetails(details) {
      document.getElementById('tripPrice').textContent = details.price;
      document.getElementById('productName').textContent = details.productName;
      document.getElementById('productSize').textContent = details.productSize;
      document.getElementById('departureTime').textContent = details.departureTime;
      document.getElementById('arrivalTime').textContent = details.arrivalTime;

      // Actualizar marcadores y ruta en el mapa
      const directionsService = new google.maps.DirectionsService();
      const directionsRenderer = new google.maps.DirectionsRenderer({
        map: map,
        suppressMarkers: true
      });

      const request = {
        origin: details.origin,
        destination: details.destination,
        travelMode: 'DRIVING'
      };

      directionsService.route(request, function (result, status) {
        if (status === 'OK') {
          directionsRenderer.setDirections(result);
        }
      });
    }
  </script>
</body>

<!-- Script para el modal de documentos -->
<script>
  // Función para abrir el modal de documentos
  function openDocumentsModal() {
    const modal = document.getElementById('documentsModal');
    modal.classList.remove('hidden');
    modal.classList.add('flex');

    // Cargar los documentos del conductor
    loadDriverDocuments();
  }

  // Función para cerrar el modal de documentos
  function closeDocumentsModal() {
    const modal = document.getElementById('documentsModal');
    modal.classList.add('hidden');
    modal.classList.remove('flex');

    // Limpiar el visor de documentos
    resetDocumentViewer();
  }

  // Función para cargar los documentos del conductor
  function loadDriverDocuments() {
    const documentsList = document.getElementById('documentsList');

    // Aquí normalmente harías una llamada AJAX a tu backend para obtener los documentos
    // Por ahora, usaremos datos de ejemplo basados en la estructura de la base de datos

    // Simulación de carga
    setTimeout(() => {
      // Documentos de ejemplo (en producción, estos vendrían de la base de datos)
      const documents = [
        { id: 1, type: 'dni', name: 'DNI', file_path: '/storage/documents/1/dni.pdf' },
        { id: 2, type: 'antecedentes', name: 'Antecedentes Policiales', file_path: '/storage/documents/1/antecedentes.jpg' },
        { id: 3, type: 'license', name: 'Licencia de Conducir', file_path: '/storage/documents/1/license.pdf' },
        { id: 4, type: 'soat', name: 'SOAT', file_path: '/storage/documents/1/soat.pdf' },
        { id: 5, type: 'property_card', name: 'Tarjeta de Propiedad', file_path: '/storage/documents/1/property_card.jpg' }
      ];

      // Limpiar el contenedor
      documentsList.innerHTML = '';

      if (documents.length === 0) {
        documentsList.innerHTML = '<p class="text-[#49779c] text-center col-span-2">No hay documentos disponibles</p>';
        return;
      }

      // Crear elementos para cada documento
      documents.forEach(doc => {
        const docElement = document.createElement('div');
        docElement.className = 'document-item p-4 border border-[#cedde8] rounded-xl cursor-pointer hover:bg-[#e7eef4] transition-colors';
        docElement.onclick = () => viewDocument(doc);

        // Determinar el icono según el tipo de archivo
        const isImage = doc.file_path.endsWith('.jpg') || doc.file_path.endsWith('.jpeg') || doc.file_path.endsWith('.png');
        const isPdf = doc.file_path.endsWith('.pdf');

        let iconClass = 'fa-file';
        if (isImage) iconClass = 'fa-file-image';
        if (isPdf) iconClass = 'fa-file-pdf';

        docElement.innerHTML = `
            <div class="flex items-center gap-3">
              <div class="text-[#0d151c] text-2xl"><i class="fas ${iconClass}"></i></div>
              <div>
                <p class="text-[#0d151c] font-medium">${doc.name}</p>
                <p class="text-[#49779c] text-sm">${getDocumentTypeLabel(doc.type)}</p>
              </div>
            </div>
          `;

        documentsList.appendChild(docElement);
      });

      // Mostrar el visor de documentos
      document.getElementById('documentViewer').classList.remove('hidden');
      document.getElementById('documentPlaceholder').classList.remove('hidden');
    }, 1000); // Simular tiempo de carga
  }

  // Función para visualizar un documento
  function viewDocument(document) {
    const viewer = document.getElementById('documentViewer');
    const image = document.getElementById('documentImage');
    const pdf = document.getElementById('documentPdf');
    const placeholder = document.getElementById('documentPlaceholder');

    // Ocultar todos los elementos del visor
    image.classList.add('hidden');
    pdf.classList.add('hidden');
    placeholder.classList.add('hidden');

    // Determinar el tipo de archivo
    const isImage = document.file_path.endsWith('.jpg') || document.file_path.endsWith('.jpeg') || document.file_path.endsWith('.png');
    const isPdf = document.file_path.endsWith('.pdf');

    if (isImage) {
      // Mostrar imagen
      image.src = document.file_path;
      image.alt = document.name;
      image.classList.remove('hidden');
    } else if (isPdf) {
      // Mostrar PDF
      pdf.src = document.file_path;
      pdf.classList.remove('hidden');
    } else {
      // Mostrar placeholder para otros tipos de archivo
      placeholder.innerHTML = `
          <i class="fas fa-file-alt text-4xl mb-2"></i>
          <p>Este tipo de archivo no se puede previsualizar</p>
          <a href="${document.file_path}" target="_blank" class="text-blue-500 hover:underline mt-2 inline-block">Descargar archivo</a>
        `;
      placeholder.classList.remove('hidden');
    }
  }

  // Función para resetear el visor de documentos
  function resetDocumentViewer() {
    const image = document.getElementById('documentImage');
    const pdf = document.getElementById('documentPdf');
    const placeholder = document.getElementById('documentPlaceholder');

    image.src = '';
    pdf.src = '';

    image.classList.add('hidden');
    pdf.classList.add('hidden');
    placeholder.classList.remove('hidden');
    placeholder.innerHTML = `
        <i class="fas fa-file-alt text-4xl mb-2"></i>
        <p>Selecciona un documento para visualizarlo</p>
      `;
  }

  // Función para obtener la etiqueta del tipo de documento
  function getDocumentTypeLabel(type) {
    const labels = {
      'dni': 'Documento Nacional de Identidad',
      'antecedentes': 'Antecedentes Policiales',
      'license': 'Licencia de Conducir',
      'soat': 'Seguro Obligatorio de Accidentes de Tránsito',
      'property_card': 'Tarjeta de Propiedad del Vehículo'
    };

    return labels[type] || type;
  }

  // Asignar evento al botón "Ver" en la sección de Documentos
  document.addEventListener('DOMContentLoaded', function () {
    const viewDocsButton = document.querySelector('.flex.min-w-\\[158px\\].flex-1.flex-col.gap-2.rounded-xl.p-6.bg-\\[\\#e7eef4\\] .btn-tokens');
    if (viewDocsButton) {
      viewDocsButton.addEventListener('click', openDocumentsModal);
    }
  });
</script>

</html>