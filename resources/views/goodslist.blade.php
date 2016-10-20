@extends('layouts.main')
@if(isset($game))
	@section('content')
		<div class="content-head__container">
			<div class="content-head__title-wrap">
				<div class="content-head__title-wrap__title bcg-title">{{$game->Title}} в разделе {{$category}}</div>
			</div>
			<div class="content-head__search-block">
				<div class="search-container">
					<form class="search-container__form">
						<input type="text" class="search-container__form__input">
						<button class="search-container__form__btn">search</button>
					</form>
				</div>
			</div>
		</div>
		<div class="content-main__container">
			<div class="product-container">
				<div class="product-container__image-wrap"><img src="{{url('img/cover/'.$game->Image)}}" class="image-wrap__image-product"></div>
				<div class="product-container__content-text">
					<div class="product-container__content-text__title">{{$game->Title}}</div>
					<div class="product-container__content-text__price">
						<div class="product-container__content-text__price__value">
							Цена: <b>{{$game->Price}}</b>
							руб
						</div><a href="#" class="btn btn-blue">Купить</a>
					</div>
					<div class="product-container__content-text__description">
						<p>
							{{$game->Description}}
						</p>
					</div>
				</div>
			</div>
		</div>
	@endsection
@else
	@include('layouts.topcontent')

	@section('content')
		<div class="content-main__container">
			<div class="products-columns">
				@foreach($goods AS $good)
					<div class="products-columns__item">
						<div class="products-columns__item__title-product"><a href="{{url('games/'.$good->id)}}" class="products-columns__item__title-product__link">{{$good->Title}}</a></div>
						<div class="products-columns__item__thumbnail"><a href="{{url('games/'.$good->id)}}" class="products-columns__item__thumbnail__link"><img src="{{url('img/cover/'.$good->Image)}}" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
						<div class="products-columns__item__description"><span class="products-price">{{$good->Price}} руб</span><a href="#" class="btn btn-blue">Купить</a></div>
					</div>
				@endforeach
			</div>
		</div>
	@endsection
@endif