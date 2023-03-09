@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Fotter</h5>
            </div>
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="footer">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_one_description" class="form-control summernote" data-feature="all">{!! settings('footer', 'section_one_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">For enquiries:</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="for_enquiries"
                                    value="{{settings('footer', 'for_enquiries')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">For in school enquiries</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="for_in_school_enquiries"
                                    value="{{settings('footer', 'for_in_school_enquiries')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Facebook Link</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="facebook"
                                    value="{{settings('footer', 'facebook')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Twitter Link</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="twitter"
                                    value="{{settings('footer', 'twitter')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Instagram Link</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="instagram"
                                    value="{{settings('footer', 'instagram')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Linkedin Link</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="linkedin"
                                    value="{{settings('footer', 'linkedin')}}">
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12">
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Save</button>
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
          height: 100
        });
    });
      </script>
@endsection