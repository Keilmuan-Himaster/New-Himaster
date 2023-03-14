@extends('backend.modal.index')
@section('form')
    <form id="dataForm" name="dataForm" enctype="multipart/form-data">
        <input type="hidden" name="id" id="id">
        <div class="form-group">
            <div class="form-line">
               <label for="name">Nama</label>
               <input type="text" name="full_name" id="name"  class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="nim">NIM</label>
               <input type="text" name="nim" id="nim" class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="number">Angkatan</label>
               <input type="number" name="year" id="year" class="form-control">
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="phone_number">Nomor Hp</label>
               <input type="number" name="phone_number" id="phone_number" class="form-control">
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="religion">Agama</label>
               <input type="text" name="religion" id="religion"  class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="hobbies">Hobi</label>
               <input type="text" name="hobbies" id="hobbies"  class="form-control" required>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="status">Status</label>
               <select name="status" id="status" class="form-control year selectpicker" required>
                    <option value="Aktif">Aktif</option>
                    <option value="Cuti">Cuti</option>
                    <option value="Lulus">Lulus</option>
                    <option value="Mengundurkan Diri">Mengundurkan Diri</option>
               </select>
            </div>
         </div>

         <div class="form-group">
            <div class="form-line">
               <label for="number">Alamat</label>
               <textarea id="address" name="address" class="form-control"></textarea>
            </div>
         </div>
         <div class="form-group">
            <div class="form-line">
               <label for="number">Foto</label>
               <input type="file" name="image" class="form-control">
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
