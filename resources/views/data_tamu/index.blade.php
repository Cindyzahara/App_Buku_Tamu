@extends('layout.main')

@section('content')
    
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Data Buku Tamu</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Data Buku Tamu</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  {{-- content --}}
<section class="content">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">List Tamu</h3>
          @include('_component.message')
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <table class="table table-bordered table-striped" id="example1" >
            <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jenis Kelamin</th>
              <th>TTL</th>
              <th>Jabatan</th>
              <th>CGP Angkatan</th>
              <th>Alamat</th>
              <th>No Tlp</th>
              <th>Action</th>
            </tr>
            </thead>
            <tbody>
              @foreach ($tamu as $dt)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $dt->nama??'' }}</td>
                <td>{{ $dt->jk??'' }}</td>
                <td>{{ $dt->ttl??'' }}</td>
                <td>{{ $dt->jabatan??'' }}</td>
                <td>{{ $dt->angkatan??'' }}</td>
                <td>{{ $dt->alamat??'' }}</td>
                <td>{{ $dt->no_tlp??'' }}</td>
                <td> 
                  <a href="{{ route('data_tamu.edit', $dt->id) }}" title="Edit" class="btn btn-outline-primary btn-sm"><i class="fa fa-edit"></i></a>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>

<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>

@endsection