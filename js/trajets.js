$(document).ready(function () {
  //if click on reserver button show modal
  $(".reserver").click(() => {
    if(localStorage.getItem("email")){
      console.log(localStorage.getItem("email"))
     $("#exampleModal").modal("show");
    }else{
      window.location = "../travel/inscreption.php"
    }
  });
  // if click on annuler hide modal
  $(".annuler").click(() => {
    $("#exampleModal").modal("hide");
  });

  $(".pay").click(() => {
    $("#exampleModal").modal("hide");
    $("#card").modal("show");
  });

  $(".cancelcard").click(() => {
    $("#card").modal("hide");
  });
  $(".valide").click(() => {
    $("#card").modal("hide");
    $("#mypdf").modal({ backdrop: "static", keyboard: false });
    $("#mypdf").modal("show");
  });
});
