@extends('layouts.main')
@section('shop')
    <div>
        <form action="{{ route('categories.index') }}">
            <select name="price">
                <option></option>
                <option value="asc">По возрастанию цены</option>
                <option value="desc">По убыванию цены</option>
            </select>
            <input type="submit" value="Sort" onClick="this.form">
        </form>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <ul class="nav flex-column">
                    @foreach ($categories as $category)
                        <li class="nav-link"><h5><a
                                    href="{{ route('categories.show', $category->id) }}">{{ $category->name_cat }}</a>
                            </h5></li>
                        <ul>
                            @foreach ($l2_categories as $l2_category)
                                @if($l2_category->category_id == $category->id)
                                    <li class="nav-link"><h5><a
                                                href="{{ route('l2_categories.show', $l2_category->id) }}">{{ $l2_category->name_cat }}</a>
                                        </h5></li>
                                @endif
                                <ul>
                                    @foreach ($l3_categories as $l3_category)
                                        @if($l3_category->l2_category_id == $l2_category->id && $l2_category->category_id == $category->id)
                                            <li class="nav-link"><h5><a
                                                        href="{{ route('l3_categories.show', $l3_category->id) }}">{{ $l3_category->name_cat }}</a>
                                                </h5></li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endforeach
                        </ul>
                    @endforeach
                </ul>
            </div>

            <div class="col-sm-7">
                <div class="row">
                    @foreach($products as $product)
                        <div class="col-sm-4">
                            <div class="card">
                                <form action="{{ route('purchases.store') }}" method="post">
                                    @csrf
                                    <div class="card-body">
                                        <input type="hidden" name="product_id" value="{{ $product->id }}">
                                        <h6><a href="{{ route('products.edit', $product->id) }}">Change</a></h6>
                                        <h6 class="card-title">{{ $product->id }}</h6>
                                        <h5 class="card-title">{{ $product->name_prod }}</h5>
                                        <h5 class="card-title">{{ $product->price }}</h5>
                                        <button type="submit" class="btn btn-primary">Buy</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
