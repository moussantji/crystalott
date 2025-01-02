<div class="card-body">
    <div class="row">
        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Post title"
                        value="{{ old('title') }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="5" value="{{ old('content') }}" required autofocus autocomplete="off"></textarea>
                </div>

            </div>

            <div class="col-lg-6">

                <!-- File Upload -->
                <div class="fallback mb-3">
                    <input id="pictures" name="pictures[]" type="file" />
                </div>
                <input type="hidden" id="user" name="user_id" class="form-control"
                        value="{{ auth()->user()->id }}" required autofocus autocomplete="off">

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="categories" class="form-label">Categories</label>
                    <select class="form-control" data-choices name="category_id" id="choices-single-default">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                   </select>
                </div>

            </div>

            <div class="col-lg-6">

                <x-primary-button class="btn btn-success mt-2">{{ __('Save') }}</x-primary-button>

            </div>
        </form>
    </div>
</div>
