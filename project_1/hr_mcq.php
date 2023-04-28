<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HR Quiz</title>
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
        background-image: url("Images/HR.jpg");
    }
  </style>
</head>
<body>
    <h1>HR Interview Quiz</h1>
  <form id="quiz-form">
  </form>
  <div class="quiz-results"><p>Note: These are just sample questions and answers, and the actual questions and answers may vary depending on the specific company and position being applied for.</p></div>
  <script>
    const quizForm = document.getElementById("quiz-form");

const questions = [
  {
    question: "What is your preferred working style?",
    answers: {
      a: "Working alone",
      b: "Working in a team",
      c: "Both A and B",
    },
    correctAnswer: "c",
  },
  {
    question: "How do you handle conflicts with your team members?",
    answers: {
      a: "Avoid them",
      b: "Confront them directly",
      c: "Find a mediator to help resolve the conflict",
    },
    correctAnswer: "b",
  },
  {
    question: "How do you prioritize your work when you have multiple tasks to complete?",
    answers: {
      a: "Work on the most urgent task first",
      b: "Work on the task that will take the longest to complete first",
      c: "Work on the easiest task first",
    },
    correctAnswer: "a",
  },
  {
    question: "What are your long-term career goals?",
    answers: {
      a: "I want to become a manager",
      b: "I want to start my own business",
      c: "I want to become an expert in my field",
    },
    correctAnswer: "c",
  },
  {
    question: "How do you handle stress in the workplace?",
    answers: {
      a: "Take a break and go for a walk",
      b: "Practice meditation or deep breathing exercises",
      c: "Talk to someone about what is causing the stress",
      d: "All of the above",
    },
    correctAnswer: "d",
  },
  {
    question: "How do you handle feedback from your supervisor?",
    answers: {
      a: "Accept it and make changes as necessary",
      b: "Ignore it",
      c: "Argue with your supervisor",
      d: "Complain to HR",
    },
    correctAnswer: "a",
  },
  {
    question: "How do you handle tight deadlines?",
    answers: {
      a: "Work longer hours to get the job done",
      b: "Prioritize tasks and work efficiently to meet the deadline",
      c: "Ask for an extension",
      d: "Ignore the deadline and work at your own pace",
    },
    correctAnswer: "b",
  },
  {
    question: "How do you deal with a difficult team member?",
    answers: {
      a: " Avoid them",
      b: "Confront them directly",
      c: "Talk to your supervisor about the issue",
      d: "Quit your job",
    },
    correctAnswer: "b",
  },
  {
    question: "How do you stay motivated at work?",
    answers: {
      a: "Set achievable goals",
      b: "Reward yourself for completing tasks",
      c: "Take breaks throughout the day",
      d: "All of the above",
    },
    correctAnswer: "d",
  },
  {
    question: "How do you handle a mistake you have made at work?",
    answers: {
      a: "Deny it",
      b: "Blame someone else",
      c: "Take responsibility and work to fix the mistake",
      d: "Quit your job",
    },
    correctAnswer: "c",
  },
  {
    question: "How do you handle a situation where you are not able to complete a task assigned to you?",
    answers: {
      a: "Ignore the task and hope that no one notices",
      b: "Ask for help from a coworker or supervisor",
      c: "Give up on the task and move on to something else",
      d: "Pretend that the task is completed",
    },
    correctAnswer: "b",
  },
  {
    question: "How do you prioritize your workload?",
    answers: {
      a: "Work on the most important tasks first",
      b: "Work on the easiest tasks first",
      c: "Work on the tasks that will take the longest first",
      d: "Work on tasks in the order that they were assigned",
    },
    correctAnswer: "a",
  },
  {
    question: "How do you deal with a situation where you disagree with your supervisor?",
    answers: {
      a: "Ignore the issue and continue working",
      b: "Confront your supervisor and argue your point of view",
      c: "Listen to your supervisor's point of view and try to come to a compromise",
      d: "Quit your job",
    },
    correctAnswer: "c",
  },
  {
    question: "How do you deal with a situation where a coworker is not doing their fair share of work?",
    answers: {
      a: "Ignore the situation and do the extra work yourself",
      b: "Confront the coworker and ask them to do their share of the work",
      c: "Talk to your supervisor about the situation",
      d: "Complain to HR",
    },
    correctAnswer: "b",
  },
  {
    question: "How do you stay organized at work?",
    answers: {
      a: "Use a to-do list",
      b: "Keep your workspace clean and clutter-free",
      c: "Set reminders for important tasks and deadlines",
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