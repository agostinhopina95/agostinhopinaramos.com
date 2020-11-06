@php
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
    "skill" => [
        "last_update" => "05/11/2020 10:48",
        "technical" => [
            [
                "name" => "HTML/CSS3",
                "year" => 4.5,
                "point" => 4
            ],
            [
                "name" => "JavaScript",
                "year" => 4,
                "point" => 4.5
            ],
            [
                "name" => "PHP",
                "year" => 3,
                "point" => 4
            ],
            [
                "name" => "Python",
                "year" => 3,
                "point" => 3
            ],
            [
                "name" => "Java/Android",
                "year" => 4,
                "point" => 3
            ],
            [
                "name" => "Kotlin",
                "year" => 0,
                "point" => 1
            ],
            [
                "name" => "C#/ASP.NET",
                "year" => 2.5,
                "point" => 3
            ],
            [
                "name" => "C/C++",
                "year" => 3,
                "point" => 2.5
            ],
        ],
        "professional" => [
            [
                "name" => "Communication",
                "point" => 2.5,
            ],
            [
                "name" => "Team Work",
                "point" => 4.4,
            ],
            [
                "name" => "Project Management",
                "point" => 2.25,
            ],
            [
                "name" => "Creativity",
                "point" => 3.75,
            ],
        ],
    ],
    "experience" => [
        "education" => [
            [
                "name" => "Polytechnic Institute of Guarda",
                "course" => "Computer Science and Engineering",
                "interval" => "18/10/2017 – Current",
                "address" => "Av. Dr. Francisco Sá Carneiro 50, Guarda, Portugal",
                "url" => "http://www.estg.ipg.pt/",
            ],
            [
                "name" => "Politechnika Lubelska",
                "course" => "Computer Science and Engineering",
                "interval" => "17/02/2019 – 23/06/2019",
                "address" => "ul. Nadbystrzycka 38 D, Lublin, Poland",
                "url" => "http://www.pollub.pl/",
            ]
        ],
        "project" => [
            [
                "name" => "Testing COVID-19",
                "interval" => "23/04/2020 – 14/07/2020",
                "description" => 
                    "<p>Developed an android application that can evaluate if the user of the application have COVID-19 symptoms or something similar.</p>" .
                    "<p>Planned a project involving AI to improve system response based on doctor's information.</p>" .
                    "<p>Created tool to compare and synchronize data from MySQL and SQLite databases automatically.</p>"
                ,
                "url" => "https://github.com/agostinhopina95/Testing_COVID_19",
                "skill" => ["Android", "PHP", "MariaDB", "SQLitle"],
            ]
        ],
        "work" => [
            [
                "name" => "Microsegur",
                "area" => "Developer",
                "interval" => "16/11/2020 – Current",
                "responsibility" => [
                    "IoT – Internet of Things",
                ],
                "url" => "https://microsegur.pt/",
                "skill" => ["NodeJS", "PHP", "HTML/CSS3", "JavaScript"],
            ]
        ]
    ],
];
@endphp
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

    <x-Widget-Skills :obj=$obj />

    <x-Widget-Experiences :obj=$obj />

    <section class="wrap-cv" >
        <div class="container">
            <a target="_blank" href="/storage/file/cv/AGOSTINHO_RAMOS.PDF" class="btn btn-fill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s" download>
                Downlaod CV <i class="fa fa-download"></i>
            </a>
        </div>
    </section>

    <style>
        .wrap-cv{
            --wrap-box-height: 220px;
            --btn-vertical-padding: 15px;
            width: 100%;
            height: var(--wrap-box-height);
            background-color:var(--primary-color);
            opacity: .8;
            text-align: center;
        }
        .wrap-cv .container a{
            padding: var(--btn-vertical-padding) 50px;
            visibility: visible; 
            animation-duration: 0.8s; 
            animation-delay: 0.4s; 
            animation-name: fadeInUp;
            background-color: var(--primary-color);
            color:#FFF;
            -webkit-box-shadow: -1px 2px 10px 1px rgba(255, 255, 255, .4); 
            box-shadow: -1px 2px 10px 1px rgba(255, 255, 255, .4);
            margin-top: calc( (var(--wrap-box-height) / 2) - ((var(--btn-vertical-padding) - 2.5px) * 2) );
        }

        .wrap-cv .container a:hover{
            background-color: #FFF;
            color:var(--primary-color);
        }
    </style>

    @if(false)
    <x-Widget-About />
    <x-Widget-Service />
    <x-Widget-Pricing />
    <x-Widget-Blog />
    <x-Widget-Testimonials />
    @endif

    <x-Widget-Footer :obj=$obj />

<x-Footer />