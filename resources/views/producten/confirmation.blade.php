<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bestelling ontvangen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f8f9fa; }
        .confirmation-box {
            background: #e6f0ff;
            border-radius: 18px;
            box-shadow: 0 6px 16px 0 rgba(46, 70, 119, 0.10);
            padding: 48px 32px;
            max-width: 500px;
            margin: 80px auto 0 auto;
            text-align: center;
        }
        .confirmation-title {
            color: #231552;
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 18px;
        }
        .confirmation-msg {
            font-size: 1.2rem;
            color: #333;
            margin-bottom: 24px;
        }
        .btn-home {
            background: #231552; color: #fff; border-radius: 16px; border: none;
            box-shadow: 0 2px 8px 0 rgba(35,21,82,0.15);
            padding: 10px 32px; font-size: 1.1rem;
        }
        .btn-home:hover { background: #4936b1; color: #fff; }
    </style>
</head>
<body>
    <div class="confirmation-box">
        <div class="confirmation-title">Bedankt voor je bestelling!</div>
        <div class="confirmation-msg">
            Je bestelling is succesvol ontvangen en wordt zo snel mogelijk verwerkt.<br>
            Je ontvangt binnenkort een bevestiging per e-mail.<br>
            <b>Je producten zijn onderweg!</b>
        </div>
        <a href="/producten" class="btn btn-home">Terug naar producten</a>
    </div>
</body>
</html> 