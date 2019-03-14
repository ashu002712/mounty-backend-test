<!doctype html>

    <?php
        $title="Add Products";
        require_once './header.php';
    ?>
    <div class="container">
        <center>
            <h1 style="float: center">Add Products to Shopeey</h1>
            <span style="color: red">NOTE : * Fields are mandatory to submit the form.</span>
            <hr width="100%">
        </center>
        <div class="row">

        </div>
        <form action="controller/addProductProcess.php" method="post" id="productForm" enctype="multipart/form-data">
                <div class="form-group row">
                  <div class="col-sm-3"></div>
                  <label for="productTitle" class="col-sm-2 col-form-label"><strong>Product Title<span style="color: red;">*</span></strong></label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" id="productTitle" name="productTitle" placeholder="Enter Product Title" autofocus required>

                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"></div>
                  <label for="productDesc" class="col-sm-2 col-form-label"><strong>Description<span style="color: red;">*</span></strong></label>
                  <div class="col-sm-4">
                      <textarea class="form-control" id="productDesc" name="productDesc" placeholder="Write description about product..."></textarea>
                    </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"></div>
                  <label for="productCostPrice" class="col-sm-2 col-form-label"><strong>Cost Price<span style="color: red;">*</span></strong></label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" id="productCostPrice" name="productCostPrice" placeholder="Enter Cost Price" autofocus required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"></div>
                  <label for="productSellingPrice" class="col-sm-2 col-form-label"><strong>Selling Price<span style="color: red;">*</span></strong></label>
                  <div class="col-sm-4">
                      <input type="text" class="form-control" id="productSellingPrice" name="productSellingPrice" placeholder="Enter Selling Price" autofocus required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"></div>
                  <label for="upload_img1" class="col-sm-2 col-form-label"><strong>Upload Images <span style="color: red;">*</span></strong></label>
                  <div class="col-sm-4">
                      <input type="file" class="form-control" id="upload_img1" name="upload_img1" required="required">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"></div>
                  <label for="upload_img2" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-4">
                      <input type="file" class="form-control" id="upload_img2" name="upload_img2" required="required">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"></div>
                  <label for="upload_img3" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-4">
                      <input type="file" class="form-control" id="upload_img3" name="upload_img3" required="required">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-3"></div>
                  <label for="upload_img4" class="col-sm-2 col-form-label"></label>
                  <div class="col-sm-4">
                      <input type="file" class="form-control" id="upload_img4" name="upload_img4" required="required">
                  </div>
                </div>
                <div class="form-group row">
                   <div class="col-sm-6"></div>
                  <div class="col-sm-6">
                      <button type="submit" class="btn btn-primary" name="submit" value="">ADD PRODUCT</button>
                      <button style="background-color: red; color: white; border: 0px solid #000; padding: 7px 10px; border-radius: 5px;" onclick="location.href='./index.php'" type="button">CANCEL</button>
                  </div>
                </div>
            </form>
    </div>
    <?php
        require_once './footer.php';
    ?>
