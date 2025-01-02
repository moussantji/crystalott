<div class="card-body">
    <div class="row">
        <form method="post" action="{{ route('coupons.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" id="code" name="code" class="form-control" placeholder="Coupon code"
                        value="{{ old('code') }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control" data-choices name="type" id="choices-single-default">
                        <option value="">Select type</option>
                        <option value="percentage">Percentage</option>
                        <option value="fixe">fixe</option>
                    </select>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" id="discount" name="discount" class="form-control"
                        placeholder="Coupon discount" value="{{ old('discount') }}" required autofocus
                        autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">

                    <label for="expires_at" class="form-label">Expires_at</label>
                    <div class="w-50 mb-3">
                        <div class="mb-3">
                             <input type="text" id="basic-datepicker" name="expires_at" class="form-control" placeholder="Expired date">
                        </div>
                   </div>

                </div>

            </div>

            <div class="col-lg-6">

                <x-primary-button class="btn btn-success mt-2">{{ __('Save') }}</x-primary-button>

            </div>
        </form>
    </div>
</div>
