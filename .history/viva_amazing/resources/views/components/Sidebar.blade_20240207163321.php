<div class="h-full bg-gray-100" x-data="{ open: false }" @name-localeChanged="{{app()->setLocale('en')}}">
  <div class="sidebar h-screen overflow-hidden border-r w-60 bg-white p-6 shadow-[inset_0_-2px_8px_rgba(0,0,0,0.6)]">
    <div class="flex h-full flex-col justify-between">
      
      
      <livewire:chnglanguage /> 
    </div>
  </div>
</div>