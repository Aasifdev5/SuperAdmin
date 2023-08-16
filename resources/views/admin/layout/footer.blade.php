 <!-- Required Js -->
    <script src="assets/js/vendor-all.min.js"></script>
    <script src="assets/js/plugins/bootstrap.min.js"></script>
    <script src="assets/js/ripple.js"></script>
    <script src="assets/js/pcoded.min.js"></script>
   
<!-- Required Scripts -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#data-table').DataTable({
      paging: true,
      searching: true,
      lengthMenu: [5, 10, 25, 50],
      pageLength: 5,
      language: {
        paginate: {
          previous: "&laquo;",
          next: "&raquo;"
        }
      }
    });
  });
</script>


</body>
</html>
