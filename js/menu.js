let input = document.querySelectorAll("input");
let form = document.querySelector("form");

form.addEventListener("submit", function (e) {
	let i = 0;

	while (i < input.length && input[i].value != "") i++;

	if (i < input.length) {
		e.preventDefault();
		alert("Inserisci nome " + ["fiori", "cuori", "quadri", "picche"][i]);
	} else if (
		input[0].value == input[1].value ||
		input[1].value == input[2].value ||
		input[2].value == input[3].value ||
		input[0].value == input[3].value ||
		input[1].value == input[3].value ||
		input[0].value == input[2].value
	) {
		alert("Non mettere nomi diversi!");
		e.preventDefault();
		P;
	}
});
