$(document).ready(function () {
  $(".ressayer").click(()=>{
    $("#faild").modal("hide");
  })
  
    $(".sign-in-form").submit((e) => {
      e.preventDefault();
      $.post(
        "../travel/functions/connection.php",
        {
          email: e.target[0].value,
          motdepass: e.target[1].value,
          submit: e.target[2].value,
        },
        (data, status) => {
          
          if (data === "1") {
            $("#success").modal("show");
            localStorage.setItem("email",e.target[0].value);
          } else {
          $("#faild").modal("show");
          }
          
       
        }
      );
    });
  
   $(".reserver").click(()=>{
     window.location = "../travel/trajets.php"
   })
   /*
   $(".Connection").click(()=>{
      window.location.replace("../travel/connection.php");
   })
  */
  });
  