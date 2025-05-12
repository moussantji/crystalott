<div class="card-body">
    <div class="row">
        <form method="post" action="{{ route('admin.video.update',['movie' => $movie]) }}" enctype="multipart/form-data">
            @csrf


            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" id="name" name="name" class="form-control"
                        value="{{ old('name',$movie->name) }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="link" class="form-label">link</label>
                    <input type="text" id="link" name="link" class="form-control"
                        value="{{ old('link',$movie->link) }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="star" class="form-label">Star</label>
                    <input type="text" id="star" name="star" class="form-control"
                        value="{{ old('star',$movie->star) }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="time" class="form-label">Time</label>
                    <input type="text" id="time" name="time" class="form-control"
                        value="{{ old('time',$movie->time) }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">
                <!-- File Upload -->
                <div class="fallback mt-3">
                    <input id="pictures" name="pictures[]" type="file" />
                </div>

            </div>
            <div class="col-lg-6">

                <x-primary-button class="btn btn-success mt-2">{{ __('Save') }}</x-primary-button>

            </div>
        </form>
    </div>
    <div class="row">

    </div>
</div>
