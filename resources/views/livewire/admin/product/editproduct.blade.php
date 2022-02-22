<div>
    <!-- /.modal -->
    <div wire:ignore.self  class="modal fade" id="modal-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">{{ __('tran.edit') . __('tran.unit') }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputname">{{ __('tran.name') }}</label>
                    <input  id="exampleInputname" class="form-control @error('name') is-invalid @enderror" type="text" wire:model="name" placeholder="{{ __('tran.enter')  .   __('tran.name')}}" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputphone">{{ __('tran.phone') }}</label>
                    <input type="email" class="form-control @error('phone') is-invalid @enderror" id="exampleInputphone"  wire:model="phone" placeholder="{{ __('tran.enter')  .   __('tran.phone')}}">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="exampleInputaddress">{{ __('tran.address') }}</label>
                    <input type="text" class="form-control @error('address') is-invalid @enderror" id="exampleInputaddress" wire:model="address" placeholder="{{ __('tran.enter') . __('tran.address') }}">
                    @error('address')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-outline-light" data-dismiss="modal">{{ __('tran.close') }}</button>
            <button type="button" class="btn btn-primary" wire:click="update()">{{ __('tran.save') }}</button>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>
