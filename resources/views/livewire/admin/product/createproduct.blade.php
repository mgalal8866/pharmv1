<div>
    <form wire:submit.prevent="save">
        @csrf


    <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">{{ __('tran.general') }}</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">{{ __('tran.name'). __('tran.product') }}</label>
                <input type="text" id="inputName" wire:model='name' class="form-control @error('name') is-invalid @enderror" >
                @error('name')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
              </div>

              <div class="form-group">
                <label for="inputClientCompany">{{__('tran.code')  }}</label>
                <input type="text" id="inputClientCompany" wire:model='code' class="form-control @error('code') is-invalid @enderror">
              </div>
              <div class="form-group">
                <label for="inputDescription">{{ __('tran.description')}}</label>
                <textarea id="inputDescription" class="form-control @error('description') is-invalid @enderror"  wire:model='description'  rows="4"></textarea>
                @error('description')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
              <div class="form-group">
                <label for="inputStatus">{{ __('tran.unit') }}</label>
                <select id="inputStatus" class="form-control @error('unit_id') is-invalid @enderror custom-select" wire:model='unit_id' >
                  <option value="" selected>{{  __('tran.select'). __('tran.unit') }}</option>
                 @foreach ( $units as $item )
                 <option value="{{ $item->id }}">{{ $item->name }}</option>
                 @endforeach
                </select>
                @error('unit_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
              </div>
              <div class="form-group">
                <label for="inputStatus">{{ __('tran.category') }}</label>
                <select id="inputStatus" class="form-control @error('category_id') is-invalid @enderror custom-select" wire:model='category_id' >
                  <option value="" selected >{{  __('tran.select'). __('tran.category') }}</option>
                    @foreach ( $category as $item )
                     <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('category_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
              </div>
              <div class="form-group">
                <label for="inputStatus">{{ __('tran.warehouse') }}</label>
                <select id="inputStatus" class="form-control @error('warehouse_id') is-invalid @enderror custom-select" wire:model='warehouse_id' >
                  <option value="" selected>{{  __('tran.select'). __('tran.warehouse') }}</option>
                    @foreach ( $warehouse as $item )
                     <option value="{{ $item->id }}">{{ $item->name }}</option>
                    @endforeach
                </select>
                @error('warehouse_id')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">{{ __('tran.properties') }}</h3>
              <div class="card-tools">
                <button type="button" class="btn btn-tool"  data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">{{ __('tran.price_buy') }}</label>
                <input type="number" id="inputEstimatedBudget"min="0" step="0.01" wire:model='price_buy' class="form-control @error('price_buy') is-invalid @enderror">
                @error('price_buy')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
            </div>
              <div class="form-group">
                <label for="inputSpentBudget">{{ __('tran.price_sale') }}</label>
                <input type="number" id="inputSpentBudget" min="1" step="0.01" wire:model='price_sale' class="form-control @error('price_sale') is-invalid @enderror" >
                @error('price_sale')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
               </div>
               <div class="form-group">
                <label for="inputSpentBudget">{{ __('tran.qty') }}</label>
                <input type="number" id="inputSpentBudget" min="1" step="0.01" wire:model='qty' class="form-control @error('qty') is-invalid @enderror" >
                @error('qty')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror
               </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEstimatedDuration">{{ __('tran.dis') }}%</label>
                        <input type="number" id="inputEstimatedDuration"  min="0" step="0.01" wire:model='dispres' class="form-control @error('dispres') is-invalid @enderror">
                        @error('dispres')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEstimatedDuration">{{ __('tran.dis') }}$</label>
                        <input type="number" id="inputEstimatedDuration"  min="0" step="0.01" wire:model='dismo'  class="form-control @error('dismo') is-invalid @enderror">
                        @error('dismo')<span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>@enderror

                    </div>
                </div>

            </div>
            </div>
            <!-- /.card-body -->
          </div>
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">{{ __('tran.image') }}</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">

              <div class="form-group">
                <label for="exampleInputFile">{{ __('tran.image') . __('tran.select') }}</label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="exampleInputFile" wire:model="images">
                    <div wire:loading wire:target="images">Uploading...</div>
                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    @error('images.*') <span class="error">{{ $message }}</span> @enderror
                  </div>
                  <div class="input-group-append">
                    <span class="input-group-text">Upload</span>
                  </div>
                </div>
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Create new Project" class="btn btn-success float-right">
        </div>
      </div>

    </form>

</div>
