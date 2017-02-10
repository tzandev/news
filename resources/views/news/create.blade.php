@extends('news.master')

@section('content')
    <form method="post" action="/news/create">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="header" placeholder="Type the title">
        <div><textarea name="body" id="" cols="30" rows="10" placeholder="type the body"></textarea></div>
        <input type="submit" value="Submit">
    </form>
@endsection