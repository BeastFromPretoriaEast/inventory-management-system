@extends('admin.admin_master')

@section('admin')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Change Password Page</h4>
                    <br>
                    <br>

                    @if(count($errors))
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger alert-dismissible fade show"> {{ $error}} </p>
                        @endforeach
                    @endif

                    <form action="{{ route('update.password') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Old Password</label>
                            <div class="col-sm-10">
                                <input name="oldpassword" id="oldpassword" type="password" value="" class="form-control" placeholder="Old Password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                                <input name="newpassword" id="newpassword" type="password" value="" class="form-control" placeholder="New Password">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Confirm Password</label>
                            <div class="col-sm-10">
                                <input name="confirm_password" id="confirm_password" type="password" value="" class="form-control" placeholder="Confirm Password">
                            </div>
                        </div>

                        <input type="submit" value="Change Password" class="btn btn-info waves-effect waves-light">

                    </form>

                </div>
            </div>
        </div> <!-- end col -->
    </div>


@endsection
