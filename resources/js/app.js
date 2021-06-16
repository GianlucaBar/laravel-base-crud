const popup = document.getElementById("popup");
const btn = document.getElementById("toggle");

btn.onclick = function () {

  if (popup.style.display !== "none") {

    popup.style.display = "none";

  } else {
    popup.style.display = "block";
  }
};
