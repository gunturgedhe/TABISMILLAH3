<!DOCTYPE html>
<html lang="en">
<head>
<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/logoo.jpg">
  <title>AdminPelaporanPMW</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="icon" href="http://pmw.etupolinema.org/assets/img/favicon.png">
  <link rel="stylesheet" href="http://pmw.etupolinema.org/assets/css/style.css">
</head>
<body style="background-image:url(http://pmw.etupolinema.org/assets/img/bg5.png)">
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
    <img src="<?php echo base_url(); ?>assets/img/logoo.jpg" alt="logoBrand" id="logoBrand" width="70" height="70">
    </div>
    <div id="page-wrapper">
        <div class="col-lg-6">
            <h1>Tambah Data Dosen</h1>
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
<div id="page-wrapper">
  <!-- /.row -->
  <div class="row">
      <div class="col-lg-6">
      	<?php echo $this->session->flashdata('hasil'); ?>
              <!-- /.panel-heading -->
              <div class="panel-body">
                  <?php echo form_open('dosen/edit');?>
                    <?php echo form_hidden('kddospem',$dosen[0]->kddospem);?>
                    <table>
                      <!-- <tr>
                        <td><?php echo form_input('',$dosen[0]->kddospem,"disabled");?></td>
                      </tr> -->
                      <tr>
                        <td>Kode Dosen Pembimbing</td><br>
                        <td><?php echo form_input('kddospem',$dosen[0]->kddospem);?></td>
                      </tr>
                      <tr>
                        <td>Nama Dosen Pembimbing  </td>
                        <td><?php echo form_input('nmdospem',$dosen[0]->nmdospem);?></td>
                      </tr>
                      <tr>
                        <td colspan="2">
                          <?php echo form_submit('submit','Simpan');?>
                          <?php echo anchor('dosen','Kembali');?></td></tr>
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
 </div>
</body>
</html>