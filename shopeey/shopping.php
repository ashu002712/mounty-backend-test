<!doctype html>
    <?php 
        $title="Our Latest Collections";
        require_once './header.php'; 
        
        //DATABASE OPERATION: Fetching products from database
        require_once './controller/db.php';
        $dbObj=new db();
    
        
        $page=0;
        if(isset($_POST['page'])){
            $page=$_POST['page'];
            $page=($page*3)-3;
        }
        $select="SELECT * FROM product limit $page,3";
        //executing the entire sql string
        $res = $dbObj->execute($select);

        //counting total row on the record
        $count = $res->rowCount();
    ?>
    <div class="container">
        <?php if($count>0){ ?>
                <center>
                    <h1>Our Latest Collections</h1>
                    <p>100% Assured Products</p>
                </center>
                <hr width="100%"/>
                <div class="row">
                </div>
                <div class="row">
                    <?php while ($row=$res->fetch()){ ?>               
                    <div class="col-md-4">
                        <div class="card" style="width: 18rem;">
                            <!--Slider-->
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <ol class="carousel-indicators">
                                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                  <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                </ol>
                                <div class="carousel-inner">
                                  <div class="carousel-item active">
                                    <img src="<?php echo $row['img_path1']; ?>" class="card-img-top d-block w-100" alt="img1">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="<?php echo $row['img_path2']; ?>" class="card-img-top d-block w-100" alt="img2">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="<?php echo $row['img_path3']; ?>" class="card-img-top d-block w-100" alt="img3">
                                  </div>
                                  <div class="carousel-item">
                                    <img src="<?php echo $row['img_path4']; ?>" class="card-img-top d-block w-100" alt="img4">
                                  </div>
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                  <span class="sr-only">Next</span>
                                </a>
                            </div>
                            <!--Slider-->
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['product_title']; ?><span style="float: right"><i class="fa fa-inr"></i> <?php echo $row['selling_price']; ?></span></h5>
                              <p class="card-text"><?php echo $row['description']; ?></p>
                              <a href="checkout.php?pid=<?php echo $row['product_id']; ?>" class="btn btn-primary">Buy Now</a>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>  
                <?php
                    $select="SELECT * FROM product";
                    $res = $dbObj->execute($select);
                    $count = $res->rowCount();
                    $a=$count/3;
                    $a= ceil($a);
                ?>
                <form method="post">
                    <?php
                        for($b=1;$b<=$a;$b++){?>
                    <input type="submit" value="<?php echo $b; ?>" name="page"/>
                    <?php  }
                    ?>
                </form>
        <?php } else {?>
                <center>
                    <h1><span style="color: red">Record Not Found</span></h1>
                    <p>Sorry! Try again later</p>
                </center>
                <hr width="100%"/>
        <?php } ?>
        
    </div>
    <?php 
        require_once './footer.php'; 
    ?>