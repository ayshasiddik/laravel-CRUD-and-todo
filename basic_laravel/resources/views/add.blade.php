@extends('layouts.guest')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 shadow  pl-6 mb-5 bg-body rounded">
          @if (session('Success'))
            <div class="alert alert-success mt-3" role="alert">
              <h5>{{ session('Success') }}</h5>
            </div>
            
            
          @endif
            <form action="{{ url('/add') }}" method="POST">
                @csrf
                <div class="mb-3 ">
                  <label for="exampleInputEmail1" class="form-label">User name</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your name" name='name'
                  value="{{ old("name")}}">
                 
                </div>
                @error("name")
                  <p class="text-danger">{{ $message }}</p>
                @enderror
                <div class="mb-3 ">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter your email" name='email'
                    value="{{ old("email")}}">
                   
                  </div>
                  @error("email")
                  <p class="text-danger">{{ $message }}</p>
                @enderror
                  <div class="mb-3 ">
                  <label for="exampleInputEmail1" class="form-label">Phone number</label>
                  <input type="tel" class="form-control" id="exampleInputEmail1" placeholder="Enter your phone number" name='phone'
                  value="{{ old("phone")}}">
                 
                </div>
                @error("phone")
                <p class="text-danger">{{ $message }}</p>
              @enderror
               <div class="button pb-2">
                <button type="submit" class="btn btn-primary ">Submit</button>
                <a href="{{url('/list')}}" class="btn btn-info">Go list</a>
               </div>
              </form>
        </div>
    </div>
</div>

@endsection