<div>
    <!-- /.modal -->
    <div wire:ignore.self  class="modal fade" id="modal-edit">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">{{ __('tran.edit') . __('tran.category') }}</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <label>Name Category</label>
            <div class="form-group">
                <input type="hidden" wire:model="slug">
                <input class="form-control @error('name') is-invalid @enderror" type="text" wire:model="name" placeholder="{{ __('tran.name')  .   __('tran.category')}}" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
             </div>
            <div class="form-group">
                <label>Parent Select</label>
                <select   wire:model="parent" class="form-control">
                 <option value="">{{__('tran.select')}}</option>
                @foreach($categorys as $item)
                   <option value="{{$item->slug}}">{{$item->name}}</option>
                @endforeach
                </select>
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
