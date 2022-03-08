<div>
    {{-- @include('livewire.admin.user.createusers')
    @include('livewire.admin.user.deleteuser')
    @include('livewire.admin.user.editusers') --}}
    @section('page2')
Brand
@stop
@section('page')
Brand
@stop
    <div class="card">
        <div class="card-header" >
            {{-- @can('newuser') --}}
              {{-- <button class="btn btn-success" data-toggle="modal" data-target="#modal-create">{{ __('tran.new') . __('tran.user') }}</button> --}}
            {{-- @endcan --}}
            <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" wire:model="searchtxt" class="form-control float-right" placeholder="Search">

                <div class="input-group-append">
                  <button  class="btn btn-default">
                    <i class="fas fa-search"></i>
                  </button>
                </div>
              </div>
            </div>

         </div>
        <!-- /.card-header -->
        <div>
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>{{ __('tran.name') }}</th>
                            <th>{{ __('tran.brand') }}</th>
                            <th>{{ __('tran.phone') }}</th>
                            <th>{{ __('tran.address') }}</th>
                            <th>{{ __('tran.date') }}</th>
                            <th>{{ __('tran.active') }}</th>
                            <th>{{ __('tran.license') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($brand->count() != 0)
                        @foreach ($brand as $item )
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->namebrand }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->created_at }}</td>
                            <td> @if ($item->is_active == 'Active')
                                <button class="btn btn-success  btn-sm"   wire:click="edit('{{ $item->id }}')">{{ $item->is_active }}</button>
                                @else
                                <button class="btn btn-danger  btn-sm"    wire:click="edit('{{ $item->id }}')"></i>{{ $item->is_active }}</button>
                                @endif
                            </td>
                            <td>
                                {{-- @can('edituser') --}}
                             @if (!empty($item->getAttributes()['license'] ))
                             <button class="btn btn-info  btn-sm" href="" wire:click="downloude('{{ $item->getAttributes()['license'] }}')"><i class="fa fa-download" aria-hidden="true"></i> Download license</button>
                             @else
                             <div class="badge badge-danger">NO license</div>
                             @endif
                                {{-- @endcan --}}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="8">
                            <div class="box-danger box-info text-danger text-center "> No user... </div>
                        </td>
                        </tr>
                        @endif

                    </tbody>

                </table>
                <div class="d-flex justify-content-center">
                    {!! $brand->links() !!}
                    {{  $brand->links()  }}
                </div>
            </div>
        </div>

        <!-- /.card-body -->
    </div>
    @push('jslive')
    <script src="{{ URL::asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
  <!-- Page specific script -->
    {{-- <script>
        $(function() { --}}
             {{-- $("#example1").DataTable({
                 "responsive": true,
                 "lengthChange": false,
                 "autoWidth": false,
                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
             }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
             $('#example1').DataTable({
                 "paging": false,
                 "lengthChange": false,
                 "searching": false,
                 "ordering": true,
                 "info": false,
                 "autoWidth": false,
                 "responsive": true,
                 "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
             }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
         }); --}}
    {{-- </script> --}}
    @endpush
</div>
