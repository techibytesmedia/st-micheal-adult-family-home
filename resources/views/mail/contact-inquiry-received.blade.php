<x-mail::message>
# New Website Inquiry

Someone submitted the contact form on {{ config('site.short_name') }}'s website.

**Name:** {{ $inquiry->name }}<br>
**Phone:** {{ $inquiry->phone }}<br>
**Email:** {{ $inquiry->email }}<br>
@if ($inquiry->relationship_to_resident)
**Relationship to resident:** {{ $inquiry->relationship_to_resident }}<br>
@endif
@if ($inquiry->care_needed)
**Type of care needed:** {{ $inquiry->care_needed }}<br>
@endif

## Message

{{ $inquiry->message }}

Thanks,<br>
{{ config('site.short_name') }} Website
</x-mail::message>
