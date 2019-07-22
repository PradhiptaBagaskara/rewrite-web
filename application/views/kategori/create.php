<?php $this->load->view('inc/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Kategori
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li ><a href="#">Kategori</a></li>
        <li class="active"><a href="#">Tambah</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
       
          <!-- /.box -->

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Tambah Kategori</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form class="form-horizontal" action="" method="POST">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama" class="col-sm-2 control-label">Nama Kategori</label>

                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Kategori">
                  </div>
                </div>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <button type="submit" class="btn btn-success">Simpan</button>
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
        </div>
        <!-- /.col-->
      </div>
     
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('inc/footer2.php'); ?>
 