<?php
$obj = [
    "copyright" => '<p>All Right Reserved AgostinhoPinaRamos © 2020 by <a href="https://goodshapecode.com/" >Goodshapecode</a></p>',
    "social_networks" => [
        [
            "icon" => "fa fa-linkedin",
            "href" => "https://www.linkedin.com/in/agostinhopinaramos/"
        ],
        [
            "icon" => "fa fa-github",
            "href" => "https://github.com/agostinhopina95/"
        ],
        [
            "icon" => "fa fa-medium",
            "href" => "https://medium.com/@agostinhopina095"
        ],
    ],
];
?>
<x-Header />
    <!-- Start Loader -->
    <div class="section-loader">
        <div class="loader">
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- End Loader -->

    <x-Widget-Navbar />

    <x-Widget-Home :obj=$obj />

    <x-Widget-Portfolio />

@if(false)
    <x-Widget-About />
    <x-Widget-Service />
    <x-Widget-Skills />
    <x-Widget-Experiences />
    <x-Widget-Pricing />
    <x-Widget-Blog />
    <x-Widget-Testimonials />
@endif

    <x-Widget-Footer :obj=$obj />

<x-Footer />