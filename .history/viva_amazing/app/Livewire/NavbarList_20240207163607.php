<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class NavbarList extends Component
{
    
    public function updatePostList($title)
    {
        // ...
    }
    #[On('localeChanged')] 
    public function render()
    {
        return view('livewire.navbar-list');
    }
}
