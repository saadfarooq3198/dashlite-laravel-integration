@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Contact Page</h5>
            </div>
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="contact">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_one_heading"
                                    value="{{settings('contact', 'section_one_heading')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_one_description" class="form-control summernote" data-feature="all">{!! settings('contact', 'section_one_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-II heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_two_heading"
                                    value="{{settings('contact', 'section_two_heading')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-II description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_two_description" class="form-control summernote" data-feature="all">{!! settings('contact', 'section_two_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-III description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_three_description" class="form-control summernote" data-feature="all">{!! settings('contact', 'section_three_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-IV description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_four_description" class="form-control summernote" data-feature="all">{!! settings('contact', 'section_four_description') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-4">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-V heading</label>
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="section_five_heading"
                                    value="{{settings('contact', 'section_five_heading')}}">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-V description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_five_description" class="form-control summernote" data-feature="all">{!! settings('contact', 'section_five_description') !!}
                                </textarea>
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
        //   tabsize: 2,
          height: 200
        });
    });
      </script>
@endsection
