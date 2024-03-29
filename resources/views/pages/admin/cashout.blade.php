@extends('layout.admin')
@section('content')
<div class="block-header">
    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12">
            <h2>{{$title}}</h2>
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html"><i class="fa fa-dashboard"></i></a></li>
                <li class="breadcrumb-item">Finance</li>
                <li class="breadcrumb-item active">Cash Out</li>
            </ul>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12">
            <div class="d-flex flex-row-reverse">
                <div class="page_action">
                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#inputModal">Add New</button>
                </div>
            </div>
        </div>
                    <div class="modal fade" id="inputModal" tabindex="-1" role="dialog" aria-labelledby="inputModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="inputModalLabel">Form Input Data Cash Out</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('store_cashout') }}" id="inputForm">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <label for="id">Pekerjaan:</label>
                                            <select id="pekerjaan_id" name="pekerjaan_id" class="form-control" required>
                                                <option value="" selected disabled>Select pekerjaan</option>
                                                @foreach($listPekerjaan as $pekerjaan)
                                                    <option value="{{ $pekerjaan->id }}">{{ $pekerjaan->pekerjaan }}</option>
                                                @endforeach
                                            </select>
                                        <div class="form-group">
                                                <label for="tgl_transaksi">Tanggal Transaksi:</label>
                                                <input type="date" id="tgl_transaksi" name="tgl_transaksi" class="form-control" required>
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="transaksi">Transaksi:</label>
                                            <input type="text" id="transaksi" name="transaksi" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="nominal">Nominal:</label>
                                            <input type="text" id="nominal" name="nominal" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="tujuan">Tujuan:</label>
                                            <input type="text" id="tujuan" name="tujuan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="catatan">Catatan:</label>
                                            <input type="text" id="catatan" name="catatan" class="form-control" required>
                                        </div>
                                        <div class="form-group">
                                            
                                            <input type="hidden" id="status" name="status" class="form-control" required>
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
                                <th>Pekerjaan</th>
                                <th>Tanggal Transaksi</th>
                                <th>Transaksi</th>
                                <th>Nominal</th>
                                <th>Tujuan</th>
                                <th>Catatan</th>
                               
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($cashout as $cashout )
                            @if($cashout->status== 1)
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
                                <td><span>{{ $cashout->pekerjaan['pekerjaan'] }}</span></td>
                                <td><span>{{ $cashout->tgl_transaksi }}</span></td>
                                <td>{{ $cashout->transaksi }}</td>
                                <td class="text-right">{{ number_format($cashout->nominal, 0) }}</td>
                                <td>{{ $cashout->tujuan }}</td>
                                <td>{{ $cashout->catatan }}</td>
                                
                                <td>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $cashout->id }}"><i class="fa fa-edit"></i></button>
                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal{{ $cashout->id }}"><i class="fa fa-trash"></i></button>
                                </td>
                            </tr>
                            <div class="modal fade" id="deleteModal{{ $cashout->id }}" tabindex="-1"         role="dialog" aria-labelledby="deleteModalLabel{{ $cashout->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="deleteModalLabel{{ $cashout->id }}">Hapus Data Cash In</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('deletecashout', ['id' => $cashout->id]) }}">
                                                @csrf
                                                @method('PUT')                                                            
                                                <div class="form-group">
                                                    <h6 for="status">Apa anda yakin untuk menghapus data ?</h6>                                                                
                                                </div>
                                                <div class="form-group">                                                    
                                                    <input type="hidden" id="status" name="status" class="form-control" value="{{ $cashout->status }}" required>
                                                </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tidak</button>
                                            <button type="submit" class="btn btn-primary">Ya</button>
                                        </div>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            {{-- modal edit --}}
                            <div class="modal fade" id="editModal{{ $cashout->id }}" tabindex="-1" role="dialog" aria-labelledby="editModalLabel{{ $cashout->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $cashout->id }}">Form Edit Data Cash In</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('update_cashout', ['id' => $cashout->id]) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="id">Pekerjaan:</label>
                                                    <select id="pekerjaan_id" name="pekerjaan_id" class="form-control">
                                                        @foreach ($listPekerjaan as $kerja)
                                                            <option value="{{ $kerja->id }}" {{ $cashout->pekerjaan_id == $kerja->id ? 'selected' : '' }}>
                                                                {{ $kerja->pekerjaan }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="tgl_transaksi">Tanggal Transaksi:</label>
                                                    <input type="date" id="tgl_transaksi" name="tgl_transaksi" class="form-control"  value="{{ $cashout->tgl_transaksi }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="transaksi">Transaksi:</label>
                                                    <input type="text" id="transaksi" name="transaksi" class="form-control"
                                                    value="{{ $cashout->transaksi }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="nominal">Nominal:</label>
                                                    <input type="text" id="nominal" name="nominal" class="form-control" 
                                                    value="{{ number_format($cashout->nominal, 0) }}"required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="dari">Tujuan:</label>
                                                    <input type="text" id="tujuan" name="tujuan" class="form-control" value="{{ $cashout->tujuan }}"required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="catatan">Catatan:</label>
                                                    <input type="text" id="catatan" name="catatan" class="form-control" value="{{ $cashout->catatan }}"required>
                                                </div>
                                                <div class="form-group">
                                                    
                                                    <input type="hidden" id="status" name="status" class="form-control" 
                                                    value="{{ $cashout->status }}"required>
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
                                @endif
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection