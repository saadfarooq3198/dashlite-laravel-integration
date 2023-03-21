@extends('backend.layouts.app')
@section('content')
    <div class="card">
        <div class="card-inner">
            <div class="card-head">
                <h5 class="card-title">Update Week Pop Page</h5>
            </div>
            <form action="{{route('admin.update-home')}}" method="POST" enctype="multipart/form-data"  data-form="ajax-form">
                @csrf
                <input type="hidden" name="page" value="week_pop">
                <div class="row g-4">
                    <div class="col-lg-12">
                        <textarea name="week_pop" data-feature="all" id="summernote">{!! settings('week_pop', 'week_pop') !!}</textarea>
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
          height: 400
        });
    });
      </script>
@endsection
