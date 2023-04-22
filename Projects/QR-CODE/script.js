let urlInput = document.getElementById("inputText");
let qrCode = document.getElementById("qrCode");
let imgSec = document.getElementById("imgSec");
let he = document.getElementById("he");
let resetng = document.getElementById("reseting");

function reseting() {
  imgSec.classList.remove("show-img");
  resetng.style.display = "none";
  he.style.marginTop = "50px";
  urlInput.value = "";
}

function qrGenerator() {
  if (urlInput.value.length > 0) {
    qrCode.src =
      "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" +
      urlInput.value;
    imgSec.classList.add("show-img");
    he.style.marginTop = "10px";
    resetng.style.display = "inline";
  } else {
    urlInput.classList.add("error");
    setTimeout(function () {
      urlInput.classList.remove("error");
    }, 2000);
  }
}
