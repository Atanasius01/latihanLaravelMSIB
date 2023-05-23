@php
$nama = "budi";
$nilai = 60.00;
@endphp
{{-- sruktur kendali if --}}
@if ($nilai >= 60)

@php $ket = "lulus"; @endphp
@else
@php $ket = "gagal"; @endphp
@endif
siswa {{$nama}} dengan nilai {{$nilai}} <br>
dinyatakan {{$ket}}