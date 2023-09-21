<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <!-- Twitter meta-->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:site" content="@pratikborsadiya">
    <meta property="twitter:creator" content="@pratikborsadiya">
    <!-- Open Graph Meta-->
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Vali Admin">
    <meta property="og:title" content="Vali - Free Bootstrap 4 admin theme">
    <meta property="og:url" content="http://pratikborsadiya.in/blog/vali-admin">
    <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
    <meta property="og:description" content="Vali is a responsive and free admin theme built with Bootstrap 4, SASS and PUG.js. It's fully customizable and modular.">
    <title>VOTING</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/main.css'); ?>">
    <!-- Font-icon css-->
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body class="app sidebar-mini">
    <!-- Navbar-->
    <?php $this->load->view('./admin/partials/navbar') ?>
    <!-- Sidebar menu-->
    <?php $this->load->view('./admin/partials/sidebar') ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
      </div>
      <div class="row">
      <div class="col-md-12">
          <div class="tile">
            <h3 class="tile-title">Ubah Kandidat</h3>
            <div class="tile-body">
              <form action="<?= base_url('admin/kandidat/subah'); ?>" method="post" enctype="multipart/form-data">
              <?php 
                foreach ($cari as $data ) : ?>
                <input type="hidden" name="kode" value="<?= $data->id_kandidat; ?>">
                <div class="form-group">
                  <label class="control-label">Nama Kandidat</label>
                  <input class="form-control" name="nama" type="text" placeholder="Masukan Nama" value="<?= $data->nama_kandidat; ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Nomor Kandidat</label>
                  <input class="form-control" name="nomor" type="text" placeholder="Masukan Nomor Kandidat" value="<?= $data->nomor_kandidat; ?>">
                </div>
                <div class="form-group">
                  <label class="control-label">Foto</label>
                  <input class="form-control-file" type="file" name="foto">
                </div>
                <?php endforeach; ?>
                <div class="tile-footer">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Simpan</button>&nbsp;&nbsp;&nbsp;
                    </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <?php $this->load->view('./admin/partials/bottom') ?>
  </body>
</html>