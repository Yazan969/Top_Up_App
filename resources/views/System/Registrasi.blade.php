<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(135deg, #0c0c0c 0%, #1a1a1a 100%);
            color: #f1f1f1;
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .card {
            width: 100%;
            max-width: 500px;
            border-radius: 12px;
            background-color: #1e1e1e;
            color: #f1f1f1;
            box-shadow: 0 8px 32px rgba(0, 0, 0, 0.4);
            border: 1px solid #333;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 40px rgba(0, 0, 0, 0.5);
        }

        .card-body {
            padding: 2.5rem;
        }

        .form-label {
            color: #ddd;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }

        .form-control {
            margin-bottom: 1.2rem;
            background-color: #2c2c2c;
            border: 1px solid #444;
            color: #fff;
            border-radius: 6px;
            padding: 0.75rem 1rem;
            transition: all 0.3s ease;
        }

        .form-control:focus {
            background-color: #2c2c2c;
            border-color: #3d85c6;
            box-shadow: 0 0 0 0.25rem rgba(61, 133, 198, 0.25);
            color: #fff;
        }

        .form-control:hover {
            border-color: #555;
        }

        .btn-submit {
            background: linear-gradient(to right, #3d85c6, #2b6cb0);
            color: white;
            padding: 0.75rem 1.5rem;
            border: none;
            border-radius: 6px;
            font-weight: 600;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2);
        }

        .btn-submit:hover {
            background: linear-gradient(to right, #2b6cb0, #215f9e);
            transform: translateY(-2px);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        a {
            color: #3d85c6;
            font-weight: 500;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #63b3ed;
            text-decoration: underline;
        }

        .alert {
            border: none;
            border-radius: 8px;
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
        }

        .alert-danger {
            background-color: rgba(220, 53, 69, 0.2);
            color: #f8d7da;
            border-left: 4px solid #dc3545;
        }

        .alert-success {
            background-color: rgba(25, 135, 84, 0.2);
            color: #d1e7dd;
            border-left: 4px solid #198754;
        }

        .text-center {
            text-align: center;
        }

        h2 {
            font-weight: 700;
            margin-bottom: 1.5rem;
            color: #e1e1e1;
        }

        .min-vh-100 {
            min-height: 100vh;
        }
    </style>
</head>

<body>
    <div class="d-flex justify-content-center align-items-center min-vh-100 p-3">
        <div class="card">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Form Registrasi</h2>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('register.submit') }}">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama:</label>
                        <input type="text" class="form-control" id="name" name="name"
                            value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="{{ old('email') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>

                    <div class="mb-4">
                        <label for="password_confirmation" class="form-label">Konfirmasi Password:</label>
                        <input type="password" class="form-control" id="password_confirmation"
                            name="password_confirmation" required>
                    </div>

                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary btn-submit">Daftar</button>
                    </div>
                </form>

                <p class="text-center mt-3">Sudah punya akun? <a href="{{ route('login.form') }}">Login</a></p>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous">
    </script>
</body>

</html>