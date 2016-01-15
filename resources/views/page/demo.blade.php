@extends('app');

@section('content');


<pre>
<h1 style = "color:golds ; font-family :garamond ; text-align:center">Welcome</h1>             
Username : <?= $data['username']; ?><br>
Password : <?= $data['password']; ?>
</pre>
@stop