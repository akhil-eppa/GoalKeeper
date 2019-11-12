var passText = document.getElementById("controlBox");
var clearBox = document.getElementById("clear");
var showBox = document.getElementById("show");


clearBox.addEventListener("click", clearText, false);
showBox.addEventListener("mouseover", showPass, false);
showBox.addEventListener("mouseout", hidePass, false);

function clearText() {
    passText.value = "";
}

function showPass() {
  passText.type = "text";
}

function hidePass() {
  passText.type = "password";
}