@component('mail::message')
# Welcome to Jetstagram

This a personal project demonstrating how to build an instagram-like WebApp using Laravel.
Please try and play around the web app :)


@component('mail::button', ['url' => ''])
Verify Email
@endcomponent

All the best,<br>
{{ config('app.name') }}
@endcomponent
