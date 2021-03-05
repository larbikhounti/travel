$(document).ready(function () {
  //if click on reserver button show modal
 

  $(".travel-times-form").submit((e) => {
    e.preventDefault();
    $.post(
      "../travel/functions/trajets.php",
      {
        citystart: e.target[0].value,
        cityend: e.target[1].value,
        submit: e.target[2].value,
      },
      (data, status) => {
        
        if (data === "0") {
          let tbody = document.querySelector(
            "body > div.table-of-times.container.text-center > table > tbody"
          );
          $(tbody).empty();
        } else {
          let dataJson = JSON.parse(data);
          console.log(dataJson);
          //console.log(dataJson.mydata);
          let tbody = document.querySelector(
            "body > div.table-of-times.container.text-center > table > tbody"
          );
          $(tbody).empty();
          for (let i = 0; i < dataJson.mydata.length; i++) {
            console.log(i);
            let tr = document.createElement("tr");
            let codevoyage = document.createElement("td");
            codevoyage.innerText = dataJson.mydata[i].codeVoyage;

            let heuredepart = document.createElement("td");
            heuredepart.innerText = dataJson.mydata[i].heureDepart;

            let heurearrivee = document.createElement("td");
            heurearrivee.innerText = dataJson.mydata[i].heureDarrivee;

            let villedepart = document.createElement("td");
            villedepart.innerText = dataJson.mydata[i].villeDepart;


            let villearivee = document.createElement("td");
            villearivee.innerText = dataJson.mydata[i].villeDarrivee;

            let myprix = document.createElement("td");
            myprix.innerText = dataJson.mydata[i].prixVoyage;

           

            let td = document.createElement("td");
            let button = document.createElement("button");
            button.className = "btn btn-success btn-sm fw-bold w-100 reserver";
            button.setAttribute("data-toggle", "modal");
            button.setAttribute("data-target", "#exampleModal");
            button.innerText = "reserver";
            td.appendChild(button);

            
            tr.appendChild(codevoyage);
            tr.appendChild(heuredepart);
            tr.appendChild(heurearrivee);
            tr.appendChild(villedepart);
            tr.appendChild(villearivee);
            tr.appendChild(myprix);
            tr.appendChild(td);
            tbody.appendChild(tr);
          }
          triggers();
        }
      }
    );
  });

function triggers() {
  $(".reserver").click(() => {
    if (localStorage.getItem("email")) {
      console.log(localStorage.getItem("email"));
      $("#exampleModal").modal("show");
    } else {
      window.location = "../travel/inscreption.php";
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
  
}

});
