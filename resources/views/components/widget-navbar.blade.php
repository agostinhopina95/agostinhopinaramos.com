<header class="black-bg mh-header mh-fixed-nav nav-scroll mh-xs-mobile-nav wow fadeInUp" id="mh-header">
   <div class="overlay"></div>
   <div class="container">
      <div class="row">
         <nav class="navbar navbar-expand-lg mh-nav nav-btn">
            <a class="navbar-brand" href="/">
               <img src="/img/static/logo.png" alt="Agostinho Pina Ramos" class="img-fluid">
            </a>
            @if($menu !== FALSE)
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
               <ul class="navbar-nav mr-0 ml-auto">
                  <li class="nav-item active">
                     <a class="nav-link" href="#mh-home">Home</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#mh-portfolio">Portfolio</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#mh-skills">Skills</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#mh-experience">Experiences</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#mh-contact">Contact</a>
                  </li>
               </ul>
            </div>
            @endif
         </nav>
      </div>
   </div>
</header>
