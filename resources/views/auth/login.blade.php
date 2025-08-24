@extends('shared.Layout')

@section('styles')
    <!-- Estilos específicos de esta página -->
    <link rel="stylesheet" href="{{ asset('assets/css/auth.css') }}">
    <style>
        .mega-arrow {
            width: 30px;
            height: 30px;
            position: relative;
            display: inline-block;
            vertical-align: middle;
            margin-right: 8px;
        }
        .mega-arrow::before,
        .mega-arrow::after {
            content: '';
            position: absolute;
            background-color: #00BFFF; /* Celeste */
            width: 2px;
            height: 15px;
        }
        .mega-arrow::before {
            transform: rotate(45deg);
            left: 5px;
            top: 7px;
        }
        .mega-arrow::after {
            transform: rotate(-45deg);
            left: 5px;
            top: 15px;
        }
    </style>
@endsection

@section('content')
    <div class="relative flex size-full min-h-screen flex-col group/design-root overflow-x-hidden" style='font-family: Inter, "Noto Sans", sans-serif;'>
      <div class="layout-container flex h-full grow flex-col">
        <!-- Contenido principal con padding-top para compensar el header fijo -->
        <div class="px-4 md:px-40 flex flex-1 justify-center py-5 pt-24">
          <div class="layout-content-container flex flex-col w-full md:w-[512px] max-w-[512px] py-5 flex-1">
            <h2 class="text-white tracking-light text-[28px] font-bold leading-tight px-4 text-center pb-3 pt-5">Iniciar sesión</h2>
            <form class="auth-form" action="{{ route('login.post') }}" method="post">
              @csrf
              <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                  <p class="text-white font-medium leading-normal pb-2">Correo Electrónico <span class="text-[#e91e63]">*</span></p>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Tu correo electrónico"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedae8] bg-slate-50 focus:border-[#cedae8] h-14 placeholder:text-[#49709c] p-[15px] text-base font-normal leading-normal"
                    required
                  />
                </label>
              </div>
              <div class="flex flex-wrap items-end gap-4 px-4 py-3">
                <label class="flex flex-col min-w-40 flex-1">
                  <p class="text-white font-medium leading-normal pb-2">Contraseña <span class="text-[#e91e63]">*</span></p>
                  <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Tu contraseña"
                    class="form-input flex w-full min-w-0 flex-1 resize-none overflow-hidden rounded-lg text-[#0d141c] focus:outline-0 focus:ring-0 border border-[#cedae8] bg-slate-50 focus:border-[#cedae8] h-14 placeholder:text-[#49709c] p-[15px] text-base font-normal leading-normal"
                    required
                  />
                </label>
              </div>
              <p class="text-gray-400 text-sm font-normal leading-normal pb-3 pt-1 px-4 underline">¿Olvidaste tu contraseña?</p>
              <div class="flex px-4 py-3">
                <button
                  type="submit"
                  class="flex min-w-[84px] max-w-[480px] cursor-pointer items-center justify-center overflow-hidden rounded-lg h-10 px-4 flex-1 bg-[#4196f6] text-slate-50 text-sm font-bold leading-normal tracking-[0.015em]"
                >
                  <span class="truncate">INICIAR SESIÓN</span>
                </button>
              </div>
              <p class="text-gray-400 text-sm font-normal leading-normal pb-3 pt-1 px-4 text-center">
                ¿No tienes una cuenta? <a href="../index.html#registro" class="underline">Regístrate</a>
              </p>
            </form>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/auth.js') }}"></script>
@endsection