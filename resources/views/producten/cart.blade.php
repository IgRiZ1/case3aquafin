<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Winkelmandje</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        html, body {
            height: 100%;
        }
        body {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: #f8f9fa;
        }
        .header-bg, .footer-bg { background: #262a91; color: white; }
        .navbar .navbar-brand img { height: 36px; }
        .navbar-nav .nav-link { color: #fff !important; font-weight: 500; }
        .cart-icon { font-size: 1.6rem; vertical-align: middle; }
        .cart-item {
            background: #e6f0ff; border-radius: 18px;
            box-shadow: 0 6px 16px 0 rgba(46, 70, 119, 0.10);
            border: none; padding: 18px 0 18px 0; margin-bottom: 18px;
            display: flex; align-items: center;
        }
        .cart-img {
            width: 110px; height: 80px; object-fit: contain;
            border-radius: 12px; background: #fff; margin: 0 18px;
        }
        .cart-title { font-weight: 600; font-size: 1.1rem; color: #231552; }
        .stock-label { font-weight: 500; margin-right: 8px; }
        .stock-check { color: #2ecc40; font-size: 1.5rem; vertical-align: middle; }
        .cart-select, .cart-qty {
            border-radius: 8px; border: 1px solid #bbb; padding: 4px 12px;
            margin-right: 10px; min-width: 80px;
        }
        .bestellen-btn {
            background: #231552; color: #fff; border-radius: 16px; border: none;
            box-shadow: 0 2px 8px 0 rgba(35,21,82,0.15);
            padding: 12px 0; font-size: 1.2rem; width: 100%; margin-top: 18px;
        }
        .bestellen-btn:hover { background: #4936b1; color: #fff; }
        .footer-bg {
            min-height: 50px; display: flex; align-items: center;
            justify-content: center; margin-top: 40px;
        }
        .cart-container { max-width: 900px; margin: 0 auto; }
        .cart-label { font-size: 1.05rem; font-weight: 500; }
        .remove-btn {
            color: #dc3545;
            background: none;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            padding: 0 10px;
        }
        .remove-btn:hover {
            color: #bb2d3b;
        }
    </style>
</head>
<body>
    @include('partials.header')
    <div class="cart-container py-4" style="flex:1;">
        <h3 class="mb-4" style="color: #231552;">winkelmandje</h3>
        @forelse($cartItems as $item)
        <div class="cart-item">
            <img src="/images/{{ $item->product->image }}" class="cart-img" alt="{{ $item->product->name }}">
            <div style="flex:1;">
                <div class="cart-title mb-2">{{ $item->product->name }}</div>
                <div class="d-flex align-items-center mb-2">
                    <span class="stock-label">Stock:</span>
                    <span class="stock-check"><i class="bi bi-check2-square"></i></span>
                </div>
            </div>
            <div class="d-flex align-items-center" style="gap: 10px;">
                <select class="cart-select" name="location">
                    <option {{ $item->location == 'Gent' ? 'selected' : '' }}>Gent</option>
                    <option {{ $item->location == 'Antwerpen' ? 'selected' : '' }}>Antwerpen</option>
                    <option {{ $item->location == 'Brussel' ? 'selected' : '' }}>Brussel</option>
                </select>
                <select class="cart-qty" name="quantity">
                    @for($i = 1; $i <= 4; $i++)
                        <option {{ $item->quantity == $i ? 'selected' : '' }}>{{ $i }}</option>
                    @endfor
                </select>
                <form action="{{ route('cart.remove', $item->id) }}" method="POST" style="margin: 0;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="remove-btn">
                        <i class="bi bi-trash"></i>
                    </button>
                </form>
            </div>
        </div>
        @empty
        <div class="text-center py-5">
            <h4>Je winkelwagen is leeg</h4>
            <a href="/producten" class="btn btn-primary mt-3">Bekijk producten</a>
        </div>
        @endforelse

        @if($cartItems->count() > 0)
        <form action="{{ route('cart.order') }}" method="POST">
            @csrf
            <button type="submit" class="bestellen-btn">Bestellen</button>
        </form>
        @endif
    </div>
    <footer class="footer-bg">
        <span class="fw-semibold">© {{ date('Y') }} Aquafin - Alle rechten voorbehouden</span>
    </footer>
</body>
</html> 