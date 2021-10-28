@extends('layout.main')

@section('title','Add New Data')

@section('content')
<div class="container">
    <h1>Add New Data</h1>
    <hr>
    <form action ="/save">
        {{csrf_field()}}
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="title" aria-describedby="title" placeholder="Enter Title">
            
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" name="description" class="form-control" id="description" placeholder="Enter Description">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


@endsection