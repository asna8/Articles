@extends('app')

@section('content')
<a href="#">
<h2 style="color:brown ; text-align:left">  {!!$demos->Univ_Rollno!!}</h2>
</a>
<br>
<b style="color:green; font-size:24px">
Name : {!!$demos->Name!!}<br>
Branch : {!!$demos->Branch!!}<br>
Year : {!!$demos->Year!!}<br>
</b>
@stop