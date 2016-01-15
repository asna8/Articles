@extends('app')
@section('content')


	
}
{!! Form::Open(['url'=>'article'])!!}
<pre style="font-style:oblique" >
<h1><b>	 	---- Write a new article ----</b></h1>
</pre>
<div class="form-group">
{!! Form::label('title','Title:')!!}

{!! Form::text('title',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('body','Body:')!!}

{!! Form::textarea('body',null,['class'=>'form-control'])!!}
</div>


<div class="form-group">

{!! Form::submit(' Add Record ',['class'=>'btn btn-primary form-control'])!!}
</div>


{!! Form::Close()!!}

@stop