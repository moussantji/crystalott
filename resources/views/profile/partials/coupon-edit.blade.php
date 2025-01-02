<div class="card-body">
    <div class="row">
        <form action="{{ route('coupons.update', $coupon->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="code" class="form-label">Code</label>
                    <input type="text" id="code" name="code" class="form-control" placeholder="Coupon code"
                        value="{{ $coupon->code }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="type" class="form-label">Type</label>
                    <select class="form-control" data-choices name="type" id="choices-single-default">
                        <option value="">Select type</option>
                        <option value="percentage" {{ $coupon->type === 'percentage' ? 'selected' : '' }}>Percentage
                        </option>
                        <option value="fixe" {{ $coupon->type === 'fixe' ? 'selected' : '' }}>fixe</option>
                    </select>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" id="discount" name="discount" class="form-control"
                        placeholder="Coupon discount" value="{{ $coupon->discount }}" required autofocus
                        autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="expires_at" class="form-label">Expires_at</label>

                    <input type="text" id="basic-datepicker" name="expires_at" class="form-control" placeholder="{{ \Carbon\Carbon::parse($coupon->expires_at)->format('d-m-Y') }}">

                </div>

            </div>

            <div class="col-lg-6">

                <x-primary-button class="btn btn-success mt-2">{{ __('Save') }}</x-primary-button>

            </div>
        </form>
    </div>
</div>
