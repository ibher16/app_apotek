
    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="template/snet/assets/vendor/libs/jquery/jquery.js"></script>
    <script src="template/snet/assets/vendor/libs/popper/popper.js"></script>
    <script src="template/snet/assets/vendor/js/bootstrap.js"></script>
    <script src="template/snet/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

    <script src="template/snet/assets/vendor/js/menu.js"></script>
    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="template/snet/assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="template/snet/assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="template/snet/assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>

    <!-- DataTables  & Plugins -->
<script src="template/snet/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="template/snet/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="template/snet/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="template/snet/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="template/snet/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="template/snet/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="template/snet/assets/plugins/jszip/jszip.min.js"></script>
<script src="template/snet/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="template/snet/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="template/snet/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="template/snet/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="template/snet/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!-- Select2 -->
<script src="template/snet/assets/plugins/select2/js/select2.full.min.js"></script>

<script src="template/snet/assets/plugins/DataTables/datatables.min.js"></script>


<script>
$(document).ready( function () {
    $('#myTable').DataTable();
} );

$(function () {
     //Initialize Select2 Elements
     $('.select2').select2()

//Initialize Select2 Elements
$('.select2bs4').select2({
  theme: 'bootstrap4'
})
});
</script>

<script>
  $(document).ready(function () {
    $("#tab_full").DataTable({
      "scrollY": 200,
      "scrollX": true,
      
      "buttons": [
        {
            extend: 'pdf',
            text: 'Pdf',
            title: '<center>Data Anggota DPRD</center>',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        },
        {
            extend: 'excel',
            text: 'Excel',
            title: 'Data Anggota DPRD',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        },
        {
            extend: 'copy',
            text: 'Copy',
            title: 'Data Anggota DPRD',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        },
        {

            extend: 'print',
            text: 'Print',
            title: 'Data Anggota DPRD',
            autoPrint: true
          
        }]
    }).buttons().container().appendTo('#tab_full_wrapper .col-md-6:eq(0)');

    $("#tab_full_detail").DataTable({
  
      "buttons": [
        {
            extend: 'pdf',
            text: 'Pdf',
            title: '<center>Data Rincian Belanja Sub Kegiatan</center>',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        },
        {
            extend: 'excel',
            text: 'Excel',
            title: 'Data Rincian Belanja Sub Kegiatan',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        },
        {
            extend: 'copy',
            text: 'Copy',
            title: 'Data Rincian Belanja Sub Kegiatan',
            exportOptions: {
                modifier: {
                    page: 'current'
                }
            }
        },
        {

            extend: 'print',
            text: 'Print',
            title: 'Data Rincian Belanja Sub Kegiatan',
            autoPrint: true
          
        }]
    }).buttons().container().appendTo('#tab_full_detail_wrapper .col-md-6:eq(0)');

  });
</script>