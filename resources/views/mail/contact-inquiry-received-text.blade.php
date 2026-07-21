NEW CARE INQUIRY
{{ config('site.short_name') }}

A visitor submitted the website contact form and would like to learn more about care.

CONTACT DETAILS
Name: {{ $inquiry['name'] }}
Phone: {{ $inquiry['phone'] }}
Email: {{ $inquiry['email'] }}
@if ($inquiry['relationship_to_resident'] ?? null)
Relationship to resident: {{ $inquiry['relationship_to_resident'] }}
@endif
@if ($inquiry['care_needed'] ?? null)
Type of care needed: {{ $inquiry['care_needed'] }}
@endif

MESSAGE
{{ $inquiry['message'] }}

Reply directly to this email to respond to {{ $inquiry['name'] }}.

{{ config('site.short_name') }}
{{ config('site.address.street') }}
{{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}
{{ config('site.phone') }}
