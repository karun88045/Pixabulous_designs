<?php include"header.php";?>

<style>
.post_inner_one
{
	box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;
	padding: 20px;
}
.entry-media
{
	.position: relative;
}
a.post-img {

    position: relative;
}

.post_cat .posted_in a {
    position: absolute;
    top: 780px;
    left: 710px;
    background: #43baff;
    color: #fff;
    text-decoration: none;
    padding: 10px;
    border-radius: 10px;
}
.post_cat .posted_out a {
    position: absolute;
    top: 780px;
    left: 790px;
    background: #43baff;
    color: #fff;
    text-decoration: none;
    padding: 10px;
    border-radius: 10px;
}

.entry_meta .posted_on a .entry_date
{
	text-decoration: none;
	color:#6b1596;
}
.entry_meta .by_line a
{
	text-decoration: none;
	color:#6b1596;
}
.entry_meta .comment_num a
{
	text-decoration: none;
	color:#6b1596;
}
.entry-title h3
{
	color: #000;
	font-size: 35px;
}

</style>

<section class="blog">
    <div class="blog-title pt-5">
        <h1 class="text-center py-5">Blog</h1>
    </div>
</section>

<div class="container">
    <div class="row">

        <div id="primary" class="content-area col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <main id="main" class="site-main">

                <article id="post_inner_one" class="post_inner_one">
                    <div class="post_inner">
                    <?php
                    $conn = mysqli_connect('localhost','root','','pixabulous_blog');
                    $sql = "SELECT * FROM `post` WHERE id=2";
                    $query = mysqli_query($conn,$sql);
                    $row = mysqli_fetch_assoc($query);
                    ?>
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="entry_media pb-4">
                                    <div class="post_cat">
                                        <span class="posted_in">
                                            <a href="blog_digital_marketing.php" rel="category tag"><?php echo $row['button'] ;?></a>
                                        </span>
                                    </div>
                                    <a href="#">
                                       <img class="img-fluid post-img"
                                    src="Admin/admin/Upload1/<?php echo $row['image'] ;?>" class="img-fluid" style="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="inner_post">

                                <div class="entry_meta pb-3">
                                    <span class="posted_on">_
                                        <a href="#" rel="bookmark">
                                            <time class="entry_date" datetime="2022-12-22T17:55:46+00:00">
                                                <?php echo $row['date'] ;?>
                                            </time>
                                        </a>
                                    </span>
                                    <span class="by_line">_
                                        <a class="url fn n"
                                            href="#"><?php echo $row['author'] ;?>
                                        </a>
                                    </span>
                                    <span class="comment_num">_
                                        <a
                                            href="#"><?php echo $row['comment'] ;?>
                                        </a>
                                    </span>
                                </div><!-- .entry-meta -->
                            </div>
                            
                            <div class="col-md-12 col-lg-12 col-sm-12" >
                                <?php echo $row['text'] ;?>
                            </div>


                            </div>


                           </div>
                </article>
            </main><!-- #main -->
        </div>


        <aside id="primary-sidebar" class="widget-area primary-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" style=" ">
            <section id="block-2" class="widget widget_search" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">
                <form role="search" method="get" action="" style="">
                    <!-- <label for="wp-block-search__input-1">Search</label> -->
                    <div class="row" style="padding: 0px 0px 0px 0px;">
                        <div class="col-md-8 col-lg-8 col-sm-12"style="" >
                            <input type="search" id="wp-block-search__input-1" class="form-control" name="s" value="" placeholder="Search here" required="">
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12" style="">
                            <button type="submit" class="form-control"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>
            </section>
            <section id="block-3" class="widget widget_block py-3">
                <div class="is-layout-flow wp-block-group">
                    <div class="wp-block-group__inner-container">
                        <h3 class="p-2">Recent Posts</h3>

                        <ul class="wp-block-latest-posts__list wp-block-latest-posts">
                            <li><a class="wp-block-latest-posts__post-title"
                                    href="https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/">Social
                                    Media Platform for Uplifting Business</a></li>
                            <li><a class="wp-block-latest-posts__post-title"
                                    href="https://www.pixabulousdesigns.com/blog/php-vs-wordpress/">The
                                    Definitive
                                    Guide to PHP Vs WordPress – Which One Should You Choose?</a></li>
                            <li><a class="wp-block-latest-posts__post-title"
                                    href="https://www.pixabulousdesigns.com/blog/difference-between-marketing-and-branding/">Difference
                                    Between Marketing and Branding</a></li>
                            <li><a class="wp-block-latest-posts__post-title"
                                    href="https://www.pixabulousdesigns.com/blog/opening-an-it-startup-company-is-how-much-successful/">Opening
                                    An IT Startup Company Is How Much Successful?</a></li>
                            <li><a class="wp-block-latest-posts__post-title"
                                    href="https://www.pixabulousdesigns.com/blog/importance-of-coffee-culture-in-businesses/">Importance
                                    of Coffee Culture In Businesses</a></li>
                        </ul>
                    </div>
                </div>
            </section>
            <section id="block-4" class="widget widget_block py-3">
                <div class="is-layout-flow wp-block-group">
                    <div class="wp-block-group__inner-container">
                        <h3 class="">Recent Comment</h3>


                        <div class="no-comments wp-block-latest-comments">No comments to show.</div>
                    </div>
                </div>
            </section>
            <section id="categories-2" class="widget widget_block py-3">
                <h3 class="">Categories</h3>
                <ul>
                    <li class="cat-item cat-item-2">
                        <a href="https://www.pixabulousdesigns.com/blog/category/design/">Design</a>
                            <span class="posts-count">(5)</span>
                    </li>
                    <li class="cat-item cat-item-3"><a
                            href="https://www.pixabulousdesigns.com/blog/category/development/">Development</a>
                        <span class="posts-count">(2)</span>
                    </li>
                    <li class="cat-item cat-item-48"><a
                            href="https://www.pixabulousdesigns.com/blog/category/digital-marketing/">Digital
                            Marketing</a> <span class="posts-count">(4)</span>
                    </li>
                    <li class="cat-item cat-item-49"><a
                            href="https://www.pixabulousdesigns.com/blog/category/general/">General</a> <span
                            class="posts-count">(3)</span>
                    </li>
                    <li class="cat-item cat-item-4"><a
                            href="https://www.pixabulousdesigns.com/blog/category/startup/">Startup</a> <span
                            class="posts-count">(1)</span>
                    </li>
                    <li class="cat-item cat-item-1"><a
                            href="https://www.pixabulousdesigns.com/blog/category/uncategorized/">Uncategorized</a>
                        <span class="posts-count">(1)</span>
                    </li>
                </ul>
            </section>
            <section id="recent_news-1" class="widget widget_block py-3">
                <h5 class="widget-title">Recent Posts</h5>
                <ul class="recent-news clearfix" style="list-style-type: none;">
                    <li class="py-4">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <a href="https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/">
                                    <img src="images/blog/fist-64x64.webp"class="img-fluid h-75 w-100">
                                </a>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <h6 class="thumb">
                                    <a href="https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/">Social
                                    Media Platform for Uplifting Business</a>
                                </h6>
                            </div>
                                <span class="post-on">
                                    December 22, 2022
                                </span>
                        </div>
                    </li>
                    <li class="py-4">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <a href="https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/">
                                    <img src="images/blog/fist-64x64.webp"class="img-fluid h-75 w-100">
                                </a>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <h6 class="thumb">
                                    <a href="https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/">Social
                                    Media Platform for Uplifting Business</a>
                                </h6>
                            </div>
                                <span class="post-on">
                                    December 22, 2022
                                </span>
                        </div>
                    </li>
                    <li class="py-4">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <a href="https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/">
                                    <img src="images/blog/fist-64x64.webp"class="img-fluid h-75 w-100">
                                </a>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <h6 class="thumb">
                                    <a href="https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/">Social
                                    Media Platform for Uplifting Business</a>
                                </h6>
                            </div>
                                <span class="post-on">
                                    December 22, 2022
                                </span>
                        </div>
                    </li>
                </ul>
            </section>
            <section id="tag_cloud-1" class="widget widget_block py-3">
                <h3>Tags</h3>
                <div class="tagcloud">
                    <a href="https://www.pixabulousdesigns.com/blog/tag/business/"
                        class="tag-cloud-link tag-link-6 tag-link-position-1" style="font-size: 8pt;"
                        aria-label="business (1 item)">business</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/coffee/"
                        class="tag-cloud-link tag-link-55 tag-link-position-2" style="font-size: 8pt;"
                        aria-label="coffee (1 item)">coffee</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/company/"
                        class="tag-cloud-link tag-link-57 tag-link-position-3" style="font-size: 8pt;"
                        aria-label="company (1 item)">company</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/content/"
                        class="tag-cloud-link tag-link-51 tag-link-position-4" style="font-size: 8pt;"
                        aria-label="content (1 item)">content</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/culture/"
                        class="tag-cloud-link tag-link-56 tag-link-position-5" style="font-size: 8pt;"
                        aria-label="culture (1 item)">culture</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/digital-marketing/"
                        class="tag-cloud-link tag-link-46 tag-link-position-6" style="font-size: 8pt;"
                        aria-label="digital marketing (1 item)">digital marketing</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/enterpreneur/"
                        class="tag-cloud-link tag-link-58 tag-link-position-7" style="font-size: 8pt;"
                        aria-label="enterpreneur (1 item)">enterpreneur</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/free/"
                        class="tag-cloud-link tag-link-52 tag-link-position-8" style="font-size: 8pt;"
                        aria-label="free (1 item)">free</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/mobile-app-development/"
                        class="tag-cloud-link tag-link-54 tag-link-position-9" style="font-size: 8pt;"
                        aria-label="mobile app development (1 item)">mobile app development</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/plagiarism/"
                        class="tag-cloud-link tag-link-50 tag-link-position-10" style="font-size: 8pt;"
                        aria-label="plagiarism (1 item)">plagiarism</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/startup/"
                        class="tag-cloud-link tag-link-11 tag-link-position-11" style="font-size: 8pt;"
                        aria-label="startup (1 item)">startup</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/techincal/"
                        class="tag-cloud-link tag-link-53 tag-link-position-12" style="font-size: 8pt;"
                        aria-label="techincal (1 item)">techincal</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/tips/"
                        class="tag-cloud-link tag-link-13 tag-link-position-13" style="font-size: 8pt;"
                        aria-label="tips (1 item)">tips</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/types-of-digital-marketing/"
                        class="tag-cloud-link tag-link-47 tag-link-position-14" style="font-size: 8pt;"
                        aria-label="types of digital marketing (1 item)">types of digital marketing</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/website/"
                        class="tag-cloud-link tag-link-45 tag-link-position-15" style="font-size: 8pt;"
                        aria-label="website (1 item)">website</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/wordpress/"
                        class="tag-cloud-link tag-link-42 tag-link-position-16" style="font-size: 8pt;"
                        aria-label="wordpress (1 item)">wordpress</a>
                    <a href="https://www.pixabulousdesigns.com/blog/tag/wordpress-website/"
                        class="tag-cloud-link tag-link-44 tag-link-position-17" style="font-size: 8pt;"
                        aria-label="wordpress website (1 item)">wordpress website</a>
                </div>
            </section>
        </aside>

    </div>
</div>


<!--- Call To Action section end --->
<?php include"footer.php";?>