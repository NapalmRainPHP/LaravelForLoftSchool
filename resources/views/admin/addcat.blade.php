@extends('layouts.admin')

@section('content')
	<h1>Добавить категорию игр</h1>
	<form action="{{action('Admin\\AdminPageController@CatStore')}}" method="post">
		{{csrf_field()}}
		<div><input placeholder="Название категория" name="Name" required></div>
		<div><input placeholder="Описание категории" name="Description" required></div>
		<div><input type="submit" value="Сохранить"></div>
	</form>
@endsection