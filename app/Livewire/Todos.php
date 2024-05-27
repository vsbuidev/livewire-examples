<?php

namespace App\Livewire;

use Livewire\Component;

class Todos extends Component
{

    public $todo = '';

    public $todos = [
        'Learn Livewire',
        'Learn Laravel',
        'Build something awesome',
    ];

    public function add()
    {
        $this->todos[] = $this->todo;
        $this->todo = '';
    }

    public function render()
    {
        return view('livewire.todos');
    }
}
