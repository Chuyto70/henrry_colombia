<?php

namespace App\Livewire;

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
        $this->locale = $this->locale == 'es' ? 'en' : 'es';
        app()->setLocale($this->locale);
    }
    public function render()
    {
        return view('livewire.chnglanguage');
    }
}
