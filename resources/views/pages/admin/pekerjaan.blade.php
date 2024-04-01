@extends('layout.admin')
@section('content')
<div class="block-header">
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteForm = document.getElementById('deleteForm');
            var deleteButton = document.getElementById('deleteButton');
        
            deleteButton.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default button behavior
                
                // Show confirmation dialog with SweetAlert
                swal({
                    title: "Are you sure?",
                    text: "This action will change the data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        // If confirmed, submit the form
                        deleteForm.submit();
                    }
                });
            });
        });
        </script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var deleteForm = document.getElementById('deleteForm');
            var deleteButton = document.getElementById('deleteButton');
        
            deleteButton.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent default button behavior
                
                // Show confirmation dialog with SweetAlert
                swal({
                    title: "Are you sure?",
                    text: "This action will change the data!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {
                        // If confirmed, submit the form
                        deleteForm.submit();
                    }
                });
            });
        });
        </script>
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
                                <label for="id">Proyek:</label>
                                <select id="project_id" name="project_id" class="form-control" required>
                                    <option value="" selected disabled>Pilih Proyek</option>
                                    @foreach($listProject as $project)
                                    <option value="{{ $project->id }}">{{ $project->project }}</option>
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
                                <label for="termin_inv">Termin Invoice:</label>
                                <select id="termin_inv" name="termin_inv" class="form-control" required>
                                    <option value="">Pilih Termin Invoice</option> <!-- Opsi default -->
                                    @for ($i = 1; $i <= 10; $i++)
                                        <option value="{{ $i }}">{{ $i }}</option> <!-- Opsi dari 1 hingga 10 -->
                                    @endfor
                                </select>
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
                                <th>Termin Invoice</th>
                                <th>Waktu Pekerjaan</th>                                
                                <th>Progress</th>
                                <th class="action-col" style="position: sticky; right: 0; z-index: 1; text-align: center;">Aksi</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($listPekerjaan as $kerja)
                            @if ($kerja->status== 1)
                            
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
                                <td>{{ $kerja->termin_invoice }}</td>
                                <td>{{ \Carbon\Carbon::parse($kerja->mulai_pekerjaan)->format('j M Y') }}-<br>
                                {{ \Carbon\Carbon::parse($kerja->selesai_pekerjaan)->format('j M Y') }}</td>

                                <td>{{ $kerja->progres }}%</td>
                                {{-- <td>{{ $kerja->status }}</td> --}}
                                
                                <td style="position: sticky; right: 0; z-index: 1; background: #fff">
                                    <div style="display: flex; gap: 5px;">
                                        <!-- Button Edit -->                                       
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editModal{{ $kerja->id }}"><i class="fa fa-edit"></i></button>
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#deleteModal{{ $kerja->id }}"><i class="fa fa-trash"></i></button>
                                </td>
                                        <!-- Button Delete -->                                                                             
                                        
                                        {{-- <form id="deleteForm" action="{{ route('deletekerja', $kerja->id) }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <button class="btn btn-sm btn-outline-danger float-right js-sweetalert" type="submit" data-type="confirm"  title="Delete" value="submit"><i class="icon-trash"></i></button>
                                        </form> --}}
                                        <div class="modal fade" id="deleteModal{{ $kerja->id }}" tabindex="-1"         role="dialog" aria-labelledby="deleteModalLabel{{ $kerja->id }}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="deleteModalLabel{{ $kerja->id }}">Hapus Data Pekerjaan</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <form method="POST" action="{{ route('deletekerja', ['id' => $kerja->id]) }}">
                                                            @csrf
                                                            @method('PUT')                                                            
                                                            <div class="form-group">
                                                                <h6 for="status">Apa anda yakin untuk menghapus data ?</h6>                                                                
                                                            </div>
                                                            <div class="form-group">                                                    
                                                                <input type="hidden" id="status" name="status" class="form-control" value="{{ $kerja->status }}" required>
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
                            <div class="modal fade" id="editModal{{ $kerja->id }}" tabindex="-1"         role="dialog" aria-labelledby="editModalLabel{{ $kerja->id }}" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel{{ $kerja->id }}">Form Edit Data Pekerjaan</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('update_pekerjaan', ['id' => $kerja->id]) }}">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="project">Project:</label>
                                                    <select id="project" name="project" class="form-control">
                                                        @foreach ($listProject as $proj)
                                                        <option value="{{ $proj->id }}" {{ $kerja->project_id == $proj->id ? 'selected' : '' }}>
                                                            {{ $proj->project }}
                                                        </option>
                                                        @endforeach
                                                    </select>
                                                </div>

                                                <div class="form-group">
                                                    <label for="pekerjaan">Pekerjaan:</label>
                                                    <input type="text" id="pekerjaan" name="pekerjaan" class="form-control" value="{{ $kerja->pekerjaan }}" required>
                                                </div>
                                                <div class="form-group">

                                                    <label for="no_spk">No. SPK:</label>
                                                    <input type="text" id="no_spk" name="no_spk" class="form-control"
                                                    value="{{ $kerja->no_spk }}" required>


                                                </div>
                                                <div class="form-group">
                                                    <label for="nilai_pekerjaan">Nilai Pekerjaan:</label>
                                                    <input type="text" id="nilai_pekerjaan" name="nilai_pekerjaan" class="form-control" value="{{ number_format($kerja->nilai_pekerjaan, 0) }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="termin_inv">Termin Invoice:</label>
                                                    <input type="text" id="termin_inv" name="termin_inv" class="form-control" value="{{ $kerja->termin_inv }}" required>
                                                </div>

                                                <div class="form-group">
                                                    <label for="mulai_pekerjaan">Mulai Pekerjaan:</label>
                                                    <input type="date" id="mulai_pekerjaan" name="mulai_pekerjaan" class="form-control" value="{{ $kerja->mulai_pekerjaan }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="selesai_pekerjaan">Selesai pekerjaan:</label>
                                                    <input type="date" id="selesai_pekerjaan" name="selesai_pekerjaan" class="form-control" value="{{ $kerja->selesai_pekerjaan }}" required>
                                                </div>
                                                <div class="form-group">
                                                    <label for="progres">Progres:</label>
                                                    <input type="text" id="progres" name="progres" class="form-control" value="{{ $kerja->progres }}" required>
                                                </div>
                                                <div class="form-group">                                                    
                                                    <input type="hidden" id="status" name="status" class="form-control" value="{{ $kerja->status }}" required>
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