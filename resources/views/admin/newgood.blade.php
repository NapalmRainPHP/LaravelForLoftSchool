@extends('layouts.admin')

@section('content')
	<h1>Добавить игру</h1>
	<form action="{{action('Admin\\AdminPageController@GoodStore')}}" enctype="multipart/form-data" method="post">
		{{csrf_field()}}
		<div><input placeholder="Название игры" name="Name" required></div>
		<div><input placeholder="Описание игры" name="Description" required></div>
		<div><input placeholder="Цена" name="Price" required></div>
		<div>
			<select name="CategoryID">
				@foreach($catlist as $cat)
					<option value="{{$cat->id}}">{{$cat->Title}}</option>
				@endforeach
			</select>
		</div>
		<div>картинка <input type="file" name="image" required></div>
		<div><input type="submit" value="Сохранить"></div>
	</form>
@endsection