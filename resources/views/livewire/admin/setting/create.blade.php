<div>
    <div wire:ignore.self class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ">
              <h4 class="modal-title">{{ __('tran.new')  }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form wire:submit.prevent="create">
            @csrf
            <div class="modal-body">
                {{-- <div class="card"> --}}
                 {{-- <div class="card-body"> --}}
                        <div class="form-group">
                          <label>width</label>
                            <input class="form-control @error('width') is-invalid @enderror" type="text" wire:model="width" placeholder="{{  __('tran.width')}}" autofocus>
                            @error('width')
                            {{-- @if($errors->has('name')) --}}
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>link</label>
                              <input class="form-control @error('link') is-invalid @enderror" type="text" wire:model="link" placeholder="{{ __('tran.link')}}" autofocus>
                              @error('link')
                              {{-- @if($errors->has('name')) --}}
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                              @enderror
                          </div>
                        <div class="form-group">
                            <label for="exampleInputFile">File input</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" wire:model="images" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                              {{-- <div class="input-group-append">
                                <span class="input-group-text">Upload</span>
                              </div> --}}
                            </div>
                          </div>
                        <div class="form-group">
                            <label>Select type</label>
                            <select   wire:model="type" class="form-control">
                             <option value="">{{__('tran.select')}}</option>
                               <option value="header">Header</option>
                               <option value="brand">Brand</option>
                               <option value="offer">Offer</option>
                            </select>
                        </div>
                {{-- </div> --}}
                    <!-- /.card-body -->
                  {{-- </div> --}}
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
