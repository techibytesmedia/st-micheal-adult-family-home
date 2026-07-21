<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="color-scheme" content="light only">
    <title>New website inquiry</title>
    <style>
        @media only screen and (max-width: 620px) {
            .email-shell { padding: 20px 12px !important; }
            .email-header, .email-content { padding-left: 24px !important; padding-right: 24px !important; }
            .detail-label, .detail-value { display: block !important; width: 100% !important; }
            .detail-label { padding-bottom: 4px !important; }
            .detail-value { padding-top: 0 !important; }
        }
    </style>
</head>
<body style="margin: 0; padding: 0; background-color: #f7f2ea; color: #1c3f6e; font-family: Arial, Helvetica, sans-serif;">
    <div style="display: none; max-height: 0; overflow: hidden; opacity: 0; color: transparent;">
        New care inquiry from {{ $inquiry['name'] }}.
    </div>

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="width: 100%; background-color: #f7f2ea;">
        <tr>
            <td class="email-shell" align="center" style="padding: 40px 16px;">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="width: 100%; max-width: 640px; overflow: hidden; border: 1px solid #e3d4bc; border-radius: 18px; background-color: #ffffff; box-shadow: 0 18px 45px rgba(18, 41, 74, 0.12);">
                    <tr>
                        <td style="height: 6px; background-color: #b3703c; font-size: 0; line-height: 0;">&nbsp;</td>
                    </tr>

                    <tr>
                        <td class="email-header" style="padding: 30px 40px; background-color: #12294a;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td width="58" valign="middle">
                                        <div style="width: 46px; height: 46px; border: 1px solid #98b9e2; border-radius: 50%; color: #f7f2ea; font-family: Georgia, 'Times New Roman', serif; font-size: 18px; font-weight: 700; line-height: 46px; text-align: center;">SM</div>
                                    </td>
                                    <td valign="middle">
                                        <p style="margin: 0 0 3px; color: #98b9e2; font-size: 10px; font-weight: 700; letter-spacing: 1.8px; text-transform: uppercase;">Website notification</p>
                                        <p style="margin: 0; color: #ffffff; font-family: Georgia, 'Times New Roman', serif; font-size: 20px; font-weight: 700; line-height: 1.3;">{{ config('site.short_name') }}</p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td class="email-content" style="padding: 38px 40px 18px;">
                            <span style="display: inline-block; padding: 7px 12px; border-radius: 999px; background-color: #f7f2ea; color: #9c5e30; font-size: 10px; font-weight: 700; letter-spacing: 1.3px; text-transform: uppercase;">New care inquiry</span>
                            <h1 style="margin: 18px 0 10px; color: #12294a; font-family: Georgia, 'Times New Roman', serif; font-size: 32px; font-weight: 600; line-height: 1.2;">A family has reached out</h1>
                            <p style="margin: 0; color: #4272b4; font-size: 15px; line-height: 1.7;">A visitor submitted the contact form and would like to learn more about care at {{ config('site.short_name') }}.</p>
                        </td>
                    </tr>

                    <tr>
                        <td class="email-content" style="padding: 16px 40px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="border: 1px solid #efe6d7; border-radius: 14px; background-color: #fbf9f5;">
                                <tr>
                                    <td colspan="2" style="padding: 20px 22px 10px; color: #b3703c; font-size: 10px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase;">Contact details</td>
                                </tr>
                                <tr>
                                    <td class="detail-label" width="145" style="padding: 10px 12px 10px 22px; color: #6592cd; font-size: 12px; font-weight: 700; text-transform: uppercase;">Name</td>
                                    <td class="detail-value" style="padding: 10px 22px 10px 12px; color: #12294a; font-size: 15px; font-weight: 700;">{{ $inquiry['name'] }}</td>
                                </tr>
                                <tr>
                                    <td class="detail-label" width="145" style="padding: 10px 12px 10px 22px; border-top: 1px solid #efe6d7; color: #6592cd; font-size: 12px; font-weight: 700; text-transform: uppercase;">Phone</td>
                                    <td class="detail-value" style="padding: 10px 22px 10px 12px; border-top: 1px solid #efe6d7; color: #12294a; font-size: 15px;">{{ $inquiry['phone'] }}</td>
                                </tr>
                                <tr>
                                    <td class="detail-label" width="145" style="padding: 10px 12px 10px 22px; border-top: 1px solid #efe6d7; color: #6592cd; font-size: 12px; font-weight: 700; text-transform: uppercase;">Email</td>
                                    <td class="detail-value" style="padding: 10px 22px 10px 12px; border-top: 1px solid #efe6d7; color: #12294a; font-size: 15px; word-break: break-word;"><a href="mailto:{{ $inquiry['email'] }}" style="color: #28548f; text-decoration: underline;">{{ $inquiry['email'] }}</a></td>
                                </tr>
                                @if ($inquiry['relationship_to_resident'] ?? null)
                                    <tr>
                                        <td class="detail-label" width="145" style="padding: 10px 12px 10px 22px; border-top: 1px solid #efe6d7; color: #6592cd; font-size: 12px; font-weight: 700; text-transform: uppercase;">Relationship</td>
                                        <td class="detail-value" style="padding: 10px 22px 10px 12px; border-top: 1px solid #efe6d7; color: #12294a; font-size: 15px;">{{ $inquiry['relationship_to_resident'] }}</td>
                                    </tr>
                                @endif
                                @if ($inquiry['care_needed'] ?? null)
                                    <tr>
                                        <td class="detail-label" width="145" style="padding: 10px 12px 20px 22px; border-top: 1px solid #efe6d7; color: #6592cd; font-size: 12px; font-weight: 700; text-transform: uppercase;">Care needed</td>
                                        <td class="detail-value" style="padding: 10px 22px 20px 12px; border-top: 1px solid #efe6d7; color: #12294a; font-size: 15px;">{{ $inquiry['care_needed'] }}</td>
                                    </tr>
                                @endif
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td class="email-content" style="padding: 16px 40px;">
                            <p style="margin: 0 0 10px; color: #b3703c; font-size: 10px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase;">Their message</p>
                            <div style="padding: 22px; border-left: 4px solid #b3703c; border-radius: 0 12px 12px 0; background-color: #f3f7fb; color: #1c3f6e; font-family: Georgia, 'Times New Roman', serif; font-size: 17px; line-height: 1.7; white-space: pre-wrap; word-break: break-word;">{{ $inquiry['message'] }}</div>
                        </td>
                    </tr>

                    <tr>
                        <td class="email-content" align="center" style="padding: 22px 40px 42px;">
                            <a href="mailto:{{ $inquiry['email'] }}" style="display: inline-block; padding: 14px 24px; border-radius: 9px; background-color: #214c87; color: #ffffff; font-size: 14px; font-weight: 700; text-decoration: none;">Reply to {{ $inquiry['name'] }}</a>
                            <p style="margin: 13px 0 0; color: #6592cd; font-size: 12px; line-height: 1.5;">You can also reply directly to this email.</p>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding: 24px 40px; border-top: 1px solid #efe6d7; background-color: #fbf9f5; text-align: center;">
                            <p style="margin: 0 0 6px; color: #12294a; font-family: Georgia, 'Times New Roman', serif; font-size: 15px; font-weight: 700;">{{ config('site.short_name') }}</p>
                            <p style="margin: 0; color: #6592cd; font-size: 11px; line-height: 1.7;">
                                {{ config('site.address.street') }}, {{ config('site.address.city') }}, {{ config('site.address.state') }} {{ config('site.address.zip') }}<br>
                                <a href="tel:{{ config('site.phone_href') }}" style="color: #28548f; text-decoration: none;">{{ config('site.phone') }}</a>
                            </p>
                        </td>
                    </tr>
                </table>

                <p style="margin: 18px 0 0; color: #7f4c28; font-size: 10px; line-height: 1.5;">This notification was sent from the contact form on the {{ config('site.short_name') }} website.</p>
            </td>
        </tr>
    </table>
</body>
</html>
