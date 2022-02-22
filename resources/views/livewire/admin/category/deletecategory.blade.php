<div>
    <!-- /.modal -->
    <div wire:ignore.self  class="modal fade" id="modal-delete">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">{{ __('tran.del') . __('tran.category') }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <p>  {{ __('tran.surefordelete') }} </p>
            <p>
              @isset($slug)
              <strong>{{ $slug }} </strong>
              @endisset
              &hellip;</p>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">{{ __('tran.close') }}</button>
            <button type="button" class="btn btn-danger" wire:click="delete()">{{ __('tran.del') }}</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
