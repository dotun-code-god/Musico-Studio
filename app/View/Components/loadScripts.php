<?php

namespace App\View\Components;

use Illuminate\View\Component;

class loadScripts extends Component
{

    // public $customScripts;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->customScripts = $customScripts;
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
