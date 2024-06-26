@extends('layouts.main')
@section('shop')
	<div>
		<form action="{{ route('products.store') }}" method="post">
			@csrf
		  	<div class="form-group">
			    <label for="name_prod">Имя товара</label>
			    <input type="text" name="name_prod" class="form-control" id="name_prod" placeholder="Name_prod">
			    <label for="price">Цена</label>
			    <input type="text" name="price" class="form-control" id="price" placeholder="Price">
			    <label for="l2_category_id">Категория2</label>
                <select class="form-control" id="l2_category_id" name="l2_category_id">
                    <option></option>
                    @foreach($l2_categories as $l2_category)
                        <option value='{{ $l2_category->id }}'>{{ $l2_category->name_cat }}</option>
                    @endforeach
                </select>
			    <label for="l3_category_id">Категория3</label>
                <select class="form-control" id="l3_category_id" name="l3_category_id">
                    <option></option>
                    @foreach($l3_categories as $l3_category)
                        <option value='{{ $l3_category->id }}'>{{ $l3_category->name_cat }}</option>
                    @endforeach
                </select>
		  	</div>
		  	<button type="submit" class="btn btn-primary">Добавить</button>
		</form>
	</div>
@endsection
