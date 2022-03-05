<div>
    @include('livewire.admin.category.createcategory')
    @include('livewire.admin.category.deletecategory')
    @include('livewire.admin.category.editcategory')
    <div class="card">
        <div class="card-header" >
            {{-- @can('newcategory') --}}
              <button class="btn btn-success" data-toggle="modal" data-target="#modal-create">{{ __('tran.new') . __('tran.category') }}</button>
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
                            <th>{{ __('tran.type') }}</th>
                            <th>{{ __('tran.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($categorys->count() != 0)
                        @foreach ($categorys as $item )
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->name }}
                            </td>
                            <td>
                                @if($item->parent_id)
                                <div class="badge badge-success"> فرعى   من  {{ $categorys->where('id',$item->parent_id)->first()->name }}</div>
                                @else
                                <div class="badge badge-success">رئيسي</div>
                                @endif
                            </td>
                            <td>
                                {{-- @can('editcategory') --}}
                                <button class="btn btn-info  btn-sm"  data-toggle="modal" data-target="#modal-edit"  wire:click="edit('{{ $item->slug }}','{{ ($categorys->where('id',$item->parent_id)->first()->slug)??null }}')"><i class="fas fa-pencil-alt"></i>{{ __('tran.edit') }}</button>
                                {{-- @endcan --}}
                                {{-- @can('delcategory') --}}
                                <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete"  wire:click="view('{{ $item->slug }}')"><i class="fas fa-trash"></i> {{ __('tran.del') }} </button>
                                {{-- @endcan --}}
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="3">
                            <div class="box-danger box-info text-danger text-center "> No Category... </div>
                        </td>
                        </tr>
                        @endif

                    </tbody>
                    <tfoot>
                        {{-- <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr> --}}
                    </tfoot>
                </table>
                <div class="d-flex justify-content-center">
                    {!! $categorys->links() !!}
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
    <script>
        $(function() {
            // $("#example1").DataTable({
            //     "responsive": true,
            //     "lengthChange": false,
            //     "autoWidth": false,
            //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            // $('#example1').DataTable({
            //     "paging": false,
            //     "lengthChange": false,
            //     "searching": false,
            //     "ordering": true,
            //     "info": false,
            //     "autoWidth": false,
            //     "responsive": true,
            //     "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
            // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        });
    </script>
    @endpush
</div>
