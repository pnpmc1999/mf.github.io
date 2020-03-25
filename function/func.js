$(document).ready(function(){

  $(".reset_btn").on("click",function(){
    $("#modal1 input").val("");
    $("#modal2 input").val("");
  });

  //Login
  if(localStorage.username){
    var status = localStorage.userstatus;
    var position = localStorage.userposition;

    $(".uname").html("<span class='white-text'>"+localStorage.userfname+" "+localStorage.userlname+"</span>");
    $(".pos").html("<i class='material-icons left'>computer</i>"+position);
    $(".status").html("<i class='material-icons left'>grade</i>"+status);

    if(position ==  "Programmer" && status =="User"){
        $(".pg-hide").hide();
    }else if(position == "Tester" && status =="User"){
        $(".tt-hide").hide();
    }else if(position == "Support" && status =="User"){
        $(".sp-hide").hide();
    }else if(position == "Programmer" ||position == "Tester" ||position == "Support" && status =="Admin"){
        //Don't do anything.
    }
  }

  //Logout
  $("#logout_btn").on("click",function(){
    localStorage.clear();
    window.location.href="index.html";
  });

  



});
