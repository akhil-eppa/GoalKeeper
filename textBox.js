var textBox = document.getElementById("controlBox");
var ele = document.getElementById("clearText");

ele.addEventListener("click", clearText, false);

function clearText() {
    textBox.value = " ";
}