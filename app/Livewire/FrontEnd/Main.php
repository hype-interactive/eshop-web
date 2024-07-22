<?php

namespace App\Livewire\FrontEnd;

use Livewire\Component;

class Main extends Component
{
    public $selected_page=1;

    protected $listeners = ['selectMenu' => 'selectMenu'];

    public function selectMenu ($id){
        $this->selected_page=$id;
    }
    public function render()
    {
        return view('livewire.front-end.main');
    }
}
