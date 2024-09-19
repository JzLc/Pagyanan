<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background-color: #ffffff;
            padding: 20px;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
        }
        h1 {
            color: #333333;
            font-size: 24px;
            margin-bottom: 20px;
        }
        p {
            font-size: 16px;
            color: #555555;
            line-height: 1.5;
        }
        .info-label {
            font-weight: bold;
            color: #333333;
        }
        .info-value {
            color: #007bff;
        }
        .message-content {
            margin-top: 10px;
            padding: 15px;
            background-color: #f4f4f4;
            border-left: 4px solid #007bff;
            border-radius: 5px;
            color: #333333;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            font-size: 12px;
            color: #999999;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Message from Contact Us section</h1>
        <p><span class="info-label">Name:</span> <span class="info-value">{{ $data['name'] }}</span></p>
        <p><span class="info-label">Email:</span> <span class="info-value">{{ $data['email'] }}</span></p>
        <p><span class="info-label">Message:</span></p>
        <div class="message-content">
            <p>{{ $data['message'] }}</p>
        </div>

        <div class="footer">
            <p>This is an automated message from Pagyanan.</p>
        </div>
    </div>
</body>
</html>
