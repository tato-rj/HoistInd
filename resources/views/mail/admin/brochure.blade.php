@component('mail::message')
# Hello

A brochure was downloaded by <strong>{{$name}}</strong> with the email <a href="mailto:{{$email}}">{{$email}}</a>.

Regards,<br>
{{ config('app.name') }} Team
@endcomponent