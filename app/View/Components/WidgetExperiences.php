<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WidgetExperiences extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $obj;
    public function __construct($obj)
    {
        $this->obj = $obj;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widget-experiences');
    }
}
