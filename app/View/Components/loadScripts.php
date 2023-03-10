<?php

namespace App\View\Components;

use Illuminate\View\Component;

class loadScripts extends Component
{

    public $src;

    /**
     * Create a new component instance.
     * @param $src
     * @return void
     */
    public function __construct($src)
    {
        $this->src = $src;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.load-scripts');
    }
}
