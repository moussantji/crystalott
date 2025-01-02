<div class="card-body">
    <div class="row">
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Post title"
                        value="{{ $post->title }}" required autofocus autocomplete="off">
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control" name="content" id="content" rows="5" required autofocus autocomplete="off">{{ $post->content }}</textarea>
                </div>

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="text" id="image" name="image" class="form-control" placeholder="Post image"
                        value="{{ $post->image }}" required autofocus autocomplete="off">
                </div>
                <input type="hidden" id="user" name="user_id" class="form-control"
                        value="{{ $post->user_id }}" required autofocus autocomplete="off">

            </div>

            <div class="col-lg-6">

                <div class="mb-3">
                    <label for="categories" class="form-label">Categories</label>
                    <select class="form-control" data-choices name="category_id" id="choices-single-default">
                        <option value="">Select Category</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
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
