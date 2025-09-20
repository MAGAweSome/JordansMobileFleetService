@component('mail::message')
# New Contact Form Submission

**Name:** {{ $data['name'] }}

**Email:** {{ $data['email'] }}

@if(isset($data['telephone']))
**Telephone:** {{ $data['telephone'] }}
@endif

@if(isset($data['location']))
**Location:** {{ $data['location'] }}
@endif

**Message:**
{{ $data['message'] }}

Thanks,
{{ config('app.name') }}
@endcomponent