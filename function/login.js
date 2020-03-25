$(document).ready(function(){

    $("#reset").on("click", function(){
      $('label').removeClass('active');
    });


    $("#login_btn").on("click",function(){
      if($('#username').val() =="" || $('#password').val() ==""){
        $("#notification_login").addClass('yellow lighten-2 col l12 center-align ');
        $("#notification_login").html("ไม่ได้กรอกชื่อผู้ใช้งานหรือรหัสผ่าน กรุณาตรวจสอบ..");
      }else{

        $.post("api/select/login.php",{
          user : $("#username").val(),
          pass : $("#password").val()
        },function(data){

          if(data.check == 1){
            var status;
            var position;
                if(data.USER_TYPE == 1){
                  status ="Admin";
                }else{
                  status ="User";
                }

                if(data.USER_POSITION ==1 ){
                  position ="Programmer";
                }else if(data.USER_POSITION == 2){
                  position ="Tester";
                }else{
                  position ="Support";
                }

            localStorage.username = data.USERNAME;
            localStorage.userfname = data.USER_FNAME;
            localStorage.userlname = data.USER_LNAME;
            localStorage.userposition = position;
            localStorage.userstatus = status;


          /*  console.log(localStorage.username);
            console.log(localStorage.userfname);
            console.log(localStorage.userlname);
            console.log(localStorage.userposition);
            console.log(localStorage.userstatus);
*/           if(position ==  "Programmer" && status =="User"){
              window.location.href='table_equiplist.html';
            }else if(position == "Tester" && status =="User"){
              window.location.href='table_bugs.html';
            }else if(position == "Support" && status =="User"){
              window.location.href='table_news.html';
            }else if(position == "Programmer" ||position == "Tester" ||position == "Support" && status =="Admin"){
              window.location.href='homepage.html';
            }


          }else{
            $("#notification_login").removeClass('yellow');
            $("#notification_login").addClass('red lighten-3 col l12 center-align ');
            $("#notification_login").html("ไม่พบชื่อบัญชีผู้ใช้งานนี้..");
          }

        },'json');
      }




    });



});
