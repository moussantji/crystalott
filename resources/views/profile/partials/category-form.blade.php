<div class="card-body">
    <div class="row">
        <form method="post" action="{{ route('categories.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Category name"
                        value="{{ old('name') }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <x-primary-button class="btn btn-success mt-2">{{ __('Save') }}</x-primary-button>

            </div>
        </form>
    </div>
</div>
