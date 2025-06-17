!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Admin - Producten beheren</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        html,
        body {
            min-height: 100vh;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        body {
            background: #f8f9fa;
            flex: 1 0 auto;
        }

        main {
            flex: 1 0 auto;
        }

        .footer-bg {
            background: #262a91;
            color: white;
        }

        .admin-table th,
        .admin-table td {
            vertical-align: middle;
        }

        .admin-table th {
            background: #e6f0ff;
            color: #231552;
        }

        .admin-table tr {
            background: #fff;
        }

        .admin-table tr:nth-child(even) {
            background: #f3f6fa;
        }

        .fw-bold {
            color: #231552;
        }

        .btn-primary {
            background: #231552;
            border: none;
        }

        .btn-primary:hover {
            background: #4936b1;
        }

        .btn-danger {
            background: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background: #bb2d3b;
        }
    </style>
</head>

<body>
    @include('partials.header')
    <main>
        @yield('content')
    </main>
    <footer class="footer-bg text-center py-3 mt-4">
        &copy; {{ date('Y') }} Aquafin - Admin
    </footer>
</body>

</html>