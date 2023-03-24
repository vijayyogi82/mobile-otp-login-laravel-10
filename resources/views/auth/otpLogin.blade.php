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
        <h1>Login With Mobile</h1>
        @if (session('error'))
            <div class="text-danger">
                {{ session('error') }}
            </div>
        @endif
        <form action="{{route('otp.generate')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Mobile No</label>
                <input type="text" class="form-control mt-2" name="mobile_no" value="{{ old('mobile_no') }}" placeholder="1236547890" required>
            </div>
            <br>
                @error('mobile_no')
                    <strong class="text-danger">
                        {{ $message }}
                    </strong>
                @enderror
            <button class="btn btn-primary" type="submit">Generate OTP</button>
        </form>
    </div>

    <!-- scripts -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

    
</body>
</html>