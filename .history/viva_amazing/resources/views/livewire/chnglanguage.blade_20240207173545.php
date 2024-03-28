
<div class="w-full flex flex-col items-center gap-4 -mb-3">
    <button wire:click="changeLocale" class="cursor-pointer group flex items-center space-x-4 rounded-md px-4 py-3 text-gray-600 justify-center">
                @if (__('sidebar.language') == 'Español')
                    <img src="{{asset('assets/iconos/España.png')}}" alt="Español" class="h-5">
                @else
                    <img src="{{asset('assets/iconos/usa.webp')}}" alt="English" class="h-5">
                @endif
              <span class="">{{__('sidebar.language')}}</span>
            </button>
            <p class="w-full text-wrap text-xs text-slate-500 text-center">{{__('sidebar.copyright')}} </p>
        
</div>
