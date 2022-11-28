@extends('layouts.admin')

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
            <h2>{{ $nft->name }}</h2>
            <p class="mb-md-0">Description: {{ $nft->description }}</p>
            <p class="mb-md-0">Price: {{ $nft->price }}</p>
            <p class="mb-md-0">Owner: {{ $nft->user->email }}</p>
            <p class="mb-md-0">Image: <img src="{{ asset('image/'.$nft->image) }}" alt=""></p>
          </div>
        </div>
      </div>
    </div>
    </div>



@endsection

