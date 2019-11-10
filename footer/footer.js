var textBox = document.getElementById("controlBox");
var textArea = document.getElementById("controlBoxTa");
var ele = document.getElementById("clearOptn");
var eleTa = document.getElementById("clearOptnTextArea");

ele.addEventListener("click", clearText, false);
eleTa.addEventListener("click", clearTextTa, false);

function clearText() {
    textBox.value = " ";
}

function clearTextTa() {
    textArea.value = " ";
}