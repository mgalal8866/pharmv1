<div>
    {{-- @include('livewire.admin.order.createorder') --}}
    {{-- @include('livewire.admin.order.deleteorder')
    @include('livewire.admin.order.editorder') --}}
    <div class="card">
        <div class="card-header" >

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
                            <th>{{ __('tran.numberorder') }}</th>
                            <th>{{ __('tran.namebrand') }}</th>
                            <th>{{ __('tran.date') }}</th>
                            <th>{{ __('tran.items') }}</th>
                            <th>{{ __('tran.total') }}</th>
                            <th>{{ __('tran.action') }}</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($orders->count() != 0)
                        @foreach ($orders as $item )
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td>{{ $item->numberorder}}</td>
                            <td>{{ $item->brandaccount->namebrand}}</td>
                            <td>{{ $item->date}}</td>
                            <td>{{ $item->order_details()->count() }}</td>
                            <td>{{ $item->order_details()->sum('total') }}</td>
                            <td>
                                @can('view details order')
                                <a href="{{ route('detailsorder.view',['ordernumber' => $item->numberorder]) }}" class="btn btn-info  btn-sm"
                                ><i class="fas fa-pencil-alt"></i>{{ __('tran.view') }}</a>
                                @endcan
                                {{-- @can('delorder') --}}
                                {{-- <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#modal-delete"  wire:click="view('{{ $item->slug }}')"><i class="fas fa-trash"></i> {{ __('tran.del') }} </button> --}}
                                {{-- @endcan --}}
                            </td>
                        </tr>

                        @endforeach
                        @else
                        <tr>
                            <td colspan="12">
                            <div class="box-danger box-info text-danger text-center "> {{ __('tran.no') . __('tran.orders') }}</div>
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
                    {!! $orders->links() !!}
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
        });
    </script>
    @endpush
</div>
