<?php

namespace App\Livewire;

use Illuminate\Support\Facades\App;
use Livewire\Component;
use Livewire\Attributes\On;

class NavbarList extends Component
{
    
    #[On('localeChanged')] 
    public function updatePostList($locale)
    {
        App::setLocale($locale);
        dd('HOLIS');
    }
    
    public function render()
    {
        return view('livewire.navbar-list');
    }

    protected function refreshComponent()
    {
        $this->dispatch('$refresh');
    }

}
