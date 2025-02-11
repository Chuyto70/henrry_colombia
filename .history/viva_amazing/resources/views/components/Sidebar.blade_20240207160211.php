<div class="h-full bg-gray-100">
  <div class="sidebar h-screen overflow-hidden border-r w-60 bg-white p-6 shadow-[inset_0_-2px_8px_rgba(0,0,0,0.6)]">
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
            <a href="#" aria-label="dashboard" class="relative flex items-center space-x-2 text-slate-950 py-3 text-white">
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
      <livewire:chnglanguage wire:model.defer="locale"/> 
    </div>
  </div>
</div>