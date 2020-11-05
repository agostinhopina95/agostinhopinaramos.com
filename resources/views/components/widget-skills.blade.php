<section class="mh-skills" id="mh-skills">
   <div class="container">
      <div class="row section-separator">
         <div class="section-title text-center col-sm-12">
            <!--<h2>Skills</h2>-->
         </div>
         <div class="col-sm-12 col-md-6">
            <div class="mh-skills-inner">
               <div class="mh-professional-skill wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.3s">
                  <h3>Technical Skills</h3>
                  @php
                  $i = 0;
                  @endphp
                  <div class="each-skills">
                     @foreach($obj["skill"]["technical"] as $technical)
                     <div class="candidatos">
                        <div class="parcial">
                           <div class="info">
                              <div class="nome">{{ $technical["name"] }}</div>
                              <div class="percentagem-num">{{ ($technical["point"]*2) * 10 }}%</div>
                           </div>
                           <div class="progressBar">
                              <div class="percentagem" style="width: {{ ($technical["point"]*2) * 10 }}%;"></div>
                           </div>
                        </div>
                     </div>
                     @php
                     if (++$i == 5) break;   
                     @endphp
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         <div class="col-sm-12 col-md-6">
            <div class="mh-professional-skills wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.5s">
               <h3>Professional Skills</h3>
               <ul class="mh-professional-progress" >
                  @foreach($obj["skill"]["professional"] as $professional)
                  <li>
                     <div class="mh-progress mh-progress-circle" data-progress="{{ ($professional["point"]*2) * 10 }}"></div>
                     <div class="pr-skill-name">{{ $professional["name"] }}</div>
                  </li>
                  @endforeach
               </ul>
            </div>
         </div>
      </div>
   </div>
</section>