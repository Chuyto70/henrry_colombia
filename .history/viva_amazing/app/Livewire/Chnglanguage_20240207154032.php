<?php

namespace App\Livewire;

use Livewire\Component;

class Chnglanguage extends Component
{
    public $locale;
    public $count = 0;

    public function mount()
    {
        $this->locale = app()->getLocale();
    }
    
    public function increment()
    {
        $this->count++;
    }

    public function changeLocale()
    {
        $this->locale = $this->locale == 'es' ? 'en' : 'es';
        app()->setLocale($this->locale);
        return redirect()->route('home');
    }
    public function render()
    {
        return view('livewire.chnglanguage');
    }
}
