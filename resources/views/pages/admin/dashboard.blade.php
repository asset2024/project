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
        </div>
    </div>
</div>
<div class="row clearfix row-deck">

    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body primary-bg text-light">
                <div class="icon"><i class="fa fa-flag"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Project</div>
                    <h1 class="number mb-0">32 </h1>
                    <small class="text-lowercase font-12" style="color: #323A45;">dari 50 Project</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body secondary-bg text-light">
                <div class="icon"><i class="fa fa-users"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Total Kontrak</div>
                    <h1 class="number mb-0">Rp. 120</h1>
                    <small class="text-lowercase">Miliar</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body bg-info text-light">
                <div class="icon"><i class="fa fa-user"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Pendapatan</div>
                    <h1 class="number mb-0">Rp. 85 </h1>
                    <small class="text-lowercase">Miliar</small>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6">
        <div class="card top_widget">
            <div class="body bg-warning text-light">
                <div class="icon"><i class="fa fa-thumbs-up"></i> </div>
                <div class="content">
                    <div class="text mb-2 text-uppercase">Outstanding</div>
                    <h1 class="number mb-0">Rp. 35</h1>
                    <small class="text-lowercase">Miliar</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">

    <div class="col-lg-9 col-md-7 col-sm-12">
        <div class="card">
            <div class="header">
                <h2>File Reports</h2>
            </div>
            <div class="body">
                <div id="area_chart"></div>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="header">
                <h2>Patients by Gander</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <div id="Use-by-gander" style="height: 16rem"></div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-12">
        <div class="card">
            <div class="header">
                <h2>Patients Status</h2>
                <ul class="header-dropdown">
                    <li class="dropdown">
                        <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"></a>
                        <ul class="dropdown-menu dropdown-menu-right">
                            <li><a href="javascript:void(0);">Action</a></li>
                            <li><a href="javascript:void(0);">Another Action</a></li>
                            <li><a href="javascript:void(0);">Something else</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <div class="body">
                <p class="float-md-right">
                    <span class="badge badge-success">3 Admit</span>
                    <span class="badge badge-default">2 Discharge</span>
                </p>
                <div class="table-responsive table_middel">
                    <table class="table m-b-0">
                        <thead class="thead-dark">
                            <tr>
                                <th>#</th>
                                <th>Patients</th>
                                <th>Adress</th>
                                <th>START Date</th>
                                <th>END Date</th>
                                <th>Priority</th>
                                <th>Progress</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><img src="../assets/images/xs/avatar3.jpg" class="rounded-circle avatar mr-2" alt="profile-image"><span>John</span></td>
                                <td><span class="text-info">70 Bowman St. South Windsor, CT 06074</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 16, 2017</td>
                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;"> <span class="sr-only">40% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td><img src="../assets/images/xs/avatar1.jpg" class="rounded-circle avatar mr-2" alt="profile-image"><span>Jack Bird</span></td>
                                <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 22, 2017</td>
                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-default">Discharge</span></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td><img src="../assets/images/xs/avatar4.jpg" class="rounded-circle avatar mr-2" alt="profile-image"><span>Dean Otto</span></td>
                                <td><span class="text-info">123 6th St. Melbourne, FL 32904</span></td>
                                <td>Sept 13, 2017</td>
                                <td>Sept 23, 2017</td>
                                <td><span class="badge badge-warning">MEDIUM</span></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100" style="width: 15%;"> <span class="sr-only">15% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td><img src="../assets/images/xs/avatar2.jpg" class="rounded-circle avatar mr-2" alt="profile-image"><span>Jack Bird</span></td>
                                <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td>Sept 17, 2017</td>
                                <td>Sept 16, 2017</td>
                                <td><span class="badge badge-success">LOW</span></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%;"> <span class="sr-only">100% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-default">Discharge</span></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td><img src="../assets/images/xs/avatar5.jpg" class="rounded-circle avatar mr-2" alt="profile-image"><span>Hughe L.</span></td>
                                <td><span class="text-info">4 Shirley Ave. West Chicago, IL 60185</span></td>
                                <td>Sept 18, 2017</td>
                                <td>Sept 18, 2017</td>
                                <td><span class="badge badge-danger">HIGH</span></td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"> <span class="sr-only">85% Complete</span> </div>
                                    </div>
                                </td>
                                <td><span class="badge badge-success">Admit</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection