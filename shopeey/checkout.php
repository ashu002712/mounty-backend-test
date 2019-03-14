<!doctype html>
<!--
The entire project is done using Bootstrap4
Author: Ashutosh| Date : 14-03-2019
-->
    <?php
        $title="Place Order Here";
        require_once './header.php';

        $product_id=$_GET['pid'];

        require_once './controller/db.php';
        $dbObj=new db();

        $select="SELECT * FROM product WHERE product_id='".$product_id."'";
        $res = $dbObj->execute($select);
        $count = $res->rowCount();


    ?>
    <div class="container">
        <?php if($count>0){?>
            <center>
                <h1 style="float: center">Check Out</h1>
                <span style="color: red">NOTE : * Fields are mandatory to submit the form.</span>
                <hr width="100%">
            </center>
            <div class="row">

            </div>
            <form action="controller/checkOutProcess.php" method="post" id="productForm" enctype="multipart/form-data">
                <input type="hidden" name="product_id" value="<?php echo $product_id; ?>"/>
                    <div class="form-group row">
                      <div class="col-sm-3"></div>
                      <label for="customerName" class="col-sm-2 col-form-label"><strong>Customer Name<span style="color: red;">*</span></strong></label>
                      <div class="col-sm-4">
                          <input type="text" class="form-control" id="customerName" name="customerName" placeholder="Enter your name" autofocus required>

                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-3"></div>
                      <label for="shippingAddress" class="col-sm-2 col-form-label"><strong>Shipping Address<span style="color: red;">*</span></strong></label>
                      <div class="col-sm-4">
                          <textarea class="form-control" id="shippingAddress" name="shippingAddress" placeholder="Enter your Address..."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-3"></div>
                      <label for="paymentMethod" class="col-sm-2 col-form-label"><strong>Payment Method<span style="color: red;">*</span></strong></label>
                      <div class="col-sm-4">
                            <select class="form-control" id="paymentMethod" name="paymentMethod" required>
                                <option selected="" disabled="">Select..</option>
                                <option value="Cash On Delivery">Cash On Delivery</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                       <div class="col-sm-6"></div>
                      <div class="col-sm-6">
                          <button type="submit" class="btn btn-primary" name="submit" value="">Place Order</button>
                          <button style="background-color: red; color: white; border: 0px solid #000; padding: 7px 10px; border-radius: 5px;" onclick="location.href='./shopping.php'" type="button">CANCEL</button>
                      </div>
                    </div>
                </form>
        <?php }else{?>
            <center>
                <h1><span style="color: red">Record Not Found</span></h1>
                <p>Sorry! Try again later</p>
            </center>
            <hr width="100%"/>

    <?php  } ?>

    </div>
    <?php
        require_once './footer.php';
    ?>
