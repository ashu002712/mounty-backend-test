<!doctype html>

    <?php
        $title="Add Products";
        require_once './header.php';

        //DATABASE OPERATION: Fetching products from database
        require_once './controller/db.php';
        $dbObj=new db();

        $select="SELECT * FROM product";

        //executing the entire sql string
        $res = $dbObj->execute($select);

        //counting total row on the record
        $count = $res->rowCount();
    ?>
    <div class="container">
        <?php if($count>0){ ?>
                <center>
                    <h1>We are offering the following Products</h1>
                    <p>100% Assured Products</p>
                </center>
                <hr width="100%"/>
                <div class="row">
                </div>

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
