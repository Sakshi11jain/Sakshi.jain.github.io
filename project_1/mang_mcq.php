<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Managerial Quiz</title>
  <link rel="stylesheet" href="mcq_style.css?v=<?php echo time(); ?>">
  <nav>
    <span><a href="index.html"><img src="Images\PracViewLogo.png" alt="PracView Logo"></a></span>
    <ul>
        <li><a href="Example.html">Example QnA</a></li>
        <li><a href = "contact.html">Contact us</a></li>
        <li><a href = "about.html">About us</a></li>
        <li><a href = "logout.php">LogOut</a></li>
        <li></li>
    </ul>
  </nav>
  <style>
    body{
        background-image: url("Images/Managerial.webp");
    }
  </style>
</head>
<body>
    <h1>Managerial Interview Quiz</h1>
  <form id="quiz-form">
  </form>
  <script>
    const quizForm = document.getElementById("quiz-form");

const questions = [
  {
    question: "Which of the following is not a trait of a good leader?",
    answers: {
      a: "Accountability",
      b: "Creativity",
      c: "Indecisiveness",
      d: "Integrity",
    },
    correctAnswer: "c",
  },
  {
    question: "Which of the following is not a step in the decision-making process?",
    answers: {
      a: "Identify the problem and  Gather information",
      b: "Implement the solution",
      c: "Evaluate the outcome",
      d: "All of the above are steps in the decision-making process",
    },
    correctAnswer: "d",
  },
  {
    question: "What is the most important factor in successful project management?",
    answers: {
      a: "Timely completion",
      b: "Budget adherence",
      c: "Quality deliverables",
      d: "Customer satisfaction",
    },
    correctAnswer: "d",
  },
  {
    question: "Which of the following is not a key aspect of effective communication?",
    answers: {
      a: "Deception",
      b: "Clarity",
      c: "Empathy",
      d: "Active listening",
    },
    correctAnswer: "a",
  },
  {
    question: "Which of the following is not a benefit of diversity in the workplace?",
    answers: {
      a: "Increased innovation",
      b: "Enhanced problem-solving ability",
      c: "Decreased employee engagement",
      d: " Increased employee retention",
    },
    correctAnswer: "c",
  },
  {
    question: "Which of the following is not a leadership style?",
    answers: {
      a: "Authoritarian",
      b: "Democratic",
      c: "Laissez-faire",
      d: "Adversarial",
    },
    correctAnswer: "d",
  },
  {
    question: "Which of the following is not a factor in motivating employees?",
    answers: {
      a: "Job security",
      b: "Micromanagement",
      c: "Recognition",
      d: "Autonomy",
    },
    correctAnswer: "b",
  },
  {
    question: "What is the primary goal of performance management?",
    answers: {
      a: "Employee retention",
      b: "Employee development",
      c: "Employee discipline",
      d: "Employee recruitment",
    },
    correctAnswer: "b",
  },
  {
    question: "What is the primary purpose of a SWOT analysis?",
    answers: {
      a: "To identify internal strengths and weaknesses",
      b: " To identify external opportunities and threats",
      c: "To develop a strategic plan",
      d: "All of the above",
    },
    correctAnswer: "d",
  },
  {
    question: "What is the most important factor in building a strong team?",
    answers: {
      a: "Shared vision and goals",
      b: "Diversity of skills and perspectives",
      c: "Individual performance",
      d: "Autonomy",
    },
    correctAnswer: "a",
  },
  {
    question: "Which of the following is not a benefit of effective time management?",
    answers: {
      a: "Increased productivity",
      b: "Reduced stress",
      c: "Improved decision-making ability",
      d: "Increased procrastination",
    },
    correctAnswer: "d",
  },
  {
    question: "What is the primary purpose of a performance review?",
    answers: {
      a: "To identify areas of improvement",
      b: "To provide positive feedback",
      c: "To set goals for the future",
      d: "All of the above",
    },
    correctAnswer: "d",
  },
  {
    question: "Which of the following is not a principle of effective delegation?",
    image:"question4.png",
    answers: {
      a: "Clearly defining the task",
      b: "Assigning the task to the most skilled employee",
      c: "Setting clear expectations",
      d: "Providing support and resources",
    },
    correctAnswer: "b",
  },
  {
    question: "What is the most important factor in developing effective teamwork?",
    answers: {
      a: "Trust",
      b: "Communication",
      c: "Task interdependence",
      d: "All of the above",
    },
    correctAnswer: "d",
  },
  {
    question: "What is the primary goal of a training program?",
    answers: {
      a: "To improve employee skills and knowledge",
      b: "To increase employee compensation",
      c: "To reduce employee turnover",
      d: "To improve employee morale",
    },
    correctAnswer: "a",
  },
  {
    question: "Which of the following is not a component of a successful change management strategy?",
    answers: {
      a: "Communicating the change",
      b: "Resistance to change",
      c: "Identifying the need for change",
      d: "Creating a sense of urgency",
    },
    correctAnswer: "b",
  },
  {
    question: "What is the primary goal of a marketing strategy?",
    answers: {
      a: "To increase sales",
      b: "To build brand awareness",
      c: "To improve customer loyalty",
      d: "All of the above",
    },
    correctAnswer: "d",
  },
  {
    question: "What is the most important factor in creating a positive work environment?",
    answers: {
      a: "Employee benefits",
      b: "Competitive salary",
      c: "Employee recognition",
      d: "All of the above",
    },
    correctAnswer: "d",
  },
  {
    question: "Which of the following is not a factor in effective project management?",
    answers: {
      a: "Defining project scope",
      b: "Managing project risks",
      c: "Focusing only on project outputs",
      d: "Managing project stakeholders",
    },
    correctAnswer: "c",
  },
  {
    question: "What is the primary goal of a customer relationship management strategy?",
    answers: {
      a: "To acquire new customers",
      b: "To retain existing customers",
      c: "To improve customer satisfaction",
      d: "All of the above",
    },
    correctAnswer: "d",
  },
  
];

