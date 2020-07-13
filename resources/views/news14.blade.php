@extends('layouts.layout')
@section('title', 'Real Blog')
@section('content')
<section id="blog">
    <div class="container1">
        <div class="left2">
            <a class="blog" href="/blog">Blog</a>
        <br class="clearfloat">
            <div class="sidebar">
                Topics:
                <div class="sidebarnav">
                    <ul>
                        <li>
                            <a href="/blog/category/news"><i class="fa fa-plus-circle" aria-hidden="true"></i>News</a> (12)
                        </li>
                        <li>
                        <a href="/blog/category/projects"><i class="fa fa-plus-circle" aria-hidden="true"></i>Projects</a> (10)
                        </li>
                        <li>
                        <a href="/blog/category/stuff_we_like"><i class="fa fa-plus-circle" aria-hidden="true"></i>Stuff We Like</a> (1)
                        </li>
                    </ul>
                    <div class="tweet">
                        <div style="width: 280px;height: 470px;">
                            <h2>
                               <span class="twitter-widget-little"><img src="/images/brd.gif" alt=""> Recent Tweets</span> 
                            </h2>
                            <ul class="margin1">
                                <li class="s1">
                                    <span>JukePop Serials: For lovers of genre fiction:...<a href="">http://t.co/RLgr7rMm2Z</a></span>
                                     <span>
                                        <span><a href="">08:55:01 PM April 04, 2013</a></span>
                                            <span>from<a href="">Facebook</a></span>
                                    </span>
                                    <span>
                                        <a class="margin0" href="">Reply</a>
                                            <a class="margin0" href="">Retweet</a>
                                               <a class="margin0" href="">Favourite</a>
                                    </span>
                                </li>
                                    <li class="s1" style="height: 90px">
                                        <span>
                                            The Startup Kids: a documentary about young web entrepreneurs in the U.S. and Europe: 
                                            <a href="">http://t.co/N1q7hSgJk1</a>
                                            <a href="">http://t.co/HhMVuKedS0</a>
                                        </span>
                                        <span>
                                            <span>
                                                <a href="">02:50:03 AM February 21, 2013</a>
                                            </span>
                                            <span>
                                                from
                                                <a href="">Facebook</a>
                                            </span>
                                        </span>
                                        <span>
                                        <a class="margin0" href="">Reply</a>
                                            <a class="margin0" href="">Retweet</a>
                                               <a class="margin0" href="">Favourite</a>
                                        </span>
                                    </li>
                                    <li class="s1" style="height: 90px">
                                        <span>
                                            Receive a design lesson in your inbox each week, hand crafted by a design pro: 
                                            <a href="">http://t.co/lOMsbD6B</a>
                                            <a href="">http://t.co/bpo6XE9B</a>
                                        </span>
                                        <span>
                                            <span>
                                                <a href="">06:45:07 PM February 07, 2013</a>
                                            </span>
                                            <span>
                                                from
                                                <a href="">Facebook</a>
                                            </span>
                                        </span>
                                        <span>
                                        <a class="margin0" href="">Reply</a>
                                            <a class="margin0" href="">Retweet</a>
                                               <a class="margin0" href="">Favourite</a>
                                        </span>
                                    </li>
                                        <li class="s1">
                                        <span>
                                            Eight UX Design Trends for 2013:... 
                                            <a href="">http://t.co/sg3Ef8uk</a>
                                        </span>
                                        <span>
                                            <span>
                                                <a href="">06:38:50 PM February 07, 2013</a>
                                            </span>
                                            <span>
                                                from
                                                <a href="">Facebook</a>
                                            </span>
                                        </span>
                                        <span>
                                        <a class="margin0" href="">Reply</a>
                                            <a class="margin0" href="">Retweet</a>
                                               <a class="margin0" href="">Favourite</a>
                                        </span>
                                    </li>
                            </ul>
                            <div class="follow">
                                <a href="">@thesumca</a>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="right2 right3">
             <div class="post post13" style="width:633px; height:414px">
                <div class="bloghead">
                    Jul 5/11
                </div>
                    <div class="btitle">
                        <a href="/blog/real-blog">Real Blog</a>
                    </div>
                        <div class="entry">
                            <p>
                                <img class="ad" src="/images/500.jpg" alt="">
                                So if you’ve been paying attention, since this site’s been up there hasn’t been much activity in the “blog” section. Partly because we’ve been busy but also because that, up until now, the blog didn’t have a backend. Yep. All this time –  a falsie. Well, I finally got around to finishing it. What we have now is a WordPress powered blog and a very basic theme (Hooray!).
                            </p>
                            <p>
                            So, sorry if we misled you. Hope you’ll forgive us. But at least now you know – it wasn’t you. It was us.
                            </p>
                        </div>
                            <h5 class="data">
                                Posted by chris | Posted in <a href="/blog/category/news">News</a>
                            </h5>
            </div>
        </div>
    </div>
</section>
@endsection