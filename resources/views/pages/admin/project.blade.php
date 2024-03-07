@extends('layout.admin')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>{{$title}}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Project</li>
                <li class="breadcrumb-item active">Project</li>
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
                                <th>Mulai Kontrak</th>
                                <th>Selesai Kontrak</th>
                                <th>Jml SPK</th>
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
                                    <img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar" alt="">
                                </td>
                                <td>
                                    <h6 class="mb-0">Marshall Nichols</h6>
                                    <span>marshall-n@gmail.com</span>
                                </td>
                                <td><span>LA-0215</span></td>
                                <td><span>+ 264-625-2583</span></td>
                                <td>24 Jun, 2015</td>
                                <td>Web Designer</td>
                                <td>Web Designer</td>
                                <td>Web Designer</td>
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
                                    <img src="../assets/images/xs/avatar2.jpg" class="rounded-circle avatar" alt="">
                                </td>
                                <td>
                                    <h6 class="mb-0">Susie Willis</h6>
                                    <span>sussie-w@gmail.com</span>
                                </td>
                                <td><span>LA-0216</span></td>
                                <td><span>+ 264-625-2583</span></td>
                                <td>28 Jun, 2015</td>
                                <td>Web Developer</td>
                                <td>Web Designer</td>
                                <td>Web Designer</td>
                                <td>
                                    <button type="button" class="btn btn-sm btn-outline-secondary" title="Edit"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-sm btn-outline-danger js-sweetalert" title="Delete" data-type="confirm"><i class="fa fa-trash-o"></i></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection