<div class="card-body">
    <div class="row">
        <form method="post" action="{{ route('admin.video.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Video name"
                        value="{{ old('name') }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="link" class="form-label">link</label>
                    <input type="text" id="link" name="link" class="form-control" placeholder="Video link"
                        value="{{ old('link') }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="star" class="form-label">Star</label>
                    <input type="text" id="star" name="star" class="form-control" placeholder="Video star"
                        value="{{ old('star') }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="text" id="time" name="time" class="form-control" placeholder="Video duration"
                        value="{{ old('name') }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">
                <!-- File Upload -->
                <div class="fallback">
                    <input id="pictures" name="pictures[]" type="file" />
                </div>

            </div>
            <div class="col-lg-6">

                <x-primary-button class="btn btn-success mt-2">{{ __('Save') }}</x-primary-button>

            </div>
        </form>
    </div>
</div>
