<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo $title; ?> &mdash; Admin</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/fontawesome/css/all.min.css">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/owlcarousel2/dist/assets/owl.theme.default.min.css">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/components.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.css">
</head>

  <body>
    <div id="app">
      <div class="main-wrapper main-wrapper-1">
        <div class="navbar-bg bg-primary"></div>
        <nav class="navbar navbar-expand-lg main-navbar">
          <form class="form-inline mr-auto">
            <ul class="navbar-nav mr-3">
              <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            </ul>
          </form>
          <ul class="navbar-nav navbar-right">
            <li class="dropdown"><a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
              <img alt="image" src="<?php echo base_url(); ?>assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
              <div class="d-sm-none d-lg-inline-block">Halo, Admin</div></a>
              <div class="dropdown-menu dropdown-menu-right">
                <!-- <div class="dropdown-title">Logged in 5 min ago</div> -->
                <!-- <a href="<?php echo base_url(); ?>dist/features_profile" class="dropdown-item has-icon">
                  <i class="far fa-user"></i> Profile
                </a> -->
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item has-icon text-danger"
                    data-confirm="Logout?|Apakah anda yakin ingin logout?" data-confirm-yes="window.location.href =`<?php echo base_url('logout')?>`">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>

        <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <!-- <img src="<?=base_url('public/')?>img/logoAlt.png" class="image" width="200"> -->
            <a href="<?php echo base_url(); ?>">Areta Collage</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            AC
          </div>
          <ul class="sidebar-menu">
            <li class="<?php echo $this->uri->segment(2) == 'dashboard' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/dashboard"><i class="fas fa-tachometer-alt"></i> <span>Dashboard</span></a></li>
            
            <li class="menu-header">Master Data</li>
            <li class="<?php echo $this->uri->segment(2) == 'user' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/user"><i class="fas fa-users"></i> <span>User</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'mahasiswa' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/mahasiswa"><i class="fas fa-user-graduate"></i> <span>Mahasiswa</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'tagihan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/tagihan"><i class="fas fa-money-bill"></i><span>Tagihan</span></a></li>

            <li class="menu-header">SPP</li>
            <li class="<?php echo $this->uri->segment(2) == 'buku-spp' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/buku-spp"><i class="fas fa-file-invoice-dollar"></i> <span>Buku SPP</span></a></li>
            <li class="<?php echo $this->uri->segment(2) == 'pembayaran' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/pembayaran"><i class="fas fa-wallet"></i> <span>Pembayaran</span></a></li>

            <!-- <li class="menu-header">Laporan</li>
            <li class="<?php echo $this->uri->segment(2) == 'laporan' ? 'active' : ''; ?>"><a class="nav-link" href="<?php echo base_url(); ?>admin/laporan"><i class="fas fa-clipboard-list"></i> <span>Laporan</span></a></li> -->

          </ul>

        </aside>
      </div>
      
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1><?= $title;  ?></h1>
          </div>

          <div class="section-body">
            <?php $this->load->view('pages/admin/'.$page); ?>
          </div>
        </section>
      </div>

      <footer class="main-footer">
        <div class="container text-center">
          Copyright &copy; 2022 <br /> Informatics Areta Collage
        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?php echo base_url(); ?>assets/modules/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/popper.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/tooltip.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/bootstrap/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/nicescroll/jquery.nicescroll.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/modules/moment.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/stisla.js"></script>

  <!-- Template JS File -->
  <script src="<?php echo base_url(); ?>assets/js/scripts.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/custom.js"></script>

  <script src="<?php echo base_url(); ?>assets/modules/summernote/summernote-bs4.js"></script>

  <script>
  $('.summernote').summernote({
    placeholder: 'Isi deskripsi di sini',
    tabsize: 2,
    height: 100,
    toolbar: [
        ['para', ['ul']],
      ]
  });
</script>

</body>
</html>
