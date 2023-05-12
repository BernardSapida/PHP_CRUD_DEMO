<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Sample Demo</title>
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-2">Sample PHP Demo with API</h1>
        <form method="POST" action="/demo/api/students/update.php">
            <div class="mb-3">
                <label for="fullname" class="form-label">Fullname</label>
                <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Type your fullname">
            </div>
            <div class="mb-3">
                <label for="studentNumber" class="form-label">Student Number</label>
                <input type="text" class="form-control" name="studentNumber" id="studentNumber" placeholder="Type your student number">
            </div>
            <div class="mb-3">
                <label for="section" class="form-label">Section</label>
                <input type="text" class="form-control" name="section" id="section" placeholder="Type your section">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>
</body>
</html>