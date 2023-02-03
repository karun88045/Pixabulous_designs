<?php include"header.php";

$str = "";
$res = mysqli_num_rows(mysqli_query($conn,"SELECT * FROM `post`"));
$per_page = 5;
$start = 0;
$current_page=1;

    if(isset($_GET['start']))
    {
        $start = $_GET['start'];
        if($start<=0)
        {
            $start = 0;
            $current_page=1;
        }
        else
        {
            $current_page = $start;
            $start--;
            $start = $start*$per_page;
        }
    }
    $page = ceil($res/$per_page);

?>

<style>
.post-cat .posted-out a
{
    position: absolute;
    top:295px;
    left:100px;
    text-decoration: none;
     background: #43baff;
    color: #fff;
    padding: 10px;
    border-radius: 10px;
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

                <article id="post-6992" class="post-box masonry-post-item post-6992 post type-post status-publish format-standard has-post-thumbnail hentry category-digital-marketing">
                <?php 
                $sql = "SELECT * FROM `post` limit $start,$per_page";
                $query_run = mysqli_query($conn,$sql);
                if(mysqli_num_rows($query_run)>0)
                {
                while($row = mysqli_fetch_assoc($query_run))
                {
                ?>
                    <div class="post-inner">
                        <div class="row">
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="entry-media pb-4">
                                    <div class="post-cat">
                                        <span class="posted-in">
                                           
                                        </span>
                                    </div>
                                    <a href="post.php?p_id=<?php echo $row['id'] ;?>">
                                   <img class="img-fluid post-img"
                                    src="Admin/Upload1/<?php echo $row['image'] ;?>" class="img-fluid" style="height: 320px;">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-6 col-sm-12">
                                <div class="inner-post">


                                <div class="entry-header">
                                <h3 class="entry-title" style="font-size:19px;">
                                    <a href="post.php?p_id=<?php echo $row['id'] ;?>"
                                        rel="bookmark"><?php echo $row['title'] ?>
                                    </a>
                                </h3>
                                </div><!-- .entry-header -->

                                <div class="entry-summary the-excerpt">
                                 <p style="font-size: 16px;"><?php echo rtrim(substr($row['text'], 0,280)) ;?>....</p>
                                </div><!-- .entry-content -->


                                <div class="entry-meta pb-3">
                                    <span class="posted-on">_
                                        <a href="#"
                                            rel="bookmark">
                                            <time class="entry-date" datetime="2022-12-22T17:55:46+00:00">
                                                <?php echo $row['date'] ?>
                                            </time>
                                        </a>
                                    </span>
                                    <span class="byline">_
                                        <a class="url fn n"
                                            href="blog_php_wordpress.php"><?php echo $row['author'] ?>
                                        </a>
                                    </span>
                                    <span class="comment-num">_
                                       
                                    </span>
                                </div><!-- .entry-meta -->
                                <div class="btn-readmore">
                                     <a href="post.php?p_id=<?php echo $row['id'] ?>" rel="category tag">Read More</a>
                                <!-- <a href="blog_php_wordpress.php">Read More</a> -->
                                     <!-- <i class="fa-solid fa-arrow-right" style="color:#43baff;"></i> -->
                                </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <?php
                }
                    }
                    ?>
                </article>

         </main><!-- #main -->

            
        </div>
<?php include"sidebar.php";?>
<ul class="pagination">
<?php
    for($i=1;$i<=$page;$i++) 
    {
        $class="";
        if($current_page==$i)
        {
            $class="active";
        }
        ?>
        
        <li class="page-item <?php echo $class ;?>">
            <a class="page-link" href="?start=<?php echo $i  ;?>"><?php echo $i  ;?></a>
        </li>

        <?php
    }
?>
    </ul>

    </div>
</div>


<!--- Call To Action section end --->
<?php include"footer.php";?>