@extends('backend.layout.master')
@section('content')


<main class="app-main"> <!--begin::App Content Header-->
  <div class="app-content-header"> <!--begin::Container-->
      <div class="container-fluid"> <!--begin::Row-->
          <div class="row">
              <div class="col-sm-6">
                  <h3 class="mb-0">Product</h3>
              </div>
              <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-end">
                      <li class="breadcrumb-item"><a href="#">Home</a></li>
                      <li class="breadcrumb-item active" aria-current="page">
                        Product
                      </li>
                  </ol>
              </div>
          </div> <!--end::Row-->
      </div> <!--end::Container-->
  </div> <!--end::App Content Header--> <!--begin::App Content-->
  <div class="app-content">
    <div class="container-fluid">
        <table class = "table table-bordered table-striprd">
          <thead>
            <tr>
              <th>Product Name</th>
              <th>Product Description</th>
              <th>Product Price</th>
              <th>Product Image</th>
               <th>Edit</th> 
            </tr>
          </thead>
       
        <tbody>
          @foreach ($products as $product)
          <tr>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->price }}</td>
               <td><img src="{{asset('backend/assets/img/'.$product->image)}}" width="100px" height="100px"></td> 
              <td>
                <a href="{{ route('edit', $product->id) }}" class="btn btn-primary">Edit</a>
                <a href="{{ route('delete', $product->id) }}" class="btn btn-danger">delete</a>
                
              </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    </div>
  </div>
</main> <!--end::App Main--> <!--begin::Footer-->


@endsection