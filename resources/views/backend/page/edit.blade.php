@extends('backend.layout.master')
@section('content')
<main class="app-main"> <!--begin::App Content Header-->
  <div class="app-content-header"> <!--begin::Container-->
      <div class="container-fluid"> <!--begin::Row-->
          <div class="row">
              <div class="col-sm-6">
                  <h3 class="mb-0">Create</h3>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                      <li class="breadcrumb-item"><a href="#">Create</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Create
                      </li>
                  </ol>
              </div>
          </div> <!--end::Row-->
      </div> <!--end::Container-->
  </div> <!--end::App Content Header--> <!--begin::App Content-->
  <div class="app-content">
    
<form action="{{ url('update', $products->id) }}" method="post" enctype="multipart/form-data">
 @csrf @method('PUT')

<div class="item">
    <label for="">product Name</label>
    <input type="text" name="name" id="name" value="{{ $products->name }}">
</div>
<div class="item">
    <label for="">product Price</label>
    <input type="number" name="price" id="name" value="{{ $products->price }}">
</div>
<div class="item">
    <label for="">product Description</label>
    <input type="text" name="description" id="name" value="{{ $products->description }}">
</div>
 <div class="item">
    <label for="">product Image</label>
    <input type="file" name="image" id="image" value="{{ $products->image }}">
</div> 

<input type="submit" value="Submit">


</form>
  </div>
</main> <!--end::App Main--> <!--begin::Footer-->



@endsection
    
