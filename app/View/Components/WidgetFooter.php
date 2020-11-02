<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WidgetFooter extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $copyright;
    public $social_networks;
    public function __construct()
    {
        $this->copyright = '<p>All Right Reserved AgostinhoPinaRamos © 2020 by <a href="https://goodshapecode.com/" >Goodshapecode</a></p>';
        $this->social_networks = [
            [
                "icon" => "fa fa-facebook",
                "href" => "https://www.facebook.com/agostinhopinaramos/"
            ],
            [
                "icon" => "fa fa-github",
                "href" => "https://github.com/agostinhopina95/"
            ],
            [
                "icon" => "fa fa-medium",
                "href" => "https://medium.com/@agostinhopina095"
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.widget-footer');
    }
}
