<?php
include "PHP/header.php";
include "PHP/menu.php";
include "PHP/db.php";
$query = "SELECT * from rent_post";
$result = mysqli_query($conn,$query);
$fetch = mysqli_fetch_all($result,MYSQLI_ASSOC);
?>
<div class="row">
    <div class="col-sm-6">
        <?php include "map.php"; ?>
    </div>
    
    <!-- <div class="col-sm-6"></div> -->
    <div class="col-sm-6">
    <div class="scroll">
        <div class="row" >
            
            <?php foreach($fetch as $data):?>
                <div class="post_data" onclick="location_find('<?php echo $data['coordinate']?>')">
                <img src="images/<?php echo $data['image_name'];?>" alt="" style="width: 100%;">
                <div class="col-sm-12"><h3> ৳ <?php echo $data['price'];?> TK </h3></div>
                <div class="col-sm-12"><p> Bed Room :<?php echo $data['bed'];?>, Bath : <?php echo $data['bath'];?>, (  <?php echo $data['size'];?> Sqreft ) - House for sale </p> </div>
                <input type="hidden" id="location_data" value="<?php echo $data['coordinate'];?>">
                <!-- <?php var_dump($data['coordinate']);?> -->
                <div class="col-sm-12"><p> <?php echo $data['floor'];?> Floor ,Flat Name : <?php echo $data['flat_name'];?> </p></div>
                <div class="col-sm-12"><p>Building Name : <?php echo $data['building_name'];?></p></div>
                <hr>
                </div>
        <?php endforeach;?>
        </div>
    </div>
</div>
</div>
<?php include "PHP/footer.php"; ?>