<?php

namespace App\View\Components;

use Illuminate\View\Component;

class RadioButtonGroup extends Component
{
    public $radios;
    public $name;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($radios, $name)
    {
        $this->radios = $radios;
        $this->name = $name;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.radio-button-group');
    }
}
