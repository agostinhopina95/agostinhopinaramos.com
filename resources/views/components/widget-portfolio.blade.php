<?php
$categories = [
   [
      "name" => "Website",
      "id" => "website",
   ],
   [
      "name" => "Mobile",
      "id" => "mobile",
   ],
   [
      "name" => "Schema",
      "id" => "schema",
   ],
   [
      "name" => "Web application",
      "id" => "webapplication",
   ],
];

$manifest_directory =  __DIR__ . "/../../../public" . '/storage/project/demo/';
$scanned_directory = array_diff(scandir($manifest_directory), array('..', '.'));
$articles = [];

foreach($scanned_directory as $project){
   $tmp_file = $manifest_directory . $project . '/___hiden___/manifest.json';
   if( file_exists($tmp_file) ){
      $manifest = file_get_contents( $tmp_file );
      $articles[] = json_decode($manifest, true);
   }
}
?>


<?php $id_modal_hide = $id_modal = 0; ?>
<section class="mh-portfolio" id="mh-portfolio">
   <div class="container">
      <div class="row section-separator">
         <div class="section-title col-sm-12 wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s">
            <h3>My Portfolio</h3>
         </div>
         <div class="part col-sm-12">
            <div class="portfolio-nav col-sm-12" id="filter-button">
               <ul>
                  <li data-filter="*" class="current wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.1s"> <span>All Categories</span></li>
                  @foreach($categories as $category)
                  <li data-filter=".{{ $category["id"] }}" class="wow fadeInUp" data-wow-duration="0.8s" data-wow-delay="0.2s"><span>{{ $category["name"] }}</span></li>
                  @endforeach
               </ul>
            </div>
            <div class="mh-project-gallery col-sm-12 wow fadeInUp" id="project-gallery" data-wow-duration="0.8s" data-wow-delay="0.5s">
               <div class="portfolioContainer row">
                  @foreach($articles as $article)
                  <div class="grid-item col-md-4 col-sm-6 col-xs-12 {{ $article["category"] }}">
                     <figure>
                        <img src="{{ $article["thumbnail"][0] }}" alt="{{ $article["thumbnail"][1] }}">
                        <figcaption class="fig-caption">
                           <i class="fa fa-search"></i>
                           <h5 class="title">{{ $article["title"] }}</h5>
                           <span class="sub-title">{{ $article["subtitle"] }}</span>
                           <a data-fancybox data-src="#modal{{ md5($id_modal) }}"></a>
                        </figcaption>
                     </figure>
                  </div>
                  <?php
                  $id_modal++;
                  ?>
                  @endforeach
               </div>
               <!-- End: .grid .project-gallery -->
            </div>
            <!-- End: .grid .project-gallery -->
         </div>
         <!-- End: .part -->
      </div>
      <!-- End: .row -->
   </div>
   @foreach($articles as $article)
   <div class="mh-portfolio-modal" id="modal{{ md5($id_modal_hide) }}">
      <div class="container">
         <div class="row mh-portfolio-modal-inner">
            <div class="col-sm-5">
               <h2>{{ $article["more"]["title"] }}</h2>
               <div style="text-align: justify;text-justify: inter-word;" >
               {!! $article["more"]["description"] !!}
               </div>
               <div class="mh-about-tag">
                  <ul>
                     @foreach($article["more"]["tecnology"] as $tecnology)
                     <li><span>{{ $tecnology }}</span></li>
                     @endforeach
                  </ul>
               </div>
               @if(isset($article["more"]["demo"]))
               <a target="_blank" href="{{ $article["more"]["demo"] }}" class="btn btn-fill"><i class="fa fa-play" ></i>&nbsp; Demo</a>
               @endif
            </div>
            <div class="col-sm-7">
               <div class="mh-portfolio-modal-img">
                  @foreach($article["more"]["figure"] as $figure)
                  <div class="tutorial">
                     <img src="{{ $figure["img"] }}" alt="{{ $article["thumbnail"][1] }}" class="img-fluid">
                     <p>{{ $figure["description"] }}</p>
                  </div>
                  @endforeach
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php
   $id_modal_hide++;
   ?>
   @endforeach
</section>