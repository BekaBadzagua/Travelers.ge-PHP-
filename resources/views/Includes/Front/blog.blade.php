<section class="blog">
    <div class="container-center">
        <div class="section-header">
            <h1><a href="#">Our Blog</a></h1>
            <p>Our Daily News & Updates</p>
        </div>


        @foreach ($two_blogs as $blog)
            <div class="mini-blog">
                <img src="{{asset('storage/images/blogs/'.$blog->img)}}" />
                <a href="{{route('show-blog',['id'=>$blog->id])}}">{{$blog->name}}</a>
                <p class="author-p">by Admin •<span><a href="Post-Blog.html">News</a></span></p>
                <p class="mini-blog-p">{{$blog->text}}</p>
            </div>        
        @endforeach

        <div class="home-blog-btn">
            <a href="{{route("blogs")}}">
                <button class="button-red">View All Our Blogs</button>
            </a>
        </div>
    </div>
</section>
