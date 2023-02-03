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
    left: 750px;
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
                    <?php

                    $conn = mysqli_connect('localhost','root','','pixabulous_blog');

                    if(isset($_GET['p_id']))
                    {
                        $id = $_GET['p_id'];
                    

                    $sql = "SELECT * FROM `post` WHERE id='$id'";
                    $query = mysqli_query($conn,$sql);
                    while($row = mysqli_fetch_assoc($query))
                    {
                     

                    ?>
                    <div class="post_inner">
                        <div class="row">
                            <div class="col-md-12 col-lg-12 col-sm-12">
                                <div class="entry_media pb-4">
                                    <div class="post_cat">
                                        <span class="posted_in">
                      
                                        </span>
                                    </div>
                                    <a href="post.php?p_id=<?php echo $row['id'] ;?>">
                                        <img class="img-fluid post-img"
                                    src="Admin/Upload1/<?php echo $row['image'] ;?>" class="img-fluid" style="">
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
                            <?php
                            }
                            }
                            ?>
                        
                        <!--     <div class="entry-footer clearfix">
            					<span class="sl-wrapper"><a href="https://www.pixabulousdesigns.com/wp-admin/admin-ajax.php?action=process_simple_like&amp;post_id=6992&amp;nonce=895c86b4d8&amp;is_comment=0&amp;disabled=true" class="sl-button sl-button-6992" data-nonce="895c86b4d8" data-post-id="6992" data-iscomment="0" title="Like"><span class="sl-icon"><svg role="img" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0" y="0" viewBox="0 0 128 128" enable-background="new 0 0 128 128" xml:space="preserve"><path id="heart" d="M64 127.5C17.1 79.9 3.9 62.3 1 44.4c-3.5-22 12.2-43.9 36.7-43.9 10.5 0 20 4.2 26.4 11.2 6.3-7 15.9-11.2 26.4-11.2 24.3 0 40.2 21.8 36.7 43.9C124.2 62 111.9 78.9 64 127.5zM37.6 13.4c-9.9 0-18.2 5.2-22.3 13.8C5 49.5 28.4 72 64 109.2c35.7-37.3 59-59.8 48.6-82 -4.1-8.7-12.4-13.8-22.3-13.8 -15.9 0-22.7 13-26.4 19.2C60.6 26.8 54.4 13.4 37.6 13.4z"></path>♥</svg></span><span class="sl-count">2</span></a><span id="sl-loader"></span></span>        
            				</div> -->
            				<div class="share-post">
            					<a class="" target="_blank" href="#" title="Twitter">
            						<i class="fa fa-twitter" aria-hidden="true" style="color:white;"></i>
            					</a>
            					<a class="face" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/" title="Facebook">
            						<i class="fab fa-facebook-f"></i>
            					</a>
            					<a class="pint" target="_blank" href="https://www.pinterest.com/pin/create/button/?url=https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/&amp;description=Social Media Platform for Uplifting Business" title="Pinterest">
            						<i class="fab fa-pinterest-p"></i>
            					</a>
            					<a class="linked" target="_blank" href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/&amp;title=Social Media Platform for Uplifting Business&amp;summary=https://www.pixabulousdesigns.com&amp;source=Pixabulous Designs" title="LinkedIn">
            						<i class="fab fa-linkedin-in"></i>
            					</a>
            					<a class="reddit" href="http://reddit.com/submit?url=https://www.pixabulousdesigns.com/blog/social-media-platforms-for-business/&amp;title=Social Media Platform for Uplifting Business" target="_blank" title="Reddit"><i class="fab fa-reddit-alien" aria-hidden="true"></i>
            					</a>
            				</div>
            				<div class="author-bio">
            					<div class="author-image">
            						<img src="images/blog/dummy.png" class="img-fluid" alt="">
            					</div>
            					<div class="author-info">
            						<span class="title text-primary font-second">Author</span>
            						<span>pixabulous</span>
            					</div>
            				</div>
            				<div class="post-nav clearfix">
            					<div class="post-prev">
            						<a href="" rel="prev">
            							<h6>The Definitive Guide to<br> PHP Vs WordPress – Which<br> One Should You Choose?</h6>
            							<span>December 22, 2022</span>
            						</a>
            					</div>
            				</div>
                        </div>


                            </div>


                           </div>
                </article>
            </main><!-- #main -->
        </div>


        <?php include"sidebar.php"; ?>

    </div>
</div>


<!--- Call To Action section end --->
<?php include"footer.php";?>