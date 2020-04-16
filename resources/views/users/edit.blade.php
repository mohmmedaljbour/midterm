@extends('base') 
@section('main')

        <div class="card">

            <div class="card-header"><i class="fa fa-fw fa-plus-circle"></i>
                <strong>Add User</strong>
            <a href="{{ route('users.update', $users->id) }}" class="float-right btn btn-dark btn-sm"><i class="fa fa-fw fa-globe"></i> Browse Users</a>
            </div>

            <div class="card-body">
                <div class="col-sm-6">
                    <h5 class="card-title">Fields with <span class="text-danger">*</span> are mandatory!</h5>
                    

                    <form  action="update/{{($users->id)}}" method="post">
                        @method('PATCH') 
                        @csrf                        
                        <div class="form-group">
                            <label>User Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" placeholder="Enter user name" 
                            required="" value={{ $users->name }} >
                        </div>

                        <div class="form-group">
                            <label>User Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" placeholder="Enter user email"
                             required="" value={{ $users->email }}>
                        </div>

                        <div class="form-group">
                            <label>User Phone <span class="text-danger">*</span></label>
                            <input type="tel" pattern=".{14,14}" title="Accept US Number format (888) 888-8888"
                             class="tel form-control" name="phone"  x-autocompletetype="tel" 
                             placeholder="Enter user phone" required="" value={{ $users->phone }}>
                        </div>

                        <div class="form-group">
                            <label>Record Date <span class="text-danger">*</span></label>
                            <input type="text" name="created_at" class="form-control"  
                            required="" value={{ $users->created_at }} >
                        </div>

                        <div class="form-group">
                            <button type="submit" name="submit" value="submit"  class="btn btn-primary">
                                <i class="fa fa-fw fa-plus-circle"></i> Update</button>
                                
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endsection