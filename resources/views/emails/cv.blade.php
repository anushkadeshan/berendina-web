@component('mail::message')
# Job Application has been recieved for the position of {{$data->career->title}}
@php
$path = storage_path();
@endphp


@component('mail::panel')
<h4 style="color:blue">Applicant Informations</h4>
@endcomponent
@component('mail::table')
| |  |
|:-------------|:--------|
Name : | {{$data->name}}|
Email : | {{$data->email}}|
Sex : | {{$data->sex}}|
Position : | {{$data->career->title}}|

@endcomponent
<h4>Message </h4>
@component('mail::panel')
<p style="color:black">
     {{$data->message}}</p>
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
