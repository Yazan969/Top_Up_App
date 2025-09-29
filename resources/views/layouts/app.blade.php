<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TopUp Game Dashboard - @yield('title')</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f8f9fa;
        }
        
        #sidebar {
            min-height: 100vh;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        
        #sidebar .nav-link {
            border-radius: 5px;
            margin: 5px 10px;
        }
        
        #sidebar .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.1);
        }
        
        #sidebar .nav-link.active {
            background-color: #0d6efd;
        }
        
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
        }
        
        .card-footer {
            border-bottom-left-radius: 10px !important;
            border-bottom-right-radius: 10px !important;
        }
        
        .table th {
            border-top: none;
            font-weight: 600;
            color: #6c757d;
        }

        .status-badge {
            padding: 0.35em 0.65em;
            font-size: 0.75em;
            font-weight: 700;
            border-radius: 0.375rem;
        }

        .badge-pending {
            background-color: #ffc107;
            color: #000;
        }

        .badge-processing {
            background-color: #0dcaf0;
            color: #000;
        }

        .badge-completed {
            background-color: #198754;
            color: #fff;
        }

        .badge-failed {
            background-color: #dc3545;
            color: #fff;
        }
    </style>
    @yield('styles')
</head>
<body>
    @if(!request()->routeIs('login') && !request()->routeIs('register'))
        @include('partials.sidebar')
    @endif
    
    <main class="@if(!request()->routeIs('login') && !request()->routeIs('register')) ms-auto @endif" style="@if(!request()->routeIs('login') && !request()->routeIs('register')) margin-left: 250px; @endif padding: 20px;">
        @yield('content')
    </main>
    
    <!-- Bootstrap & Chart JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @yield('scripts')
</body>
</html>