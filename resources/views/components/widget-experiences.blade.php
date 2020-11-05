<section class="mh-experince" id="mh-experience">
   <div class="bolor-overlay">
      <div class="container">
         <div class="row section-separator">
            <div class="col-sm-12 col-md-6">
               <div class="mh-education">
                  <h3 class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s">Education</h3>
                  <div class="mh-education-deatils">
                     @foreach($obj["experience"]["education"] as $education)
                     <!-- Education Institutes-->
                     <div class="mh-education-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                        <h4>{{ $education["course"] }} - <a target="_blank"  href="{{ $education["url"] }}">{{ $education["name"] }}</a></h4>
                        <div class="mh-eduyear">{{ $education["address"] }}</div>
                        <p>{{ $education["interval"] }}</p>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
            <div class="col-sm-12 col-md-6">
               <div class="mh-work">
                  <h3>Work Experience</h3>
                  <div class="mh-experience-deatils">
                     @foreach($obj["experience"]["work"] as $work)
                     <!-- Education Institutes-->
                     <div class="mh-work-item dark-bg wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.4s">
                        <h4>{{ $work["area"] }} <a target="_blank" href="{{ $work["url"] }}">{{ $work["name"] }}</a></h4>
                        <div class="mh-eduyear">{{ $work["interval"] }}</div>
                        <span>Responsibility :</span>
                        <ul class="work-responsibility">
                           @foreach($work["responsibility"] as $responsibility)
                           <li><i class="fa fa-circle"></i>{{ $responsibility }}</li>
                           @endforeach
                        </ul>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>