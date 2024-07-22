<?php

namespace App\Livewire\FrontEnd;

use Livewire\Component;

class NavBar extends Component
{

    public $test_id=2132434;
    function selectedMenu($id){
        $this->dispatch('selectMenu',$id);
    }
    public function render()
    {
        return view('livewire.front-end.nav-bar');
    }
}
