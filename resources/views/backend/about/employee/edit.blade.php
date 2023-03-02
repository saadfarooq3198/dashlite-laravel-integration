<form action="{{ route('admin.employees.update', $employee->id) }}" method="POST" id="employee-form"
    enctype="multipart/form-data" data-form="ajax-form" data-datatable="#employee-table" data-modal="#ajax_model">
    @csrf
    @method('put')
    <div class="modal-header align-center">
        <div class="nk-file-title">

            <div class="nk-file-name">
                <div class="nk-file-name-text"><span class="title">Update Employee</span></div>
            </div>
        </div>
        <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
    </div>
    <div class="modal-body">
        
    
        <div class="form-group">
            <label class="form-label" for="email-address-1">Name</label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Full Name" class="form-control" value="{{$employee->name}}" name="name" required>
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="email-address-1">Designation</label></label>
            <div class="form-control-wrap">
                <input type="text" placeholder="Enter Designation" class="form-control" value="{{$employee->post}}" name="designation" required>
            </div>
        </div>
         
        <div class="form-group">
            <label class="form-label" for="email-address-1">Description</label>
            <div class="form-control-wrap">
                <textarea name="description" class="form-control" required> {{$employee->description}}
                </textarea>
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
