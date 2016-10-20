@extends('layouts.main')
@extends('layouts.topcontent')

@section('content')
	<div class="content-main__container">
		<div class="products-columns">
			@foreach($goods AS $good)
			<div class="products-columns__item">
				<div class="products-columns__item__title-product"><a href="#" class="products-columns__item__title-product__link">{{$good->Title}}</a></div>
				<div class="products-columns__item__thumbnail"><a href="games/{{$good->id}}" class="products-columns__item__thumbnail__link"><img src="img/cover/{{$good->Image}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
				<div class="products-columns__item__description"><span class="products-price">{{$good->Price}} руб</span><a href="#" class="btn btn-blue">Купить</a></div>
			</div>
			@endforeach
		</div>
	</div>
@endsection