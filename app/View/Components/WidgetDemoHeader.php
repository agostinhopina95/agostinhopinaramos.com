<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WidgetDemoHeader extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $type;
    public $id;
    public function __construct($type, $id)
    {
        $this->type = $type;
        $this->id = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widget-demo-header');
    }
}
