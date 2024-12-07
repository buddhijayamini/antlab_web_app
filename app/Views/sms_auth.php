<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANTlabs SMS</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>

<body>
    <form action="index.php?page=sms" method="POST">
        <label>Phone Number:</label>
        <input type="text" name="phoneNumber" required>
        <button type="submit">Send OTP</button>
    </form>
</body>
</html>