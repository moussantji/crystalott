@if ($paginator->hasPages())
    <div class="col-sm">
        <div class="text-muted">
            Showing
            <span class="fw-semibold">{{ $paginator->currentPage() }}</span>
            Of
            <span class="fw-semibold">{{ $paginator->lastPage() }}</span>
            Pages
        </div>
    </div>
    <div class="col-sm-auto">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end mb-0">
                @if ($paginator->onFirstPage())
                    <li class="page-item disable"><a class="page-link" href="javascript:void(0);">Previous</a>
                    </li>
                @else
                    <li class="page-item"><a class="page-link" href="{{ $paginator->previousPageUrl() }}">Previous</a>
                    </li>
                @endif

                @foreach ($elements as $element)
                    @if (is_string($element))
                        <li class="page-item"><a class="page-link disable"
                                href="javascript:void(0);">{{ $element }}</a></li>
                    @endif
                    @if (is_array($element))
                        @foreach ($element as $page => $url)
                            @if ($page == $paginator->currentPage())
                                <li class="page-item active"><a class="page-link"
                                        href="javascript:void(0);">{{ $page }}</a>
                                </li>
                            @else
                                <li class="page-item"><a class="page-link"
                                        href="{{ $url }}">{{ $page }}</a></li>
                            @endif
                        @endforeach
                    @endif
                @endforeach

                @if ($paginator->hasMorePages())
                    <li class="page-item"><a class="page-link" href="{{ $paginator->nextPageUrl() }}">Next</a></li>
                @else
                    <li class="page-item disable"><a class="page-link" href="javascript:void(0);">Next</a></li>
                @endif
            </ul>
        </nav>
    </div>
@endif
