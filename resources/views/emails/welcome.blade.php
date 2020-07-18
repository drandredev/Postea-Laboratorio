@component('mail::message')
# Introduction

Bienvenido a Postea!
@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Gracias de parte del equipo,<br>
{{ config('app.name') }}
@endcomponent
