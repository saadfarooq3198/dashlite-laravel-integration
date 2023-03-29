@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Home Page</h5>
            </div>
            {{-- <h6 class="card-title">section 1</h6> --}}
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="home">
                <div class="row g-4">
                    {{-- <div class="col-lg-2">
                        <label class="form-label" for="customFileLabel">Upload Banner</label>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="banner" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br> --}}
                    
                    {{-- section 1 --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_one_heading"
                                    value="{{settings('home', 'section_one_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-I Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_one_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_one_description" class="form-control summernote" data-feature="all">{!! settings('home', 'section_one_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 2 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-II heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_two_heading"
                                    value="{{settings('home', 'section_two_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-II Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_two_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-II description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_two_description" class="form-control summernote" data-feature="all">{!! settings('home', 'section_two_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    {{-- section 3 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-III heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_three_heading"
                                    value="{{settings('home', 'section_three_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-III Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_three_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-III description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_three_description" class="form-control summernote" data-feature="all">{!! settings('home', 'section_three_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 4 --}} 
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-IV heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_four_heading"
                                    value="{{settings('home', 'section_four_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Section-IV Image</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="section_four_image" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-IV description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_four_description" class="form-control summernote" data-feature="all">{!! settings('home', 'section_four_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save Home</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>

    <script>
    $(document).ready(function() {
        $('.summernote').summernote({
          placeholder: '',
        //   tabsize: 2,
          height: 150
        });
    });
      </script>
@endsection
<!-- include libraries(jQuery, bootstrap) -->
