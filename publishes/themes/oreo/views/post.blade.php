
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-lg-12">

            <!-- Title -->
            <h1 class="mt-4">{{$$module_name_singular->name}}</h1>

            <!-- Author -->
            <p class="lead">
                by
                <a href="#">{{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}</a>
            </p>

            <hr>

            <!-- Date/Time -->
            <p>Posted on {{$$module_name_singular->published_at_formatted}}</p>
            @php
                $post_details_url = route('frontend.posts.show',[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <hr>

            <!-- Preview Image -->
            <img class="card-img-top" src="{{$$module_name_singular->featured_image}}" alt="{{$$module_name_singular->name}}">

            <hr>

            <!-- Post Content -->
            <p class="lead">
                {!!$$module_name_singular->content!!}
            </p>
            <p>
                        <span class="font-weight-bold">
                            Category:Digincy
                        </span>

                <a href="{{route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])}}" class="badge badge-sm badge-warning text-uppercase px-3">{{$$module_name_singular->category_name}}</a>
            </p>
            <hr>



        </div>

        <!-- Sidebar Widgets Column -->

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->
