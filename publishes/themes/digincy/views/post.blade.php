
@sections('breadcrumbs',['title'=> $$module_name_singular->name] )

<!-- blog section start -->
<section class="blog-area section-padding--ptb_110">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 order-2 order-lg-1 mtn-30 blog-widget__wrapper">
                <!-- widget item start -->
                <div class="blog-widget mt-30">
                    <h4 class="blog-widget-title">Search</h4>
                    <form class="widget-search-form">
                        <input placeholder="Search keyword" type="text" class="search-field">
                        <button type="submit" class="search-btn"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <!-- widget item end -->
            @if( Module::has('Article') )
                <!-- widget item start -->
                <div class="blog-widget mt-30">
                    <h4 class="blog-widget-title">Categories</h4>

                    <ul class="blog-categories">

                        @if( (\Theme::getConfig())['CategoryModel'] !== null)
                            @foreach ( (\Theme::getConfig())['CategoryModel']::all() as $category)
                                <li><a href="{{route('frontend.categories.show', [encode_id($category->id), $category->slug])}}" >{{$category->name}}</a></li>
                            @endforeach
                        @endif
                    </ul>
                </div>
                <!-- widget item end -->
            @endif

                <!-- widget item start -->
                {{--<div class="blog-widget mt-30">
                    <h4 class="blog-widget-title">Recent Posts</h4>
                    <ul class="recent-posts-inner">
                        <li class="recent-posts">
                            <div class="recent-posts-image">
                                <a href="blog-details.html"><img src="assets/img/blog/recent-01.jpg" alt="post thumb"></a>
                            </div>
                            <div class="recent-posts-body">
                                <span class="recent-posts-meta">13 January, 2020</span>
                                <h6 class="recent-posts-title"><a href="blog-details.html">Diffrent title gose This is demo</a></h6>
                            </div>
                        </li>
                        <li class="recent-posts">
                            <div class="recent-posts-image">
                                <a href="blog-details.html"><img src="assets/img/blog/recent-02.jpg" alt="post thumb"></a>
                            </div>
                            <div class="recent-posts-body">
                                <span class="recent-posts-meta">17 February, 2020</span>
                                <h6 class="recent-posts-title"><a href="blog-details.html">Diffrent title gose This is demo</a></h6>
                            </div>
                        </li>
                        <li class="recent-posts">
                            <div class="recent-posts-image">
                                <a href="blog-details.html"><img src="assets/img/blog/recent-03.jpg" alt="post thumb"></a>
                            </div>
                            <div class="recent-posts-body">
                                <span class="recent-posts-meta">24 March, 2020</span>
                                <h6 class="recent-posts-title"><a href="blog-details.html">Diffrent title gose This is demo</a></h6>
                            </div>
                        </li>
                        <li class="recent-posts">
                            <div class="recent-posts-image">
                                <a href="blog-details.html"><img src="assets/img/blog/recent-04.jpg" alt="post thumb"></a>
                            </div>
                            <div class="recent-posts-body">
                                <span class="recent-posts-meta">28 March, 2020</span>
                                <h6 class="recent-posts-title"><a href="blog-details.html">Diffrent title gose This is demo</a></h6>
                            </div>
                        </li>
                    </ul>
                </div>--}}
                <!-- widget item end -->

                <!-- widget item start -->
                <div class="blog-widget mt-30">
                    <h4 class="blog-widget-title">Tags</h4>
                    <div class="blog-tag">
                        @foreach ($$module_name_singular->tags as $tag)
                        <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}">Insect</a>
                        @endforeach
                    </div>
                </div>
                <!-- widget item end -->
            </div>

            <div class="col-lg-9 order-1 order-lg-2">
                <!-- blog details start -->
                <div class="blog-post blog-post__style-2">
                    <div class="blog-post__thumb">
                        <img src="{{$$module_name_singular->featured_image}}" alt="{{ $$module_name_singular->name }} Image">
                    </div>
                    <div class="blog-post__content blog-details">
                        <h4 class="blog-title">
                            {{ $$module_name_singular->name }}
                        </h4>
                        <div class="blog-meta d-flex justify-content-between">
                            <div class="date">
                                <a href="#">{{$$module_name_singular->published_at_formatted}}</a>
                            </div>
                            <ul class="blog-meta-action">
                                <li>
                                    <a href="#"><i class="fa fa-heart-o"></i>32</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-heart-o"></i>17</a>
                                </li>
                            </ul>
                        </div>
                        {!!$$module_name_singular->content!!}
                    </div>
                </div>
                <!-- blog details end -->

                <!-- comment area start -->
                <div class="comment-section section-bg section-padding">
                    <h4>03 Comment</h4>
                    <ul>
                        <li>
                            <div class="author-avatar">
                                <img src="assets/img/blog/comment-icon.png" alt="">
                            </div>
                            <div class="comment-body">
                                <span class="reply-btn"><a href="#">Reply</a></span>
                                <h5 class="comment-author">Erik Jhonson</h5>
                                <div class="comment-post-date">
                                    15 Dec, 2019 at 9:15pm
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                    adipisci optio ex, non pariatur itaque illo sunt?</p>
                            </div>
                        </li>
                        <li class="comment-children">
                            <div class="author-avatar">
                                <img src="assets/img/blog/comment-icon.png" alt="">
                            </div>
                            <div class="comment-body">
                                <span class="reply-btn"><a href="#">Reply</a></span>
                                <h5 class="comment-author">Pitter Looks</h5>
                                <div class="comment-post-date">
                                    20 Nov, 2019 at 9:30am
                                </div>
                                <p>pariatur itaque Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim maiores
                                    adipisci optio ex, laboriosam facilis non illo sunt?</p>
                            </div>
                        </li>
                        <li>
                            <div class="author-avatar">
                                <img src="assets/img/blog/comment-icon.png" alt="">
                            </div>
                            <div class="comment-body">
                                <span class="reply-btn"><a href="#">Reply</a></span>
                                <h5 class="comment-author">Dominic Palma</h5>
                                <div class="comment-post-date">
                                    25 Jan, 2019 at 8:50pm
                                </div>
                                <p>Enim maiores Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    adipisci optio ex, laboriosam facilis non pariatur itaque illo sunt?</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- comment area end -->

                <!-- start blog comment box -->
                <div class="blog-comment-wrapper section-bg ">
                    <h4>Leave A Reply</h4>
                    <p>Email address will not be published. Required fields are marked *</p>
                    <form action="#">
                        <div class="comment-post-box">
                            <div class="row">
                                <div class="col-12">
                                    <label>Comment</label>
                                    <textarea name="commnet" placeholder="Write a comment"></textarea>
                                </div>
                                <div class="col-md-4">
                                    <label>Name</label>
                                    <input type="text" class="coment-field" placeholder="Name">
                                </div>
                                <div class="col-md-4">
                                    <label>Email</label>
                                    <input type="text" class="coment-field" placeholder="Email">
                                </div>
                                <div class="col-md-4">
                                    <label>Website</label>
                                    <input type="text" class="coment-field" placeholder="Website">
                                </div>
                                <div class="col-12">
                                    <div class="coment-btn">
                                        <input class="btn btn__contact" type="submit" name="submit" value="Post Comment">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- start blog comment box -->
            </div>
        </div>
    </div>
</section>
<!-- blog section end -->
