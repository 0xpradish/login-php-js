
// function submitData(){
//     $(document).ready(function(){
//       var data = {
//         username: $("#username").val(),
//         password: $("#password").val(),
//       };

//       $.ajax({
//         url: 'php/login.php',
//         type: 'post',
//         data: data,
//         success:function(response){
//           location.replace("profile.html");
//           alert(response);
//           if(response == "Login Successful"){
//             window.location.reload();
//           }
//         }
//       });
//     });
//   }

function submitData(){
  $(document).ready(function(){
    var data = {
      username: $("#username").val(),
      password: $("#password").val(),
      action: "login"
    };

    $.ajax({
      url: 'php/login.php',
      type: 'post',
      data: data,
      success:function(response){
        alert(response);
        if(response == "Login Successful"){
          window.location.replace("profile.html");
        }
      }
    });
  });
}

