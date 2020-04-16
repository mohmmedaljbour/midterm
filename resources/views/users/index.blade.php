@extends('base')
@section('main')       
@include('users.edit')
@include('users.create')      
        <div><i class="fa fa-fw fa-plus-circle"></i>
            <strong>Add User</strong>
        <a href="{{ route('users.create')}}" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i>Add User</a>
        </div>
        <div>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr class="bg-primary text-white">
                        <th>Sr#</th>
                        <th>User Name</th>
                        <th>User Email</th>
                        <th>User Phone</th>
                        <th class="text-center">Record Date</th>
                        <th class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $users)
                    <tr>
                        <td>{{$users->id}}</td>
                        <td>{{$users->name}}</td>
                        <td>{{$users->email}}</td>
                        <td>{{$users->phone}}</td>
                        <td>{{$users->created_at}}</td>
                        
                        {{-- <td>
                            <a href="{{ route('edit',$users->id)}}" class="btn btn-primary">Edit</a>
                        </td> --}}
                        <td>
                            <form action="edit/{{$users->id}}" method="GIT">
                                @csrf
                              
                                <button type="submit" class="btn btn-outline-primary" >
                                    <i class="fas fa-edit"></i>Edit
                                </button>
                            
                        
                        |
                        {{-- <td>
                            <form action="{{ route('users.destroy', $users->id)}}" method="post">
                              @csrf
                              @method('DELETE')
                              <button class="btn btn-danger" type="submit">Delete</button>
                            </form>
                        </td> --}}

                        
                            <form action="delete/{{$users->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger ">
                                    <i class="fa fa-btn fa-trash"></i>Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
        </div>
    </div>


@endsection