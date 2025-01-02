<div class="card-body">
    <h5 class="card-title mb-1 anchor" id="with-controls">
        Movie image <a class="anchor-link" href="#with-controls">#</a>
    </h5>
    <p class="text-muted">
        Adding in the previous and next controls:
    </p>
    <div class="w-50 mb-3 mx-auto">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($user->photos as $photo)
                    <form method="post" action="{{ route('admin.photo.destroy',$photo) }}">
                        @csrf
                        @method('delete')

                        <div class="carousel-item active" id="movieimage{{ $photo->id }}">
                            <img src="{{ $photo->getImageUrl(150, 150) }}"
                                class="d-block w-100" alt="img-4">
                            <button type="button"
                                class="btn btn-danger position-absolute bottom-0 w-100 start-0"
                                onclick="event.preventDefault();
                                this.closest('form').submit();"><span
                                    class="htmx-indicator spinner-border spinner-border-sm"
                                    role="status" aria-hidden="true"></span>Delete</button>
                        </div>
                    </form>
                @endforeach
            </div>
        </div>
    </div>
</div>
