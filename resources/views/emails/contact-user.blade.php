@component('mail::message')
# Guest has contacted from Berendina Website

@component('mail::panel')
<h4 style="color:blue">Guest added Below details</h4>
@endcomponent
@component('mail::table')
| |  |
|:-------------|:--------|
Name : | {{$data->name}}|
Email : | {{$data->email}}|
Contact : | {{$data->phone}}|
Subejct : | {{$data->subject}}|

@endcomponent
<h4>Message </h4>
@component('mail::panel')
<p style="color:black">
     {{$data->message}}</p>
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent
