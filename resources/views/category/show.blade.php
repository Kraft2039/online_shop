@extends('layouts.main')
@section('shop')
	<div>
		<nav aria-label="breadcrumb">
  			<ol class="breadcrumb">
    			<li class="breadcrumb-item active" aria-current="page">{{ $category->name_cat }}</li>
  			</ol>
		</nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div><h5>{{ $category->name_cat }}</h5></div>
                <ul class="nav flex-column">
                    @foreach($l2_categories as $l2_category)
                        <h5><li class="nav-link"><a href="{{ route('l2_categories.show', $l2_category->id) }}">{{ $l2_category->name_cat }}</a></li></h5>
                    @endforeach
                </ul>
            </div>
        </div>
	</div>
@endsection
