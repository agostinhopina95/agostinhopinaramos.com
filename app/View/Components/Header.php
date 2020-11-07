<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $lang;
    public $title;
    public $description;
    public $keywords;
    public $author;
    public $externalFONT = [];
    public $externalCSS = [];
    public $externalJS = [];
    public $themeClass;

    public function __construct($title = "Personal Webpage - Agostinho Ramos")
    {
        $this->lang = "en";
        $this->title = $title;
        $this->description = "I am Full Stack Web Developer, and Freelancer.";
        $this->keywords = "Personal Webpage";
        $this->author = "Agostinho Pina Ramos";
        $this->externalFONT = [];
        $this->externalCSS = [];
        $this->externalJS = [];
        $this->themeClass = "white-vertion black-bg";
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.header');
    }
}
