@extends('layouts.admin')

@section('content')
	<h1>Добавить игру</h1>
	<form action="{{action('Admin\\AdminPageController@Store')}}" enctype="multipart/form-data">
		{{csrf_field()}}
		<div><input placeholder="Название игры" name="Name"></div>
		<div><input placeholder="Описание игры" name="Description"></div>
		<div><input placeholder="Цена" name="Price"></div>
		<div>картинка <input type="file" name="image"></div>
		<div><input type="submit" value="Сохранить"></div>
	</form>
@endsection