<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>school</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Styles -->
        <style>
            html, body {
    margin: 0;
    padding: 0;
    font-family: 'Nunito', sans-serif;
    background-color: #f9f9f9;
}

header {
    background-color: #333;
    color: #fff;
    padding: 10px 20px;
}

nav ul {
    list-style-type: none;
    padding: 0;
}

nav ul li {
    display: inline;
    margin-right: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
}

main {
    padding: 50px 20px;
}

.welcome-content {
    text-align: center;
}

footer {
    background-color: #333;
    color: #fff;
    padding: 20px;
    text-align: center;
}

.footer-content {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.footer-content ul {
    list-style-type: none;
    padding: 0;
}

.footer-content ul li {
    display: inline;
    margin-right: 10px;
}

.footer-content ul li a {
    color: #fff;
    text-decoration: none;
}
.auth-links {
    text-align: center;
}

.auth-links p {
    margin: 10px;
}

.auth-links p a {
    display: inline-block;
    padding: 10px 20px;
    text-decoration: none;
    color: #fff;
    border-radius: 5px;
}

.auth-links p a.btn-primary {
    background-color: #007bff;
}

.auth-links p a.btn-secondary {
    background-color: #6c757d;
}

.auth-links p a.btn-primary:hover,
.auth-links p a.btn-secondary:hover {
    opacity: 0.8;
}


        </style>
    </head>
    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to School Management System</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                @if (Route::has('login'))
                    @auth
                        <li><a href="{{ url('/home') }}">Dashboard</a></li>
                    @else
                        <li><a href="{{ route('login') }}">Login</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @endif
                    @endauth
                @endif
            </ul>
        </nav>
    </header>

    <main>
        <div class="welcome-content">
            <h1>Welcome to School Management System</h1>
            <div class="auth-links">
                @if (Route::has('login'))
                    <p><a href="{{ route('login') }}" class="btn btn-primary">Login</a></p>
                    @if (Route::has('register'))
                        <p><a href="{{ route('register') }}" class="btn btn-secondary">Register</a></p>
                    @endif
                @endif
            </div>
                </div>
    </main>

    <footer>
        <div class="footer-content">
            <p>&copy; {{ date('Y') }} School Management System. All rights reserved.</p>
            <ul>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
            </ul>
        </div>
    </footer>
</body>
</html>
