<?php
include "PHP/header.php";
include "PHP/menu.php"
?>
<!-- <div class="jumbotron text-center heading">
    <h1 class="display-3">Sell with confidence</h1>
    <p class="lead">TOLET is making it simpler and safer to sell your home and move forward.</p>
    <hr style="width: 30%; height:2px"  , color="yellow";>
   
</div> -->
<div class="text-center sell_heading" style="padding: 20px;">
    <h1 style="padding: 15px; font-family:'Spectral', serif" class="display-3" >Sell with confidence</h1>
    <p style="padding-bottom: 15px; font-weight:bold;" class="lead">TOLET is making it simpler and safer to sell your home and move forward.</p>
    <hr style="width: 30%; height:2px ; " , color="yellow" ;>
</div>

<div class="row text-center">
    <div class="col-sm-8">
        <div class="card img-left" >
            <img src=" images/Sell_a_home.png"  alt="...">
            <div class="card-body">
                <h5 class="card-title">Work with an agent</h5>
                <p class="card-text">TOLET Premier Agents are among the best in the business. Learn how to pick the right one for you..</p>
                <a href="agent_list.php" class="btn btn-primary">See List</a>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Sell it yourself</h5>
                <p class="card-text">Reach the largest audience of shoppers with a free Zillow listing. Start by learning how to "sell for sale by owner."</p>
                <a href="sell-form.php" class="btn btn-primary">Create a AD</a>
            </div>
        </div>
    </div>
</div>


    <div class="card  ">
        <img class="card-img" src="images/sell_to_us.png" alt="Card image">
        <div class="card-img-overlay col-sm-5">
            <h5 class="card-title sell-title">Discover how Zillow Offers <br> can help</h5>
            <p class="card-text">Skip the hassle and sell your home directly to Zillow. No prep work or showings required.</p>
            <a href="#" class="btn btn-primary text-center" >Get Started</a>
        </div>
    </div>

<?php include "PHP/footer.php" ?>
<script>
    $(window).ready(function(){
        $("title").html("Sell");
    });
</script>