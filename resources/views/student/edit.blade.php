@extends('layouts.app')

@section('content')

{!! Form::model($student,['route' => ['students.update', $student->id], 'method' => 'put'] ) !!}

<!-- <div class="form-group ">
    <label for="exampleInputName">Track Id</label>
    {!! Form::number('trackId',null,['class' => 'form-control']) !!}

</div> -->
<div class="form-group ">
    <label for="exampleInputName">Name</label>
    {!! Form::text('name',null,['class' => 'form-control']) !!}

</div>

<div class="form-group ">
    <label for="exampleInputName">Age</label>
    {!! Form::number('age',null,['class' => 'form-control']) !!}

</div>


<!-- <div class="form-group ">
    <label for="exampleInputName">IDno</label>
    {!! Form::number('id',null,['class' => 'form-control']) !!}

</div> -->




{!! Form::submit('Update ', ['class' => 'btn btn-primary mt-3']) !!}




{!! Form::close() !!}

@endsection