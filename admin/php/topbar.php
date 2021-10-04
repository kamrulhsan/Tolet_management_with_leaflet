<?php
session_start();
include "length_sell_rent.php";
?>
<div class="main">
    <div class="topbar">
        <div class="toggle" onclick="toggle()"></div>
        <div class="search">
            <label>
                <i class="fas fa-search"></i>
                <input type="text" name="serach_text" id="serach_text" placeholder="   Search Here">
            </label>
        </div>

        <!-- <div class="user">
            <img src="images/admin.jpg" alt="OOps" style="width: 60px; height:60px">
            <div class="dropdown_content">
                <div class="desc"><?php echo $_SESSION['username']; ?></div>

            </div>
        </div> -->
        <div class="user">
        <img src="images/admin.jpg" alt="OOps" style="width: 60px; height:60px">
            <!-- <div class="dropdown-content">

                <div class="desc"><?php echo $_SESSION['username']; ?></div>
            </div> -->
        </div>
    </div>