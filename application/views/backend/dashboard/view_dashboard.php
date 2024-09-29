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
                    <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                </div>

                <!-- Content Row -->
                <div class="row">

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-primary shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                            Berita yang dibuat</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($total_news) ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-comments fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Earnings (Monthly) Card Example -->
                    <div class="col-xl-3 col-md-6 mb-4">
                        <div class="card border-left-success shadow h-100 py-2">
                            <div class="card-body">
                                <div class="row no-gutters align-items-center">
                                    <div class="col mr-2">
                                        <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                            Jumlah Guru</div>
                                        <div class="h5 mb-0 font-weight-bold text-gray-800"><?= count($total_teacher) ?></div>
                                    </div>
                                    <div class="col-auto">
                                        <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Content Row -->

                <!-- start school information -->
                <h3 class="fw-semibold my-3">Informasi Sekolah</h3>

                <!-- card school information -->
                <div class="row">
                    <div class="col-lg-8">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Detail informasi Sekolah</h6>
                            </div>
                            <div class="card-body">
                                <table cellpadding="5">
                                    <tr>
                                        <td>Nama Sekolah</td>
                                        <td>:</td>
                                        <td><?= $information_school?->Nama_Sekolah ?></td>
                                    </tr>
                                    <tr>
                                        <td>Visi Sekolah</td>
                                        <td>:</td>
                                        <td><?= $information_school?->Visi_Sekolah ?></td>
                                    </tr>
                                    <tr>
                                        <td>Misi Sekolah</td>
                                        <td>:</td>
                                        <td><?= $information_school?->Misi_Sekolah ?></td>
                                    </tr>
                                    <tr>
                                        <td>Alamat Sekolah</td>
                                        <td>:</td>
                                        <td><?= $information_school?->Alamat ?></td>
                                    </tr>
                                    <tr>
                                        <td>Kontak Sekolah</td>
                                        <td>:</td>
                                        <td><?= $information_school?->Info_Kontak ?></td>
                                    </tr>
                                </table>
                                <?php if ($information_school) : ?><a href="<?= base_url('index.php/dashboard/edit_information_school') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mt-4"><i class="fas fa-pen fa-sm text-white-50"></i> Ubah informasi sekolah</a><?php endif; ?>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Logo Sekolah</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-pie pt-4 pb-2 d-flex justify-content-center align-items-center">
                                    <img src="<?= base_url('uploads/' . $information_school?->Logo_Sekolah) ?>" alt="<?= $information_school?->Logo_Sekolah ?>" class="img-fluid">
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
                if ($CI->session->flashdata('success')) : ?>
                    <div class="alert-flashdata card mb-4 py-3 border-left-success" id="alert">
                        <div class="card-body">
                            <?= $CI->session->flashdata('success') ?>
                        </div>
                    </div>
                <?php elseif ($CI->session->flashdata('failed')) : ?>
                    <div class="alert-flashdata card mb-4 py-3 border-left-danger" id="alert">
                        <div class="card-body">
                            <?= $CI->session->flashdata('failed') ?>
                        </div>
                    </div>
                <?php elseif ($CI->session->flashdata('empty-field')) : ?>
                    <div class="alert-flashdata card mb-4 py-3 border-left-danger" id="alert">
                        <div class="card-body">
                            <?= $CI->session->flashdata('empty-field') ?>
                        </div>
                    </div>
                <?php elseif ($CI->session->flashdata('not-found')) : ?>
                    <div class="alert-flashdata card mb-4 py-3 border-left-danger" id="alert">
                        <div class="card-body">
                            <?= $CI->session->flashdata('not-found') ?>
                        </div>
                    </div>
                <?php
                endif;
                ?>
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

<script>
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
