<footer class="mh-footer" id="mh-contact">
   <div class="map-image image-bg">
      <div class="container">
         <div class="row section-separator">
            <div class="col-sm-12 section-title wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">
               <h3>Contact Me</h3>
            </div>
            <div class="col-sm-12 mh-footer-address">
               <div class="row">
                  <div class="col-sm-12 col-md-4">
                     <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <div class="each-icon">
                           <i class="fa fa-location-arrow"></i>
                        </div>
                        <div class="each-info">
                           <h4>Address</h4>
                           <address>
                              Rua Campo Grande, Nº 05 <br> 
                              Lisbon, Portugal
                           </address>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                     <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
                        <div class="each-icon">
                           <i class="fa fa-envelope-o"></i>
                        </div>
                        <div class="each-info">
                           <h4>Email</h4>
                           <a href="mailto:general@agostinhopinaramos.com">general@agostinhopinaramos.com</a><br>
                           <a href="mailto:agostinhopina095@gmail.com">agostinhopina095@gmail.com</a>
                        </div>
                     </div>
                  </div>
                  <div class="col-sm-12 col-md-4">
                     <div class="mh-address-footer-item dark-bg shadow-1 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.7s">
                        <div class="each-icon">
                           <i class="fa fa-phone"></i>
                        </div>
                        <div class="each-info">
                           <h4>Phone</h4>
                           <a href="callto:(+351)934927329">(+351) 934 927 329</a><br>
                           <a href="callto:(+351)934339052">(+351) 934 339 052</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
               <form id="contactForm" class="single-form quate-form wow fadeInUp" data-toggle="validator" >
                  <div id="msgSubmit" class="h3 hidden"></div>
                  <div class="row">
                     <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                     <div class="col-md-6 col-sm-12">
                        <input name="name" class="contact-name form-control" id="name" type="text" placeholder="First Name" required>
                     </div>
                     <div class="col-md-6 col-sm-12">
                        <input name="name" class="contact-email form-control" id="L_name" type="text" placeholder="Last Name" required>
                     </div>
                     <div class="col-sm-12">
                        <input name="email" class="contact-subject form-control" id="email" type="email" placeholder="Your Email" required>
                     </div>
                     <div class="col-sm-12">
                        <textarea class="contact-message" id="message" rows="6" placeholder="Your Message" required></textarea>
                     </div>
                     <!-- Subject Button -->
                     <div class="btn-form col-sm-12">
                        <button type="submit" class="btn btn-fill btn-block" id="form-submit">Send Message</button>
                     </div>
                  </div>
               </form>
            </div>
            <div class="col-sm-12 col-md-6 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
               <div class="mh-map">
                  <div id="mh-map" class="shadow-1"></div>
               </div>
            </div>
            <div class="col-sm-12 mh-copyright wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
               <div class="row">
                  <div class="col-sm-6">
                     <div class="text-left text-xs-center">
                        {!! $copyright !!}
                     </div>
                  </div>
                  <div class="col-sm-6">
                     @if(isset($social_networks))
                     <ul class="social-icon">
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
   </div>
</footer>