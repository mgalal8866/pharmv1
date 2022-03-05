  <!-- jQuery -->
  <script src="{{ URL::asset('assets/plugins/jquery/jquery.min.js') }}"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="{{ URL::asset('assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
      $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="{{ URL::asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <!-- ChartJS -->
  <script src="{{ URL::asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
  <!-- Sparkline -->
  {{-- <script src="{{ URL::asset('assets/plugins/sparklines/sparkline.js') }}"></script> --}}
  <!-- JQVMap -->
  {{-- <script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script> --}}
  {{-- <script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script> --}}
  <!-- jQuery Knob Chart -->
  <script src="{{ URL::asset('assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
  <!-- daterangepicker -->
  <script src="{{ URL::asset('assets/plugins/moment/moment.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="{{ URL::asset('assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
  <!-- Summernote -->
  <script src="{{ URL::asset('assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
  <!-- overlayScrollbars -->
  <script src="{{ URL::asset('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <!-- AdminLTE App -->
  <script src="{{ URL::asset('assets/dist/js/adminlte.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
  <script src="{{ URL::asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>
<!-- bs-custom-file-input -->
<script src="{{ URL::asset('assets/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
<!-- Toastr -->
        <script src="{{ URL::asset('assets/plugins/toastr/toastr.min.js') }}"></script>
  <script>

  $(function () {
    var url = window.location;
    // for single sidebar menu
    $('ul.nav-sidebar a').filter(function () {
        return this.href == url;
    }).addClass('active');

    // for sidebar menu and treeview
    $('ul.nav-treeview a').filter(function () {
        return this.href == url;
    }).parentsUntil(".nav-sidebar > .nav-treeview")
        .css({'display': 'block'})
        .addClass('menu-open').prev('a')
        .addClass('active');
});
  </script>
  {{-- <script>
    $(function () {
      bsCustomFileInput.init();
    });
    </script> --}}
  <!-- AdminLTE for demo purposes -->
  {{-- <script src="{{ URL::asset('assets/dist/js/demo.js') }}"></script> --}}
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  {{-- <script src="{{ URL::asset('assets/dist/js/pages/dashboard.js') }}"></script> --}}
@yield('js')
@livewireScripts
<script>
    var Toast = Swal.mixin({
       toast: true,
       position: 'top-end',
       showConfirmButton: false,
       timer: 3000
     });
 window.addEventListener('closeModal', event=> {
 $('#modal-create').modal('hide');
 $('#modal-delete').modal('hide');
 $('#modal-edit').modal('hide');
 })
 
 window.addEventListener('Toast' , (e)=> {
       Toast.fire({icon: (e.detail.ev),
         title: (e.detail.msg)
       });
     //   toastr.success( (e.detail.msg))
     })
 </script>