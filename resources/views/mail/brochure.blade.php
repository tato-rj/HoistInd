@component('mail::message')
# Hello {{$name}}

Thank you for requesting a Hoist Industries Sales & Rentals brochure. Please find attached our brochure, or you may click on the button below to download.

If you have any questions regarding our services please feel free to contact us. Our contact information is below:

@component('mail::panel')
Hoist Industries<br>
Office: <a href="tel:{{config('brand.phone')}}">{{config('brand.phone')}}</a><br>
Email: <a href="mailto:{{config('brand.emails.info')}}">{{config('brand.emails.info')}}</a>

New York:<br>
<a href="{{config('brand.office.map')}}">{{config('brand.office.address.street')}}<br>{{config('brand.office.address.city')}}</a>
@endcomponent


@component('mail::button', ['url' => route('brochure')])
Download my brochure
@endcomponent

Regards,<br>
{{ config('app.name') }} Team
@endcomponent
