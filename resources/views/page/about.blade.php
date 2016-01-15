
@extends('master')

@section('contents')

<h1>
@if($name=='Asna')
About Me!!<br>
Hi !!!<br>
This is {!! $name !!}
and i m in {!!$yr!!} yr
@else
{
Wrong input
}
@endif
<img src="http://www.gettyimages.ca/gi-resources/images/Homepage/Category-Creative/UK/UK_Creative_462809583.jpg" alt="Can't display">

</h1>

@stop
