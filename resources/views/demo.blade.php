<x-Header title="Demo example 1" />

<header id="demo-header">
   <div class="details">
      <div class="inner">
         <h1>Caminar</h1>
         <p class="description">A simple, photo-oriented landing page with a lightbox gallery.</p>
         <p class="date">Posted on September 19, 2017 in <strong>Responsive HTML5 Templates</strong></p>
      </div>
   </div>
   <div id="demo-ad" class="ad">
      <div class="unit">
         <div >
            <div style="border: 0pt none; width: 728px; height: 70px;"></div>
         </div>
      </div>
   </div>
   <ul class="actions">
    <li>
        <a href="/caminar/download" class="btn">
            <i class="fa fa-download"></i> Download (0K)
        </a>
    </li>
    <li>
        <a href="/" class="button">
            <i class="fa fa-home"></i>
        </a>
    </li>
    <li>
        <a href="/industrious" class="button">
            <i class="fa fa-arrow-left"></i>
        </a>
    </li>
    <li>
        <a href="/hielo" class="button">
            <i class="fa fa-arrow-right"></i>
        </a>
    </li>
   </ul>
</header>

<div class="demo-main" id="demo-main" >
    <iframe src="/storage/project/demo/AI-ReactiveAgent/" ></iframe>
</div>

<style>
:root {
    --navbar-height: 115px;
}
#demo-main {
    position: fixed;
    left: 0px;
    top: var(--navbar-height);
    width: 100%;
    height: calc(100% - var(--navbar-height));
}
#demo-main iframe {
    position: absolute;
    left: 0;
    top: 0;
    margin: 0px;
    padding: 0px;
    border: 0px;
    display: block;
    width: 100%;
    height: 100%;
}
#demo-header .button{
    background-color: var(--primary-color);
    color:#FFF;
    padding:5px 15px;
    border-radius:15px;
}

#demo-header .button:active{
    background-color: #f1f1f1;
    color: var(--primary-color);
}
#demo-header{position:relative;background:#fff;box-shadow:0 0 2px 0 rgba(0,0,0,0.25);z-index:10000;padding:1em;height:var(--navbar-height);display:-moz-flex;display:-webkit-flex;display:-ms-flex;display:flex;-moz-align-items:stretch;-webkit-align-items:stretch;-ms-align-items:stretch;align-items:stretch;}
#demo-header .button.square span{display:none;}
#demo-header .button.back{text-decoration:none;}
#demo-header .button.previous{text-decoration:none;}
#demo-header .button.next{text-decoration:none;}
#demo-header .button.download{text-decoration:none;}
#demo-header .details{margin-right:1.5em;padding:0 0.5em;width:100%;-ms-flex:1;-moz-flex-grow:1;-webkit-flex-grow:1;-ms-flex-grow:1;flex-grow:1;display:-moz-flex;display:-webkit-flex;display:-ms-flex;display:flex;-moz-align-items:center;-webkit-align-items:center;-ms-align-items:center;align-items:center;}
#demo-header .details .inner{width:100%;}
#demo-header .details h1{font-size:1em;display:inline;}
#demo-header .details h1:after{content:':';margin-right:0.5em;}
#demo-header .details .description{display:inline;}
#demo-header .details .date{font-size:0.8em;margin:0.75em 0 0 0;}
#demo-header .details .social{margin:0.5em 0 0 0;}
#demo-header .ad{box-shadow:inset 0 0 0 2px #dfdfdf;border-radius:1px;display:-moz-flex;display:-webkit-flex;display:-ms-flex;display:flex;-moz-align-items:center;-webkit-align-items:center;-ms-align-items:center;align-items:center;-moz-justify-content:center;-webkit-justify-content:center;-ms-justify-content:center;justify-content:center;-moz-flex-shrink:0;-webkit-flex-shrink:0;-ms-flex-shrink:0;flex-shrink:0;}
#demo-header .actions{display:inline-flex;-moz-flex-wrap:wrap;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-moz-flex-shrink:0;-webkit-flex-shrink:0;-ms-flex-shrink:0;flex-shrink:0;width:16em;margin-bottom:0;margin-left:1.5em;}
#demo-header .actions .button{width:100%;}
#demo-header .actions .button.square{width:100%;}
#demo-header .actions li{width:4.6583333333em;display:block;margin-left:1em;}
#demo-header .actions li:first-child{width:16em;margin-left:0;margin-bottom:1em;}
#demo-header .actions li:nth-child(2){margin-left:0;}
#demo-ad{height:100%;}
#demo-ad .unit{display:block;margin:0 auto;height:100%;}
@media screen and (max-width: 1280px){
#demo-ad{height:96px;}
}
@media screen and (max-width: 1680px){
#demo-header .details .description{display:inline;}
#demo-header .details .date{margin:0 0 0 0.25em;display:inline;font-size:1em;}
#demo-header .details .date:after{content:'.';}
#demo-header .details .social{vertical-align:bottom;}
}
@media screen and (max-width: 1280px){
#demo-header{height:200px;padding:1em;-moz-flex-wrap:wrap;-webkit-flex-wrap:wrap;-ms-flex-wrap:wrap;flex-wrap:wrap;-moz-justify-content:center;-webkit-justify-content:center;-ms-justify-content:center;justify-content:center;}
#demo-header .details{-moz-order:3;-webkit-order:3;-ms-order:3;order:3;display:block;margin-right:0;padding:0;text-align:center;margin-top:1em;-ms-flex:1 1 auto;}
#demo-header .details h1{font-size:0.8em;}
#demo-header .details .description{font-size:0.8em;}
#demo-header .details .date{font-size:0.8em;}
#demo-header .details .date:after{content:'';display:block;}
#demo-header .details .social{margin:0.75em 0 0 0;}
#demo-header .ad{-moz-order:1;-webkit-order:1;-ms-order:1;order:1;}
#demo-header .actions{-moz-order:2;-webkit-order:2;-ms-order:2;order:2;}
}
@media screen and (max-width: 960px){
#demo-header{-moz-flex-direction:column;-webkit-flex-direction:column;-ms-flex-direction:column;flex-direction:column;-moz-flex-wrap:nowrap;-webkit-flex-wrap:nowrap;-ms-flex-wrap:nowrap;flex-wrap:nowrap;-moz-align-items:center;-webkit-align-items:center;-ms-align-items:center;align-items:center;height:178px;}
#demo-header .button{height:3.25em;line-height:3.25em;}
#demo-header .button span{display:none;}
#demo-header .button.download:before{margin-right:0;}
#demo-header .details{margin-top:0.75em;display:none;}
#demo-header .ad{margin:0 0 1em 0;}
#demo-header .actions{margin-left:-1em;width:calc(100% + 1em);}
#demo-header .actions li{margin-left:1em!important;width:calc(25% - 1em);}
#demo-header .actions li:first-child{width:calc(25% - 1em);margin-bottom:0;}
}
@media screen and (max-width: 736px){
#demo-header{height:80px;}
#demo-header .ad{display:none;}
}
</style>

<x-Footer />