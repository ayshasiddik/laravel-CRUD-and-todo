@extends('layouts.guest')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <table class="table table-dark">
               
                <thead>
                  <tr>
                
                    <th scope="col">Serial</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($profiles as $profile)
                    <tr>
                        <th >{{$loop->iteration}}</th>
                        <td>{{$profile->name}}</td>
                        <td>{{$profile->email}}</td>
                        <td>{{$profile->phone_number}}</td>
                        <td>
                            <a href="{{ url('/edit')}}/{{$profile->id}}" class="btn btn-info">Edit</a>
                            <a href="{{ url('/destroy')}}/{{$profile->id}}" class="btn btn-danger">Delet</a>
    
                        </td>
                      </tr>
                
                    @endforeach
               
                
                </tbody>
              </table>
        </div>
    </div>
</div>

@endsection