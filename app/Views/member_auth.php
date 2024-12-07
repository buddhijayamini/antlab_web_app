<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ANTlabs Club Member Login</title>
    <link rel="stylesheet" href="/public/assets/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="login-container">
        <div class="logo">
            <span>ANT</span><img src="/public/assets/images/logo.png" alt="Labs" height="45">
        </div>
        <h5>CLUB MEMBER</h5>
        <form action="index.php?page=member" method="POST">
            <div>
                <input type="text" class="form-control" name="memberID" placeholder="MEMBER ID" required>
            </div>
            <div>
                <input type="password" class="form-control" name="pin" placeholder="PIN" required>
            </div>
            <div class="form-check text-start">
                <input type="checkbox" class="form-check-input" required>
                <label class="form-check-label">I accept the terms of use.</label>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <button type="button" class="btn-custom">BACK</button>
                <button type="submit" class="btn-custom">LOG IN</button>
            </div>
        </form>
    </div>
</body>
</html>
