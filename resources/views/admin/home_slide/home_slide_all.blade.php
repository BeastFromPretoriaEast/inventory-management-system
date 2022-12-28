@extends('admin.admin_master')

@section('admin')
    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">Home Slide Page</h4>

                    <form action="{{ route('store.profile') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input name="title" id="title" type="text" value="{{ $homeslide->title }}" class="form-control" placeholder="Name">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Short Title</label>
                            <div class="col-sm-10">
                                <input name="short_title" id="short_title" type="text" value="{{ $homeslide->short_title }}" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Video Url</label>
                            <div class="col-sm-10">
                                <input name="video_url" id="video_url" type="text" value="{{ $homeslide->video_url }}" class="form-control" placeholder="Username">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label">Slider Image</label>
                            <div class="col-sm-10">
                                <input name="home_slide" id="image" type="file" class="form-control" placeholder="Profile image">
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="example-text-input" class="col-sm-2 col-form-label"></label>
                            <div class="col-sm-10">
                                <img id="showImage" class="rounded avatar-lg" src="{{ (!empty($homeslide->home_slide)) ? url('upload/home_slide/' . $homeslide->home_slide) : url('upload/no_image.jpg') }}" alt="Card image cap">
                            </div>
                        </div>

                        <input type="submit" value="Update Slide" class="btn btn-info waves-effect waves-light">

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
