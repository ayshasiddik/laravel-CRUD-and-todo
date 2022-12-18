@extends('layouts.guest')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8 shadow  pl-6 mb-5 bg-body rounded">
                
                      <form action="{{ url('/todo') }}" method="POST">

                          @csrf
                          <div class="mb-3 ">
                            <label for="exampleInputEmail1" class="form-label">Data</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter your data" name='data'>
                           
                          </div>
                          <div class="button pb-2">
                          <button type="submit" class="btn btn-primary ">Submit</button>
                         
                         </div>
                        </form>
                        <br>
                        <br>

                        <table class="table table-dark">
               
                            <thead>
                              <tr>
                            
                                <th scope="col">Serial</th>
                                <th scope="col">Data</th>
                                
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($datas as $data)
                              <tr>
                               <th >{{ $loop->iteration }}</th>
                                <td>{{ $data->date }}</td>
                               
                                <td>
                                    <a href="{{ url('/todo/edit')}}/{{ $data->id }} " class="btn btn-info">Edit</a>
                                    <a href="{{ url('/todo/delet')}}/{{ $data->id }} " class="btn btn-danger">Delet</a>
            
                                </td>
                              </tr>
                              @endforeach 
                               
                            
                                
                         
                            
                            </tbody>
                          </table>
                    </div>
                </div>
            </div>
            
            @endsection
                  '>'
      