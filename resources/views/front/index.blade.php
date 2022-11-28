@extends('layouts.front')

@section('content')
    <div class="row">
        <div class="col-md-12 grid-margin">
          <div class="d-flex justify-content-between flex-wrap">
            <div class="d-flex align-items-end flex-wrap">
              <div class="me-md-3 me-xl-5">
                <h2>My NFTs</h2>
                <p class="mb-md-0">Your NFTs.</p>
              </div>
            </div>
          </div>
        </div>
        </div>
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
                </div>
              </div>
            </div>
            </div>
            <div class="row">
                <div class="col-md-12 grid-margin">
                  <div class="d-flex justify-content-between flex-wrap">
                    <div class="d-flex align-items-end flex-wrap">
                      <div class="me-md-3 me-xl-5">
                        <table class="table">
                            <thead>
                              <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col">Price</th>
                                <th scope="col">Image</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                                @foreach ($nfts as $nft)
                                <tr>
                                    <td>{{ $nft->name }}</td>
                                    <td>{{ $nft->description }}</td>
                                    <td>{{ $nft->price }}</td>
                                    <td><img src="{{ asset('images/'.$nft->image) }}" alt=""></td>
                                    <td>
                                        <a href="{{ route('front.nfts.show', ['nft' => $nft->id ?? null])}}" class="btn btn-primary">Show</a>
                                        <a href="{{ route('front.buyNft',['nft' => $nft->id ?? null])}}" class="btn btn-warning">Buy</a>
                                       
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                            </table>
                        </div>
                    </div>
                    </div>
                </div>
                </div>
@endsection

