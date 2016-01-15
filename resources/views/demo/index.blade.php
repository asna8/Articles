@extends('app')

@section('content')

<h1 style="color:blue ; text-align:center">  Student's Record </h1>
<hr>
@foreach($demos as $d)

<li style="font-size:20px">
<b>
<a href="/mylaravel/public/index/{{$d->id}}">
{{$d->Univ_Rollno}}
</a>
<br>
<?=$d->Name;
?>
</b>
</li>

@endforeach

@stop