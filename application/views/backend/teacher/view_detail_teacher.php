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
          <h1 class="h3 mb-0 text-gray-800">Detail guru</h1>
        </div>

        <!-- form add teacher -->
        <div class="card shadow mb-4 col-lg-8 mx-auto">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Detail guru <?= $teacher->Nama_Guru ?></h6>
          </div>
          <div class="card-body">
            <table cellpadding="7" cellspacing="7">
              <tr>
                <td>ID Guru</td>
                <td>:</td>
                <td><?= $teacher->ID_Guru ?></td>
              </tr>
              <tr>
                <td>NIPY Guru</td>
                <td>:</td>
                <td><?= $teacher->NIPY ?></td>
              </tr>
              <tr>
                <td>NAMA Guru</td>
                <td>:</td>
                <td><?= $teacher->Nama_Guru ?></td>
              </tr>
              <tr>
                <td>NUPTK Guru</td>
                <td>:</td>
                <td><?= $teacher->NUPTK ?></td>
              </tr>
              <tr>
                <td>Guru Mapel</td>
                <td>:</td>
                <td><?= $teacher->Mapel_Ampu ?></td>
              </tr>
            </table>
            <div class="mt-3">
              <a href="<?= base_url('index.php/teacher') ?>" class="btn-sm text-decoration-none btn-info btn-circle">
                <i class="fas fa-chevron-left"></i>
              </a> <a href="<?= base_url('index.php/teacher/edit_teacher/' . $teacher->ID_Guru) ?>" class="btn-sm text-decoration-none btn-warning btn-circle">
                <i class="fas fa-pen"></i>
              </a> <a href="<?= base_url('index.php/teacher/delete_teacher/' . $teacher->ID_Guru) ?>" onclick="return confirm('Yakin ingin menghapus data ini ?')" class="btn-sm text-decoration-none btn-danger btn-circle">
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
