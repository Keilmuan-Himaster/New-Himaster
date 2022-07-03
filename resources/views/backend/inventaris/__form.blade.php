@extends('backend.modal.index')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
                <label for="kode">Kode</label>
                <input type="text" name="kode" id="kode" class="form-control"
                    placeholder="kode">
            </div>
            <div class="form-line">
                <label for="nama">nama</label>
                <input type="text" name="nama" id="nama" class="form-control"
                    placeholder="nama">
            </div>
            <div class="form-line">
                <label for="deskripsi">deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control"
                    placeholder="deskripsi">
            </div>
            <div class="form-line">
                <label for="image">Gambar</label>
                <input type="file" name="image" id="image" class="form-control"
                    placeholder="gambar" accept="image/*">
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
