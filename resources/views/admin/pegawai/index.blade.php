@extends('admin.layout.appadmin')

@section('content')
                        <h1 class="mt-4">Tabel Pegawai</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                                DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the
                                <a target="_blank" href="https://datatables.net/">official DataTables documentation</a>
                                .
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-header">
                                <!-- <i class="fas fa-table me-1"></i>
                                DataTable Example -->
                                <a href="{{url('admin/pegawai/create')}}" class="btn btn-primary btn-sm">Tambah</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                        <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Divisi</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>NIP</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Divisi</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Tempat Lahir</th>
                                            <th>Tanggal Lahir</th>
                                            <th>Alamat</th>
                                            <th>Foto</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @php
                                        $no = 1;

                                        @endphp
                                        @foreach($pegawai as $p)
                                        <tr>
                                            <td>{{$no}}</td>
                                            <td>{{$p->nip}}</td>
                                            <td>{{$p->nama}}</td>
                                            <td>{{$p->jabatan}}</td>
                                            <td>{{$p->divisi}}</td>
                                            <td>{{$p->gender}}</td>
                                            <td>{{$p->tmp_lahir}}</td>
                                            <td>{{$p->tgl_lahir}}</td>
                                            <td>{{$p->alamat}}</td>
                                            <td>
                                                @empty($p->foto)
                                                    <img src="{{url('admin/image/noPhoto.jpg')}}" width="50%">
                                                @else
                                                <img src="{{url('admin/image')}}/{{$p->foto}}" width="50%">
                                                @endempty
                                            </td>
                                            <td>
                                                <form action="#" method="POST">
                                                    <a href="{{url('admin/pegawai/show/'.$p->id)}}" class="btn btn-info btn-sm">Detail</a>
                                                    <a href="{{url('admin/pegawai/edit/'.$p->id)}}" class="btn btn-warning btn-sm">Ubah</a>
                                                    <button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal{{$p->id}}">
                                                        Hapus
                                                      </button>
                                                      
                                                      <!-- Modal -->
                                                      <div class="modal fade" id="exampleModal{{$p->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                          <div class="modal-content">
                                                            <div class="modal-header">
                                                              <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">
                                                              Apakah anda sudah yakin untuk menghapus {{$p->nama}} ?
                                                            </div>
                                                            <div class="modal-footer">
                                                              <button type="button" class="btn btn-info" data-bs-dismiss="modal">Kembali</button>
                                                              <a href="{{url('admin/pegawai/delete/'.$p->id)}}" class="btn btn-danger">Hapus</a>
                                                            </div>
                                                          </div>
                                                        </div>
                                                      </div>
                                                </form>
                                            </td>
                                        </tr>
                                        @php
                                        $no++;
                                        @endphp
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            </div>
                            </div>
@endsection