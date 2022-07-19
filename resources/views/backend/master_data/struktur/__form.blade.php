@extends('backend.modal.index')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
               <label for="name">Name</label>
               <input type="text" id="name" name="name" class="form-control" required>
            </div>
         </div>

         <div class="form-group">
             <div class="form-line">
                 <label for="year">Year</label>
                 <input type="text" id="year" name="year" class="form-control">
             </div>
         </div>
         <div class="form-group">
            <div class="form-line">
                <label for="image">Logo</label>
                <input type="file" name="image" class="form-control" >
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control"></textarea>
            </div>
         </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-light-secondary" data-bs-dismiss="modal">
                <i class="bx bx-x d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Close</span>
            </button>
            <button type="button" id="saveBtn" class="btn btn-primary ml-1" data-bs-dismiss="modal">
                <i class="bx bx-check d-block d-sm-none"></i>
                <span class="d-none d-sm-block">Save</span>
            </button>
        </div>
    </form>
@endsection
