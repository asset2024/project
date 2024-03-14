@extends('layout.admin')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>Project</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Project</li>
                <li class="breadcrumb-item active">Project</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputModal">Add New</button>
                </div>
                {{-- Modal --}}
            </div>
            <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="inputModalLabel">Form Input Data Project</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('store_project') }}" id="inputForm">
                                @csrf
                                <div class="form-group">
                                    <label for="project">Project:</label>
                                    <input type="text" id="project" name="project" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="client_id">ID Client:</label>
                                    <select id="client_id" name="client_id" class="form-control" required>
                                        <option value="" selected disabled>Select Client</option>
                                        @foreach($listClients as $client)
                                            <option value="{{ $client->client_id }}">{{ $client->client }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="nilai_kontrak">Nilai Kontrak:</label>
                                    <input type="number" id="nilai_kontrak" name="nilai_kontrak" class="form-control" step="0.01" required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl_kontrak">Tanggal Kontrak:</label>
                                    <input type="date" id="tgl_kontrak" name="tgl_kontrak" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="no_kontrak">Nomor Kontrak:</label>
                                    <input type="text" id="no_kontrak" name="no_kontrak" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="mulai_kontrak">Mulai Kontrak:</label>
                                    <input type="date" id="mulai_kontrak" name="mulai_kontrak" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai_kontrak">Selesai Kontrak:</label>
                                    <input type="date" id="selesai_kontrak" name="selesai_kontrak" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="status">Status:</label>
                                    <input type="text" id="status" name="status" class="form-control" required>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                            <button type="submit" form="inputForm" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">

                <ul class="header-dropdown">
                    <!-- <li><a href="javascript:void(0);" class="btn btn-info" data-toggle="modal" data-target="#addcontact">Add New</a></li> -->
                </ul>
            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                        <thead class="thead-dark">
                            <tr>
                                <th>
                                    <label class="fancy-checkbox">
                                        <input class="select-all" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                </th>
                                <th>Project</th>
                                <th>Client</th>
                                <th>Nilai Kontrak</th>
                                <th>Tanggal Kontrak</th>
                                <th>Nomor Kontrak</th>
                                <th>Lama Pekerjaan</th>
                                <th>Mulai Kontrak</th>
                                <th>Selesai Kontrak</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listProject as $proj )
                            <tr>
                                <td class="width45">
                                    <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                    {{-- <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                </td>
                                <td>
                                    <h6 class="mb-0">Marshall Nichols</h6>
                                    <span>marshall-n@gmail.com</span>
                                </td> --}}
                                <td><span>{{ $proj->project }}</span></td>
                                <td><span>{{ $proj->client['client'] }}</span></td>
                                <td class="text-right">{{number_format ($proj->nilai_kontrak,0) }}</td>
                                <td>{{ $proj->tgl_kontrak }}</td>
                                <td>{{ $proj->no_kontrak }}</td>
                                <td>{{ $proj->lama_pekerjaan }} Hari</td>
                                <td>{{ $proj->mulai_kontrak }}</td>
                                <td>{{ $proj->selesai_kontrak }}</td>
                                <td>{{ $proj->status }}</td>
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal"><i class="fa fa-edit"></i></button>
                                    <a href="detail-project" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                            {{-- modal edit --}}
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="inputModalLabel">Form Edit Data Project</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="#" id="editForm">
                                                @csrf
                                                <div class="form-group">
                                                    <label for="project">Project:</label>
                                                    <input type="text" id="project" name="project" class="form-control" required value="{{ $proj->project }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for="client_id">ID Client:</label>
                                                    <select id="client_id" name="client_id" class="form-control" required>
                                                        <option value="" selected disabled>Select Client</option>
                                                        @foreach($listClients as $client)
                                                            <option value="{{ $client->client_id }}">{{ $client->client }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nilai_kontrak">Nilai Kontrak:</label>
                                                    <input type="number" id="nilai_kontrak" name="nilai_kontrak" class="form-control" step="0.01" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_kontrak">Tanggal Kontrak:</label>
                                                    <input type="date" id="tgl_kontrak" name="tgl_kontrak" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="no_kontrak">Nomor Kontrak:</label>
                                                    <input type="text" id="no_kontrak" name="no_kontrak" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="mulai_kontrak">Mulai Kontrak:</label>
                                                    <input type="date" id="mulai_kontrak" name="mulai_kontrak" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="selesai_kontrak">Selesai Kontrak:</label>
                                                    <input type="date" id="selesai_kontrak" name="selesai_kontrak" class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Status:</label>
                                                    <input type="text" id="status" name="status" class="form-control" required>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" form="editForm" class="btn btn-primary">Submit</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function(){
        $('.edit-button').click(function(){
            var projectId = $(this).closest('tr').find('td:eq(0)').text(); // Ubah 0 menjadi indeks kolom yang sesuai dengan id proyek
            // Mengatur nilai input dalam modal edit
            $('#editModal' + projectId).find('#project').val($(this).closest('tr').find('td:eq(1)').text()); // Ubah 1 menjadi indeks kolom yang sesuai dengan nama proyek
            // Masukkan pengaturan input lainnya
        });
    });
</script>
@endsection