<div class="product-card {{ $product['amount'] == 0 ? 'out-of-stock' : 'in-stock' }}">
    <h3>{{ $product['name'] }}</h3>
    <p>Цена: {{ $product['cost'] }} руб.</p>
    <p>{{ $product['amount'] > 0 ? 'Количество: ' . $product['amount'] : 'Нет в наличии' }}</p>
</div>
