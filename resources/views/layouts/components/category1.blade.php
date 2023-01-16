@foreach ($posts as $post)
    <div class="ajax-inner fl-wrap">
        <div class="list-post-wrap">
            <!--list-post-->
            <div class="list-post fl-wrap">
                <div class="list-post-media">
                    <a href="/{{ $post->slug }}">
                        <div class="bg-wrap">
                            <div class="bg" data-bg="{{ Vite::asset('resources/assets/images/all/13.jpg') }}"></div>
                        </div>
                    </a>
                    <span class="post-media_title">&copy; Image Copyrights Title</span>
                </div>
                <div class="list-post-content">
                    <a class="post-category-marker" href="#">Science</a>
                    <h3><a href="/{{ $post->slug }}">{{ $post->title }}</a></h3>
                    <span class="post-date"><i class="far fa-clock"></i> Posted on {{ date('js M Y', strtotime($post->updated_at))}}</span>
                    <p>{{ $post->description }}</p>
                    <ul class="post-opt">
                        <li><i class="far fa-comments-alt"></i> 6 </li>
                        <li><i class="fal fa-eye"></i>  587 </li>
                    </ul>
                    <div class="author-link"><a href="/{{ $post->slug }} "><img src="{{ Vite::asset('resources/assets/images/avatar/1.jpg') }}" alt="">  <span>By Jane Taylor</span></a></div>
                </div>
            </div>
            <!--list-post end-->
        </div>
    </div>
@endforeach
