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

    public $path = null;

    public function __construct(Request $request, $path = '')
    {
        $this->path = $path;

        $this->externalCSS = [
            //return_path($request->path()) . '/css/style.min.css'
        ];

        $this->internalCSS = [
            file_get_contents(__DIR__ . "/../../../public" . '/css/style.min.css'),
        ];

        $this->internalJS = [
            file_get_contents(__DIR__ . "/../../../public" . '/js/bundle.min.js'),
        ];

        $this->externalJS = [ 
            //return_path($request->path()) . '/js/example.js'
        ];
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