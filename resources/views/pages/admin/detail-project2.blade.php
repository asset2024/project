@extends('layout.admin')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>{{$title}}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Proyek</li>
                <li class="breadcrumb-item">Proyek</li>
                <li class="breadcrumb-item active">Detail</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">

                    <button type="button" class="btn btn-secondary"><i class="fa fa-send"></i> Back</button>
                </div>
                <div class="p-2 d-flex">

                </div>
            </div>
        </div>
    </div>
</div>

<div class="row clearfix">
    <div class="col-lg-4 col-md-12">
        <div class="card member-card">
            <div class="header primary-bg text-light mb-3">
                <h4 class="mt-2 mb-0">Nama Proyek</h4>
                <span>Nama Mitra</span>
            </div>
            <div class="member-img">
                <a href="javascript:void(0);"><img src="../assets/images/project/avatar.jpg" class="rounded-circle" alt="profile-image"></a>
            </div>
            <div class="body">
                <p class="text-muted mb-3">Lokasi Proyek<br> Provinsi / Negara</p>

                <div class="row">

                    <div class="col-12">
                        <h5 class="mb-1">Rp 100,656,000,000</h5>
                        <small>(Nilai Kontrak)</small>
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
                        <small class="text-muted">Lama Pekerjaan </small>
                        <p>60 Hari</p>
                        <hr>
                        <small class="text-muted">Cash In </small>
                        <p>677.000.000</p>
                        <hr>
                        <small class="text-muted">Termin Invoice </small>
                        <p>4 Termin</p>
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
                    <div class="tab-pane" id="friends">
                        <ul class="right_chat w_followers list-unstyled mb-0">
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar4.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Chris Fox</span>
                                            <span class="message">Designer, Blogger</span>
                                            <span class="badge badge-outline status"></span>
                                            <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar5.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Joge Lucky</span>
                                            <span class="message">Java Developer</span>
                                            <span class="badge badge-outline status"></span>
                                            <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar2.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Isabella</span>
                                            <span class="message">CEO, Thememakker</span>
                                            <span class="badge badge-outline status"></span>
                                            <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar1.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Folisise Chosielie</span>
                                            <span class="message">Art director, Movie Cut</span>
                                            <span class="badge badge-outline status"></span>
                                            <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="online">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar3.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Alexander</span>
                                            <span class="message">Writter, Mag Editor</span>
                                            <span class="badge badge-outline status"></span>
                                            <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="offline">
                                <a href="javascript:void(0);">
                                    <div class="media">
                                        <img class="media-object " src="../assets/images/xs/avatar10.jpg" alt="">
                                        <div class="media-body">
                                            <span class="name">@Folisise Chosielie</span>
                                            <span class="message">Art director, Movie Cut</span>
                                            <span class="badge badge-outline status"></span>
                                            <button type="button" class="btn btn-outline-primary"><i class="icon-plus"></i></button>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-8 col-md-12">
        <div class="card">
            <ul class="nav nav-tabs-new2">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#mypost">SPK</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#timeline">Cash In</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Cash Out</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Invoice</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#usersettings">Dokumentasi</a></li>
            </ul>
        </div>
        <div class="tab-content p-0">
            <div role="tabpanel" class="tab-pane blog-page active" id="mypost">
                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="../assets/images/realestate/1.jpg" alt="First slide">
                        </div>
                        <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                        </div>
                        <ul class="stats">
                            <li><a href="javascript:void(0);">General</a></li>
                            <li><a href="javascript:void(0);" class="icon-heart">28</a></li>
                            <li><a href="javascript:void(0);" class="icon-bubbles">128</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="../assets/images/realestate/2.jpg" alt="">
                        </div>
                        <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                        </div>
                        <ul class="stats">
                            <li><a href="javascript:void(0);">General</a></li>
                            <li><a href="javascript:void(0);" class="icon-heart">28</a></li>
                            <li><a href="javascript:void(0);" class="icon-bubbles">128</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="../assets/images/realestate/3.jpg" alt="">
                        </div>
                        <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                        </div>
                        <ul class="stats">
                            <li><a href="javascript:void(0);">General</a></li>
                            <li><a href="javascript:void(0);" class="icon-heart">28</a></li>
                            <li><a href="javascript:void(0);" class="icon-bubbles">128</a></li>
                        </ul>
                    </div>
                </div>
                <div class="card single_post">
                    <div class="body">
                        <div class="img-post">
                            <img class="d-block img-fluid" src="../assets/images/realestate/4.jpg" alt="">
                        </div>
                        <h3><a href="blog-details.html">All photographs are accurate</a></h3>
                        <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal</p>
                    </div>
                    <div class="footer">
                        <div class="actions">
                            <a href="javascript:void(0);" class="btn btn-outline-secondary">Continue Reading</a>
                        </div>
                        <ul class="stats">
                            <li><a href="javascript:void(0);">General</a></li>
                            <li><a href="javascript:void(0);" class="icon-heart">28</a></li>
                            <li><a href="javascript:void(0);" class="icon-bubbles">128</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="pagination pagination-primary">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="timeline">
                <div class="card">
                    <div class="body">
                        <div class="timeline-item green" date-is="20-04-2020 - Today">
                            <h5>Hello, 'Im a single div responsive timeline without media Queries!</h5>
                            <span><a href="javascript:void(0);">Elisse Joson</a> San Francisco, CA</span>
                            <div class="msg">
                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web card she has is the Lorem card.</p>
                                <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                <a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"><i class="icon-bubbles"></i> Comment</a>
                                <div class="collapse m-t-10" id="collapseExample">
                                    <div class="well">
                                        <form>
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="timeline-item blue" date-is="19-04-2020 - Yesterday">
                            <h5>Oeehhh, that's awesome.. Me too!</h5>
                            <span><a href="javascript:void(0);" title="">Katherine Lumaad</a> Oakland, CA</span>
                            <div class="msg">
                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. on the web by far... While that's mock-ups and this is politics, are they really so different? I think the only card she has is the Lorem card.</p>
                                <div class="timeline_img m-b-20">
                                    <img class="w-25" src="../assets/images/realestate/7.jpg" alt="Awesome Image">
                                    <img class="w-25" src="../assets/images/realestate/8.jpg" alt="Awesome Image">
                                </div>
                                <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                <a role="button" data-toggle="collapse" href="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1"><i class="icon-bubbles"></i> Comment</a>
                                <div class="collapse m-t-10" id="collapseExample1">
                                    <div class="well">
                                        <form>
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="timeline-item warning" date-is="21-02-2020">
                            <h5>An Engineer Explains Why You Should Always Order the Larger Pizza</h5>
                            <span><a href="javascript:void(0);" title="">Rose Rivera</a> San Francisco, CA</span>
                            <div class="msg">
                                <p>I'm speaking with myself, number one, because I have a very good brain and I've said a lot of things. I write the best placeholder text, and I'm the biggest developer on the web by far... While that's mock-ups and this is politics, is the Lorem card.</p>
                                <a href="javascript:void(0);" class="m-r-20"><i class="icon-heart"></i> Like</a>
                                <a role="button" data-toggle="collapse" href="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2"><i class="icon-bubbles"></i> Comment</a>
                                <div class="collapse m-t-10" id="collapseExample2">
                                    <div class="well">
                                        <form>
                                            <div class="form-group">
                                                <textarea rows="2" class="form-control no-resize" placeholder="Enter here for tweet..."></textarea>
                                            </div>
                                            <button class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div role="tabpanel" class="tab-pane" id="usersettings">
                <div class="card">
                    <div class="header">
                        <h2>Security Settings</h2>
                    </div>
                    <div class="body">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Current Password">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New Password">
                        </div>
                        <button class="btn btn-secondary">Save Changes</button>
                        <button class="btn btn-default">Cancel</button>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2>Account Settings</h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="First Name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="City">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea rows="4" class="form-control no-resize" placeholder="Address Line 1"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group mb-2">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" data-parsley-multiple="checkbox">
                                        <span>Profile Visibility For Everyone</span>
                                    </label>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" data-parsley-multiple="checkbox">
                                        <span>New task notifications</span>
                                    </label>
                                </div>
                                <div class="form-group mb-2">
                                    <label class="fancy-checkbox">
                                        <input type="checkbox" name="checkbox" data-parsley-multiple="checkbox">
                                        <span>New friend request notifications</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button class="btn btn-primary">Save Changes</button>
                                <button class="btn btn-default">Cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection