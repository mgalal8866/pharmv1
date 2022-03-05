<div>
    <div wire:ignore.self class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ">
              <h4 class="modal-title">{{ __('tran.new') . __('tran.category') }}</h4>
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
                         <label>Name Category</label>
                            <input class="form-control @error('name') is-invalid @enderror" type="text" wire:model="name" placeholder="{{ __('tran.name')  .   __('tran.category')}}" autofocus>
                            @error('name')
                            {{-- @if($errors->has('name')) --}}
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        {{-- <div class="form-group">

                            <div  class="icheck-success d-inline">
                                <input wire:model="section" type="radio" checked name="section" id="radioSuccess3">
                                <label for="radioSuccess3"> رائيسي  </label>
                            </div>
                            <div class="icheck-success d-inline" >
                                <input wire:model="section" type="radio" name="section" id="radioSuccess1">
                                <label for="radioSuccess1"> فرعى  </label>
                            </div>
                        </div> --}}
                        <div class="form-group">
                            <label>Parent Select</label>
                            <select   wire:model="parent" class="form-control">
                             <option value="">{{__('tran.select')}}</option>
                            @foreach($categorys as $item)
                               <option value="{{$item->slug}}">{{$item->name}}</option>
                            @endforeach
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
