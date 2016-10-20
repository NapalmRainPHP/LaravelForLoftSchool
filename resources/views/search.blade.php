@extends('layouts.main')
@include('layouts.topcontent')

@section('content')
	<div class="content-main__container">
		<div class="products-columns">
			@foreach($list AS $good)
			<div class="products-columns__item">
				<div class="products-columns__item__title-product"><a href="{{url('games/'.$good->id)}}" class="products-columns__item__title-product__link">{{$good->Title}}</a></div>
				<div class="products-columns__item__thumbnail"><a href="{{url('games/'.$good->id)}}" class="products-columns__item__thumbnail__link"><img src="{{url('img/cover/'.$good->Image)}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
				<div class="products-columns__item__description"><span class="products-price">{{$good->Price}} руб</span><a href="#" class="btn btn-blue">Купить</a></div>
			</div>
			@endforeach
		</div>
	</div>
@endsection