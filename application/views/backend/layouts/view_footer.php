    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave ?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Pilih "Logout" di bawah jika Anda siap untuk mengakhiri sesi Anda saat ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('index.php/auth/logout') ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets_backend/vendor/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets_backend/vendor/jquery-easing/jquery.easing.min.js') ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets_backend/js/sb-admin-2.min.js') ?>"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets_backend/vendor/chart.js/Chart.min.js') ?>"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets_backend/js/demo/chart-area-demo.js') ?>"></script>
    <script src="<?= base_url('assets_backend/js/demo/chart-pie-demo.js') ?>"></script>

    <!-- page data tables -->
    <script src="<?= base_url('assets_backend/vendor/datatables/jquery.dataTables.min.js') ?>"></script>
    <script src="<?= base_url('assets_backend/vendor/datatables/dataTables.bootstrap4.min.js') ?>"></script>
    <script src="<?= base_url('assets_backend/js/demo/datatables-demo.js') ?>"></script>

</body>

</html>
