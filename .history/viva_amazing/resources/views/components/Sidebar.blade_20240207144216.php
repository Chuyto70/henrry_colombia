<div class="min-h-screen bg-gray-100">
  <div class="sidebar min-h-screen overflow-hidden border-r w-56 bg-white p-6 shadow-[inset_0_-2px_8px_rgba(0,0,0,0.6)]">
    <div class="flex h-screen flex-col justify-between">
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
              <img src="{{asset('assets/iconos/Nuestros productos.png')}}" alt="" class="-ml-1 h-12">
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
            <a href="#" aria-label="dashboard" class="relative flex items-center justify-center space-x-2 text-slate-950 py-3 text-white">
              <img src="{{asset('assets/iconos/Inscribete.png')}}" alt="" class="-ml-1 h-8 w-8">
              <span class="-mr-1 font-medium">{{__('sidebar.register')}}</span>
            </a>
          </li>
        </ul>
      </div>
      <div class="w-max -mb-3">
        <a href="#" class="group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 group-hover:fill-cyan-600" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
          </svg>
          <span class="group-hover:text-gray-700">Settings</span>
        </a>
      </div>
    </div>
  </div>
</div>