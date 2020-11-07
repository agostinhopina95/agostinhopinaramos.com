@if(count($internalCSS)>0 || count($externalCSS)>0)
    <!-- Load STYLES -->
@foreach($externalCSS as $url)
<link rel="stylesheet" type="text/css" href="{{ $path.$url }}">
@endforeach
@foreach($internalCSS as $style)
<style>{!! $style !!}</style>
@endforeach
@endif
@if(count($internalJS)>0 || count($externalJS)>0)
    <!-- Load JS -->
@foreach($externalJS as $url)
<script type="text/javascript" src="{{ $path.$url }}" ></script>
@endforeach
@foreach($internalJS as $script)
<script type="text/javascript" >{!! $script !!}</script>
@endforeach
@endif
@php echo $slot; @endphp
</body>
</html>