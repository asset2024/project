@extends('layout.admin')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>{{$title}}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Finance</li>
                <li class="breadcrumb-item active">Invoice</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inputModal">Add New</button>
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
                            <form method="POST" action="#" id="inputForm">
                                @csrf
                                
                                <div class="form-group">
                                    {{-- <label for="project_id">Project:</label>
                                    <select id="project_id" name="project_id" class="form-control" required>
                                        <option value="" selected disabled>Select Project</option>
                                        @foreach($listProject as $project)
                                            <option value="{{ $project->project_id }}">{{ $project->project }}</option>
                                        @endforeach
                                    </select> --}}
                                <div class="form-group">
                                        <label for="pekerjaan">Tanggal:</label>
                                        <input type="date" id="pekerjaan" name="pekerjaan" class="form-control" required>
                                </div>
                                </div>
                                <div class="form-group">
                                    <label for="no_spk">No SPK:</label>
                                    <input type="text" id="no_spk" name="no_spk" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="tgl">Tanggal:</label>
                                    <input type="date" id="nilai_pekerjaan" name="nilai_pekerjaan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="mulai_pekerjaan">Invoice:</label>
                                    <input type="text" id="mulai_pekerjaan" name="mulai_pekerjaan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai_pekerjaan">Detail:</label>
                                    <input type="text" id="selesai_pekerjaan" name="selesai_pekerjaan" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="selesai_kontrak">Nominal:</label>
                                    <input type="text" id="progres" name="progres" class="form-control" required>
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
                                <th>Tgl</th>
                                <th>No. SPK</th>
                                <th>Invoice</th>
                                <th>Detail</th>
                                <th>Nominal</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="width45">
                                    <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                    
                                </td>
                                <td>
                                    <h6 class="mb-0">1 Februari 2023</h6>
                                    
                                </td>
                                <td><span>SPK-01/III/2024</span></td>
                                <td><span>LA-0215</span></td>
                                <td><span>100</span></td>
                                <td>500.000</td>
                                <td>Lunas</td>
                               
                            </tr>
                            <tr>
                                <td class="width45">
                                    <label class="fancy-checkbox">
                                        <input class="checkbox-tick" type="checkbox" name="checkbox">
                                        <span></span>
                                    </label>
                                    
                                </td>
                                <td>
                                    <h6 class="mb-0">1 Februari 2023</h6>
                                    
                                </td>
                                <td><span>SPK-01/III/2024</span></td>
                                <td><span>LA-0215</span></td>
                                <td><span>100</span></td>
                                <td>500.000</td>
                                <td>Lunas</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection