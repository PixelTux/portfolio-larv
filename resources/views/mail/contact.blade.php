@component('mail::message')
# Thank you for getting in touch!

Dear {{$contact['name']}},

This is an automatic email response to let you know that your message has been received. 
We appreciate your interest and will make sure to respond as soon as possible.

Best regards, \
Luis from [{{ env('APP_NAME') }}]({{env('APP_URL')}})

@component('mail::panel')

_`Name:`_     {{ $contact['name'] }}\
_`Email:`_    {{ $contact['email'] }}\
_`Phone:`_    {{ $contact['phone'] }}

_`Message:`_ \
{{$contact['message']}}

@endcomponent
@endcomponent
