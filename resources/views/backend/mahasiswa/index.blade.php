@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/all.min.css') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        table.dataTable td {
            padding: 15px 8px;
        }

        .fontawesome-icons .the-icon svg {
            font-size: 24px;
        }

    </style>
@endsection
@section('content')
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <h3>{{ $data['title'] }}</h3>
        </div>
        <div class="page-content">
            <div class="card">
                <div class="card-header">
                    <button type="button" class="input btn btn-outline-primary block" data-bs-toggle="modal"
                        data-bs-target="#exampleModalCenter">
                        Input Data
                    </button>
                    <select id="year" class="form-control show-tick year">
                        <option hidden>--Choose Month---</option>

                        @foreach($data['year'] as $item)
                           <option value="{{ $item->year }}">
                              {{ $item->year }}</option>
                        @endforeach


                     </select>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="table1">
                            <thead>
                                <tr>
                                    <th width="10%">No</th>
                                    <th>Nama</th>
                                    <th>NIM</th>
                                    <th>Angkatan</th>
                                    <th width="30%">Alamat</th>
                                    <th width="30%">Agama</th>
                                    <th width="30%">Hobi</th>
                                    <th width="30%">Status</th>
                                    <th width="30%">Nomor Hp</th>
                                    <th width="10%">Action</th>
                                 </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                </div>
                @include('backend.mahasiswa.__form')
            </div>
        </div>
@endsection

@section('js')
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-datatables/custom.jquery.dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/fontawesome/all.min.js') }}"></script>
    <script type="text/javascript">
        function clearSession(){
            sessionStorage.removeItem('year');
        }
        clearSession()
        // Jquery Datatable
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }

            });

            let jquery_datatable = $("#table1").DataTable({
                processing: true,
                serverSide: true,
                searching: true,
                responsive: true,
                ajax: {
                    url:"{{ route('mahasiswa.index') }}",
                    type: 'GET',
                    data: function (d) {

                                    d.year = sessionStorage.year;
                                },
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')

                },
                columns: [
                    {
                        data: 'DT_RowIndex',
                        orderable: false
                    },
                    {
                        data: 'full_name',
                        orderable: true
                    },
                    {
                        data: 'nim',
                        orderable: true
                    },
                    {
                        data: 'year',
                        orderable: true
                    },
                    {
                        data: 'address',
                        orderable: true
                    },
                    {
                        data: 'religion',
                        orderable: true
                    },
                    {
                        data: 'hobbies',
                        orderable: true
                    },
                    {
                        data: 'status',
                        orderable: true
                    },
                    {
                        data: 'phone_number',
                        orderable: true
                    },
                    {
                        data: 'action',
                        name: '#',
                        orderable: false
                    },

                ]
            })

        });
        $('body').on('click', '.input', function() {
            $('#exampleModalCenterTitle').html("Add anggota");
            $('#dataForm').trigger("reset");
        })

        function reloadDatatable() {
            $('#table1').DataTable().ajax.reload();
        }

        $('body').on('click', '.deleteProduct', function() {

            var data_id = $(this).data("id");
            var check = confirm("Are You sure want to delete !");
            if (check == true) {
                $.ajax({
                    type: "DELETE",
                    url: "{{ route('mahasiswa.store') }}" + '/' + data_id,
                    success: function(data) {
                        reloadDatatable();
                        Swal.fire({
                            icon: 'warning',
                            title: 'Data berhasil dihapus',
                        })
                    },
                    error: function(data) {
                        console.log('Error:', data);
                    }
                });
            } else {
                swal.fire({
                    icon: 'success',
                    title: 'Dibatalkan'
                })
            }
        });

        $('body').on('click', '.editProduct', function() {
            var data_id = $(this).data('id');
            $.get("{{ route('mahasiswa.index') }}" + '/' + data_id + '/edit', function(data) {
                $('#exampleModalCenterTitle').html("Edit anggota");
                $('#saveBtn').val("edit");
                $('#exampleModalCenter').modal('show');
                $('#id').val(data.id);
                $('#name').val(data.full_name);
                $('#address').val(data.address);
                $('#year').val(data.year);
                $('#nim').val(data.nim);
                $('#phone_number').val(data.phone_number);
                $('#religion').val(data.religion);
                $('#hobbies').val(data.hobbies);
                $('#status').val(data.status);
                $("#year option").filter(function () {
                    return $.trim($(this).val()) == data.structure_id
                }).prop('selected', true);
                $('.year').selectpicker('refresh')
            })
        });
    </script>

    <script type="text/javascript">
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#saveBtn').click(function(e) {
                e.preventDefault();
                $(this).html('Sending..');
                var myform = document.getElementById('dataForm');
                var formData = new FormData(myform);

                $.ajax({
                    data: formData,
                    cache: false,
                    contentType: false,
                    processData: false,
                    url: "{{ route('mahasiswa.store') }}",
                    type: "POST",
                    dataType: 'json',

                    success: function(data) {

                        reloadDatatable();
                        $('#dataForm').trigger("reset");
                        $('#ajaxModel').modal('hide');
                        $('#saveBtn').html('success');

                        Swal.fire({
                            icon: 'success',
                            title: 'Data berhasil dimasukan',
                        })
                    },
                    error: function(data) {
                        console.log('Error:', data);
                        Swal.fire({
                            icon: 'error',
                            title: 'Terjadi Error!',
                        })
                        $('#saveBtn').html('Error');
                    }
                });
            });

        });

        $('#year').on('change', function (e) {
                console.log(this.value);
                sessionStorage.setItem('year', this.value);
                reloadDatatable();
                jquery_dataTable.draw();
                e.preventDefault();
            });
    </script>
@endsection
