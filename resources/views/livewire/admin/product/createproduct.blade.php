<div>
    <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">{{ __('tran.name'). __('tran.product') }}</label>
                <input type="text" id="inputName" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" id="inputClientCompany" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputDescription">{{ __('tran.description')}}</label>
                <textarea id="inputDescription" class="form-control" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">{{ __('tran.unit') }}</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>{{  __('tran.select'). __('tran.unit') }}</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">{{ __('tran.category') }}</label>
                <select id="inputStatus" class="form-control custom-select">
                  <option selected disabled>{{  __('tran.select'). __('tran.category') }}</option>
                  <option>On Hold</option>
                  <option>Canceled</option>
                  <option>Success</option>
                </select>
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
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">{{ __('tran.price_buy') }}</label>
                <input type="number" id="inputEstimatedBudget" class="form-control">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">{{ __('tran.price_sale') }}</label>
                <input type="number" id="inputSpentBudget" class="form-control">
              </div>
              <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEstimatedDuration">{{ __('tran.dis') }}</label>
                        <input type="number" id="inputEstimatedDuration" class="form-control">
                      </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="inputEstimatedDuration">{{ __('tran.dis') }}</label>
                        <input type="number" id="inputEstimatedDuration" class="form-control">
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
</div>
