@component('mail::message')
# Register Champ: {{ $checkout->Camp->titile }}

Hi {{ $checkout->User->name }}
<br>
Thank you for register on <b>{{ $checkout->Camp->titile }}</b>, please see payment instruction by click the button bellow.

@component('mail::button', ['url' => route('dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
