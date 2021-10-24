@extends('admin.layouts.master')

@section('content')

		<!-- Page Title Header Starts-->
	    <div class="row page-title-header">
	       	<div class="col-12">
	         	<div class="page-header">
	            	<h4 class="page-title">Add Pharmacy</h4>
	          	</div>
	        </div>
	    </div>
	    <!-- Page Title Header Ends-->

        <div class="row">
          <div class="col-md-8 grid-margin">
            <div class="card">
              <div class="card-body">
                @include('admin.partials.messages')
                <form class="forms-sample" action="{{ route('pharmacy.add') }}" method="post" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="exampleInputName1">Name</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Address</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="address" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Email</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="email" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Website(optional)</label>
                    <input type="text" class="form-control" id="exampleInputName1" name="website" placeholder="Name">
                  </div>
{{--                  <div class="form-group">--}}
{{--                    <label for="exampleTextarea1">Description</label>--}}
{{--                    <textarea class="form-control" id="exampleTextarea1" rows="4" name="description"></textarea>--}}
{{--                  </div>--}}
                  <button type="submit" class="btn btn-success mr-2">Add</button>
                  <button class="btn btn-light"><a href="{{route('pharmacy.create')}}">Cancel</a></button>
                </form>
              </div>
            </div>
          </div>
        </div>

@endsection
