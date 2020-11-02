<section class="mh-home" id="mh-home">
   <div class="home-ovimg">
      <div class="container">
         <div class="row xs-column-reverse section-separator vertical-middle-content">
            <div class="col-sm-6">
               <div class="hero-img wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                  <div class="profile-img-border">
                     <img src="/public/img/static/myphoto01.jpg" alt="Agostinho Ramos"  class="main-img-profile">
                  </div>
               </div>
            </div>
            <div class="col-sm-6">
               <div class="mh-header-info">
                  <div class="mh-promo wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
                     <span>Hello I'm</span>
                  </div>
                  <h2 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Agostinho Ramos</h2>
                  <h4 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">Full Stack Web Developer</h4>
                  <ul>
                     <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s"><i class="fa fa-envelope"></i><a href="mailto:">agostinhopina095@gmail.com</a></li>
                     <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s"><i class="fa fa-phone"></i><a href="callto:">+351 934 927 329</a></li>
                     <li class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.6s">
                        <i class="fa fa-map-marker"></i>
                        <address>Rua Campo Grande Nº05, Lisbon, Portugal</address>
                     </li>
                  </ul>
                  @if(isset($social_networks))
                  <ul class="social-icon wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                     @foreach($social_networks as $data)
                     <li><a target="_blank" href="{{ $data["href"] }}"><i class="{{ $data["icon"] }}"></i></a></li>
                     @endforeach
                  </ul>
                  @endif
               </div>
            </div>
         </div>
      </div>
   </div>
</section>