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
                    <h1 class="h3 mb-0 text-gray-800">Berita</h1>
                </div>

                <a href="<?= base_url('index.php/news/add_news') ?>" class="d-sm-inline-block btn btn-sm btn-primary shadow-sm mb-3"><i class="fas fa-plus fa-sm text-white-50"></i> Buat Berita</a>

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Tabel Berita</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No.</th>
                                        <th>Judul Berita</th>
                                        <th>Pembuat Berita</th>
                                        <th>Dibuat Pada</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1;
                                    foreach ($news as $n) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $n->Title ?></td>
                                            <td><?= $n->Upload_By ?></td>
                                            <td><?php $date = new DateTime($n->Created_At); echo $date->format('Y-m-d'); ?></td>
                                            <td class="d-flex">
                                                <a href="<?= base_url('index.php/news/get_detail_news/' . $n->ID_Berita) ?>" class="btn-sm text-decoration-none btn-info btn-circle mr-1">
                                                    <i class="fas fa-light fa-eye"></i>
                                                </a> <a href="<?= base_url('index.php/news/edit_news/' . $n->ID_Berita) ?>" class="btn-sm text-decoration-none btn-warning btn-circle mr-1">
                                                    <i class="fas fa-pen"></i>
                                                </a> <a onclick="return confirm('Yakin ingin menghapus data ini?')" href="<?= base_url('index.php/news/delete_news/' . $n->ID_Berita) ?>" class="btn-sm text-decoration-none btn-danger btn-circle">
                                                    <i class="fas fa-trash"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
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

<!-- js alert -->
<script>
    $(document).ready(function() {
        function showAlert() {
            $('#alert').css('right', '20px');
            setTimeout(hideAlert, 4000);
        }

        function hideAlert() {
            $('#alert').css('right', '-300px');
        }

        showAlert();
    });
</script>
<!-- end js alert -->
