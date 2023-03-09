@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Fee Structure Page</h5>
            </div>
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="fee">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label class="form-label" for="email-address-1">Section-I description</label>
                            <div class="form-control-wrap">
                                <textarea name="section_one_description" class="form-control summernote" data-feature="all">{!! settings('fee', 'section_one_description') !!}
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
          height: 200
        });
    });
      </script>
@endsection
