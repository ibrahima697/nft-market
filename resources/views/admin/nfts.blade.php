
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
            <p class="mb-md-0">Your analytics dashboard template.</p>
          </div>
          <div class="d-flex">
            <i class="mdi mdi-home text-muted hover-cursor"></i>
            <p class="text-muted mb-0 hover-cursor">&nbsp;/&nbsp;Dashboard&nbsp;/&nbsp;</p>
            <p class="text-primary mb-0 hover-cursor">Analytics</p>
          </div>
        </div>
        <div class="d-flex justify-content-between align-items-end flex-wrap">
          <button type="button" class="btn btn-light bg-white btn-icon me-3 d-none d-md-block ">
            <i class="mdi mdi-download text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-clock-outline text-muted"></i>
          </button>
          <button type="button" class="btn btn-light bg-white btn-icon me-3 mt-2 mt-xl-0">
            <i class="mdi mdi-plus text-muted"></i>
          </button>
          <button class="btn btn-primary mt-2 mt-xl-0">Generate report</button>
        </div>
      </div>
    </div>

    <div class="col-md-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="d-flex justify-content-between">
            <h4 class="card-title mb-0">NFTs</h4>
            <div>
              <button type="button" class="btn btn-primary btn-icon-text btn-rounded">
                <i class="btn-icon-prepend" data-feather="plus"></i>
                Add NFT
              </button>
            </div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Owner</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                        <img src="https://via.placeholder.com/36x36" alt="profile image">
                        </td>
                        <td>John Doe</td>
                        <td>
                        <label class="badge badge-gradient-success">Approved</label>
                        </td>
                        <td>
                        <label class="badge badge-gradient-warning">Pending</label>
                        </td>
                        <td>
                        <i class="mdi mdi-dots-horizontal text-muted"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="https://via.placeholder.com/36x36" alt="profile image">
                        </td>
                        <td>John Doe</td>
                        <td>
                        <label class="badge badge-gradient-success">Approved</label>
                        </td>
                        <td>
                        <label class="badge badge-gradient-warning">Pending</label>
                        </td>
                        <td>
                        <i class="mdi mdi-dots-horizontal text-muted"></i>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <img src="https://via.placeholder.com/36x36" alt="profile image">
                        </td>
                        <td>John Doe</td>
                        <td>
                        <label class="badge badge-gradient-success">Approved</label>
                        </td>
                        <td>
                        <label class="badge badge-gradient-warning">Pending</label>
                        </td>
                        <td>
                        <i class="mdi mdi-dots-horizontal text-muted"></i>
                        </td>
                    </tr>

                    </tbody>        

                </table>

            </div>          
        </div>  
        </div>  
        </div>

@endsection

