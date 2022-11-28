@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="d-flex justify-content-between flex-wrap">
        <div class="d-flex align-items-end flex-wrap">
          <div class="me-md-3 me-xl-5">
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                <h2> {{ session('status') }}</h2>
                </div>
            @endif
          </div>
         <form  action="{{route('admin.nfts.update')}}"  method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            @csrf
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="Enter name" value = {{$nft->name}}>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" name="description" id="description" placeholder="Enter description" value= {{$nft->description}}>
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" class="form-control" name="image" id="image" placeholder="Enter image">
            </div>
            <div class="form-group">
                <label for="price">Price</label>
                <input type="text" class="form-control" name="price" id="price" placeholder="Enter price" value= {{$nft->price}}>
            </div>
            
            <button type="submit" class="btn btn-primary">Edit</button>
        </form>
      </div>
    </div>
    </div>
        
@endsection
