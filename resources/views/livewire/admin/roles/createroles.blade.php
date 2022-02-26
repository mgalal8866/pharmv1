<div>
    <div wire:ignore.self class="modal fade" id="modal-create">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ">
              <h4 class="modal-title">{{ __('tran.new') . __('tran.role') }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form wire:submit.prevent="create">
            @csrf
            <div class="modal-body">

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputname">{{ __('tran.role') . __('tran.name') }}</label>
                            <input  id="exampleInputname" class="form-control @error('name') is-invalid @enderror" type="text" wire:model="name" placeholder="{{ __('tran.enter')  .   __('tran.name')}}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                   <div class="col">
                            <div class="form-group" wire:ignore>
                                <label>{{ __('tran.permissions') }}</label>
                                <div class="select2-purple">
                                     <select id="role-dropdown2" wire:model="permission" class="select2 @error('permission') is-invalid @enderror" multiple="multiple"
                                    data-placeholder="{{ __('tran.enter') . __('tran.role') }}"
                                    data-dropdown-css-class="select2-purple" style="width: 100%;" autocomplete="off"  required>
                                    @foreach ( $permissions as $item )
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                    </select>
                                    @error('permission.*')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                     </div>
                </div>


                    <!-- /.card-body -->

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
@push('jslive')
<script>
    $(document).ready(function () {
        $('#role-dropdown2').select2();
        $('#role-dropdown2').on('change', function (e) {
            let data = $(this).val();
             @this.set('permission', data);
        });
        // window.livewire.on('productStore', () => {
        //     $('#category-dropdown').select2();
        // });
    });
</script>

@endpush
