<form action="{{ route('admin.classes.update', $class->id) }}" method="POST" id="class-form"
    enctype="multipart/form-data" data-form="ajax-form" data-datatable="#class-table" data-modal="#ajax_model">
    @csrf
    @method('put')
    <div class="modal-header align-center">
        <div class="nk-file-title">

            <div class="nk-file-name">
                <div class="nk-file-name-text"><span class="title">Update Class</span></div>
            </div>
        </div>
        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
    </div>
    <div class="modal-body">
        
    
        <div class="form-group">
            <label class="form-label" for="email-address-1">Title</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Full Name" value="{{$class->title}}" class="form-control" name="title" required>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label" for="email-address-1">Description</label>
            <div class="form-control-wrap">
                <textarea name="description" class="form-control" required> {{$class->description}}
                </textarea>
            </div>
        </div>

        <div class="form-group">
            <label class="form-label" for="customFileLabel">Upload Class Image</label>
            <div class="form-control-wrap">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
        


    </div><!-- .modal-body -->
    <div class="modal-footer bg-white">
        <ul class="btn-toolbar g-3">
            <li><a href="#" data-dismiss="modal" class="btn btn-outline-light btn-dark">Discard</a></li>
            <li><button href="#" type="submit" class="btn btn-primary">Update</button></li>
        </ul>
    </div><!-- .modal-footer -->
</form>