@component('mail::message')
# Your Transaction Has Been Confirmed!

Hi {{ $checkout->User->name }}
<br>
Your transaction has been confirmed. Now you can enjoy the benefits of {{ $checkout->Camp->title }} camp.


@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent