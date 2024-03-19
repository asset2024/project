@extends('layout.admin')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>{{$title}}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Proyek</li>
                <li class="breadcrumb-item active">Pekerjaan</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#inputModal">Tambah Data</button>
                </div>
            </div>
        </div>
        <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="inputModalLabel">Form Input Data SPK</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('store_pekerjaan') }}" id="inputForm">
                            @csrf

                            <div class="form-group">
                                <label for="project_id">Proyek:</label>
                                <select id="project_id" name="project_id" class="form-control" required>
                                    <option value="" selected disabled>Pilih Proyek</option>
                                    @foreach($listProject as $project)
                                    <option value="{{ $project->project_id }}">{{ $project->project }}</option>
                                    @endforeach
                                </select>
                                <div class="form-group">
                                    <label for="pekerjaan">Pekerjaan:</label>
                                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="no_spk">No SPK:</label>
                                <input type="text" id="no_spk" name="no_spk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="nilai_pekerjaan">Nilai Pekerjaan:</label>
                                <input type="text" id="nilai_pekerjaan" name="nilai_pekerjaan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="mulai_pekerjaan">Mulai Pekerjaan:</label>
                                <input type="date" id="mulai_pekerjaan" name="mulai_pekerjaan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="selesai_pekerjaan">Selesai Pekerjaan:</label>
                                <input type="date" id="selesai_pekerjaan" name="selesai_pekerjaan" class="form-control" required>
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
                <h2>Data Pekerjaan</h2>
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
                                <th>Proyek</th>
                                <th>Pekerjaan</th>
                                <th>No. SPK</th>
                                <th>Nilai Pekerjaan</th>
                                <th>Mulai Pekerjaan</th>
                                <th>Selesai Pekerjaan</th>
                                <th>Progres</th>
                                <th>Status</th>
                                <th class="action-col" style="position: sticky; right: 0; z-index: 1; background: #fff">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listPekerjaan as $kerja )
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
                                <td><span>{{ $kerja->project['project'] }}</span></td>
                                <td><span>{{ $kerja->pekerjaan }}</span></td>
                                <td>{{ $kerja->no_spk }}</td>
                                <td class="text-right">{{ number_format($kerja->nilai_pekerjaan, 0) }}</td>
                                <td>{{ $kerja->mulai_pekerjaan }}</td>
                                <td>{{ $kerja->selesai_pekerjaan }}</td>
                                <td>{{ $kerja->progres }}</td>
                                <td>{{ $kerja->status }}</td>
                                <td style="position: sticky; right: 0; z-index: 1; background: #fff">
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection