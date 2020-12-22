@extends('layout.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tabel</h5>

                <div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No. KK</th>
                                <th>Nama</th>
                                <th>NIK</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Pendidikan</th>
                                <th>Pekerjaan</th>
                                <th>Status Nikah</th>
                                <th>Status Keluarga</th>
                                <th>Kewarganegaraan</th>
                                <th>Ayah</th>
                                <th>Ibu</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($penduduks as $item)
                                <tr>
                                    <td>{{$item->keluarga_id}}</td>
                                    <td>{{$item->nama}}</td>
                                    <td>{{$item->nik}}</td>
                                    <td>{{$item->tempat_lahir}}</td>
                                    <td>{{$item->tanggal_lahir}}</td>
                                    <td>{{$item->jenis_kelamin}}</td>
                                    <td>{{$item->agama}}</td>
                                    <td>{{$item->level_pendidikan_id}}</td>
                                    <td>{{$item->pekerjaan_id}}</td>
                                    <td>{{$item->status_pernikahan}}</td>
                                    <td>{{$item->status_keluarga}}</td>
                                    <td>{{$item->kewarganegaraan_id}}</td>
                                    <td>{{$item->ayah}}</td>
                                    <td>{{$item->ibu}}</td>
                                    <td>
                                        <a href="/" class="btn btn-success"><i class="fa fa-home"></i></a>
                                        <a href="/" class="btn btn-danger"><i class="fa fa-info"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
@endsection