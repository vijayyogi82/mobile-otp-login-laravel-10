<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Login</title>
    <!-- links -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

    <div class="container mt-4">
        <h1>Show mobile otp</h1>

        @if (session('success'))
            <div class="text-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="text-danger">
                {{ session('error') }}
            </div>
        @endif

        <form action="{{route('otp.getlogin')}}" method="post">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user_id }}">
            <br>
            <div class="form-group">
                <input class="form-control" type="text" name="otp" value="{{ old('otp') }}" required placeholder="Enter OTP">
            </div>
            <br>
            @error('otp')
                <strong class="text-danger">{{ $message }}</strong>
            @enderror
            <button class="btn btn-primary" type="submit"> Login </button>
        </form>

    </div>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    
</body>
</html>