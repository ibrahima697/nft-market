@extends('layouts.front')

@section('content')
@if (session('status'))
    <div class="alert alert-success" role="alert">
    <h2> {{ session('status') }}</h2>
    </div>
@endif
        <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>Buy this NFT</h2>
                    <form action="{{route('front.buyNft')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        @csrf
                       <input type="hidden" name="nft_id" value="{{$nft->id}}">
                        <div class="form-group mt-3">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" name="name" id="name"  value = {{$nft->name ??null}}>
                        </div>
                        <div class="form-group mt-3">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" name="description" id="description" value= {{$nft->description}}>
                        </div>
                        <div class="form-group mt-3">
                            <label for="image">Image</label>
                             <img src="{{ asset('/admin/images'.$nft->image) }}" alt="" value="{{$nft->image}}">
                        </div>
                        <div class="form-group mt-3">
                            <label for="price">Price</label>
                            <input type="text" class="form-control" name="price" id="price"value= {{$nft->price}}>
                        </div>
                        <div class="form-group mt-3">
                            <label for="owner">Creator</label>
                            <input type="text" class="form-control" name="creator" id="owner"  value= {{$nft->creator}}>
                        </div>
                        <div class="form-group mt-3">
                            <label for="buyer">Owner</label>
                            <input type="text" class="form-control" name="owner" id="owner" placeholder="" value= {{$nft->owner}}>
                        </div>
                        <div class="form-group mt-3">
                            <label for="buyer">Category</label>
                            <input type="text" class="form-control" name="owner" id="owner" placeholder="" value= {{$nft->category}}>
                        </div>
                        <div class="form-group mt-3">
                            <label for="buyer">Standard</label>
                            <input type="text" class="form-control" name="attributes" id="attributes" placeholder="" value= {{$nft->attributes}}>
                        </div>
                        <button type="submit" class="btn btn-primary mt-3">Buy</button>
                      
                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
@endsection

