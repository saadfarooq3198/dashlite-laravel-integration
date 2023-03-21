@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Ethos Page</h5>
            </div>
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="ethos">
                <div class="row g-4">
                
                    
                    {{-- section 1 --}}
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
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I Heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_one_heading"
                                    value="{{settings('ethos', 'section_one_heading')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_one_description" class="form-control summernote" data-feature="all">{!! settings('ethos', 'section_one_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 2 --}}

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
                                <textarea name="section_two_description" class="form-control summernote" data-feature="all">{!! settings('ethos', 'section_two_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    {{-- Engage --}}
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Engage</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="engage_heading"
                                    value="{{settings('ethos', 'engage_heading')}}">
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Engage description</label>
                            <div class="form-control-wrap">
                                <textarea name="engage_description" class="form-control summernote" data-feature="all">{!! settings('ethos', 'engage_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- Engage end --}} 

                     {{-- EQUIP --}}
                     <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Equip</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="equip_heading"
                                    value="{{settings('ethos', 'equip_heading')}}">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Equip description</label>
                            <div class="form-control-wrap">
                                <textarea name="equip_description" class="form-control summernote" data-feature="all">{!! settings('ethos', 'equip_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div> --}}
                    {{-- Equip end --}} 
                     {{-- EMPOWER --}}
                     <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">EMPOWER</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="empower_heading"
                                    value="{{settings('ethos', 'empower_heading')}}">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">EMPOWER description</label>
                            <div class="form-control-wrap">
                                <textarea name="empower_description" class="form-control summernote" data-feature="all">{!! settings('ethos', 'empower_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div> --}}
                    {{-- EMPOWER end --}} 
                     {{-- Respect --}}
                     <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Respect</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="respect_heading"
                                    value="{{settings('ethos', 'respect_heading')}}">
                            </div>
                        </div>
                    </div>

                    {{-- <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Respect description</label>
                            <div class="form-control-wrap">
                                <textarea name="respect_description" class="form-control summernote" data-feature="all">{!! settings('ethos', 'respect_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div> --}}
                    {{-- Respect end --}} 
                    

                   

                   
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
