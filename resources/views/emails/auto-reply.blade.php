<!DOCTYPE html>
<html>
<head>
    <style>
        body { font-family: sans-serif; line-height: 1.6; color: #333; }
        .container { width: 90%; max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 8px; }
        .header { background-color: #38a169; color: white; padding: 10px; text-align: center; border-radius: 8px 8px 0 0; }
        .content { padding: 20px 0; }
        .message-box { padding: 15px; border: 1px dashed #ccc; background-color: #f0f0f0; border-radius: 4px; white-space: pre-wrap; }
        .signature { margin-top: 30px; border-top: 1px solid #eee; padding-top: 15px; font-size: 0.9em; }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h3>Request Received - Thank You!</h3>
        </div>
        
        <div class="content">
            <p>Hi {{ $name }},</p>
            <p>We confirm that we have received your service request. We aim to review your details and respond to you as quickly as possible.</p>

            <p><strong>Your Message Details:</strong></p>
            <div class="message-box">
                {{ $user_message }}
            </div>

            <p>A Jordan's Mobile Fleet Service representative will be in touch shortly.</p>
        </div>

        <div class="signature">
            <p>Best Regards,<br>
            The Jordan's Mobile Fleet Service Team</p>
        </div>
    </div>
</body>
</html>