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
//agent_data update
$(document).on("click","#agent_update",function(){
  $("#modal").show();
  var id = $(this).data("id");
  console.log(id);
  $.ajax({
    type: "POST",
    url: "php/agent_data_update.php",
    data: {agent_id:id},
    
    success: function (data) {
      $(".data").html(data);
    }
  });
})
