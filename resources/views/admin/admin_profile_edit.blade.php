@extends('admin.admin_master')

@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">Edit profile</h4>

                <form action="{{ route('store.profile') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Name</label>
                        <div class="col-sm-10">
                            <input name="name" id="name" type="text" value="{{ $editData->name }}" class="form-control" placeholder="Name">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input name="email" id="email" type="text" value="{{ $editData->email }}" class="form-control" placeholder="Email">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-10">
                            <input name="username" id="username" type="text" value="{{ $editData->username }}" class="form-control" placeholder="Username">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Profile Image</label>
                        <div class="col-sm-10">
                            <input name="profile_image" id="image" type="file" class="form-control" placeholder="Profile image">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                            <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($editData->profile_image)) ? url('upload/admin_images/' . $editData->profile_image) : url('upload/no_image.jpg') }}" alt="Card image cap">
                        </div>
                    </div>

                    <input type="submit" value="Update Profile" class="btn btn-info waves-effect waves-light">

                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>



<script type="text/javascript">
    $(document).ready(function() {
        $('#image').change(function(e) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(e.target.files[0]);
        });
    });
</script>

@endsection
