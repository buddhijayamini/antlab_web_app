<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guest Wi-Fi Login</title>
    <link rel="stylesheet" href="assets/css/style.css"> <!-- Link to your custom stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center mb-4">Welcome to Guest Wi-Fi</h1>
        <p class="text-center">Please select your login method below:</p>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="index.php" method="GET">
                    <div class="mb-3">
                        <label for="page" class="form-label">Select Login Method</label>
                        <select class="form-select" id="page" name="page" required>
                            <option value="sms">SMS Authentication</option>
                            <option value="member">Member Authentication</option>
                            <option value="visitor">Day Visitor Login</option>
                        </select>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Proceed</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <footer class="text-center mt-5">
        <p>&copy; 2024 Guest Wi-Fi. All Rights Reserved.</p>
    </footer>
</body>
</html>
