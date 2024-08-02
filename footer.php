</div>
<!-- Main Footer -->
<footer class="main-footer">
  <strong>Copyright &copy; 2024 <a href="#">DIGI CRAF TECH</a>.</strong> &nbsp;
  All rights reserved.
  <div class="float-right d-none d-sm-inline-block">
    <b>Version</b> 1.0
  </div>
</footer>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="./plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="./dist/js/adminlte.js"></script>

<!-- AdminLTE for demo purposes -->
<script src="./dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="./dist/js/pages/dashboard3.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
  (function() {
    var path = window.location.href;
    $(".nav-link").each(function() {

      var href = $(this).attr('href');
      if (path == decodeURIComponent(href)) {
        $(this).addClass('active');

        var parent = $(this).closest('.has-treeview');
        parent.addClass('menu-open');
        $(parent).find('.nav-link').first().addClass('active');
        console.log(parent);
      };
    });
  }());

</script>

</body>

</html>