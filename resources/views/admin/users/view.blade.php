@extends('admin.layouts.master')
@section('title')
Users
@stop
@section('css')
<link rel="stylesheet" href="{{ URL::asset('assets/plugins/select2/css/select2.min.css')}}">

  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  @livewireStyles
  @endsection
@section('page')
{{ __('tran.users') }}
@endsection
@section('page1')
{{ __('tran.home') }}
@endsection
@section('page2')
{{ __('tran.users') }}
@endsection


@section('content')
{{-- <livewire:admin.product.createproduct/> --}}
<livewire:admin.user.viewusers/>
@endsection

@section('js')

<!-- DataTables  & Plugins -->



@livewireScripts
@stack('jslive')
 <!-- Select2 -->
 <script src="{{ URL::asset('assets/plugins/select2/js/select2.full.min.js')}}"></script>

<script>

        $('#role-dropdown').select2();
        $('#role-dropdown').on('change', function (e) {
            let data = $(this).val();
             this.set('role', data);

        });
        // $('.select2bs4').select2({
        //             theme: 'bootstrap4'
        //         })
        // window.livewire.on('productStore', () => {
        //     $('#role-dropdown').select2();
        // });
    // });
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
@endsection
