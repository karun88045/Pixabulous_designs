     <?php
     require"Admin/includes/config1.php";

     $str = "";
      ?>

        <aside id="primary-sidebar" class="widget-area primary-sidebar col-lg-3 col-md-3 col-sm-12 col-xs-12" style=" ">
            <section id="block-2" class="widget widget_search" style="box-shadow: rgba(0, 0, 0, 0.16) 0px 10px 36px 0px, rgba(0, 0, 0, 0.06) 0px 0px 0px 1px;">

        <?php
            if(isset($_GET['Search']))
            $str = $_GET['search'];
            $sql = "SELECT * FROM  `post` WHERE title LIKE '%$str%' OR text LIKE '%$str%' OR author LIKE '%$str%'";
            $query_run1 = mysqli_query($conn,$sql);
            ?>
                <form  method="get" action="" style="" enctype="multipart/form-data">
                    <!-- <label for="wp-block-search__input-1">Search</label> -->
                    <div class="row" style="padding: 0px 0px 0px 0px;">
                        <div class="col-md-8 col-lg-8 col-sm-12"style="" >
                            <input type="search" id="wp-block-search__input-1" class="form-control" name="search" value="" placeholder="Search here" required="">
                        </div>
                        <div class="col-md-4 col-lg-4 col-sm-12" style="">
                            <button type="submit" name="Search" class="form-control"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </form>

            </section>
            <section id="block-3" class="widget widget_block py-3">
                <div class="is-layout-flow wp-block-group">
                    <div class="wp-block-group__inner-container">
                       
                        <h3 class="p-2">Recent Post</h3>

                        <ul class="recent-news clearfix" style="list-style-type: none;">



                     <?php 
                        $sql4 = "SELECT * FROM post left JOIN category ON post.id=category.slugId ORDER BY category DESC limit 5";
                        $query4 = mysqli_query($conn,$sql4);
                        while($row4 = mysqli_fetch_assoc($query4))
                        {
                            ?>
                            <li class="py-4">
                        <div class="row">
                            <div class="col-md-4 col-lg-4 col-sm-12">
                                <a href="post.php?p_id=<?php echo $row4['id'];?>">
                                   <img src="Admin/Upload1/<?php echo $row4['image']?>" class="img-fluid h-75">
                                </a>
                            </div>
                            <div class="col-md-8 col-lg-8 col-sm-12">
                                <h6 class="thumb">
                                    <a href="post.php?p_id=<?php echo $row4['id'];?>" class="recent_post"><?php echo $row4['title']?></a>
                                </h6>
                            </div>
                                <span class="post-on">
                                    <?php echo $row4['date']?>
                                </span>
                        </div>
                    </li>
                            
                            <?php
                        }
                        ?>
                    </ul>
                   
                    </div>
                </div>
            </section>


            <section id="block-4" class="widget widget_block py-3">
                <div class="is-layout-flow wp-block-group">
                    <div class="wp-block-group__inner-container">
                        <h3 class="">Recent Comment</h3>

                           <?php 
                        $sql2 = "SELECT * FROM `comment`";
                        $query2 = mysqli_query($conn,$sql2);
                        while($row2 = mysqli_fetch_assoc($query2))
                        {
                            ?>
                            
                            <div class="no-comments wp-block-latest-comments"2><?php echo $row2['text'] ?></div>

                            <?php
                        }
                        ?>
                    </div>
                </div>
            </section>


            <section id="categories-2" class="widget widget_block py-3">
                <h3 class="">Categories</h3>
                <ul style="list-style-type:none;">
                       <?php 
                        $sql3 = "SELECT * FROM post left JOIN category ON post.id=category.slugId;";
                        $query3 = mysqli_query($conn,$sql3);
                        $num_rows=mysqli_num_rows($query3);
                        $total = "";
                        $result = "";
                        while($row3 = mysqli_fetch_assoc($query3))
                        {
                            $row3['category']=$row3['category_title'];
                            
                            ?>

                            <li class="cat-item cat-item-2">
                                <a class="category" href="category.php?category=<?php echo $row3['category'] ;?>"><?php echo $row3['category_title'] ;?></a>
                                <span class="posts-count"></span>
                            </li>
                                <?php

                        

                           }
                        ?>
                </ul>
            </section>
            <section id="tag_cloud-1" class="widget widget_block py-3">
                <h3>Tags</h3>
                <div class="tagcloud">
                    <div class="row">
                 <?php 
                        $sql5 = "SELECT * FROM `post`";
                        $query5 = mysqli_query($conn,$sql5);
                        while($row_tags=mysqli_fetch_assoc($query5))
                        {

                    ?>
                            
                                <div class="col-md-4">
                                    <li class="cat-item cat-item-2" style="list-style-type: none;">
                                        <a href="#"
                                        class="tag-cloud-link tag-link-6 tag-link-position-1" style="font-size: 8pt;"
                                        aria-label="business (1 item)">
                                       <?php echo $row_tags['category'];?>
                                        </a>

                                    </li>
                                </div> 
                    <?php
                    }
                    ?> 
                        </div>
                </div>
            </section>
        </aside>