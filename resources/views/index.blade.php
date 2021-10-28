@extends('layout.main')

@section('title','Laravel CRUD')

@section('content')
    <div class="container">

    <h1>Laravel CRUD</h1>
    <hr>
    <a href="/create"class="btn btn-primary mb-1 mt-1">Add New Data</a>

        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Description</th>
                
                </tr>
            </thead>
            <tbody>

                @foreach ($book as $books)
                <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$books->title}}</td>
                <td>{{$books->description}}</td>
                <td>
                    <a href="/edit/{{$books->id}}"class="btn btn-success">Edit</a>
                    <a href="/hapus/{{$books->id}}"class="btn btn-danger">Delete</a>
                </td>
                </tr>
                @endforeach
                
        </tbody>
    </table>
    
    </div>

@endsection