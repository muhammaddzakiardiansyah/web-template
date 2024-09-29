
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
          <h1 class="h3 mb-0 text-gray-800">Tambah Berita Baru</h1>
        </div>

        <!-- form add teacher -->

        <div class="card shadow mb-4 col-lg-8 mx-auto">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Berita Baru</h6>
          </div>
          <div class="card-body">
            <form class="user" action="<?= base_url('index.php/news/add_news') ?>" method="post" id="addNews" enctype="multipart/form-data">
              <div class="form-group row">
                <div class="col-sm-12 mb-3">
                  <input type="text" class="form-control form-control-user" id="title" name="title" placeholder="Judul berita">
                </div>
                <div class="col-sm-12 mb-3">
                  <img class="img-preview img-fluid mb-3" id="frame" style="max-height: 500px; overflow:hidden">
                  <input type="file" name="image" class="input-add-image" id="image" onchange="imgPreview()">
                  <label for="image" class="label-add-image"><i class="fas fa-solid fa-upload"></i> Tambah Gambar</label>
                  <?php /** @var CI_Session */ $CI =& get_instance(); if($CI->session->flashdata('image-error')) { echo $CI->session->flashdata('image-error'); } ?>
                </div>
                <div class="col-sm-12 mb-3">
                  <input id="berita_post" type="hidden" name="berita_post">
                  <trix-editor input="berita_post" id="berita_post"></trix-editor>
                </div>
                <div class="col-sm-12 mb-3">
                  <input type="date" class="form-control form-control-user" id="created_at" name="created_at" placeholder="Tanggal dibuat">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block mb-3">
                Simpan
              </button>
              <a href="<?= base_url('index.php/news') ?>" class="btn btn-info btn-user btn-block mt-3">
                Kembali ke tabel berita
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
  // hidden button upload file
  const btnUploadFile = document.querySelector('.trix-button-group--file-tools');
  btnUploadFile.style.display = 'none';

  // img preview
  function imgPreview() {
    const inputImg = document.querySelector('.input-add-image');
    const preview = document.querySelector('.img-preview');

    preview.style.display = 'block';
    const ofReader = new FileReader();
    ofReader.readAsDataURL(image.files[0]);
    
    ofReader.onload = (oFREvent) => {
      console.log(oFREvent);
      preview.src = oFREvent.target.result;
    }
  }

  // validate
  $().ready(() => {
    $('#addNews').validate({
      rules: {
        title: {
          required: true,
        },
        image: {
          required: true,
        },
        berita_post: {
          required: true,
        },
      },
      messages: {
        title: {
          required: 'Judul berita tidak boleh kosong.',
        },
        image: {
          required: 'Gambar berita tidak boleh kosong.',
        },
        berita_post: {
          required: 'Isi berita tidak boleh kosong.',
        },
      }
    })
  })
</script>
<!-- end jquery validate -->
