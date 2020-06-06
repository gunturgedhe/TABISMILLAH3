<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo base_url(); ?>/assets/img/logoo.jpg">
  <title>AdminPelaporanPMW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="http://pmw.etupolinema.org/assets/css/style.css">
</head>
<body style="background-image:url(http://pmw.etupolinema.org/assets/img/bg5.png)">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <img src="../../assets/img/logoo.jpg" alt="logoBrand" id="logoBrand" width="70" height="70">
    </div>
    <div id="page-wrapper">
        <div class="col-lg-6">
            <h1>Tambah Data Mahasiswa</h1>
        </div>
    </div>
    <!-- <ul class="nav navbar-nav">      
      <li><a href="<?php echo base_url().'index.php/dosen' ?>">DOSEN</a></li>
      <li><a href="<?php echo base_url().'index.php/mahasiswa' ?>">MAHASISWA</a></li>
      <li><a href="<?php echo base_url().'index.php/laporan' ?>">LAPORAN</a></li>
    </ul> -->
  </div>
</nav>
 <section> 
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-6">
      	<?php echo $this->session->flashdata('hasil'); ?>
              <div class="panel-heading">
                  <i class="fa fa-table"></i> 
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <?php echo form_open('mahasiswa/createb');?>
                  <table>
                    <tr>
                      <td>NIM</td>
                      <td><?php echo form_input('nim');?></td>
                    </tr>
                    <tr>
                      <td>Nama</td>
                      <td><?php echo form_input('nama');?></td>
                    </tr>
                    <tr>
                      <td>No. HP</td>
                      <td><?php echo form_input('no_hp');?></td>
                    </tr>
                    <tr>
                      <td>Username</td>
                      <td><?php echo form_input('username');?></td>
                    </tr>
                    <tr>
                      <td>Password</td>
                      <td><?php echo form_input('password');?></td>
                    </tr>
                    <tr>
                      <td>Jurusan</td>
                      <td><?php echo form_input('jurusan');?></td>
                    </tr>
                    <tr>
                      <td>Program Studi</td>
                      <td><?php echo form_input('prodi');?></td>
                    </tr>
                    <tr>
                      <td>Kode Dosen Pembimbing</td>
                      <td><?php echo form_input('kddospem');?></td>
                    </tr>
                    <tr>
                      <td colspan="2">
                        <?php echo form_submit('submit','Simpan');?>
                        <?php echo anchor('mahasiswa','Kembali');?></td></tr>
                  </table>
                  <?php echo form_close(); ?>
                  <!-- /.table-responsive -->
              </div>
              <!-- /.panel-body -->
          </div>
          <!-- /.panel -->
      </div>
      <!-- /.col-lg-12 -->
  </div>
 </section>
 </div>
 <footer class = "footer-area" id = "kontak">
 <div class = "container">
  <div class = "row justify-content-between">
    <div class = "col-sm-6 col-md-4 col-xl-3">
      <div class = "single-footer-widget footer_1">
        <a href="#Beranda">
        <img src="http://pmw.etupolinema.org/assets/img/logo1.png" alt="img"></a>
        <p>Enterpreneur Trining Unit</p>
        <p>Politeknik Negeri Malang</p>
      </div>
    </div>
    <div class = "col-sm-6 col-md-4 col-xl-4">
    <div class = "single-footer-widget footer_2">
        <h4>Sosial Media</h4>
        <p>Stay updated with our latest trends Seed heaven so said place winged over given forth fruit.</p>
        <p>Politeknik Negeri Malang</p>
      </div>
    </div>
    <div class = "col-xl-3 col-sm-6 col-md-4">
      <div class = "single-footer-widget footer_2">
        <h4>Kontak</h4>
        <div class= "contact_info">
          <p><span>Alamat : </span>Gedung AX (Kantin) Lt.3</p>
          <p><span>Telepon : </span>+2 36 265 (8060)</p>
          <p><span>Email : etupolinema@gmail.com</span></p>
        </div>
      </div>
    </div>    
  </div>
 </div>
 </footer>
</body>
</html>


