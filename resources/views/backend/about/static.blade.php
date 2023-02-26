@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update About Page</h5>
            </div>
            {{-- <h6 class="card-title">section 1</h6> --}}
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="about">
                <div class="row g-4">
                                       
                    {{-- section 1 --}}
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Who's Who!</label>
                            <div class="form-control-wrap">
                                <textarea name="who_is_who" class="form-control summernote" data-feature="all">{!! settings('about', 'who_is_who') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 2 --}}

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Research & Developement</label>
                            <div class="form-control-wrap">
                                <textarea name="research_and_development" class="form-control summernote" data-feature="all">{!! settings('about', 'research_and_development') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>

                    {{-- section 3 --}}
                   

                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Latest News and Events</label>
                            <div class="form-control-wrap">
                                <textarea name="latest_news" class="form-control summernote" data-feature="all">{!! settings('about', 'latest_news') !!}
                                </textarea>
                            </div>
                        </div>
                    </div>
                    {{-- section 4 --}} 
                    
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Our Special Events</label>
                            <div class="form-control-wrap">
                                <textarea name="special_events" class="form-control summernote" data-feature="all">{!! settings('about', 'special_events') !!}
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
          height: 150
        });
    });
      </script>
@endsection
<!-- include libraries(jQuery, bootstrap) -->
