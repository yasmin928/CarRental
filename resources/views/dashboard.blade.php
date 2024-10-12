<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Site Title</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f8f9fa;
        }
        .button-container {
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="button-container">
        <h1 class="mb-4">Choose an Option</h1>
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="button" class="btn btn-primary btn-lg mb-3" onclick="location.href='{{ route('admin.users') }}'">
                Go to Admin/Users
            </button>
            <br>
            <button type="button" class="btn btn-success btn-lg mb-3" onclick="location.href='{{ url('/home') }}'">
                Go to Home
            </button>
            <br>
            <button type="submit" class="btn btn-danger btn-lg">
                Logout
            </button>
        </form>
    </div>
</body>
</html>
