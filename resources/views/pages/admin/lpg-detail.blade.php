@extends('layout.admin')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>{{$title}}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Reguler</li>
                <li class="breadcrumb-item">LPG</li>
                <li class="breadcrumb-item active">Detail</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <a href="project" class="btn btn-primary"><i class="fa fa-mail-reply"></i> Back</a>
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-3 col-md-12">
        <div class="card member-card">
            <div class="header primary-bg text-light mb-3">
                <h4 class="mt-2 mb-0">Nama Mitra</h4>
                <span></span>
            </div>
            <div class="member-img">
                <a href="javascript:void(0);"><img src="../assets/images/project/avatar.jpg" class="rounded-circle" alt="profile-image"></a>
            </div>
            <div class="body">
                <p class="text-muted mb-3">Lokasi <br> Provinsi </p>

                <div class="row">

                    <div class="col-12">
                        <h5 class="mb-1">Rp 100,656,000,000</h5>
                        <small>(Total Penyerapan)</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="body">

                <div class="tab-content pl-0 pr-0 pb-0">
                    <div class="tab-pane active" id="about">
                        <small class="text-muted">No. Kontrak: </small>
                        <p>SP-01/PRTMN/III/2023</p>
                        <hr>
                        <small class="text-muted">Waktu Kontrak: </small>
                        <p>31-03-2023 - 31-03-2024</p>

                        <hr>
                        <small class="text-muted">Cash In </small>
                        <p>677.000.000</p>
                        <hr>

                        <hr>
                        <ul class="list-unstyled">
                            <li>
                                <div>Progress Pekerjaan</div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar l-blue " role="progressbar" aria-valuenow="89" aria-valuemin="0" aria-valuemax="100" style="width: 89%"> <span class="sr-only">62% Complete</span> </div>
                                </div>
                            </li>
                            <li>
                                <div>Pendapatan</div>
                                <div class="progress progress-xs mb-3">
                                    <div class="progress-bar l-amber" role="progressbar" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100" style="width: 78%"> <span class="sr-only">32% Complete</span> </div>
                                </div>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-9 col-md-12">
        <div class="card">
            <ul class="nav nav-tabs-new2">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#penyerapan">Penyerapan</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#ritase">Ritase</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#invoice">Invoie</a></li>
            </ul>
        </div>
        <div class="tab-content p-0">
            <div role="tabpanel" class="tab-pane blog-page active" id="penyerapan">
                <div class="card">
                    <div class="header" style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <h2> Data Penyerapan</h2>
                        </div>
                        <a href="spk-add" class="btn btn-secondary" data-toggle="modal" data-target="#modalInputSpk"><i class="fa fa-plus"></i> &nbsp;Input</a>
                    </div>
                    <!-- modal input spk -->
                    <div class="modal fade" id="modalInputSpk" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalInputSpk{{-- $proj->id --}}">Form Input SPK</h5>
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
                                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{-- $proj->tgl_kontrak --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai_kontrak">Jenis Invoice:</label>
                                            <input type="text" id="jenis_invoice" name="jenis_invoice" class="form-control" value="{{-- number_format($proj->nilai_kontrak, 0) --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_kontrak">Nomor Invoice:</label>
                                            <input type="text" id="no_invoice" name="no_invoice" class="form-control" value="{{-- $proj->no_kontrak --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Nominal:</label>
                                            <input type="text" id="nominal" name="nominal" class="form-control" value="{{-- $proj->status --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Keterangan:</label>
                                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{-- $proj->status --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">File:</label>
                                            <input type="text" id="file" name="file" class="form-control" value="{{-- $proj->status --}}" required>
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
                                        <th style="text-align: center;">Jml Tabung</th>
                                        <th style="text-align: center;">Catatan</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td style="text-align: center;">25/04/2011</td>
                                        <td>32.000</td>
                                        <td style="text-align: center;">On Going</td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit" data-toggle="modal" data-target="#editModalSpk"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <!-- modal edit -->
                                    <div class="modal fade" id="editModalSpk" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{-- $proj->id --}}" aria-hidden="true">
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
                                                            <label for="tgl_kontrak">Tanggal :</label>
                                                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{-- $proj->tgl_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nilai_kontrak">Jenis Invoice:</label>
                                                            <input type="text" id="jenis_invoice" name="jenis_invoice" class="form-control" value="{{-- number_format($proj->nilai_kontrak, 0) --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_kontrak">Nomor Invoice:</label>
                                                            <input type="text" id="no_invoice" name="no_invoice" class="form-control" value="{{-- $proj->no_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Nominal:</label>
                                                            <input type="text" id="nominal" name="nominal" class="form-control" value="{{-- $proj->status --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Keterangan:</label>
                                                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{-- $proj->status --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">File:</label>
                                                            <input type="text" id="file" name="file" class="form-control" value="{{-- $proj->status --}}" required>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="ritase">
                <div class="card">
                    <div class="header" style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <h2> Data Cash In</h2>
                        </div>
                        <a href="cashIn-add" class="btn btn-secondary" data-toggle="modal" data-target="#modalInputCashIn"><i class="fa fa-plus"></i> &nbsp;Input</a>
                    </div>
                    <!-- modal input spk -->
                    <div class="modal fade" id="modalInputCashIn" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalInputCashIn{{-- $proj->id --}}">Form Input Cash In</h5>
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
                                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{-- $proj->tgl_kontrak --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai_kontrak">Jenis Invoice:</label>
                                            <input type="text" id="jenis_invoice" name="jenis_invoice" class="form-control" value="{{-- number_format($proj->nilai_kontrak, 0) --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_kontrak">Nomor Invoice:</label>
                                            <input type="text" id="no_invoice" name="no_invoice" class="form-control" value="{{-- $proj->no_kontrak --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Nominal:</label>
                                            <input type="text" id="nominal" name="nominal" class="form-control" value="{{-- $proj->status --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Keterangan:</label>
                                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{-- $proj->status --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">File:</label>
                                            <input type="text" id="file" name="file" class="form-control" value="{{-- $proj->status --}}" required>
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
                                        <th style="text-align: center;">Tanggal</th>
                                        <th style="text-align: center;">Jenis Cash In</th>
                                        <th style="text-align: center;">Nilai (Rp)</th>
                                        <th style="text-align: center;">Keterangan</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>25/04/2011</td>
                                        <td>Pembayaran Invoice Termin 1</td>
                                        <td>32.000.000</td>
                                        <td></td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit" data-toggle="modal" data-target="#editModalCashIn"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <!-- modal edit -->
                                    <div class="modal fade" id="editModalCashIn" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{-- $proj->id --}}" aria-hidden="true">
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
                                                            <label for="tgl_kontrak">Tanggal :</label>
                                                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{-- $proj->tgl_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nilai_kontrak">Jenis Invoice:</label>
                                                            <input type="text" id="jenis_invoice" name="jenis_invoice" class="form-control" value="{{-- number_format($proj->nilai_kontrak, 0) --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_kontrak">Nomor Invoice:</label>
                                                            <input type="text" id="no_invoice" name="no_invoice" class="form-control" value="{{-- $proj->no_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Nominal:</label>
                                                            <input type="text" id="nominal" name="nominal" class="form-control" value="{{-- $proj->status --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Keterangan:</label>
                                                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{-- $proj->status --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">File:</label>
                                                            <input type="text" id="file" name="file" class="form-control" value="{{-- $proj->status --}}" required>
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
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="invoice">
                <div class="card">
                    <div class="header" style="display: flex; align-items: center; justify-content: space-between;">
                        <div>
                            <h2> Data Invoice</h2>
                        </div>
                        <a href="invoice-add" class="btn btn-secondary" data-toggle="modal" data-target="#modalInputInvoice"><i class="fa fa-plus"></i> &nbsp;Input</a>
                    </div>
                    <!-- modal input spk -->
                    <div class="modal fade" id="modalInputInvoice" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="modalInputInvoice{{-- $proj->id --}}">Form Input Invoice</h5>
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
                                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{-- $proj->tgl_kontrak --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nilai_kontrak">Jenis Invoice:</label>
                                            <input type="text" id="jenis_invoice" name="jenis_invoice" class="form-control" value="{{-- number_format($proj->nilai_kontrak, 0) --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="no_kontrak">Nomor Invoice:</label>
                                            <input type="text" id="no_invoice" name="no_invoice" class="form-control" value="{{-- $proj->no_kontrak --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Nominal:</label>
                                            <input type="text" id="nominal" name="nominal" class="form-control" value="{{-- $proj->status --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">Keterangan:</label>
                                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{-- $proj->status --}}" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="status">File:</label>
                                            <input type="text" id="file" name="file" class="form-control" value="{{-- $proj->status --}}" required>
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
                                        <th style="text-align: center;">Tanggal</th>
                                        <th style="text-align: center;">Jenis Invoice</th>
                                        <th style="text-align: center;">Nilai (Rp)</th>
                                        <th style="text-align: center;">Keterangan</th>
                                        <th style="text-align: center;">File</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>25/04/2011</td>
                                        <td>Pembayaran Invoice Termin 1</td>
                                        <td>32.000.000</td>
                                        <td></td>
                                        <td></td>
                                        <td style="text-align: center;">
                                            <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit" data-toggle="modal" data-target="#editModalInvoice"><i class="fa fa-edit"></i></button>
                                            <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <!-- modal edit -->
                                    <div class="modal fade" id="editModalInvoice" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{-- $proj->id --}}" aria-hidden="true">
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
                                                            <label for="tgl_kontrak">Tanggal :</label>
                                                            <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{-- $proj->tgl_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="nilai_kontrak">Jenis Invoice:</label>
                                                            <input type="text" id="jenis_invoice" name="jenis_invoice" class="form-control" value="{{-- number_format($proj->nilai_kontrak, 0) --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="no_kontrak">Nomor Invoice:</label>
                                                            <input type="text" id="no_invoice" name="no_invoice" class="form-control" value="{{-- $proj->no_kontrak --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Nominal:</label>
                                                            <input type="text" id="nominal" name="nominal" class="form-control" value="{{-- $proj->status --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">Keterangan:</label>
                                                            <input type="text" id="keterangan" name="keterangan" class="form-control" value="{{-- $proj->status --}}" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="status">File:</label>
                                                            <input type="text" id="file" name="file" class="form-control" value="{{-- $proj->status --}}" required>
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