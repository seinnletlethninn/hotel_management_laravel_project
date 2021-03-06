@extends('backendtemplate')

@section('title', 'New MemberType')

@section('content')
	<section class="py-5">
		<div class="mb-4">
			<h5 class="title-heading d-inline-block float-left">New Member Type</h5>
			<a href="{{ route('membertypes.index') }}" class="btn btn-primary float-right rounded"><i class="fas fa-angle-left fa-sm mr-2 text-gray-100"></i> Back</a>
			<div class="clearfix"></div>
		</div>

		{{-- form --}}
		<div class="card">
      <div class="card-header">
        <h3 class="h6 mb-0">Add New Member Type</h3>
      </div>
      <div class="card-body">
      	<form class="form-horizontal" method="post" action="{{ route('membertypes.store') }}">
      		@csrf
          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="name">Member Type Name: <sup class="text-danger">*</sup></label>
            <div class="col-md-9">
              <input type="text" class="form-control" name="name" id="name" placeholder="Enter Member Type Name" value="{{ old('name') }}">
	          	@error('name')
					     	<div class="error-message text-danger pl-1 mt-1">
				     			<small>{{ $message }}</small>
				     		</div>
				     	@enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="earnpoints">Earn Points: <sup class="text-danger">*</sup></label>
            <div class="col-md-9">
              <div class="input-group">
							  <input type="number" class="form-control" name="earnpoints" id="earnpoints" min="0" max="100" value="{{ old('earnpoints', 0)}}" placeholder="0">
							  <div class="input-group-append">
							    <span class="input-group-text">%</span>
							  </div>
							</div>
							@error('earnpoints')
					     	<div class="error-message text-danger pl-1 mt-1">
				     			<small>{{ $message }}</small>
				     		</div>
				     	@enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="level">Level: <sup class="text-danger">*</sup></label>
            <div class="col-md-9">
              <input type="number" name="level" id="level" class="form-control" placeholder="Enter Level" value="{{ old('level', $maxlevel) }}">
              @error('level')
                <div class="error-message text-danger pl-1 mt-1">
                  <small>{{ $message }}</small>
                </div>
              @enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="laundrydiscount">Laundry Discount: <sup class="text-danger">*</sup></label>
            <div class="col-md-9">
              <div class="input-group">
							  <input type="number" class="form-control" name="laundrydiscount" id="laundrydiscount" min="0" max="100" value="{{ old('laundrydiscount', 0)}}" placeholder="0">
							  <div class="input-group-append">
							    <span class="input-group-text">%</span>
							  </div>
							</div>
							@error('laundrydiscount')
					     	<div class="error-message text-danger pl-1 mt-1">
				     			<small>{{ $message }}</small>
				     		</div>
				     	@enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="fooddiscount">Food Discount: <sup class="text-danger">*</sup></label>
            <div class="col-md-9">
              <div class="input-group">
							  <input type="number" class="form-control" name="fooddiscount" id="fooddiscount" min="0" max="100" value="{{ old('fooddiscount', 0)}}" placeholder="0">
							  <div class="input-group-append">
							    <span class="input-group-text">%</span>
							  </div>
							</div>
							@error('fooddiscount')
					     	<div class="error-message text-danger pl-1 mt-1">
				     			<small>{{ $message }}</small>
				     		</div>
				     	@enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="additionalbenefits">Additional Benefits:</label>
            <div class="col-md-9">
              <textarea class="form-control" name="additionalbenefits" id="additionalbenefits" placeholder="Other benefits..." rows="5">{{ old('additionalbenefits') }}</textarea>
            </div>
          </div>

          <div class="line"></div>

          <h6 class="mb-4">Restrictions</h6>

          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="numberofstays">Number of Stays: <sup class="text-danger">*</sup></label>
            <div class="col-md-9">
              <input type="number" class="form-control" name="numberofstays" id="numberofstays" placeholder="Minimum number of stays" min="0" max="1000" value="{{ old('numberofstays') }}">
              @error('numberofstays')
					     	<div class="error-message text-danger pl-1 mt-1">
				     			<small>{{ $message }}</small>
				     		</div>
				     	@enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="numberofnights">Number of Nights: <sup class="text-danger">*</sup></label>
            <div class="col-md-9">
              <input type="number" class="form-control" name="numberofnights" id="numberofnights" placeholder="Minimum number of nights" min="0" max="1000" value="{{ old('numberofnights') }}">
              @error('numberofnights')
					     	<div class="error-message text-danger pl-1 mt-1">
				     			<small>{{ $message }}</small>
				     		</div>
				     	@enderror
            </div>
          </div>

          <div class="form-group row mb-4">
            <label class="col-md-3 col-form-label" for="paidamount">Paid Amount: <sup class="text-danger">*</sup></label>
            <div class="col-md-9">
              <div class="input-group">
							  <div class="input-group-prepend">
							    <span class="input-group-text">$</span>
							  </div>
							  <input type="number" class="form-control" name="paidamount" id="paidamount" min="0" placeholder="Minimum amount customer needs to spend" value="{{ old('paidamount') }}">
                <div class="input-group-append">
                  <span class="input-group-text">.00</span>
                </div>
							</div>
							@error('paidamount')
					     	<div class="error-message text-danger pl-1 mt-1">
				     			<small>{{ $message }}</small>
				     		</div>
				     	@enderror
            </div>
          </div>
          

          <div class="form-group row mt-5">
            <div class="col-md-9 ml-auto">
              <button type="submit" class="btn btn-primary">Save</button>
              <button type="reset" class="btn btn-outline-secondary">Reset</button>
            </div>
          </div>
        </form>
      </div>
    </div>
		{{-- form end --}}
	</section>
@endsection

@section('script')
  
  <script type="text/javascript">
    $('form').on('keypress', '#level', function(e) {
      if (e.which != 8 && e.which != 0 && (e.which < 49 || e.which > 57)) {
        return false;
      }
    });
  </script>

@endsection