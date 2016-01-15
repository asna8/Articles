@extends('app')

@section('content')

<h1> Enter a new record</h1>

{!! Form::Open(['url'=>'index'])!!}

<div class="form-group">
{!! Form::label('rollno','Univ_Rollno:')!!}

{!! Form::text('rollno',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('name','Name:')!!}

{!! Form::text('name',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">
{!! Form::label('branch','Branch:')!!}

{!! Form::text('branch',null,['class'=>'form-control'])!!}
</div>

<div class="form-group">

{!! Form::submit(' Add Record ',['class'=>'btn btn-primary form-control'])!!}
</div>


{!! Form::Close()!!}

@stop