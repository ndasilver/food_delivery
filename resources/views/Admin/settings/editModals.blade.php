<!-- Restaurant name modal-->
<div class="modal fade" id="name-modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Restaurant Name</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{ route('edit.name', 1) }}">
            @csrf
        <div class="modal-body">
        <label for ="name">Restaurant Name</label>
        <input class = "form-control" type="text" name="name" value="{{ $settings->restaurant_name }}" placeholder="Restaurant Name" required/>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

  <!-- Terms and conditions modal-->
<div class="modal fade" id="terms-modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Terms and Conditions</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{ route('edit.terms', 1) }}">
            @csrf
        <div class="modal-body">
        <label for ="terms">Terms and conditions</label>
        <textarea name="terms" class="form-control" rows="6" placeholder="Type the 'Terms and Conditions...'">{{$settings->terms_conditions}}</textarea>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

    <!-- SMS number modal-->
<div class="modal fade" id="sms-modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update SMS Number</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{ route('edit.sms', 1) }}">
            @csrf
        <div class="modal-body">
        <label for ="sms">SMS number</label>
        <input class = "form-control" type="text" name="sms" value="{{ $settings->sms_number }}" placeholder="SMS Number" required/>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

   <!-- Email modal-->
<div class="modal fade" id="email-modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Email</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{ route('edit.email', 1) }}">
            @csrf
        <div class="modal-body">
        <label for ="email">Email</label>
        <input class = "form-control" type="text" name="email" value="{{ $settings->email }}" placeholder="Email" required/>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

   <!-- Currency modal-->
<div class="modal fade" id="currency-modal" style="display: none;" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Update Currency</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <form method="POST" action="{{ route('edit.currency', 1) }}">
            @csrf
        <div class="modal-body">
        <label for ="currency">Currency</label>
        <select class="form-control" name="currency" required>
            @foreach ($currencies as $currency)
                <option value="{{ $currency->id }}">{{ $currency->currency_name }} {{ $currency->currency_code }}</option>
            @endforeach
        </select>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>