let quizHTML = "";

questions.forEach((question, index) => {
  const questionNumber = index + 1;
  const questionContainer = document.createElement("div");
  questionContainer.className = "question-container";
  questionContainer.id = `question-${questionNumber}`;

  quizHTML += `
  <div class="question-container-inner" id="question-${questionNumber}">
      <h3>${questionNumber}. ${question.question}</h3>
      <ul class ="answers-list">
  `;

  for (const [key, value] of Object.entries(question.answers)) {
    quizHTML += `
        <li>
          <input type="radio" id="q${questionNumber}${key}" name="q${questionNumber}" value="${key}">
          <label for="q${questionNumber}${key}">${value}</label>
        </li>
      `;
  }

  quizHTML += `
      </ul>
    </div>
  `;

  quizForm.insertAdjacentElement("beforeend", questionContainer);
  questionContainer.innerHTML = quizHTML;
  quizHTML = "";
});

const quizResultsContainer = document.createElement("div");
quizResultsContainer.className = "quiz-results";
quizForm.appendChild(quizResultsContainer);
const completeButton = document.createElement("button");
completeButton.textContent = "Complete";
completeButton.classList.add("my-button");
quizForm.appendChild(completeButton);

completeButton.addEventListener("click", function(event) {
  event.preventDefault();
  const correctAnswers = document.querySelectorAll(".correct").length;
  const totalQuestions = questions.length;
  const quizResultsMessage = document.createElement("p");
  quizResultsMessage.textContent = `You got ${correctAnswers/2} out of ${totalQuestions} correct!`;
  quizResultsContainer.appendChild(quizResultsMessage);
});

quizForm.addEventListener("change", function(event) {
  const selectedOption = event.target;
  if (selectedOption.matches("input[type=radio]")) {
    const questionNumber = selectedOption.name.slice(1);
    const selectedQuestion = questions[questionNumber - 1];
    const questionContainer = document.getElementById(`question-${questionNumber}`);
    const correctAnswer = selectedQuestion.correctAnswer;
    if (selectedOption.value === correctAnswer) {
      selectedOption.parentElement.classList.add("correct");
      selectedOption.disabled = true;
      questionContainer.innerHTML += `<p class="result-message correct">Correct</p>`;
    } else {
      const previousSelectedOption = document.querySelector(`input[name=q${questionNumber}]:checked`);
      if (previousSelectedOption) {
        previousSelectedOption.parentElement.classList.remove("correct");
      }
      selectedOption.parentElement.classList.add("incorrect");
      questionContainer.innerHTML += `<p class="result-message-incorrect">Incorrect. The correct answer is ${selectedQuestion.answers[correctAnswer]}.</p>`;
    }
}
});
  </script>
</body>
</html>