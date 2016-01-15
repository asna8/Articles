@extends('app')
@section('content')
<style>
.container
{
   font-size : 24px;
   text-align:left;
   font-family:oblique;
}
</style>
<div class='container'>
<a href='#'>
<b>{{$article->title}}</a>
<br>
{{$article->body}}
<br>
{{$article->published_at}}
<br>
<br>
</b>
</div>

@stop