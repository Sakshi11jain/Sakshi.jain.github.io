// let resultElement = document.getElementById("result");
// let userInput = "This is a test string";
// let searchString = "test";
// if (userInput.includes(searchString)) {
//   resultElement.innerHTML = "The user input contains the search string";
// } else {
//   resultElement.innerHTML = "The user input does not contain the search string";
// }
//     <p id="result">
//     <form onsubmit="checkInput(event)">
//         <label for="user-input">Enter some text:</label>
//         <input type="text" id="user-input">
//         <button type="submit">Check</button>
//       </form>
//       <script>
//         function checkInput(event) {
//           event.preventDefault();
      
//           let userInput = document.getElementById("user-input").value;
//           let searchString = "test";
      
//           let resultElement = document.getElementById("result");
      
//           if (userInput.includes(searchString)) {
//             resultElement.innerHTML = "The user input contains the search string";
//           } else {
//             resultElement.innerHTML = "The user input does not contain the search string";
//           }
//         }
//       </script>     
//       </p> 

function askQuestion(index) {
  var prevAnswer = $("#answer").val();
  var prevFeedback = $("#feedback").text();
  if (prevAnswer !== "") {
    $("#questionnaire").append("<p><strong>Previous Answer:</strong> " + prevAnswer + "</p>");
    $("#questionnaire").append("<p><strong>Previous Feedback:</strong> " + prevFeedback + "</p>");
    $("#questionnaire").append("<hr>");
  }
  $("#question").text(questions[index].question);
  $("#answer").val("");
  $("#feedback").text("");
  $("#answer").focus();
  $("#next").prop("disabled", true);
  $("#answer").off("keyup").on("keyup", function(event) {
    if (event.keyCode === 13) {
      checkAnswer(index);
    }
  });
}

function checkAnswer(index) {
var answer = $("#answer").val().toLowerCase();
var hasKeyword = false;
for (var i = 0; i < questions[index].keywords.length; i++) {
    var keywords = questions[index].keywords[i].split(",");
    for (var j = 0; j < keywords.length; j++) {
        if (answer.includes(keywords[j])) {
            hasKeyword = true;
            break;
        }
    }
    if (hasKeyword) {
        break;
    }
}
if (hasKeyword) {
    $("#feedback").text("Correct!");
} else {
    $("#feedback").text("Sorry, that's not quite right. Please try again.");
}
$("#next").prop("disabled", false);
$("#questionnaire").append("<p><strong>Question:</strong> " + questions[index].question + "</p>");
}
  // $("#questionnaire").append("<hr>");
  $(document).ready(function() {
    // Set up initial state
    var currentQuestionIndex = 0;
    var startTime = new Date();
    askQuestion(currentQuestionIndex);

    // Set up event listener for "Next" button
    $("#next").click(function() {
        currentQuestionIndex++;
        if (currentQuestionIndex < questions.length) {
            askQuestion(currentQuestionIndex);
        } else {
            var endTime = new Date();
            var timeDiff = endTime - startTime;
            var seconds = Math.round(timeDiff / 1000);
            $("#questionnaire").hide();
            $("#thanks").append("<p>Time taken: " + seconds + " seconds</p>");
            $("#thanks").show();
        }
    });
});
