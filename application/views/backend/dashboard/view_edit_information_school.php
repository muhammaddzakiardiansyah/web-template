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
          <h1 class="h3 mb-0 text-gray-800">Edit informasi sekolah</h1>
        </div>

        <!-- form add teacher -->

        <div class="card shadow mb-4 col-lg-8 mx-auto">
          <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit informasi sekolah</h6>
          </div>
          <div class="card-body">
            <form class="user" action="<?= base_url('index.php/dashboard/edit_information_school') ?>" method="post" id="addNews" enctype="multipart/form-data">
              <div class="form-group row">
                <div class="col-sm-12 mb-3">
                  <label for="school_name">Nama Sekolah</label>
                  <input type="text" class="form-control form-control-user" id="school_name" name="school_name" placeholder="Nama sekoah" value="<?= $information_school->Nama_Sekolah ?>">
                </div>
                <div class="col-sm-12 mb-3">
                  <label for="school_logo" class="d-block">Logo Sekolah</label>
                  <input type="hidden" name="school_logo" value="<?= $information_school->Logo_Sekolah ?>">
                  <img class="img-preview img-fluid mb-3 d-block" src="<?= base_url('uploads/'.$information_school->Logo_Sekolah) ?>" id="frame" style="max-height: 500px; overflow:hidden">
                  <input type="file" name="school_logo" class="input-add-image" id="school_logo" onchange="imgPreview()">
                  <label for="school_logo" class="label-add-image"><i class="fas fa-solid fa-upload"></i> Tambah Logo</label>
                  <?php /** @var CI_Session */ $CI =& get_instance(); if($CI->session->flashdata('image-error')) { echo $CI->session->flashdata('image-error'); } ?>
                </div>
                <div class="col-sm-12 mb-3">
                  <label for="school_vision">Visi Sekolah</label>
                  <input id="school_vision" type="hidden" name="school_vision" value="<?= $information_school->Visi_Sekolah ?>">
                  <trix-editor input="school_vision" id="school_vision"></trix-editor>
                </div>
                <div class="col-sm-12 mb-3">
                  <label for="school_mision">Misi Sekolah</label>
                  <input id="school_mision" type="hidden" name="school_mision" value="<?= $information_school->Misi_Sekolah ?>">
                  <trix-editor input="school_mision" id="school_mision"></trix-editor>
                </div>
                <div class="col-sm-12 mb-3">
                  <label for="school_address">Alamat Sekolah</label>
                  <input type="text" class="form-control form-control-user" id="school_address" name="school_address" placeholder="Alamat sekolah" value="<?= $information_school->Alamat ?>">
                </div>
                <div class="col-sm-12 mb-3">
                  <label for="contact_info">Info Kontak</label>
                  <input type="text" class="form-control form-control-user" id="contact_info" name="contact_info" placeholder="Info Kontak" value="<?= $information_school->Info_Kontak ?>">
                </div>
              </div>
              <button type="submit" class="btn btn-primary btn-user btn-block mb-3">
                Simpan perubahan
              </button>
              <a href="<?= base_url('dashboard') ?>" class="btn btn-info btn-user btn-block mt-3">
                Kembali ke halaman  utama
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
    ofReader.readAsDataURL(school_logo.files[0]);
    
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
