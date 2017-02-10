@extends('news.master')

@section('header')
    <h1><em>This is the content of <u>the news</u></em></h1>
@endsection


@section('content')
    <h2><u>{{$news->header}}</u></h2>
    <h2><u>{{$news->body}}</u></h2>
@endsection


@section('footer')
    <form action="/news/{{$news->id}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <input type="hidden" name="_method" value="delete">
        <input type="submit" value="Delete">
    </form>
    <form action="/news/{{$news->id}}" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"/>
        <div><input type="hidden" name="_method" value="put"></div>
        <div><input type="text" name="header" value="{{$news->header}}"></div>
        <textarea name="body" cols="30" rows="10">{{$news->body}}</textarea>
        <input type="submit" value="Edit">
    </form>
@endsection
