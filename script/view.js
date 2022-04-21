function viewOffer() {
  var api = "http://localhost/CodeReviews/BE15_CR12_Sedlaczek/PHP/details.php";
  let request = new XMLHttpRequest();
  request.open("GET", api);
  request.onload = function () {
    if (request.status == 200) {
      let offer = JSON.parse(request.responseText).data;
      let content = document.getElementById("content");

      content.innerHTML = `
        <div class="col">
          <div class="card shadow">
            <img src="img/${offer.img}" class="card-img-top" alt="${offer.location} | ${offer.src}">
            <div class="card-img-overlay text-end">
              <h5>
                <span class="badge rounded-pill bg-light text-dark">${offer.country}</span>
              </h5>
            </div>
            <div class="card-body">
              <h5 class="card-title">
                ${offer.location}
              </h5>
              <h6 class="card-subtitle mb-2">
                ${offer.city}, 
                ${offer.region}, 
                ${offer.country}
              </h6>
              <p class="card-text">
                ${offer.description}
              </p>
              <p class="card-text">
              </p>
            </div>
            <div class="card-footer d-flex justify-content-between">
              <div>
                From ${offer.price}/${offer.per}
              </div>
              <div class="btn-group gap-3 ${buttons}" role="group">
                <a class="text-secondary" href="offers/view.php?id=${offer.id}">
                  <i class="bi bi-eye-fill"></i>
                </a>
                <a class="text-success" href="offers/edit.php?id=${offer.id}">
                  <i class="bi bi-pencil-fill"></i>
                </a>
                <a class="text-danger" href="offers/delete.php?id=${offer.id}">
                  <i class="bi bi-x-circle-fill"></i>
                </a>
              </div>
            </div>
          </div>
        </div>`
    }
  }
request.send();
}