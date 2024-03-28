<div class="h-full bg-gray-100">
  <div class="sidebar h-screen overflow-hidden border-r w-56 bg-white p-6 shadow-[inset_0_-2px_8px_rgba(0,0,0,0.6)]">
    <div class="flex h-full flex-col justify-between">
      <div>
        <div class="w-max p-2.5">
          <img src="{{asset('assets/logo_original.png')}}" class="w-36" alt="Logo Viva Amazing">
        </div>
        <ul class="mt-6 space-y-2 tracking-wide">
          <li class="min-w-max">
            <a href="#" aria-label="dashboard" class="relative flex items-center space-x-2 text-slate-950 py-3 text-white">
              <img src="{{asset('assets/iconos/Home.png')}}" alt="" class="-ml-1 h-8 w-8">
              <span class="-mr-1 font-medium">{{__('sidebar.home')}}</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" aria-label="dashboard" class="relative flex items-center justify-center space-x-2 text-slate-950 py-3 text-white">
              <img src="{{asset('assets/iconos/Nuestros productos.png')}}" alt="" class="-ml-1 h-8">
              <span class="-mr-1 font-medium">{{__('sidebar.products')}}</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" aria-label="dashboard" class="relative flex items-center space-x-2 text-slate-950 py-3 text-white">
              <img src="{{asset('assets/iconos/Historia.png')}}" alt="" class="-ml-1 h-8 w-8">
              <span class="-mr-1 font-medium">{{__('sidebar.history')}}</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" aria-label="dashboard" class="relative flex items-center space-x-2 text-slate-950 py-3 text-white">
              <img src="{{asset('assets/iconos/Ingresar.png')}}" alt="" class="-ml-1 h-8 w-8">
              <span class="-mr-1 font-medium">{{__('sidebar.login')}}</span>
            </a>
          </li>
          <li class="min-w-max">
            <a href="#" aria-label="dashboard" class="relative flex items-center space-x-2 text-slate-950 py-3 text-white">
              <img src="{{asset('assets/iconos/Inscribete.png')}}" alt="" class="-ml-1 h-8 w-8">
              <span class="-mr-1 font-medium">{{__('sidebar.register')}}</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="w-max -mb-3">
        <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
            @if (__('sidebar.language') == 'Español')
                <img src="{{asset('assets/iconos/España.png')}}" alt="Español" class="h-5">
            @else
                <img src="{{asset('assets/iconos/usa.webp')}}" alt="English" class="h-5">
            @endif
          <span class="group-hover:text-gray-700">{{__('sidebar.language')}}</span>
        </a>
        <p class="w-full text-wrap text-sm text-muted">{{__('sidebar.copyright')}} </p>
      </div>
    </div>
  </div>
</div>