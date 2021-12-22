@component('mail::message')
# Hello {{$name}}

Thank you for your contact, we will be in touch shortly.

Regards,<br>
{{ config('app.name') }} Team
@endcomponent
