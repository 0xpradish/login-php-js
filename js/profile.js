function submitData(){
    $(document).ready(function(){
      var data = {
        name: $("#name").val(),
        username: $("#username").val(),
        password: $("#password").val(),
        Email: $("#Email").val(),
        action: $("#action").val(),
      };
  
      $.ajax({
        url: 'php/register.php',
        type: 'post',
        data: data,
        success:function(response){
          location.replace("login.html");
          alert(response);
          if(response == "Login Successful"){
            window.location.reload();
          }
        }
      });
      $.ajax({
        url: 'php/profile.php',
        type: 'post',
        data: data,
        success:function(response){
          alert(response);
          if(response == "profile saved successfull"){
            window.location.reload();
          }
        }
      });
  
    });
  }
  