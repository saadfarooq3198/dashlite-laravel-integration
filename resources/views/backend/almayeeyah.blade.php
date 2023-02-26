@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Almayeeyah Page</h5>
            </div>
            {{-- <h6 class="card-title">section 1</h6> --}}
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="almayeeyah">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <textarea name="almayeeyah" data-feature="all" id="summernote">{!! settings('almayeeyah', 'almayeeyah') !!}</textarea>
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
        $('#summernote').summernote({
          placeholder: '',
        //   tabsize: 2,
          height: 1000
        });
    });
      </script>
@endsection
