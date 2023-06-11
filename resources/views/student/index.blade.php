@extends('layouts.app')

@section('content')


<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">IDno</th>
            <th scope="col">Name</th>
            <th scope="col">Age</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($students as $student)


        <tr>

            <th scope="row">{{$student->id}}</th>
            <td>{{$student->IDno}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->age}}</td>
            <td>
                <a href="{{ route ('students.edit', $student->id)}}" class="btn btn-success">update</a>
            </td>
            <td>
                <!-- <a href="{{ route ('students.edit', $student->id)}}" class="btn btn-danger">delete</a> -->
                <form action=" {{ route ('students.destroy', $student->id)}}" method="post">
                    @csrf
                    @method('delete')
                    <input type="submit" value='delete' class="btn btn-danger">
                </form>
            </td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection