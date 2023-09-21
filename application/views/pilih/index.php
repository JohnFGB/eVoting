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
    <?php $this->load->view('./partials/navbar') ?>
    <!-- Sidebar menu-->
    <?php $this->load->view('./partials/sidebar') ?>
    <main class="app-content">
      <div class="app-title">
        <div>
          <h1><i class="fa fa-dashboard"></i> Dashboard</h1>
        </div>
      </div>
      <div class="row">
          <?php foreach($kandidat as $data) : ?>
          <div class="col">
              <div class="card">
                  <h5 class="card-header text-center"><?= $data->nomor_kandidat; ?></h5>
                  <div class="card-body">
                      <h5 class="card-title text-center"><?= $data->nama_kandidat; ?></h5>
                      <img src="<?= base_url('gambar/' . $data->foto_kandidat); ?>" alt="" class="rounded mx-auto d-block" style="width: 100px; height: 100px;">
                      <a href="<?= base_url('utama/simpan/'. $data->id_kandidat); ?>" class="btn btn-info btn-block btn-lg mt-3">Pilih</a>
                  </div>
              </div>
          </div>
          <?php endforeach; ?>
      </div>
    </main>
    <!-- Essential javascripts for application to work-->
    <?php $this->load->view('./partials/bottom') ?>
  </body>
</html>