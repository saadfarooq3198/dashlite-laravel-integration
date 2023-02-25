@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Curriculum Page</h5>
            </div>
            {{-- <h6 class="card-title">section 1</h6> --}}
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="curriculum">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="customFileLabel">Upload Banner</label>
                            <div class="form-control-wrap">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="banner" id="customFile">
                                    <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- section 1 --}}
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="heading"
                                    value="{{settings('curriculum', 'heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Description</label>
                            <div class="form-control-wrap">
                                <textarea name="description" class="form-control">{{settings('curriculum', 'description')}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 2 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_one_heading"
                                    value="{{settings('curriculum', 'section_one_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
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
                                <textarea name="section_one_description" class="form-control">As decreasing numbers of children wanting to learn Arabic are reported across the world, it is clear that an innovative approach is needed.To develop an innovative approach, we asked questions about hove children learn and what approaches could be reconstructed in Arabic to build a learning environment involving choices, autonomy and motivation. We set aside preconceived ideas, to look at teaching Arabic from a new point of view. That is how we came up with something new.
                                </textarea>
                            </div>
                        </div>
                    </div>

                    {{-- section 3 --}}
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-II heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_two_heading"
                                    value="{{settings('curriculum', 'section_two_heading')}}">
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
                                <textarea name="section_two_description" class="form-control">{{settings('curriculum', 'section_two_description')}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 4 --}} 
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-III heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_three_heading"
                                    value="{{settings('curriculum', 'section_three_heading')}}">
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
                                <textarea name="section_three_description" class="form-control">{{settings('curriculum', 'section_three_description')}}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                        </div>
                    </div>

            </form>
        </div>
    </div>
@endsection
<!-- include libraries(jQuery, bootstrap) -->
