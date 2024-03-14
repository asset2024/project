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
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#addcontact">Add New</button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tab navigation -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item">
        <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">SPK</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false">Cash In</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Cash Out</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="tab4-tab" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false">Invoice</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="tab5-tab" data-toggle="tab" href="#tab5" role="tab" aria-controls="tab5" aria-selected="false">Dokumentasi</a>
    </li>
    <!-- Tambahkan tab tambahan di sini sesuai kebutuhan -->
</ul>

<!-- Konten tab -->
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
        <!-- Konten untuk tab 1 -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                <label class="fancy-checkbox">
                                    <input class="select-all" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                            </th>
                            <th>Pekerjaan</th>
                            <th>No. SPK</th>
                            <th>Nilai Pekerjaan</th>
                            <th>Mulai Pekerjaan</th>
                            <th>Selesai Pekerjaan</th>
                            <th>Progres</th>
                            <th>Status</th>
                            <th>Action</th>
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
                            
                            <td><span>Pemasangan Choke Housing</span></td>
                            <td><span>SPK-02/ENM/I/2022</span></td>
                            <td>50.000.000</td>
                            <td>30 Januari 2022</td>
                            <td>30 Januari 2023</td>
                            <td>365</td>
                            <td>DONE</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                        <tr>
                            <td class="width45">
                                <label class="fancy-checkbox">
                                    <input class="checkbox-tick" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                                
                            </td>
                            
                            <td><span>Pemasangan Pipa</span></td>
                            <td><span>SPK-03/ENM/I/2022</span></td>
                            <td>50.000.000</td>
                            <td>30 Januari 2022</td>
                            <td>30 Januari 2023</td>
                            <td>365</td>
                            <td>DONE</td>
                            <td>
                                <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                            </td>
                        </tr>
                    </tbody>
                </table>
                
                <!-- Tabel untuk tab 1 -->
                <div class="card">
                    
                    <!-- Isi tabel untuk tab 1 -->
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
        <!-- Konten untuk tab 2 -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                <label class="fancy-checkbox">
                                    <input class="select-all" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                            </th>
                            <th>Tanggal</th>
                            <th>Cash Out</th>
                            <th>Detail</th>
                            <th>Nominal</th>
                            <th>Catatan</th>
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
                                <h6 class="mb-0">13 Maret 2024</h6>
                                
                            </td>
                            <td><span>-</span></td>
                            <td><span>-</span></td>
                            <td>50.000.000</td>
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
                                <h6 class="mb-0">13 Maret 2024</h6>
                                
                            </td>
                            <td><span>-</span></td>
                            <td><span>-</span></td>
                            <td>50.000.000</td>
                            <td>Lunas</td>
                        </tr>
                    </tbody>
                </table>
                <!-- Tabel untuk tab 2 -->
                <div class="card">
                    <!-- Isi tabel untuk tab 2 -->
                </div>
            </div>
        </div>
    </div>
    <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
        <!-- Konten untuk tab 3 -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                    <thead class="thead-dark">
                        <tr>
                            <th>
                                <label class="fancy-checkbox">
                                    <input class="select-all" type="checkbox" name="checkbox">
                                    <span></span>
                                </label>
                            </th>
                            <th>Tanggal</th>
                            <th>Cash Out</th>
                            <th>Detail</th>
                            <th>Nominal</th>
                            <th>Catatan</th>
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
                                <h6 class="mb-0">13 Maret 2024</h6>
                                
                            </td>
                            <td><span>-</span></td>
                            <td><span>-</span></td>
                            <td>50.000.000</td>
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
                                <h6 class="mb-0">13 Maret 2024</h6>
                                
                            </td>
                            <td><span>-</span></td>
                            <td><span>-</span></td>
                            <td>50.000.000</td>
                            <td>Lunas</td>
                           
                        </tr>
                    </tbody>
                </table>
                <!-- Tabel untuk tab 3 -->
                <div class="card">
                    <!-- Isi tabel untuk tab 3 -->
                </div>
            </div>
        </div>
    </div>
    <!-- Tambahkan konten tab tambahan di sini sesuai kebutuhan -->
    <div class="tab-pane fade" id="tab4" role="tabpanel" aria-labelledby="tab4-tab">
        <!-- Konten untuk tab 3 -->
        <div class="row clearfix">
            <div class="col-lg-12">
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
                                <h6 class="mb-0">6 Maret 2022</h6>
                                
                            </td>
                            <td><span>LA-0216</span></td>
                            <td><span>x</span></td>
                            <td>300.000</td>
                            <td>Lunas</td>
                            
                        </tr>
                    </tbody>
                </table>
                
                <div class="card">
                    
                </div>
            </div>
        </div>
    </div>

    {{-- tab 5 --}}
    <div class="tab-pane fade" id="tab5" role="tabpanel" aria-labelledby="tab5-tab">
        <!-- Konten untuk tab 3 -->
        <div class="row clearfix">
            <div class="col-lg-12">
                <table class="table table-hover js-basic-example dataTable table-custom table-striped m-b-0 c_list">
                    <thead class="thead-dark">
                        <tr>
                            
                            
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="width45">
                                
                                
                            </td>
                           
                            
                        </tr>
                        <tr>
                            <td class="width45">
                               
                               
                            </td>
                            
                            
                        </tr>
                    </tbody>
                </table>
                <!-- Tabel untuk tab 3 -->
                <div class="card">
                    <!-- Isi tabel untuk tab 3 -->
                </div>
            </div>
        </div>
    </div>

@endsection
