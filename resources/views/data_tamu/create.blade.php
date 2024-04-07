@extends('layout.main')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Input Buku Tamu</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          {{-- <form role="form" id="quickForm"> --}}
            <form action="{{ route('data_tamu.store') }}" method="post" role="form" id="quickForm">
              @csrf
            <div class="card-body">
              <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Enter nama">
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
                <input type="text" name="ttl" class="form-control" placeholder="Enter TTL">
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
                <input type="textarea" name="alamat" class="form-control" placeholder="Enter Alamat">
              </div>
              <div class="form-group">
                <label for="nama">No Telepon</label>
                <input type="number" name="no_tlp" class="form-control" placeholder="Enter No Telepon">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
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
//       nama: {
//         required: true,
//       },
//       jk: {
//         required: true,
//       },
//       ttl: {
//         required: true
//       },
//       jabatan: {
//         required: true
//       },
//       angkatan: {
//         required: true
//       },
//       alamat: {
//         required: true
//       },
//       no_tlp: {
//         required: true
//       },
//     },
//     messages: {
//       nama: {
//         required: "Please enter a nama",
      
//       },
//       jk: {
//         required: "Please enter a jenis kelamin",
//       },
//       ttl: {
//         required: "Please enter a Tempat Tanggal Lahir",
//       },
//       jabatan: {
//         required: "Please opasion a jabatan",
//       },
//       angkatan: {
//         required: "Please enter a angkatan",
//       },
//       alamat: {
//         required: "Please enter a alamat",
//       },
//       no_tlp: {
//         required: "Please enter a no telepon",
//         minlength: "Your password must be at least 13 characters long"
//       },
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
// </script>
@endsection