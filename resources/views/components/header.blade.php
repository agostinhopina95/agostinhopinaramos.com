<!DOCTYPE html>
<html lang="{{ $lang }}">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="{{ $description }}">
    <meta name="keywords" content="{{ $keywords }}">
    <meta name="author" content="{{ $author }}">
    <x-Html-Favicon />
    <title>{{ $title }}</title>
@if(count($externalFONT)>0)
    <!-- Load FONTS -->
@foreach($externalFONT as $url)
    <link rel="stylesheet" type="text/css" href="{{ $url }}">
@endforeach
@endif
@if(count($externalCSS)>0)
    <!-- Load STYLES -->
@foreach($externalCSS as $url)
    <link rel="stylesheet" type="text/css" href="{{ $url }}">
@endforeach
@endif
@if(count($externalJS)>0)
    <!-- Load JS -->
@foreach($externalJS as $url)
    <script type="text/javascript" src="{{ $url }}" ></script>
@endforeach
@endif
</head>
<body class="{{ $themeClass }}" >