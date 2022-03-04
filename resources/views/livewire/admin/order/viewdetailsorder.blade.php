<div>
    {{-- @include('livewire.admin.order.createorder') --}}
    {{-- @include('livewire.admin.order.deleteorder')
    @include('livewire.admin.order.editorder') --}}
    <div class="invoice p-3 mb-3">
        <!-- title row -->
        <div class="row">
          <div class="col-12">
            <h4>
              <i class="fas fa-globe"></i> {{ $info->name }}
              <small class="float-right">Date: {{  \Carbon\Carbon::parse($order->date)->format('Y/m/d') }}</small>
            </h4>
          </div>
          <!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
          <div class="col-sm-4 invoice-col">
            {{ __('tran.from') }}
            <address>
              <strong>{{ $info->name }}</strong><br>
              {{ $info->address }}<br>
              {{ __('tran.phone') }}: {{ $info->phone }}<br>
              {{ __('tran.email') }}: {{ $info->email }}
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            To
            <address>
              <strong>{{ $order->brandaccount->namebrand}}</strong><br>
              {{ $order->brandaccount->address}}<br>
              {{ $order->brandaccount->phone}}<br>
              {{ $order->brandaccount->email}}
            </address>
          </div>
          <!-- /.col -->
          <div class="col-sm-4 invoice-col">
            <b>Invoice #{{ $order->numberorder }}</b><br>
            <br>
            {{-- <b>Order ID:</b> 4F3S8J<br>
            <b>Payment Due:</b> 2/22/2014<br>
            <b>Account:</b> 968-34567 --}}
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- Table row -->
        <div class="row">
          <div class="col-12 table-responsive">
            <table class="table table-striped">
              <thead>
              <tr>
                <th>Qty</th>
                <th>Product</th>
                <th>Serial #</th>
                <th>Description</th>
                <th>Subtotal</th>
              </tr>
              </thead>
              <tbody>
             @foreach ( $order->order_details as $details )
             <tr>
                <td>{{  $details->qty }}</td>
                <td>{{  $details->warehouse_product->product->name }}</td>
                <td>{{  $details->warehouse_product->code }}</td>
                <td>{{  $details->warehouse_product->product->description }}</td>
                <td>{{  $details->total}}</td>
              </tr>
             @endforeach


              </tbody>
            </table>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <!-- accepted payments column -->
      <div class="col-6">
      </div>
          {{-- <div class="col-6">
            <p class="lead">Payment Methods:</p>
            <img src="../../dist/img/credit/visa.png" alt="Visa">
            <img src="../../dist/img/credit/mastercard.png" alt="Mastercard">
            <img src="../../dist/img/credit/american-express.png" alt="American Express">
            <img src="../../dist/img/credit/paypal2.png" alt="Paypal">

            <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
              Etsy doostang zoodles disqus groupon greplin oooj voxy zoodles, weebly ning heekya handango imeem
              plugg
              dopplr jibjab, movity jajah plickers sifteo edmodo ifttt zimbra.
            </p>
          </div> --}}
          <!-- /.col -->
          <div class="col-6">
            {{-- <p class="lead">Amount Due 2/22/2014</p> --}}

            <div class="table-responsive">
              <table class="table">
                <tr>
                  <th style="width:50%">Subtotal:</th>
                  <td>{{ $order->order_details->sum('total') }}</td>
                </tr>
                <tr>
                  <th>Tax ({{ $info->tax }}%)</th>
                  <td>{{ ($order->order_details->sum('total')*($info->tax/100))}}</td>
                </tr>
                @if ($info->delivery)
                <tr>
                    <th>Shipping:</th>
                    <td>{{ $info->delivery }}</td>
                  </tr>
                @endif

                <tr>
                  <th>Total:</th>
                  <td>{{ ($order->order_details->sum('total')*($info->tax/100))+$order->order_details->sum('total') }}</td>
                </tr>
              </table>
            </div>
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <!-- this row will not appear when printing -->
        {{-- <div class="row no-print">
          <div class="col-12">
            <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
            <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
              Payment
            </button>
            <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
              <i class="fas fa-download"></i> Generate PDF
            </button>
          </div>
        </div> --}}
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
