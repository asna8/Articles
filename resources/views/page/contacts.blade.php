


 <@extends('master') 

 @section('footer') 

 <h1>Contact me!!</h1> 

@foreach($people as $p)

<li>
<?=$p;
?>
</li>

@endforeach
<script> alert('Beware of coachings !!');
</script>

@stop-->
