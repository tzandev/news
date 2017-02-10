@extends('news.master')

@section('header')
<h1>This is the content of all news:</h1>
@stop

@section('content')
    @foreach($news as $one)
        <h2><a href="/news/{{$one->id}}"><em>{{$one->header}}</em></a></h2>
    @endforeach
@stop

@section('footer')
    <a href="/news/create">Add new</a>
@stop

