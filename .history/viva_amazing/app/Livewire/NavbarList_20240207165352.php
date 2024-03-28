<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class NavbarList extends Component
{
    
    #[On('localeChanged')] 
    public function updatePostList($locale)
    {
        $this->dispatch('$refresh');
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
