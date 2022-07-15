<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    </head>
    <body class="body">
        <div class="container">
            <div class="form-content">
                <div class="logo">
                    <img src="{{ url('upload/bigballoonlogo.png') }}">
                </div>
                <form method="POST" action="{{ route('adminlogin') }}" class="mb-5">
                    @csrf
                    <div class="form-group">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Username" required>
                    </div>
                    @if ($errors->has('email'))
                        <div class= "alert alert-danger admin_login_alert">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" required>
                    </div>
                    @if ($errors->has('password'))
                        <div class= "alert alert-danger admin_login_alert">
                            {{ $errors->first('password') }}
                        </div>
                    @endif
                    <button type="submit" class="btn btn-block submit-btn mt-5">Log In</button>
                </form>
            </div>
        </div>
    </body>
</html>