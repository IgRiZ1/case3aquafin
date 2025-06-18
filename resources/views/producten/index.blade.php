<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Beschermingsproducten</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            background: #f8f9fa;
        }

        .header-bg,
        .footer-bg {
            background: #262a91;
            color: white;
        }

        .navbar .navbar-brand img {
            height: 36px;
        }

        .navbar-nav .nav-link {
            color: #fff !important;
            font-weight: 500;
        }

        .cart-icon {
            font-size: 1.6rem;
            vertical-align: middle;
        }

        .product-card {
            background: #e6f0ff;
            border-radius: 18px;
            box-shadow: 0 6px 16px 0 rgba(46, 70, 119, 0.10);
            border: none;
            transition: transform 0.1s;
            padding-bottom: 10px;
            align-items: center;
            display: flex;
            flex-direction: column;
        }

        .product-card:hover {
            transform: translateY(-2px) scale(1.01);
            box-shadow: 0 8px 24px 0 rgba(46, 70, 119, 0.15);
        }

        .product-badge {
            background: #fff;
            border-radius: 6px;
            padding: 4px 12px;
            font-size: 1rem;
            font-weight: 500;
            display: inline-block;
            margin-top: 16px;
            margin-bottom: 10px;
            text-align: center;
        }

        .product-img {
            width: 180px;
            height: 180px;
            object-fit: cover;
            border-radius: 12px;
            margin-bottom: 16px;
            background: none;
            display: block;
        }

        .custom-btn {
            background: #231552;
            color: #fff;
            border-radius: 16px;
            border: none;
            box-shadow: 0 2px 8px 0 rgba(35, 21, 82, 0.15);
            padding: 7px 32px;
            margin-top: 8px;
        }

        .custom-btn:hover {
            background: #4936b1;
            color: #fff;
        }

        .row-eq-spacing {
            row-gap: 2.2rem;
            column-gap: 0.3rem;
        }

        .footer-bg {
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 40px;
        }
    </style>
</head>

<body>
    @include('partials.header')

    <div class="container py-5">
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold" style="color: #231552;">Beschermingsproducten</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-eq-spacing justify-content-center">
            @foreach($producten as $product)
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">{{ $product->name }}</div>
                    <img src="/images/{{ $product->image }}" class="product-img" alt="{{ $product->name }}">
                    <a href="{{ route('producten.show', $product->id) }}" class="custom-btn">Details</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    <footer class="footer-bg">
        <span class="fw-semibold">© {{ date('Y') }} Aquafin - Alle rechten voorbehouden</span>
    </footer>
</body>

</html>