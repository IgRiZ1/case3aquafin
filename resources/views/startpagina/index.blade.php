<!DOCTYPE html>
<html lang="nl">

<head>
    <meta charset="UTF-8">
    <title>Producten overzicht</title>
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

        /* Cards */
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
        }

        .product-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 16px;
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
            row-gap: 2.5rem;
            column-gap: 0.5rem;
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

    <!-- PRODUCT CARDS -->
    <div class="container py-5">
        <div class="row justify-content-center mb-4">
            <div class="col-12 text-center">
                <h2 class="fw-bold" style="color: #231552;">Producten overzicht</h2>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-3 g-4 justify-content-center">
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Bevestigingsmateriaal</div>
                    <img src="/images/bevestigingsmateriaal.jpg" class="product-img" alt="Bevestigingsmateriaal">
                    <a href="/producten" class="custom-btn">More</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Persoonlijke beschermingsmiddelen</div>
                    <img src="/images/beschermingsmiddelen.jpg" class="product-img" alt="Persoonlijke beschermingsmiddelen">
                    <a href="/producten" class="custom-btn">More</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Gereedschap (manueel & elektrisch)</div>
                    <img src="/images/Gereedschap.jpg" class="product-img" alt="Gereedschap">
                    <a href="/producten" class="custom-btn">More</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Technische onderhoudsmaterialen</div>
                    <img src="/images/onderhoudsmaterialen.jpg" class="product-img" alt="Technische onderhoudsmaterialen">
                    <a href="/producten" class="custom-btn">More</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Specifieke Aquafin/riolering gerelateerde tools</div>
                    <img src="/images/tools.jpg" class="product-img" alt="Specifieke tools">
                    <a href="/producten" class="custom-btn">More</a>
                </div>
            </div>
            <div class="col d-flex">
                <div class="card product-card w-100">
                    <div class="product-badge">Diversen / Verbruiksgoederen</div>
                    <img src="/images/verbruiksgoederen.jpg" class="product-img" alt="Verbruiksgoederen">
                    <a href="/producten" class="custom-btn">More</a>
                </div>
            </div>
            @php
                $vaste = [
                    'Bevestigingsmateriaal',
                    'Persoonlijke beschermingsmiddelen',
                    'Gereedschap (manueel & elektrisch)',
                    'Technische onderhoudsmaterialen',
                    'Specifieke Aquafin/riolering gerelateerde tools',
                    'Diversen / Verbruiksgoederen',
                ];
            @endphp
            @if(isset($categories))
                @foreach($categories as $category)
                    @if(!in_array($category->name, $vaste))
                        <div class="col d-flex">
                            <div class="card product-card w-100">
                                <div class="product-badge">{{ $category->name }}</div>
                                <img src="/images/default.png" class="product-img" alt="{{ $category->name }}">
                                <a href="/producten" class="custom-btn">More</a>
                            </div>
                        </div>
                    @endif
                @endforeach
            @endif
        </div>
    </div>
    <!-- FOOTER -->
    <footer class="footer-bg">
        <span class="fw-semibold">© {{ date('Y') }} Aquafin - Alle rechten voorbehouden</span>
    </footer>
</body>

</html>