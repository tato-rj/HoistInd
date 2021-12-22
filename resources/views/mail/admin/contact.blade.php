@component('mail::message')
# Hello

The following contact has just been received:

@component('mail::panel')
<strong>Type</strong><br>
{{$type}}<br><br>
@foreach($request as $field => $value)
<strong>{{ucfirst($field)}}</strong><br>
{{$value}}<br><br>
@endforeach
@endcomponent

Regards,<br>
{{ config('app.name') }} Team
@endcomponent
