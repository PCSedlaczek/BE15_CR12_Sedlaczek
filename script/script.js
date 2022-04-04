document.getElementById("load").addEventListener("click", getOffers);

function getOffers() {
  let api = "http://localhost/codereviews/BE15_CR12_Sedlaczek/php/displayAll.php";
  const request = new XMLHttpRequest();
  request.open("GET", api, true);

  request.onload = function () {
    if (request.status == 200) {
      let offers = JSON.parse(request.responseText);
      console.log(offers);
      let output = "";
      for (let i in offers) {
        output += '<b>Location: </b>' + offers[i].location + "<br>";
      }
      document.getElementById("offers").innerHTML = output;
    }
    request.send();
  }
}