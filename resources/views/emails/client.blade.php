@component('mail::message')
## Personal Website

{{ $message }}

Thanks,<br/>
{{ $name }},<br/>
{{ $email }}
@endcomponent