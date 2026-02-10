<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login - IIMM</title>
    <link rel="stylesheet" href="{{ asset('assets/css/admin.css') }}">
</head>

<body class="admin-body">

    <div class="admin-login-wrapper">
        <div class="login-card">
            <div class="logo-area">
                <h1>IIMM Admin</h1>
                <p>Indian Institute of Materials Management</p>
            </div>

            @if(session('success'))
                <div class="alert-success">{{ session('success') }}</div>
            @endif

            @if($errors->any())
                <div class="alert-error">
                    @foreach($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form method="POST" action="{{ route('admin.login.submit') }}">
                @csrf
                <div class="admin-form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" class="admin-form-control" placeholder="admin@iimm.com"
                        value="{{ old('email') }}" required autofocus>
                </div>

                <div class="admin-form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="admin-form-control"
                        placeholder="Enter your password" required>
                </div>

                <button type="submit" class="btn-admin-primary">Sign In</button>
            </form>
        </div>
    </div>

</body>

</html>