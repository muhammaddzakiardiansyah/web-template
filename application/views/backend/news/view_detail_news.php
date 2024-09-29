<!-- Page Wrapper -->
<div id="wrapper">

  <!-- Sidebar -->
  <?php
  $CI = &get_instance();
  $CI->load->view('backend/components/sidebar.php');
  ?>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

      <!-- Topbar -->
      <?php
      $CI = &get_instance();
      $CI->load->view('backend/components/navbar.php');
      ?>
      <!-- End of Topbar -->

      <!-- Begin Page Content -->
      <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
          <h1 class="h3 mb-0 text-gray-800">Detail berita</h1>
        </div>
        <div class="row">
          <div class="col-lg-9">
            <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0" id="title-news"><?= $news->Title ?></h6>
              </div>
              <img src="<?= base_url('uploads/'.$news->Image) ?>" class="img-fluid" alt="image news">
              <div class="card-body">
                <?= $news->Berita_Post ?>
                <hr>
                <p>Dibuat oleh <?= $news->Upload_By ?> pada <?php $date = new DateTime($news->Created_At); echo $date->format('Y-m-d') ?>, di update pada <?php $date = new DateTime($news->Update_At); echo $date->format('Y-m-d H:i') ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="mt-3 mb-3">
          <a href="<?= base_url('index.php/news') ?>" class="btn-sm text-decoration-none btn-info btn-circle">
            <i class="fas fa-chevron-left"></i>
          </a> <a href="<?= base_url('index.php/news/edit_news/'.$news->ID_Berita) ?>" class="btn-sm text-decoration-none btn-warning btn-circle">
            <i class="fas fa-pen"></i>
          </a> <a href="<?= base_url('index.php/news/delete_news/'.$news->ID_Berita) ?>" onclick="return confirm('Yakin ingin menghapus berita ini ?')" class="btn-sm text-decoration-none btn-danger btn-circle">
            <i class="fas fa-trash"></i>
          </a>
        </div>
      </div>
    </div>

  </div>
  <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright &copy; Codepelita <?= date('Y') ?></span>
    </div>
  </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
  <i class="fas fa-angle-up"></i>
</a>
