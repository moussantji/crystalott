@extends('blog-base')

@section('title', 'Blog detail')

@section('content')

    <section class="blog-details">
        <div class="container">
            <div class="row gutter-y-60">
                <div class="col-lg-8">
                    <div class="blog-details__content">
                        <div class="blog-details__image">
                            <img src="{{ $post->image }}" alt="ienet">
                            <div class="blog-details__image__date">{{ $post->created_at->format('M') }},
                                {{ $post->created_at->format('d') }}</div>
                        </div><!-- /.blog-card__image -->
                        <ul class="list-unstyled blog-details__top-meta">
                            <li><i class="fas fa-user-alt"></i>by Admin</li>
                            <li><i class="fas fa-comment-dots"></i>{{ str_pad($post->comments->count(), 2, '0', STR_PAD_LEFT) }} Comments</li>
                        </ul><!-- /.list-unstyled blog-card__top-meta -->
                        <h3 class="blog-details__title">{{ $post->title }}</h3>
                        <p class="blog-details__text">
                            {{ $post->content }}
                        </p><!-- /.blog-details__text -->
                        <div class="blog-details__meta">
                            <div class="blog-details__cats">
                                <h4 class="blog-details__cats__title">Categories:</h4><!-- /.blog-details__tags__title -->
                                <a href="#">{{ $post->category->name }}</a>
                            </div><!-- /.blog-details__tags -->
                        </div><!-- /.blog-details__meta -->
                    </div><!-- /.blog-details -->

                    @if (!$post->comments->isEmpty())
                    <div class="comments-one">
                        <h3 class="comments-one__title">{{ str_pad($post->comments->count(), 2, '0', STR_PAD_LEFT) }} Comments</h3><!-- /.comments-one__title -->
                        <ul class="list-unstyled comments-one__list">
                            @foreach ($post->comments as $comment)
                            <li class="comments-one__card">
                                <div class="comments-one__card__image">
                                    <img src="{{ asset('assets/images/users/user.png') }}" alt="ienet">
                                </div><!-- /.comments-one__card__image -->
                                <div class="comments-one__card__content">
                                    <h3 class="comments-one__card__title">{{ $comment->name }}</h3>
                                    <!-- /.comments-one__card__title -->
                                    <span class="comments-one__card__date">{{ $comment->created_at->format('F d, Y') }} at {{ $comment->created_at->format('H:i') }}</span><!-- /.comments-one__card__date -->
                                    <p class="comments-one__card__text">
                                        {{ $comment->message }}
                                    </p><!-- /.comments-one__card__text -->
                                </div><!-- /.comments-one__card__content -->
                            </li><!-- /.comments-one__card -->
                            @endforeach
                        </ul><!-- /.list-unstyled comments-one__list -->
                    </div><!-- /.comments-one -->
                    @endif

                    <div class="comments-form">
                        <h3 class="comments-form__title">Leave a Comment</h3><!-- /.comments-form__title -->
                        <form id="myForm" action="{{ route('comments.store', $post->id) }}" method="POST"
                            class="comments-form__form contact-form-validated form-one">
                            @csrf
                            <div class="form-one__group">
                                <div class="form-one__control">
                                    <input type="text" name="name" placeholder="Your name">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control">
                                    <input type="email" name="email" placeholder="Email address">
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <textarea name="message" placeholder="Write  a message minimun 151 caracteres"></textarea><!-- /# -->
                                </div><!-- /.form-one__control -->
                                <div class="form-one__control form-one__control--full">
                                    <a href="javascript:void(0)" onclick="document.getElementById('myForm').submit()" class="ienet-btn ienet-btn--base"><span>Submit
                                            comment</span></a>
                                </div><!-- /.form-one__control -->
                            </div><!-- /.form-one__group -->
                        </form>
                        <div class="result"></div>
                    </div><!-- /.comments-form -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <aside class="widget-area">
                            <div class="sidebar__single">
                                <h4 class="sidebar__title">Search Here</h4><!-- /.sidebar__title -->
                                <form action="#" class="sidebar__search">
                                    <input type="text" placeholder="Search Here" />
                                    <button type="submit" aria-label="search submit">
                                        <span><i class="icon-search"></i></span>
                                    </button>
                                </form><!-- /.sidebar__search -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single">
                                <h4 class="sidebar__title">Latest posts</h4><!-- /.sidebar__title -->
                                <ul class="sidebar__posts list-unstyled">
                                    @foreach ($posts as $last)
                                        <li class="sidebar__posts__item">
                                            <div class="sidebar__posts__image">
                                                <img src="{{ asset('assets/images/blog/lp-1-1.jpg') }}" alt="ienet">
                                            </div><!-- /.sidebar__posts__image -->
                                            <div class="sidebar__posts__content">
                                                <p class="sidebar__posts__meta"><i class="fas fa-user-alt"></i>by Admin</p>
                                                <!-- /.sidebar__posts__meta -->
                                                <h4 class="sidebar__posts__title"><a
                                                        href="{{ route('blog', ['slug' => $last->getslug(), 'id' => $last]) }}">{{ $last->title }}</a>
                                                </h4><!-- /.sidebar__posts__title -->
                                            </div><!-- /.sidebar__posts__content -->
                                        </li>
                                    @endforeach
                                </ul><!-- /.sidebar__posts list-unstyled -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single">
                                <h4 class="sidebar__title">Categories</h4><!-- /.sidebar__title -->
                                <ul class="sidebar__categories list-unstyled">
                                    @foreach ($categories as $category)
                                        <li><a href="#">{{ $category->name }}</a>({{ $category->posts->count() }})
                                        </li>
                                    @endforeach
                                </ul><!-- /.sidebar__categories list-unstyled -->
                            </div><!-- /.sidebar__single -->
                            <div class="sidebar__single">
                                <h4 class="sidebar__title">Comments</h4><!-- /.sidebar__title -->
                                <ul class="sidebar__comments list-unstyled">
                                    @foreach ($posts as $last)
                                    <li class="sidebar__comments__item">
                                        <div class="sidebar__comments__icon">
                                            <i class="fas fa-comment-dots"></i>
                                        </div><!-- /.sidebar__comments__icon -->
                                        <h6 class="sidebar__comments__title"><a href="{{ route('blog', ['slug' => $last->getslug(), 'id' => $last]) }}">{{ $last->title }}</a></h6><!-- /.sidebar__comments__title -->
                                    </li>
                                    @endforeach
                                </ul><!-- /.sidebar__comments list-unstyled -->
                            </div><!-- /.sidebar__single -->
                        </aside><!-- /.widget-area -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.blog-one blog-one--page -->


@endsection
