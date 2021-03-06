<?php

namespace App\View\Components;

use Illuminate\Http\Request;
use Illuminate\View\Component;

class Footer extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $internalCSS = [];
    public $internalJS = [];
    public $externalCSS = [];
    public $externalJS = [];

    public function __construct(Request $request)
    {
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.footer');
    }
}