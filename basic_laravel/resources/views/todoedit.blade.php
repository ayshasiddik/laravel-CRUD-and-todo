@extends('layouts.guest')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8 shadow  pl-6 mb-5 bg-body rounded">
            
                  <form action="{{ url('/todo/edit') }}/{{ $todo->id }}" method="POST">

                      @csrf
                      <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">Data</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your data" name='info' value="{{ $todo->date }}">
                       
                      </div>
                      <div class="button pb-2">
                      <button type="submit" class="btn btn-primary ">update</button>
                      
                     
                     </div>
                    </form>
        </div>
    </div>
</div>
    
@endsection