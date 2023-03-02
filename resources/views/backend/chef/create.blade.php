@extends('layouts.backend')
@section('title', 'Add Chef')
@section('content')
  <div class="container-fluid page__heading-container">
    <div class="page__heading d-flex align-items-end">
      <div class="flex">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chefs</li>
          </ol>
        </nav>
        <h1 class="m-0">Chefs</h1>
      </div>
    </div>
  </div>
  <section>
    <div class="container-fluid" >
      <div class="row justify-content-center" >
        <div class="col-lg-8" >
          <div class="card">
            <div class="card-header">
              <h1 class="text-center ">Add Chef</h1>
            </div>
            <div class="card-body">
              <form action="{{ route('backend.chef.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class=" form-group">
                  <b>Name:</b>
                  <input type="text" name="name" class=" form-control text-white" placeholder="Enter Chef Name">
                </div>
                <div class=" form-group">
                  <b>Email:</b>
                  <input type="text" name="email" class=" form-control text-white" placeholder="Enter Chef Email">
                </div>
                <div class=" form-group">
                  <b>Phone:</b>
                  <input type="number" name="phone" class=" form-control text-white" placeholder="Enter Chef Phone">
                </div>
                <div class=" form-group">
                  <b>Chef ID:</b>
                  <input type="number" name="chef_id" class=" form-control text-white" placeholder="Enter Chef Id">
                </div>
                <div class=" form-group">
                  <b>Designation:</b>
                  <input type="text" name="designation" class=" form-control text-white" placeholder="Enter Chef Designation">
                </div>

                <div class=" form-group">
                  <b>Photo:</b>
                  <input type="file" name="photo" class=" form-control text-white">
                </div>
                <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
