@extends('backend.modal.index')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="title">Judul</label>
                <input type="text" name="title" id="title" class="form-control"
                    placeholder="Tag">
            </div>
            <div class="form-line">
                <label for="link">Link</label>
                <input type="text" name="link" id="link" class="form-control"
                    placeholder="Tag">
            </div>
            <div class="form-line">
                <label for="image">Gambar</label>
                <input type="file" name="image" id="image" class="form-control"
                    placeholder="Tag">
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
