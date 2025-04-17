var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };



window.onload = function () {
	$("display_results").onclick = displayResults;
	$("display_scores").onclick = displayScores;
	$("add").onclick = addScore;

	$("name").focus();
	
};

function displayResults() {
    var total = 0;
    var highest = scores[0];

    for (var i = 0; i < scores.length; i++) {
        total += scores[i];
        if (scores[i] > highest) {
            highest = scores[i];
        }
    }

    var average = total / scores.length;

    document.getElementById("results").innerHTML = `
        <h2>Results</h2>
        <p>Average score is ${average}</p>
        <p>Highest score is ${highest}</p>
    `;
}

function displayScores() {
    document.getElementById("scores_table").innerHTML =" <h2>Scores</h2> <tr><th>Name</th><th>Score</th></tr>";
    for (var i = 0; i < names.length; i++) {
        scores_table.innerHTML += "<tr><td>" + names[i] + "</td><td>" + scores[i] + "</td></tr>";
    }
}

function addScore() {
    var name = $("name").value.trim();
    var score = parseInt($("score").value);

	if (!/^[A-Za-z\s]+$/.test(name)) {
		alert("Please enter a valid name");
		return;
	  }
    if (name === "" || !isNaN(name) || isNaN(score) || score < 0 || score > 100) {
        alert("Please enter a valid name and a score between 0 and 100.");
        return;
    }

    names.push(name);
    scores.push(score);
    $("name").value = "";
    $("score").value = "";

    displayScores();
	displayResults();
	$("name").focus();
}











