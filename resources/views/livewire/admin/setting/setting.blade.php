<div>
     <div class="row">
        <div class="col-md-6">
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
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div>
            </div>
        </div>
        <div class="col-md-6">
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
                    @foreach ($banner->where('type','banner') as $item)
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
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <div class="card card-dark">
                <div class="card-header">
                     <h3 class="card-title">{{ __('tran.header') }}</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                </div>
                <div class="card-body p-0">
                    {{-- <a href="#" class="btn btn-info"><i class="fas fa-eye"></i> new</a> --}}
                    @foreach ($banner->where('type','brand') as $item)
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
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card card-dark">
                <div class="card-header">
                     <h3 class="card-title">{{ __('tran.header') }}</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                            <i class="fas fa-minus"></i>
                            </button>
                        </div>
                </div>
                <div class="card-body p-0">
                    @foreach ($banner->where('type','banner') as $item)
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
                <div class="card-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
                  </div>
            </div>
        </div>
    </div>
</div>
