<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

     public $title = "";
    public function __construct($title)
    {
        // Initialize values here
        $this->title = $title;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        // If variable is already initialized in the class
        // then we don't need to pass it to the view to use it'
        return view('components.header');
    }
}