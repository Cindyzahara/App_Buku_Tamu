@extends('layout.main')
<title>Form Edit Data</title>
@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit Data Tamu</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          {{-- <form role="form" id="quickForm"> --}}
            <form action="{{ route('data_tamu.update', $dt->id) }}" method="post">
              @csrf @method('PUT')
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" value="{{ $dt->nama }}" class="form-control" placeholder="Enter nama">
              </div>
              <div class="form-group">
                <label>Jenis Kelamin</label>
                <select class="form-control select2" name="jk" style="width: 100%;">
                  <option selected="selected">--pilih--</option>
                  <option value="perempuan">Perempuan</option>
                  <option value="laki-laki">Laki-laki</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nama">Tempat Tanggal Lahir</label>
                <input type="text" name="ttl" value="{{ $dt->ttl }}" class="form-control" placeholder="Enter TTL">
              </div>
              <div class="form-group">
                <label>Jabatan</label>
                <select class="form-control select2" name="jabatan" style="width: 100%;">
                  <option selected="selected">--pilih--</option>
                  <option value="PP">PP</option>
                  <option value="CGP">CGP</option>
                  <option value="Fasilitator">Fasilitator</option>
                  <option value="BBGP">BBGP</option>
                  <option value="DISDIK">DISDIK</option>
                  <option value="Pengunjung">Pengunjung</option>
                </select>
              </div>
              <div class="form-group">
                <label>CGP Angkatan : </label>
                <select class="form-control select2" name="angkatan" style="width: 100%;">
                  <option selected="selected">--pilih--</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                  <option value="4">4</option>
                  <option value="5">5</option>
                  <option value="6">6</option>
                  <option value="7">7</option>
                  <option value="8">8</option>
                  <option value="9">9</option>
                  <option value="10">10</option>
                </select>
              </div>
              <div class="form-group">
                <label for="nama">Alamat</label>
                <input type="textarea" name="alamat" value="{{ $dt->alamat }}" class="form-control" placeholder="Enter Alamat">
              </div>
              <div class="form-group">
                <label for="nama">No Telepon</label>
                <input type="number" name="no_tlp" value="{{ $dt->no_tlp }}" class="form-control" placeholder="Enter No Telepon">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
            </form>
          {{-- </form> --}}
        </div>
        <!-- /.card -->
        </div>
      <!--/.col (left) -->
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>
<!-- /.content -->
</div>
<script>
// $(document).ready(function () {
//   $.validator.setDefaults({
//     submitHandler: function () {
//       alert( "Form successful submitted!" );
//     }
//   });
//   $('#quickForm').validate({
//     rules: {
//       email: {
//         required: true,
//         email: true,
//       },
//       password: {
//         required: true,
//         minlength: 5
//       },
//       terms: {
//         required: true
//       },
//     },
//     messages: {
//       email: {
//         required: "Please enter a email address",
//         email: "Please enter a vaild email address"
//       },
//       password: {
//         required: "Please provide a password",
//         minlength: "Your password must be at least 5 characters long"
//       },
//       terms: "Please accept our terms"
//     },
//     errorElement: 'span',
//     errorPlacement: function (error, element) {
//       error.addClass('invalid-feedback');
//       element.closest('.form-group').append(error);
//     },
//     highlight: function (element, errorClass, validClass) {
//       $(element).addClass('is-invalid');
//     },
//     unhighlight: function (element, errorClass, validClass) {
//       $(element).removeClass('is-invalid');
//     }
//   });
// });
</script>
@endsection