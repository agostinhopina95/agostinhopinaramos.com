<script type="text/javascript" id="inject-url" >
(function(){
    @php echo $slot; @endphp .forEach(function(obj){
        obj["file"].forEach(function(file){
            var e = null, ext = file.toLowerCase();
            if(ext.search('extention=js') >-1||ext.search('js') > -1){
                e = document.createElement('script');
                e.type = "text/javascript"; e.src = file; e.charset="UTF-8";
            }else
            if(ext.search('extention=css') >-1||ext.search('css') > -1){
                e = document.createElement('link');
                e.type = "text/css"; e.rel = "stylesheet"; e.href = file;
            }
            if(e !== null){
                obj["parent"].appendChild(e);
            }
        });
    });
    window.onload = function(){
        document.getElementById("inject-url").remove();
    };
})();
</script>