@extends('backend.layouts.app')
@section('content')
<!-- include libraries(jQuery, bootstrap) -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
<!-- include summernote css/js -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
<style>
    .note-editable ul{
  list-style: disc !important;
  list-style-position: inside !important;
}

.note-editable ol {
  list-style: decimal !important;
  list-style-position: inside !important;
}
</style>
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
                        <textarea name="almayeeyah" id="summernote">{!! settings('almayeeyah', 'almayeeyah') !!}</textarea>
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
   
    <script>
        $('#summernote').summernote({
          placeholder: '',
        //   tabsize: 2,
          height: 1000
        });
      </script>
@endsection
