@extends('layout.admin')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>LPG</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Reguler</li>
                <li class="breadcrumb-item active">LPG</li>
            </ul>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="body">
                <ul class="nav nav-tabs-new2">
                    <li class="nav-item"><a class="nav-link active show" data-toggle="tab" href="#harian">Harian</a></li>
                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#bulanan">Bulanan</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane show active" id="harian">
                        <div class="card">
                            <div class="header" style="display: flex; align-items: center; justify-content: space-between;">
                                <div>
                                    <h2> LPG Harian</h2>
                                </div>
                                <a href="spk-add" class="btn btn-secondary" data-toggle="modal" data-target="#modalInputLpg"><i class="fa fa-plus"></i> &nbsp;Input</a>
                            </div>
                            <!-- modal input spk -->
                            <div class="modal fade" id="modalInputLpg" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Form Input SPK</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{-- route('update_project', ['id' => $proj->id]) --}}">
                                                @csrf
                                                @method('PUT')

                                                <div class="form-group">
                                                    <label for="tgl_kontrak">Tanggal :</label>
                                                    <input type="text" data-provide="datepicker" data-date-autoclose="true" class="form-control" placeholder="Select Date">
                                                    <!-- <input type="date" id="tanggal" name="tanggal" class="form-control" data-provide="datepicker" value="" required> -->
                                                    <label for="nilai_kontrak">Agent :</label>
                                                    <select option name="agent" class="form-control">
                                                        <option value="1">Agent 1</option>
                                                        <option value="2">Agent 2</option>
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="no_kontrak">Jml Ritase:</label>
                                                    <input type="text" name="jml_ritase" class="form-control" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Jml Tabung:</label>
                                                    <input type="text" name="jml_tabung" class="form-control" value="" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="status">Catatan:</label>
                                                    <input type="text" name="catatan" class="form-control" value="" required>
                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <hr>
                            <div class="body">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                        <thead>
                                            <tr>
                                                <th style="text-align: center;">Tgl</th>
                                                <th style="text-align: center;">Agen</th>
                                                <th style="text-align: center;">Jml Ritase</th>
                                                <th style="text-align: center;">Jml Tabung</th>
                                                <th style="text-align: center;">Catatan</th>
                                                <th class="action-col" style="position: sticky; right: 0; z-index: 1; text-align: center;backgroun-color:#fff">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            {{-- @foreach ($listProject as $proj ) --}}
                                            <tr>
                                                <td>{{-- --}}</td>
                                                <td>{{-- --}}</td>
                                                <td>{{-- --}}</td>
                                                <td>{{-- --}}</td>
                                                <td>{{-- --}}</td>
                                                <td style="position: sticky; right: 0; z-index: 1; background: #fff">
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{-- $proj->id --}}"><i class="fa fa-edit"></i></button>
                                                    <a href="lpg-detail" class="btn btn-success"><i class="icon-eye"></i></a>
                                                </td>
                                            </tr>
                                            <!-- modal edit -->
                                            <div class="modal fade" id="editModal{{-- $proj->id --}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{-- $proj->id --}}" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editModalLabel{{-- $proj->id --}}">Form Edit Data Project</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form method="POST" action="{{-- route('update_project', ['id' => $proj->id]) --}}">
                                                                @csrf
                                                                @method('PUT')
                                                                <div class="form-group">
                                                                    <label for="project">Proyek:</label>
                                                                    <input type="text" id="project" name="project" class="form-control" required value="{{-- $proj->project --}}">
                                                                </div>

                                                                <div class="form-group">

                                                                    <label for="id">ID Klien:</label>
                                                                    <select class="form-control" id="id_client" name="id_client">
                                                                        <option value="" disabled>Pilih Client</option>
                                                                        {{-- @foreach ($listClients as $client) }}
                                                                        <option value="{{-- $client->id --}}" {{-- $proj->client_id == $client->id ? 'selected' : '' --}}>{{-- $client->client --}}</option>
                                                                        {{-- @endforeach }}
                                                                           
                                                                    </select>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nilai_kontrak">Nilai Kontrak:</label>
                                                                    <input type="text" id="nilai_kontrak" name="nilai_kontrak" class="form-control" value="{{ number_format($proj->nilai_kontrak, 0) }}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tgl_kontrak">Tanggal Kontrak:</label>
                                                                    <input type="date" id="tgl_kontrak" name="tgl_kontrak" class="form-control" value="{{-- $proj->tgl_kontrak --}}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="no_kontrak">Nomor Kontrak:</label>
                                                                    <input type="text" id="no_kontrak" name="no_kontrak" class="form-control" value="{{-- $proj->no_kontrak --}}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="mulai_kontrak">Mulai Kontrak:</label>
                                                                    <input type="date" id="mulai_kontrak" name="mulai_kontrak" class="form-control" value="{{-- $proj->mulai_kontrak --}}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="selesai_kontrak">Selesai Kontrak:</label>
                                                                    <input type="date" id="selesai_kontrak" name="selesai_kontrak" class="form-control" value="{{-- $proj->selesai_kontrak --}}" required>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="status">Status:</label>
                                                                    <input type="text" id="status" name="status" class="form-control" value="{{-- $proj->status --}}" required>
                                                                </div>

                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                    </form>
                                                </div>
                                            </div>
                                            {{-- @endforeach --}}
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="bulanan">
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover js-basic-example dataTable table-custom">
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">Agen</th>
                                        <th style="text-align: center;">Total Penyerapan</th>
                                        <th style="text-align: center;">Jan</th>
                                        <th style="text-align: center;">Feb</th>
                                        <th style="text-align: center;">Mar</th>
                                        <th style="text-align: center;">Mar</th>
                                        <th style="text-align: center;">Apr</th>
                                        <th style="text-align: center;">Mei</th>
                                        <th style="text-align: center;">Jun</th>
                                        <th style="text-align: center;">Jul</th>
                                        <th style="text-align: center;">Agu</th>
                                        <th style="text-align: center;">Sep</th>
                                        <th style="text-align: center;">Okt</th>
                                        <th style="text-align: center;">Nov</th>
                                        <th style="text-align: center;">Des</th>
                                        <th class="action-col" style="position: sticky; right: 0; z-index: 1; text-align: center;backgroun-color:#fff">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    {{-- @foreach ($listProject as $proj ) --}}
                                    <tr>

                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td>{{-- --}}</td>
                                        <td style="position: sticky; right: 0; z-index: 1; background: #fff">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{-- $proj->id --}}"><i class="fa fa-edit"></i></button>
                                            <a href="lpg-detail" class="btn btn-success"><i class="icon-eye"></i></a>
                                        </td>
                                    </tr>
                                    <!-- modal edit -->
                                    <div class="modal fade" id="editModal{{-- $proj->id --}}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{-- $proj->id --}}" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editModalLabel{{-- $proj->id --}}">Form Edit Data Project</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action="{{-- route('update_project', ['id' => $proj->id]) --}}">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="form-group">
                                                            <label for="project">Proyek:</label>
                                                            <input type="text" id="project" name="project" class="form-control" required value="{{-- $proj->project --}}">
                                                        </div>

                                                        <div class="form-group">

                                                            <label for="id">ID Klien:</label>
                                                            <select class="form-control" id="id_client" name="id_client">
                                                                <option value="" disabled>Pilih Client</option>
                                                                {{-- @foreach ($listClients as $client) }}
                                                                <option value="{{-- $client->id --}}" {{-- $proj->client_id == $client->id ? 'selected' : '' --}}>{{-- $client->client --}}</option>
                                                                {{-- @endforeach }}
                                                                   
                                                            </select>

                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nilai_kontrak">Nilai Kontrak:</label>
                                                            <input type="text" id="nilai_kontrak" name="nilai_kontrak" class="form-control" value="{{ number_format($proj->nilai_kontrak, 0) }}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="tgl_kontrak">Tanggal Kontrak:</label>
                                                            <input type="date" id="tgl_kontrak" name="tgl_kontrak" class="form-control" value="{{-- $proj->tgl_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_kontrak">Nomor Kontrak:</label>
                                                            <input type="text" id="no_kontrak" name="no_kontrak" class="form-control" value="{{-- $proj->no_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="mulai_kontrak">Mulai Kontrak:</label>
                                                            <input type="date" id="mulai_kontrak" name="mulai_kontrak" class="form-control" value="{{-- $proj->mulai_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="selesai_kontrak">Selesai Kontrak:</label>
                                                            <input type="date" id="selesai_kontrak" name="selesai_kontrak" class="form-control" value="{{-- $proj->selesai_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Status:</label>
                                                            <input type="text" id="status" name="status" class="form-control" value="{{-- $proj->status --}}" required>
                                                        </div>

                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                            </form>
                                        </div>
                                    </div>
                                    {{-- @endforeach --}}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('.edit-button').click(function() {
            var projectId = $(this).closest('tr').find('td:eq(0)').text(); // Ubah 0 menjadi indeks kolom yang sesuai dengan id proyek
            // Mengatur nilai input dalam modal edit
            $('#editModal' + projectId).find('#project').val($(this).closest('tr').find('td:eq(1)').text()); // Ubah 1 menjadi indeks kolom yang sesuai dengan nama proyek
            // Masukkan pengaturan input lainnya
        });
    });
</script>
@endsection