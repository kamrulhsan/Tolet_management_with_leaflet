<?php
include "PHP/header.php";
include "PHP/menu.php";
include "PHP/db.php";

if ($_SERVER['REQUEST_METHOD'] == "POST") 
{
    $building_name = validate($_POST['building_name']);
    $coordinate = $_POST['location'];
    $bed = $_POST['bed'];
    $bath = $_POST['bath'];
    $floor = $_POST['floor_no'];
    $flat_name = $_POST['flat_name'];
    $image = $_FILES['fileToUpload1']['name'];
    $image1 = $_FILES['fileToUpload2']['name'];
    $image2 = $_FILES['fileToUpload3']['name'];
    $image3 = $_FILES['fileToUpload4']['name'];
    $size = $_POST['flat_size'];
    $price = $_POST['flat_price'];
    // var_dump($coordinate);
    // exit;
    $query = "INSERT into rent_post (building_name,coordinate,bed,bath,floor,flat_name,image_name,image_name1,image_name2,image_name3,size,price)
            Values ('$building_name','$coordinate','$bed','$bath','$floor','$flat_name','$image','$image1','$image2','$image3','$size','$price')";
    if (mysqli_query($conn, $query)) {
        move_uploaded_file($_FILES['fileToUpload1']['tmp_name'], "images/$image");
        move_uploaded_file($_FILES['fileToUpload2']['tmp_name'], "images/$image1");
        move_uploaded_file($_FILES['fileToUpload3']['tmp_name'], "images/$image2");
        move_uploaded_file($_FILES['fileToUpload4']['tmp_name'], "images/$image3");
    } else {
        echo "there something wrong";
    }
}
?>


<div class="container">
    <div class="row">
        <div class="col-sm-6">
            <?php include "map.php"; ?>
        </div>
        <div class="col-sm-6 contents">
            <div class="row justify-content-center">

                <div class="col-md-12" style="padding-top:30px ;">
                    <div class="mb-4">
                        <h3 style="font-family:'Spectral'">Rent your Property</h3>
                    </div>
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-sm-4">Building Name :</div>
                            <div class="col-sm-8"><input type="text" class="form-control" name="building_name" id="building_name"></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">Location :</div>
                            <div class="col-sm-8"><input type="text" class="form-control" name="location" id="location" readonly></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Bed :</div>
                            <div class="col-sm-4"><select class="form-control" aria-label="Default select example" name="bed">
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                    <option value="4">Four</option>
                                    <option value="5">Five</option>

                                </select></div>
                            <div class="col-sm-2">Bath :</div>
                            <div class="col-sm-4"><select class="form-control" aria-label="Default select example" name="bath">
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Floor :</div>
                            <div class="col-sm-4"><select class="form-control" aria-label="Default select example" name="floor_no">
                                    <option value="1">1st</option>
                                    <option value="2">2nd</option>
                                    <option value="3">3rd</option>
                                    <option value="4">4th</option>
                                    <option value="5">5th</option>
                                    <option value="6">6th</option>
                                    <option value="7">7th</option>
                                    <option value="8">8th</option>
                                    <option value="9">9th</option>
                                </select></div>
                            <div class="col-sm-2">Flat Name:</div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="flat_name" id="flat_name"></div>
                        </div>

                        <div class="row">
                            <div class="col-sm-4">Image 1:</div>
                            <div class="col-sm-8">
                               
                                    <input type="file" name="fileToUpload1" id="fileToUpload1" accept="image/png, image/gif, image/jpeg ,image/jpg" style="float: right;">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4">Image 2:</div>
                            <div class="col-sm-8">
                                    <input type="file" name="fileToUpload2" id="fileToUpload2" accept="image/png, image/gif, image/jpeg ,image/jpg" style="float: right;">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4">Image 3:</div>
                            <div class="col-sm-8">
                                    <input type="file" name="fileToUpload3" id="fileToUpload3" accept="image/png, image/gif, image/jpeg ,image/jpg" style="float: right;">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-4">Image 4:</div>
                            <div class="col-sm-8">
                                    <input type="file" name="fileToUpload4" id="fileToUpload4" accept="image/png, image/gif, image/jpeg ,image/jpg" style="float: right;">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-sm-2">Size in Squre :</div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="flat_size" id="flat_size"></div>
                            <div class="col-sm-2">Flat rent:</div>
                            <div class="col-sm-4"><input type="text" class="form-control" name="flat_price" id="flat_price"></div>
                        </div>


                        <div class="form-row-last">
                        <input type="submit" value="Post" class="btn btn-block btn-primary" name="post">
                        </div>
                        
                    </form>

                </div>
            </div>

        </div>

    </div>

</div>
<?php include "PHP/footer.php"; ?>