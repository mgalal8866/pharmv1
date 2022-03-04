@extends('admin.layouts.master')
@section('title')
Roles
@stop
@section('css')
  <!-- DataTables -->
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  @livewireStyles
  @endsection
@section('page')
{{ __('tran.roles') }}
@endsection
@section('page1')
{{ __('tran.home') }}
@endsection
@section('page2')
{{ __('tran.roles') }}
@endsection


@section('content')
<livewire:admin.roles.viewroles/>
@endsection

@section('js')

<!-- DataTables  & Plugins -->



@livewireScripts
@stack('jslive')

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
@endsection