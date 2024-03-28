<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class NavbarList extends Component
{
    
    #[On('localeChanged')] 
    public function updatePostList($title)
    {
        dd('Holis');
    }
    
    public function render()
    {
        return view('livewire.navbar-list');
    }
}
