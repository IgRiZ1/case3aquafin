<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Elektrisch geïsoleerd handschoenen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
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

        .product-main-img {
            width: 320px;
            height: 320px;
            object-fit: cover;
            border-radius: 18px;
            background: #fff;
            box-shadow: 0 6px 16px 0 rgba(46, 70, 119, 0.10);
            margin-bottom: 16px;
            display: block;
        }

        .product-thumb-img {
            width: 100px;
            height: 100px;
            object-fit: contain;
            border-radius: 12px;
            background: #fff;
            margin: 0 8px;
            box-shadow: 0 2px 8px 0 rgba(46, 70, 119, 0.10);
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

        .footer-bg {
            min-height: 50px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: auto;
        }

        .product-title {
            color: #231552;
            font-weight: bold;
            font-size: 2rem;
        }

        .product-desc-title {
            font-size: 1.2rem;
            font-weight: 600;
            margin-top: 18px;
        }

        .product-desc-box {
            background: #e6f0ff;
            border-radius: 12px;
            padding: 18px;
            margin-bottom: 18px;
        }

        .order-box {
            background: #f3f6fa;
            border-radius: 12px;
            padding: 18px;
            min-width: 320px;
            box-shadow: 0 2px 8px 0 rgba(46, 70, 119, 0.08);
        }
    </style>
</head>

<body>
    @include('partials.header')

    <div class="container py-5">
        @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <div class="row justify-content-center align-items-start">
            <div class="col-md-5 text-center">
                <img src="/images/{{ $product->image }}" class="product-main-img" alt="{{ $product->name }}">
            </div>
            <div class="col-md-7">
                <div class="product-title mb-2">{{ $product->name }}</div>
                <div class="product-desc-box mb-3">
                    <p>{{ $product->description }}</p>
                </div>
                <div class="order-box mt-4">
                    <form action="{{ route('cart.add', $product->id) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="location" class="form-label">Locatie</label>
                            <select name="location" id="location" class="form-select mb-3">
                                <option value="Gent">Gent</option>
                                <option value="Antwerpen">Antwerpen</option>
                                <option value="Brussel">Brussel</option>
                            </select>
                            <label for="quantity" class="form-label">Aantal</label>
                            <select name="quantity" id="quantity" class="form-select" style="width: 80px; display: inline-block;">
                                @for($i = 1; $i <= 4; $i++)
                                    <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                        </div>
                        <button type="submit" class="custom-btn w-100">In winkelmandje</button>
                    </form>
                    <a href="/cart" class="btn btn-outline-primary w-100 mt-2">Ga naar winkelmandje</a>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-bg">
        <span class="fw-semibold">© {{ date('Y') }} Aquafin - Alle rechten voorbehouden</span>
    </footer>
</body>

</html>