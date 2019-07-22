<?php $this->load->view('inc/header.php'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Cerita
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active"><a href="#">Cerita</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?=$msg?>
      <div class="row">
        <div class="col-md-12">
       
          <!-- /.box -->

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Daftar Cerita
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
        
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">

            <table  id="datatable" class="table">
               <thead >
                 <tr>
                   <th>User</th>
                   <th>judul</th>
                   <th>kategori</th>
                   <th>Terakhir Update</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <tbody>

                  <?php foreach ($cerita as $value): ?>
                    
                 <tr >
                  <td><?=$value['username']?></td>
                  <td> <?=$value['judul']?>  </td>
                  <td><?=$value['nama_kategori']?></td>
                  <td><?=$value['date']?></td>

                  <td> 
                    <a class="btn btn-primary" href="<?=base_url('admin/home/view/').$value['id_cerita']?>">Detail</a> 
                    <a class="btn btn-<?=$value['status'] == 'enable' ? 'success' : 'danger' ?>" href="<?=base_url('admin/home/toggle/').$value['id_cerita']?>"><?=$value['status'] == 'enable' ? 'Enabled' : 'Disabled' ?></a> 
                    <!-- <a class="btn btn-danger" data-toggle="modal" data-target="#modalku" data-href="hapus/">hapus</a> -->
                  </td>
                 </tr>
                  <?php endforeach ?>
               

                     
               </tbody>
             </table>             
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
     
      <!-- ./row -->
    </section>
       <div id="modalku" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalku" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title">Peringatan!</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <p>data yang sudah di hapus tidak dapat dikembalikan.</p>
                          <p>Apakah anda yakin ingin melanjutkan menghapus data?</p>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <a  class="btn btn-primary btn-ok">Hapus</a>
                        </div>
                      </div>
                    </div>
                  </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $this->load->view('inc/footer2.php'); ?>
 