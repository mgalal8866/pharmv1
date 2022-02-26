<div>
    <div wire:ignore.self class="modal fade" id="modal-edit">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header ">
              <h4 class="modal-title">{{ __('tran.edit') . __('tran.user') }}</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <form wire:submit.prevent="update">
            @csrf
            <div class="modal-body">

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputname">{{ __('tran.name') }}</label>
                            <input  id="exampleInputname" class="form-control @error('name') is-invalid @enderror" type="text" wire:model="name" placeholder="{{ __('tran.enter')  .   __('tran.name')}}" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputphone">{{ __('tran.phone') }}</label>
                            <input type="text" class="form-control @error('phone') is-invalid @enderror" id="exampleInputphone" wire:model="phone" placeholder="{{ __('tran.enter')  .   __('tran.phone')}}">
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="exampleInputemail">{{ __('tran.email') }}</label>
                            <input type="text" class="form-control @error('email') is-invalid @enderror" id="exampleInputemail" wire:model="email" placeholder="{{ __('tran.enter') . __('tran.email') }}" required>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                            <div class="form-group" wire:ignore>
                                <label>{{ __('tran.role') }}</label>

                                <div class="select2-purple">
                                    {{-- <select id="category-dropdown" class="form-control" multiple wire:model="category"> --}}
                                    <select id="role-dropdown2" wire:model="role" class="select2 @error('role') is-invalid @enderror" multiple="multiple"
                                    data-placeholder="{{ __('tran.enter') . __('tran.role') }}"
                                    data-dropdown-css-class="select2-purple" style="width: 100%;" autocomplete="off"  required>
                                    @foreach ( $roles as $item )
                                    <option value="{{ $item->name }}">{{ $item->name }}</option>
                                    @endforeach
                                    </select>
                                    @error('role.*')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                     </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label>{{ __('tran.warehouses') }}</label>
                            <select class="custom-select @error('warehouse') is-invalid @enderror"  wire:model="warehouseuser">
                                <option value="">{{ __('tran.select') .  __('tran.warehouse') }}</option>
                                @foreach ( $warehouses as $item )
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('warehouse')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                </div>

                     <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputphone">{{ __('tran.password') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" id="exampleInputpassword" wire:model="password" placeholder="{{ __('tran.enter')  .   __('tran.password')}}" required>
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="exampleInputpasswordconfirm">{{ __('tran.passwordconfirm') }}</label>
                                <input type="password" class="form-control @error('passwordconfirm') is-invalid @enderror" id="exampleInputpasswordconfirm" wire:model="passwordconfirm" placeholder="{{ __('tran.enter')  .   __('tran.passwordconfirm')}}" required>
                                @error('passwordconfirm')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
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
        $('#role-dropdown2').select2({
            // theme: 'bootstrap4',
        }).on('change', function () {
             @this.set('role', $(this).val());
        });

        // $('#role-dropdown2').on('change', function()  {
        //      @this.set('roleuser', $(this).val());
        // });


        // window.livewire.on('productStore', () => {
        //     $('#category-dropdown').select2();
        // });
    });
</script>
@endpush
