<div>
    <div wire:ignore.self class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ">
              <h4 class="modal-title">{{ __('tran.new') . __('tran.unit') }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form wire:submit.prevent="create">
            @csrf
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                      <input class="form-control @if ($errors->has('name'))

                       @error('name') is-invalid @enderror
                       @endif" type="text" wire:model="name" placeholder="{{ __('tran.name')  .   __('tran.unit')}}" autofocus>
                      @error('name')
                      {{-- @if($errors->has('name')) --}}
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    </div>
                    <!-- /.card-body -->
                  </div>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">{{ __('tran.close') }}</button>
           <span  x-on:click="on = false">
              <button type="submit" class="btn btn-primary"  >{{ __('tran.save') }}</button>
            </span>
            </div>
        </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
</div>
