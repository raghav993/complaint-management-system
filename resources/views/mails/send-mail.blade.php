<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Complaint Assignment Mail</title>
</head>
<body>
    <h2>Hello {{ $engineerName }},</h2>

    <p>A new complaint has been assigned to you. Here are the details:</p>

    <ul>
        <li><strong>Complaint No:</strong> {{ $complaintNo }}</li>
        <li><strong>Problem:</strong> {{ $problem }}</li>
        <li><strong>Person Name:</strong> {{ $personName }}</li>
        <li><strong>Section:</strong> {{ $sectionName }}</li>
    </ul>

    <p>Please take the necessary action.</p>

    <p>Best regards,<br>MP High Court - Complaint System</p>
</body>
</html>
