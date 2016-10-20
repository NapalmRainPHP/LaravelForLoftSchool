@section('topcontent')
<div class="content-top">
	<div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
	<div class="slider"><img src="{{url('img/slider.png')}}" alt="Image" class="image-main"></div>
</div>
<div class="content-middle">
	<div class="content-head__container">
		<div class="content-head__title-wrap">
			<div class="content-head__title-wrap__title bcg-title">Последние товары</div>
		</div>
		<div class="content-head__search-block">
			<div class="search-container">
				<input type="text" class="search-container__form__input" id="InputForSeader">
				<button class="search-container__form__btn" onclick="goSearch()">search</button>
				<script>
					function goSearch(e) {
//						e.preventDefault();
						var s = $('#InputForSeader')[0].value;
						location.href = '{{url('/search/')}}/'+s;
					}
				</script>
			</div>
		</div>
	</div>
</div>
@endsection