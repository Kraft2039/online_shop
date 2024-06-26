<!doctype html>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <title>Online shop</title>
</head>
<body>
<div><h3><a href="{{ route('layouts.main') }}">Online Shop</a></h3></div>
<div>
    <nav class="nav">
        <h4><a href="{{ route('categories.index') }}" class="nav-link active">Catalog</a></h4>
        <h5><a href="{{ route('products.create') }}" class="nav-link active">Add product</a></h5>
        <h5><a href="{{ route('purchases.index') }}" class="nav-link active">Report purchases</a></h5>
    </nav>
</div>
<br>
@yield('shop')
</body>
</html>
