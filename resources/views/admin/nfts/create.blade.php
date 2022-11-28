@extends('layouts.admin')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
    <h2> {{ session('status') }}</h2>
    </div>
@endif

    <form action="{{route('admin.nfts.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        @csrf
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" name="description" id="description" placeholder="Enter description">
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image" id="image" placeholder="Enter image">
        </div>
        <div class="form-group">
            <label for="price">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
        </div>

        <button type="submit" class="btn btn-primary">Add</button>
    </form>
@endsection

