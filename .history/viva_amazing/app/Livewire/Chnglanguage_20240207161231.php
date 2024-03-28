<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;

class Chnglanguage extends Component
{
    public $locale;
    public function mount()
    {
        $this->locale = app()->getLocale();
    }
    

    public function changeLocale()
    {
        $this->emit('localeChanged');
        $this->locale = $this->locale == 'es' ? 'en' : 'es';
        App::setLocale($this->locale);
    }
    public function render()
    {
        return view('livewire.chnglanguage');
    }
}
