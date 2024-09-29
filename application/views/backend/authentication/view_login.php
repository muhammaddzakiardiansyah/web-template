<div class="login-page">
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Selamat datang kembali!</h1>
                  </div>
                  <form class="user" method="post" id="login" action="<?= base_url('index.php/auth/login') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="username" name="username" aria-describedby="usernameHelp" placeholder="Masukan username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan password">
                    </div>
                    <button type="submit" class="btn btn-primary btn-user btn-block">
                      Login
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

        <?php
        /**
         * @var CI_Session
         */
        $CI = &get_instance();
        if ($CI->session->flashdata('failed')) : ?>
          <div class="alert-flashdata card mb-4 py-3 border-left-danger" id="alert">
            <div class="card-body">
              <?= $CI->session->flashdata('failed') ?>
            </div>
          </div>
        <?php
        endif;
        ?>

      </div>

    </div>

  </div>
</div>

<script>
  $().ready(() => {
    $('#login').validate({
      rules: {
        username: {
          required: true,
        },
        password: {
          required: true,
        }
      },
      messages: {
        username: {
          required: 'Username wajib diisi',
        },
        password: {
          required: 'Password wajib diisi',
        },
      },
    })
  });
  // alert
  $(document).ready(function() {
    function showAlert() {
      $('#alert').css('right', '20px');
      setTimeout(hideAlert, 4000);
    }

    function hideAlert() {
      $('#alert').css('right', '-500px');
    }

    showAlert();
  });
</script>
