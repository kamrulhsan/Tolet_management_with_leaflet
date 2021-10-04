// $("img").error(function(){$(this).hide();});
function toggle(){
    var toggle = document.querySelector(".toggle");
    var navigation = document.querySelector(".navigation");
    var main = document.querySelector(".main");

    toggle.classList.toggle("active");
    navigation.classList.toggle("active");
    main.classList.toggle("active");
}
//modal
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementsByClassName("btn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
function modal_view() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
//agent-view
$(document).on("click","#agent_view",function(){
  $("#modal").show();
  var id = $(this).data("id");
  console.log(id);
  $.ajax({
    type: "POST",
    url: "php/agent_view.php",
    data: {agent_id:id},
    
    success: function (data) {
      $(".data").html(data);
    }
  });
})
//agent_data view in modal
$(document).on("click","#agent_update",function(){
  $("#modal").show();
  var id = $(this).data("id");
  
  $.ajax({
    type: "POST",
    url: "php/agent_data_modal.php",
    data: {agent_id:id},
    
    success: function (data) {
      $(".data").html(data);
    }
  });
})
// agent data update in db
$("#agent_update_db").on("click",function(){
  var first_name = $("#agent_first_name").val();
  var last_name = $("#agent_last_name").val();
  var mobile_num = $("#agent_mobile_no").val();
  var id = $("#agent_id").val();

  console.log(first_name);
  $.ajax({
    type: "POST",
    url: "php/agent_data_update_db.php",
    data: {agent_first_name:first_name, agent_last_name:last_name, agent_mobile_num:mobile_num, agent_id: id},
    success: function (data) {
      console.log(data);
      if(data == 1){
        console.log()
        document.location = "agent_data.php";
      }
      else{

      }
    }
  });


})

//delete agent
$(document).on("click","#agent_delete",function(){
 
  var id = $(this).data("id");
  
  $.ajax({
    type: "POST",
    url: "php/delete_agent.php",
    data: {agent_id:id},
    
    success: function (data) {
      if (data == 1){
        
        window.location = "agent_data.php";

      }
      else{
        alert("Cant Delete");
      }
    }
  });
})
//view sell post
$(document).on("click","#sellpost_view",function(){
  $("#modal").show();
  var id = $(this).data("id");
  // console.log(id); 
  $.ajax({
    type: "POST",
    url: "php/sell_data_viewmodel.php",
    data: {sellpost_id:id},
    
    success: function (data) {
      $(".data").html(data);
      
    }
  });
})
//update form of sell post
$(document).on("click","#sellpost_update",function(){
  $("#modal").show();
  var id = $(this).data("id");
  
  $.ajax({
    type: "POST",
    url: "php/update_form_sellpost.php",
    data: {sellpost_id:id},
    
    success: function (data) {
      $(".data").html(data);
    }
  });
})
//update sellpost to db
$(document).on("click","#sellpost_update_db",function(){
  var building_name = $("#building_name").val();
  var bed = $("#bed").val();
  var bath = $("#bed").val();
  var floor = $("#floor").val();
  var flat_name = $("#flat_name").val();
  var size = $("#flat_name").val();
  var price = $("#price").val();
  var id = $("#sellpost_id").val();


  $.ajax({
    type: "POST",
    url: "php/update_sellpost_db.php",
    data: {building_name:building_name, bed:bed, bath:bath, floor:floor,  flat_name:flat_name, size:size,price:price,id: id},
    success: function (data) {
      console.log(data);
      if(data == 1){
        console.log()
        document.location = "sell_data.php";
      }
      else{

      }
    }
  });
})
//Delete Sell Post
$(document).on("click","#sellpost_delete",function(){
 
  var id = $(this).data("id");
  
  $.ajax({
    type: "POST",
    url: "php/delete_sellpost.php",
    data: {sellpost_id:id},
    
    success: function (data) {
      if (data == 1){
        
        window.location = "sell_data.php";

      }
      else{
        alert("Cant Delete");
      }
    }
  });
})
//view rent post
$(document).on("click","#rentpost_view",function(){
  $("#modal").show();
  var id = $(this).data("id");
  // console.log(id); 
  $.ajax({
    type: "POST",
    url: "php/view_rentpost.php",
    data: {rentpost_id:id},
    
    success: function (data) {
      $(".data").html(data);
    }
  });
})
//update form of rent post
$(document).on("click","#rentpost_update",function(){
  $("#modal").show();
  var id = $(this).data("id");
  
  $.ajax({
    type: "POST",
    url: "php/update_form_rentpost.php",
    data: {rentpost_id:id},
    
    success: function (data) {
      $(".data").html(data);
    }
  });
})
//update rentpost to db
$(document).on("click","#rentpost_update_db",function(){
  var building_name = $("#building_name").val();
  var bed = $("#bed").val();
  var bath = $("#bed").val();
  var floor = $("#floor").val();
  var flat_name = $("#flat_name").val();
  var size = $("#flat_name").val();
  var price = $("#price").val();
  var id = $("#sellpost_id").val();


  $.ajax({
    type: "POST",
    url: "php/update_rentpost_db.php",
    data: {building_name:building_name, bed:bed, bath:bath, floor:floor,  flat_name:flat_name, size:size,price:price,id: id},
    success: function (data) {
      console.log(data);
      if(data == 1){
        console.log()
        document.location = "rent_data.php";
      }
      else{

      }
    }
  });
})
//Delete rent Post
$(document).on("click","#rentpost_delete",function(){
 
  var id = $(this).data("id");
  
  $.ajax({
    type: "POST",
    url: "php/delete_rentpost.php",
    data: {rentpost_id:id},
    
    success: function (data) {
      if (data == 1){
        
        window.location = "rent_data.php";

      }
      else{
        alert("Cant Delete");
      }
    }
  });
})
//seller Renter list
//view seller
$(document).on("click","#seller_view",function(){
  $("#modal").show();
  var id = $(this).data("id");
  // console.log(id); 
  $.ajax({
    type: "POST",
    url: "php/seller_view.php",
    data: {seller_id:id},
    
    success: function (data) {
      $(".data").html(data);
    }
  });
})
//update form of renter list
$(document).on("click","#seller_update",function(){
  $("#modal").show();
  var id = $(this).data("id");
  
  $.ajax({
    type: "POST",
    url: "php/update_form_sellerlist.php",
    data: {seller_id:id},
    
    success: function (data) {
      $(".data").html(data);
    }
  });
})
//update seller list to db
$(document).on("click","#seller_update_db",function(){
  var first_name = $("#first_name").val();
  var last_name = $("#last_name").val();
  var email = $("#email").val();
  var mobile_no = $("#mobile_no").val();
  var id = $("#seller_id").val();



  $.ajax({
    type: "POST",
    url: "php/update_seller_db.php",
    data: {first_name:first_name, last_name:last_name, email:email, mobile_no:mobile_no, seller_id: id},
    success: function (data) {
      console.log(data);
      if(data == 1){
        console.log()
        document.location = "seller_renter_list.php";
      }
      else{

      }
    }
  });
})
//Delete renter
$(document).on("click","#seller_delete",function(){
 
  var id = $(this).data("id");
  
  $.ajax({
    type: "POST",
    url: "php/delete_seller.php",
    data: {seller_id:id},
    
    success: function (data) {
      if (data == 1){
        
        window.location = "seller_renter_list.php";

      }
      else{
        alert("Cant Delete");
      }
    }
  });
})

