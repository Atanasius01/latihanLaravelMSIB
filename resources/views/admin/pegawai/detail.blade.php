@extends('admin.layout.appadmin')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <h2 align="center">Detail</h2>
    <div class="container">
        <div class="row">
        <div class="col-md-5">
        <div class="project-info-box mt-0">
        @foreach ($pegawai as $p)
        <h5>PROJECT DETAILS</h5>
        <p class="mb-0">Vivamus pellentesque, felis in aliquam ullamcorper, lorem tortor porttitor erat, hendrerit porta nunc tellus eu lectus. Ut vel imperdiet est. Pellentesque condimentum, dui et blandit laoreet, quam nisi tincidunt tortor.</p>
        </div>
        <input type="hidden" value="{{$p->id}}">
        <div class="project-info-box">
        <p><b>NIP:</b> {{$p->nip}}</p>
        <p><b>Nama:</b> {{$p->nama}}</p>
        <p><b>ID:</b> {{$p->id}}</p>
        <p><b>Tanggal Lahir:</b> {{$p->tgl_lahir}}</p>
        <p><b>Tempat Lahir:</b> {{$p->tmp_lahir}}</p>
        <p><b>Kekayaan : </b> {{$p->kekayaan}}</p>
        <p><b>Jenis Kelamin:</b> {{$p->gender}}</p>
        </div>
        <div class="project-info-box mt-0 mb-0">
        <p class="mb-0">
        <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
        <a href="#x" class="btn btn-xs btn-facebook btn-circle btn-icon mr-5 mb-0"><i class="fab fa-facebook-f"></i></a>
        <a href="#x" class="btn btn-xs btn-twitter btn-circle btn-icon mr-5 mb-0"><i class="fab fa-twitter"></i></a>
        <a href="#x" class="btn btn-xs btn-pinterest btn-circle btn-icon mr-5 mb-0"><i class="fab fa-pinterest"></i></a>
        <a href="#x" class="btn btn-xs btn-linkedin btn-circle btn-icon mr-5 mb-0"><i class="fab fa-linkedin-in"></i></a>
        </p>
        </div>
        </div>
        <div class="col-md-7">
            @empty($p->foto)
            <img src="{{url('admin/image/noPhoto.jpg')}}" width="50%">
        @else
        <img src="{{url('admin/image')}}/{{$p->foto}}" width="50%">
        @endempty
        <div class="project-info-box">
            <p><b>Jabatan:</b> {{$p->jabatan}}</p>
            <p><b>Divisi:</b> {{$p->divisi }}</p>
            
            <a href="{{url('admin/pegawai')}}"><button class="btn btn-primary btn-lg">Back</button></a>             
        </div>
        </div>
        </div>
        </div>
        <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript">            
        </script>
@endforeach
@endsection