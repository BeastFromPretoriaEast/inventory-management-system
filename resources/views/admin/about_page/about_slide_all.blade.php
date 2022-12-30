@extends('admin.admin_master')

@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">About Page</h4>

                    <form action="{{ route('update.about') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <input name="id" type="hidden" value="{{ $aboutpage->id }}">

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" id="title" type="text" value="{{ $aboutpage->title }}" class="form-control" placeholder="Title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                            <div class="col-sm-10">
                                <input name="short_title" id="short_title" type="text" value="{{ $aboutpage->short_title }}" class="form-control" placeholder="Short Title">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Description</label>
                            <div class="col-sm-10">
                                <textarea name="short_description" id="short_description" class="form-control" placeholder="Short Description">{{ $aboutpage->short_description }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Long Description</label>
                            <div class="col-sm-10">
                                <textarea id="elm1" name="long_description">{{ $aboutpage->long_description }}</textarea>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">About Image</label>
                            <div class="col-sm-10">
                                <input name="about_image" id="image" type="file" class="form-control" placeholder="Profile image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($aboutpage->about_image)) ? url($aboutpage->about_image) : url('upload/no_image.jpg') }}" alt="Card image cap">
                            </div>
                        </div>

                        <input type="submit" value="Update About Page" class="btn btn-info waves-effect waves-light">

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
