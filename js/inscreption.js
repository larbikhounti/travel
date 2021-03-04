$(document).ready(function () {
  $(".sign-up-form").submit((e) => {
    e.preventDefault();
    // console.log(e);
    $.post(
      "../travel/functions/inscreption.php",
      {
        name: e.target[0].value,
        prenom: e.target[1].value,
        telephone: e.target[2].value,
        datedenaissance: e.target[3].value,
        motdepass: e.target[4].value,
        email: e.target[5].value,
        submit: e.target[6].value,
      },
      (data, status) => {
        if (data === "1") {
          $("#success").modal("show");
        } else {
          $("#faild").modal("show");
        }
      }
    );
  });

 $(".recommencez").click(()=>{
    $("#faild").modal("hide");
 })
 $(".Connection").click(()=>{
    window.location.replace("../travel/connection.php");
 })

});
