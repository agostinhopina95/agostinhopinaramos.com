<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WidgetHome extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $social_networks;
    public function __construct($obj)
    {
        $this->social_networks = $obj['social_networks'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widget-home');
    }
}
