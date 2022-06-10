<footer class="main-footer">
    <!-- /.content-wrapper -->
    <div class="pull-right hidden-xs">
        <b>Version</b> 1.0 BETASERVIDENT
    </div>
    <strong>Copyright &copy; <a target="_blank" href="https://miportafolioronsg.web.app/">Ing. Gonzalo
            Sánchez</a></strong>
</footer><!-- ./wrapper -->
</div>


<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>

<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
$(function() {
    $('input').iCheck({
        checkboxClass: 'icheckbox_square-blue',
        radioClass: 'iradio_square-blue',
        increaseArea: '20%' // optional
    });
});
</script>
<a
    href="weasis://%24dicom%3Ars%20--url%20%22https%3A%2F%2Fdemo.orthanc-server.com%2Fdicom-web%22%20-r%20%22patientID%3Dozp00SjY2xG%22">prueba
    dicom</a>

<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.js"></script>
<script src="plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
$(function() {
    $("#example1").DataTable();
    $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false
    });
});
</script>

</body>

</html>