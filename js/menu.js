let input = document.querySelectorAll("input");
let form = document.querySelector("form");
let semi = ["fiori", "cuori", "quadri", "picche"]

form.addEventListener("submit", function (e) {
    for (let i = 0; i < input.length; i++) {
        if (input[i].value == "") {
            e.preventDefault();
            alert("Inserisci nome " + semi[i]);
            break;
        }
    }

    if (input[0].value == input[1].value
        || input[1].value == input[2].value
        || input[2].value == input[3].value
        || input[0].value == input[3].value
        || input[1].value == input[3].value
        || input[0].value == input[2].value) {
        alert("Non mettere nomi uguali!");
        e.preventDefault();
    }
});