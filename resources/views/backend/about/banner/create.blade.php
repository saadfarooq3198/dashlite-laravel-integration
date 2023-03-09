<form action="{{ route('admin.about.banner.store') }}" method="POST" id="banner-form"
    enctype="multipart/form-data" data-form="ajax-form" data-datatable="#banner-table" data-modal="#ajax_model">
    @csrf
    <div class="modal-header align-center">
        <div class="nk-file-title">

            <div class="nk-file-name">
                <div class="nk-file-name-text"><span class="title">Add New Banner</span></div>
            </div>
        </div>
        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
    </div>
    <div class="modal-body">
        
        <div class="form-group">
            <label class="form-label" for="pagename">Select Page</label>
            <select name="page_name" class="form-control" id="pagename">
                <option value="About">About</option>
                <option value="Ethos">Ethos</option>
            </select>
        </div>
    
        <div class="form-group">
            <label class="form-label" for="customFileLabel">Upload Banner Image</label>
            <div class="form-control-wrap">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="banner" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                </div>
            </div>
        </div>
        


    </div><!-- .modal-body -->
    <div class="modal-footer bg-white">
        <ul class="btn-toolbar g-3">
            <li><a href="#" data-dismiss="modal" class="btn btn-outline-light btn-dark">Discard</a></li>
            <li><button href="#" type="submit" class="btn btn-primary">Add</button></li>
        </ul>
    </div><!-- .modal-footer -->
</form>
