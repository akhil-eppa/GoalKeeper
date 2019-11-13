
// get reference to the div containing the cards
cardDiv = document.getElementById("cards");
//console.log(cardDiv);

// get reference to the individual columns containing a card each
cardsList = cardDiv.getElementsByClassName("col-sm");
//console.log(cardsList);

// create an array to store the delete button of each card
btn_d_ids = new Array(cardsList.lenth);

// get reference to the individual card's delete button
for(let i = 1; i <= cardsList.length; ++i) {
    btn_d_ids[i-1] = document.getElementById("btn-d-"+i);
}
//console.log(btn_d_ids);

// add addEventListener() to listen for a button click
for(let i = 0; i < cardsList.length; ++i) {
    btn_d_ids[i].addEventListener("click", removeCard, true);
}

const corrector = 1;
// function to delete the column that contains the card element, in which the delete button was clicked
function removeCard(e) {
    //console.log("Target id: " + e.target.id);
    let btn_id = e.target.id;
    console.log(cardsList);
    let opt = confirm("You are deleting the Goal: " + cardsList[(Number(btn_id[btn_id.length - 1]) - corrector)].getElementsByClassName("card-title")[0].textContent + "\n" + "Are you sure you want to do this?");
    //find the number in the id of the delete button using, btn_id[btn_id.length - 1]
    if(opt == true) 
        //cardDiv.removeChild( cardsList[(Number(btn_id[btn_id.length - 1]) - corrector)] );
        cardsList[(Number(btn_id[btn_id.length - 1]) - corrector)].style.display = "none";
    
    //console.log("Arith: " + (Number(btn_id[btn_id.length - 1]) - 1));
}