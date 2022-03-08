<div>
    @include('livewire.admin.setting.create')
    @include('livewire.admin.setting.delete')
    @include('livewire.admin.setting.edit')
@section('page2')
Setting
@stop
@section('page')
Setting
@stop

     <div class="row">

        <div class="col-md-6">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Info</h3>
                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label>Name </label>
                        <input class="form-control" wire:model="name" type="text" placeholder="Default input" disabled>
                    </div>
                    <div class="form-group">
                        <label>Email </label>
                        <input class="form-control" wire:model="email" type="email" placeholder="Email"disabled>
                    </div>
                    <div class="form-group">
                        <label>Phone </label>
                        <input class="form-control" wire:model="phone" type="text" placeholder="Phone"disabled>
                    </div>
                    <div class="form-group">
                        <label>Address </label>
                      <input class="form-control" wire:model="address" type="text" placeholder="Address"disabled>
                    </div>
                    <div class="form-group">
                        <label>Tax(%) </label>
                      <input class="form-control" wire:model="tax" type="number" placeholder="tax"disabled>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Logo :  </label>
                                <img src="{{ asset('assets/front/images/logo.png') }}"  alt="">
                                <div class="row">
                                    <span class="text-danger" role="alert">
                                        <strong>.png</strong>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Icon  :  </label>
                                <img src="{{ asset('assets/front/images/fav.png') }}"  alt="">
                            <div class="row">
                                <span class="text-danger" role="alert">
                                    <strong>.png</strong>
                                </span>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
        </div>

                {{-- Banner --}}
        <div class="col-md-6">
            <button class="btn btn-success  btn-sm"  data-toggle="modal" data-target="#modal-create" ><i class="fas fa-pencil-alt"></i>{{ __('tran.create') }}</button>

            <div class="card card-info">
                <div class="card-header">
                     <h3 class="card-title">{{ __('tran.offer') }}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                </div>
                <div class="card-body p-0">

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('tran.image') }}</th>
                                    <th>{{ __('tran.link') }}</th>
                                    <th>{{ __('tran.width') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($banner->where('type','offer') as $item)
                            <tr>
                                <td><img width="150" height="60" src=" {{ $item->image }}"></td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->width }}</td>
                                {{-- <td class="text-right py-0 align-middle"> --}}
                                {{-- <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                {{-- </div>
                                </td> --}}
                            </tr>
                         @endforeach
                            </tbody>
                        </table>

                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div> --}}
            </div>
            <div class="card card-info">
                <div class="card-header">
                     <h3 class="card-title">{{ __('tran.header') }}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                </div>
                <div class="card-body p-0">
                    @foreach ($banner->where('type','header') as $item)
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('tran.image') }}</th>
                                    <th>{{ __('tran.link') }}</th>
                                    <th>{{ __('tran.width') }}</th>
                                </tr>
                            </thead>
                            <tbody>

                            <tr>
                                <td><img width="150" height="60" src=" {{ $item->image }}"></td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->width }}</td>
                                {{-- <td class="text-right py-0 align-middle"> --}}
                                {{-- <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                {{-- </div>
                                </td> --}}
                            </tr>

                            </tbody>
                        </table>
                    @endforeach
                </div>
                <!-- /.card-body -->

            </div>
            <div class="card card-dark">
                <div class="card-header">
                     <h3 class="card-title">{{ __('tran.brand') }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                </div>
                <div class="card-body p-0">
                    {{-- <a href="#" class="btn btn-info"><i class="fas fa-eye"></i> new</a> --}}

                        <table class="table">
                            <thead>
                                <tr>
                                    <th>{{ __('tran.image') }}</th>
                                    <th>{{ __('tran.link') }}</th>
                                    <th>{{ __('tran.width') }}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach ($banner->where('type','brand') as $item)
                            <tr>
                                <td><img width="150" height="60" src=" {{ $item->image }}"></td>
                                <td>{{ $item->link }}</td>
                                <td>{{ $item->width }}</td>
                                {{-- <td class="text-right py-0 align-middle"> --}}
                                {{-- <div class="btn-group btn-group-sm">
                                    <a href="#" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="#" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                                {{-- </div>
                                </td> --}}
                            </tr>
                             @endforeach
                            </tbody>
                        </table>

                </div>
                <!-- /.card-body -->
                {{-- <div class="card-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div> --}}
            </div>

        </div>
    </div>


</div>
