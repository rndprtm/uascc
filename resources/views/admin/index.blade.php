<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Direktori UMKM</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('assets')}}/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('assets')}}/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
@include('admin.header')

  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  

    <!-- Main content -->
    <section class="content">
<br>      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
        <div class="container-fluid px-4">
          <div class="row">
              <div class="col-xl-4 col-md-6">
                  <div class="card text-white mb-4">
                      <div class="card-body text-dark">Berisi Data Kabupaten Kota</div>
                      <div class="card-footer bg-primary d-flex align-items-center justify-content-between">
                        <a href="/admin/kabkota" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6">
                  <div class="card text-white mb-4">
                      <div class="card-body text-dark">Berisi Data Kategori UMKM</div>
                      <div class="card-footer bg-warning d-flex align-items-center justify-content-between">
                        <a href="/admin/kategoriumkm" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6">
                  <div class="card text-white mb-4">
                      <div class="card-body text-dark">Berisi Data Pembina</div>
                      <div class="card-footer bg-success d-flex align-items-center justify-content-between">
                        <a href="/admin/pembina" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="row">
          <div class="col-xl-4 col-md-6">
                  <div class="card text-white mb-4">
                      <div class="card-body text-dark">Berisi Data Provinsi</div>
                      <div class="card-footer bg-danger d-flex align-items-center justify-content-between">
                        <a href="/admin/provinsi" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </div>
              <div class="col-xl-4 col-md-6">
                  <div class="card text-white mb-4">
                      <div class="card-body text-dark">Berisi Data UMKM</div>
                      <div class="card-footer bg-info d-flex align-items-center justify-content-between">
                        <a href="/admin/umkm" class="small-box-footer">Lihat Detail <i class="fas fa-arrow-circle-right"></i></a>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

@include('admin.footer')
   

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('assets')}}/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('assets')}}/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('assets')}}/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('assets')}}/js/demo.js"></script>
</body>
</html>
