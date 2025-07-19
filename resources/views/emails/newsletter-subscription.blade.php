<x-mail::message>

# New Newsletter Subscription
Someone has subscribed to the newsletter with the following email: {{ $email }}

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
