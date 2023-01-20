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
                    <span class="post-date"><i class="far fa-clock"></i> Posted on {{ date('F D Y h:i:s A', strtotime($post->updated_at))}}
                    @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                        <div class="row">
                            <div class="col-md-6">
                                <a href="/blog/{{$post->slug}}/edit" class="btn-edit">Edit</a>
                            </div>
                            <div class="col-md-6">
                                <form action="/blog/{{$post->slug}}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button href="/blog/{{$post->slug}}/edit" type="submit" class="btn-delete">Delete</button>
                                </form>
                            </div>
                        </div>
                    @endif
                    </span>
                    <p>{{ $post->details }}</p>
                    <ul class="post-opt">
                        <li><i class="far fa-comments-alt"></i> 6 </li>
                        <li><i class="fal fa-eye"></i>  587 </li>
                    </ul>
                    <div class="author-link" style="margin-top:15px">
                        <a href="/blog/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
            <!--list-post end-->
        </div>
    </div>
@endforeach
