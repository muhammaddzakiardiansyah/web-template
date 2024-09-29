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
          <h1 class="h3 mb-0 text-gray-800">Tambah data guru</h1>
        </div>

        <!-- form add teacher -->

        <div class="card shadow mb-4 col-lg-8 mx-auto">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah data guru</h6>
          </div>
          <div class="card-body">
            <form class="user" action="<?= base_url('index.php/teacher/add_teacher') ?>" method="post" id="addTeacher">
              <div class="form-group row">
                <div class="col-sm-12 mb-3">
                  <input type="number" class="form-control form-control-user" id="nipy" name="nipy" placeholder="NIPY">
                </div>
                <div class="col-sm-12 mb-3">
                  <input type="text" class="form-control form-control-user" id="nama_guru" name="nama_guru" placeholder="Nama Guru">
                </div>
                <div class="col-sm-12 mb-3">
                  <input type="number" class="form-control form-control-user" id="nuptk" name="nuptk" placeholder="NUPTK">
                </div>
                <div class="col-sm-12 mb-3">
                  <input type="text" class="form-control form-control-user" id="mapel_ampu" name="mapel_ampu" placeholder="Mapel Ampu">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block mb-3">
                Simpan
              </button>
              <a href="<?= base_url('index.php/teacher') ?>" class="btn btn-info btn-user btn-block mt-3">
                Kembali ke tabel guru
              </a>
            </form>
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

<!-- start jquery validate -->
<script>
  $().ready(() => {
    $('#addTeacher').validate({
      rules: {
        nipy: {
          required: true,
          number: true
        },
        nama_guru: {
          required: true,
        },
      },
      messages: {
        nipy: {
          required: 'NIPY tidak boleh kosong.',
          number: 'NIPY harus berisi nomor yang valid.'
        },
        nama_guru: {
          required: 'Nama guru tidak boleh kosong.',
        },
      }
    })
  })
</script>
<!-- end jquery validate -->
