@extends('app')
@section('content')

<h1 style="text-align:center"><u><b>My Articles</u></h1>
@foreach($article as $a)
<li>
<a href="/mylaravel/public/article/{{$a->id}}">
<b>{{$a->title}}</b></a>
<br>
<!-- {{$a->body}} -->
<br>
<!-- {{$a->published_at}} -->
<br>
<br>
</li>
@endforeach
@stop