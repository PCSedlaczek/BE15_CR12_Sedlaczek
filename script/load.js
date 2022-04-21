function loadElements(url, tag) {
  let request = new XMLHttpRequest();
  request.open("GET", url);
  request.onload = function () {
    if (request.status == 200) {
      document.querySelector(tag).innerHTML = request.responseText;
    }
  }
  request.send();
}
loadElements("comp/navbar.html", "header");
loadElements("comp/footer.html", "footer");