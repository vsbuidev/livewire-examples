<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;

#[Title('Todos')]

class Todos extends Component
{

    public $todo = '';

    public $todos = ['who cares'];

    public function updated($property, $value)

    {
        $this->$property = strtoupper($value);
    }

    // public function mount()
    // {
    //     $this->todos = [
    //         'Learn Livewire',
    //         'Learn Laravel',
    //         'Build something awesome',
    //     ];
    // }


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
