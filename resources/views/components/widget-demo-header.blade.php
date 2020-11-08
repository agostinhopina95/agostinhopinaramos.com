<?php
    $manifest_directory =  __DIR__ . "/../../../public" . '/storage/project/demo/';
    $manifest = file_get_contents( $manifest_directory . $id . '/___hiden___/manifest.json' );
    $article = json_decode($manifest, true);
?>
<header id="demo-header">
    @if($type == 'webapplication')
    <div class="details">
      <div class="inner">
         <h1>{{ $article["title"] }}</h1>
         <p class="description">{{ $article["subtitle"] }}</p>
      </div>
   </div>
   <div id="demo-ad" class="ad">
      <div class="unit">
         <div >
            <div style="width: 728px;">
                <!-- ADS -->
            </div>
         </div>
      </div>
   </div>
   <ul class="actions">
    <li>
        <a href="{{ $article["more"]["download"] }}" class="btn">
            <i class="fa fa-download"></i> Download ({{ $article["size"] }})
        </a>
    </li>
    <li>
        <a href="/" class="button">
            <i class="fa fa-home"></i>
        </a>
    </li>
    <li>
        <a href="prev" class="button">
            <i class="fa fa-arrow-left"></i>
        </a>
    </li>
    <li>
        <a href="next" class="button">
            <i class="fa fa-arrow-right"></i>
        </a>
    </li>
   </ul>
   @endif
</header>