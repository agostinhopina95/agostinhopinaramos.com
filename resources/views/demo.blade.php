<x-Header title="Demo {{ $id }}" />

<x-Widget-Demo-Header :type=$type :id=$id />

<div class="demo-main" id="demo-main" >
    <iframe src="/storage/project/demo/{{ $id }}/" ></iframe>
</div>

<x-Footer>
<link rel='stylesheet' href="@php echo return_path(Request::path()) . '/css/style-demo.min.css'; @endphp" type='text/css' />
</x-Footer>