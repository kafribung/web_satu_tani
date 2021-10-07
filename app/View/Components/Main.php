<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Main extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $cssTambahan;

    public function __construct($cssTambahan =null)
    {
        $this->cssTambahan = $cssTambahan;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.main');
    }
}
