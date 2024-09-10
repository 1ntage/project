<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div class="products-container">
    @foreach ($products as $product)
        @include('components.product-card', ['product' => $product])
    @endforeach
</div>
</body>
</html>