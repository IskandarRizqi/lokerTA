@extends('front.profile.index')
@section('content-user')
<div class="row">
    @foreach($data as $key => $v)
    <a href="/detail-loker/{{$v->loker->id}}">
        <div class="card mb-2" style="border-radius: 10px;">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-9">
                        <p class="m-0">{{$v->loker->namaperusahaan}}</p>
                    </div>
                    <div class="col-lg-3 text-right">
                        @if($v->status == 0)
                        <span class="badge rounded-pill text-bg-secondary">Proses</span>
                        @endif
                        @if($v->status == 1)
                        <span class="badge rounded-pill text-bg-success">Diterima</span>
                        @endif
                        @if($v->status == 99)
                        <span class="badge rounded-pill text-bg-danger">Ditolak</span>
                        @endif
                    </div>
                    <div class="col-lg-3">
                        <img src="/gambar?rf={{$v->loker->gambar}}" alt="" width="100%">
                    </div>
                    <div class="col-lg-9">
                        <p class="">{!!$v->loker->deskripsi!!}</p>
                    </div>
                </div>
                <div class="d-flex">
                    <div class="jamkerja" style="font-size: 12px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M12 5c-4.411 0-8 3.589-8 8s3.589 8 8 8 8-3.589 8-8-3.589-8-8-8zm0 14c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6z">
                            </path>
                            <path d="M11 9h2v5h-2zM9 2h6v2H9zm10.293 5.707-2-2 1.414-1.414 2 2z">
                            </path>
                        </svg>
                        <span class="text-capitalize">{{$v->loker->jam}}</span>
                    </div>
                    <div class="pekerjaan ml-2" style="font-size: 12px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="M20 6h-3V4c0-1.103-.897-2-2-2H9c-1.103 0-2 .897-2 2v2H4c-1.103 0-2 .897-2 2v11c0 1.103.897 2 2 2h16c1.103 0 2-.897 2-2V8c0-1.103-.897-2-2-2zm-5-2v2H9V4h6zM8 8h12v3H4V8h4zM4 19v-6h6v2h4v-2h6l.001 6H4z">
                            </path>
                        </svg>
                        <span class="text-capitalize">{{$v->loker->kategori}}</span>
                    </div>
                    <div class="alamat ml-2" style="font-size: 12px">
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24"
                            style="fill: rgba(0, 0, 0, 1);transform: ;msFilter:;">
                            <path
                                d="m12 17 1-2V9.858c1.721-.447 3-2 3-3.858 0-2.206-1.794-4-4-4S8 3.794 8 6c0 1.858 1.279 3.411 3 3.858V15l1 2zM10 6c0-1.103.897-2 2-2s2 .897 2 2-.897 2-2 2-2-.897-2-2z">
                            </path>
                            <path
                                d="m16.267 10.563-.533 1.928C18.325 13.207 20 14.584 20 16c0 1.892-3.285 4-8 4s-8-2.108-8-4c0-1.416 1.675-2.793 4.267-3.51l-.533-1.928C4.197 11.54 2 13.623 2 16c0 3.364 4.393 6 10 6s10-2.636 10-6c0-2.377-2.197-4.46-5.733-5.437z">
                            </path>
                        </svg>
                        {{$v->loker->tempatperusahaan}}
                    </div>
                    <div class="created-at ml-2" style="font-size: 12px">
                        Di lamar pada tanggal : {{$v->created_at->format('d-m-Y')}}
                    </div>
                </div>
            </div>
        </div>
    </a>
    @endforeach
</div>
@endsection