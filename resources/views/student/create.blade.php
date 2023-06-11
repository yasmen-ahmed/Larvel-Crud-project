<!-- <h1>Create Form</h1> -->
@extends('layouts.app')

@section('content')

{!! Form::open(['route' => 'students.store', 'method' => 'post'] ) !!}

<div class="form-group ">
    <label for="exampleInputName">Track Id</label>
    {!! Form::number('trackId',null,['class' => 'form-control']) !!}

</div>
<div class="form-group ">
    <label for="exampleInputName">Name</label>
    {!! Form::text('name',null,['class' => 'form-control']) !!}

</div>

<div class="form-group ">
    <label for="exampleInputName">Age</label>
    {!! Form::number('age',null,['class' => 'form-control']) !!}

</div>


<div class="form-group ">
    <label for="exampleInputName">IDno</label>
    {!! Form::number('IDno',null,['class' => 'form-control']) !!}

</div>




{!! Form::submit('Add Student', ['class' => 'btn btn-success mt-3']) !!}




{!! Form::close() !!}

@endsection