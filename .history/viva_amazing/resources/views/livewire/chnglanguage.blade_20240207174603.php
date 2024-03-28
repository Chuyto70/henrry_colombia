
<div class="w-full flex flex-col items-center gap-4 -mb-3">
    <button wire:click="changeLocale" class="cursor-pointer group flex items-center space-x-4 rounded-md sm:px-4 sm:py-3 text-gray-600 justify-center">
                @if (__('sidebar.language') == 'Español')
                    <img src="{{asset('assets/iconos/España.png')}}" alt="Español" class="sm:h-5 h-10 z-10">
                @else
                    <img src="{{asset('assets/iconos/usa.webp')}}" alt="English" class="sm:h-5 h-10 z-10">
                @endif
              <span class="sm:block hidden group-hover:block">{{__('sidebar.language')}}</span>
            </button>
            <p class="hidden sm:block w-full text-wrap text-xs text-slate-500 text-center">{{__('sidebar.copyright')}} </p>
        
</div>
