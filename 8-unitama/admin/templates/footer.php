<div style="margin-bottom: 100px;"></div>
<!-- footer -->
<footer class="bg-primary fixed-bottom">
    <div class="container py-3 text-center fw-bold text-white">
        &copy; 2022 UNITAMA
    </div>
</footer>
<!-- end footer -->

<!-- modal delete -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Apakah anda yakin, ingin menghapus data?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a type="button" class="btn btn-danger" id="btn-delete">Yes</a>
            </div>
        </div>
    </div>
</div>
<!-- end modal delete -->

<!-- modal logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <h5>Apakah anda yakin, ingin logout?</h5>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <a type="button" class="btn btn-danger" href="<?= $base_url . 'logout'; ?>">Yes</a>
            </div>
        </div>
    </div>
</div>
<!-- end modal logout -->

<script src="<?= $base_url; ?>assets/plugins/jquery/jquery-3.6.3.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/bootstrap/bootstrap.js"></script>

<!-- datatables -->
<script src="<?= $base_url; ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/datatables/dataTables.bootstrap5.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/datatables/plugin/dataTables.buttons.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/datatables/plugin/buttons.flash.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/datatables/plugin/jszip.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/datatables/plugin/pdfmake.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/datatables/plugin/vfs_fonts.js"></script>
<script src="<?= $base_url; ?>assets/plugins/datatables/plugin/buttons.html5.min.js"></script>
<script src="<?= $base_url; ?>assets/plugins/datatables/plugin/buttons.print.min.js"></script>
<!-- end datatables -->

<script src="<?= $base_url; ?>assets/plugins/ckeditor/ckeditor.js"></script>
<script src="<?= $base_url; ?>assets/js/source.js"></script>

<script>

</script>
</body>

</html>