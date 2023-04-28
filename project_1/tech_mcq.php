<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Technical Quiz</title>
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
</head>
<body>
    <h1>Technical Interview Quiz</h1>
  <form id="quiz-form">
  </form>
  <script>
    const quizForm = document.getElementById("quiz-form");

const questions = [
  {
    question: "What is the output of the following code snippet?",
    answers: {
      a: "11 21 31",
      b: "11 20 31",
      c: "12 21 31",
      d: "12 20 31",
    },
    image: "Images/question1.png",
    correctAnswer: "c",
  },
  {
    question: "What is the time complexity of binary search algorithm?",
    answers: {
      a: "O(log n)",
      b: "O(n)",
      c: "O(n^2)",
      d: "O(1)",
    },
    correctAnswer: "a",
  },
  {
    question: "Which of the following is not a valid access specifier in C++?",
    answers: {
      a: "public",
      b: "private",
      c: "protected",
      d: "internal",
    },
    correctAnswer: "d",
  },
  {
    question: "Which data structure is used to implement recursion?",
    answers: {
      a: "Stack",
      b: "Queue",
      c: "Tree",
      d: "Heap",
    },
    correctAnswer: "a",
  },
  {
    question: "What is the output of the following code snippet?",
    image:"Images/question2.png",
    answers: {
      a: "10",
      b: "20",
      c: "30",
      d: "40",
    },
    correctAnswer: "a",
  },
  {
    question: "Which of the following is not a valid type of join in SQL?",
    answers: {
      a: "Inner Join",
      b: "Left Join",
      c: "Right Join",
      d: "Cross Join",
    },
    correctAnswer: "d",
  },
  {
    question: "Which of the following is not a valid HTTP method?",
    answers: {
      a: "GET",
      b: "POST",
      c: "DELETE",
      d: "ADD",
    },
    correctAnswer: "d",
  },
  {
    question: "Which of the following is not a valid storage class in C?",
    answers: {
      a: "volatile",
      b: "persistent",
      c: "static",
      d: "register",
    },
    correctAnswer: "b",
  },
  {
    question: "Which of the following is not a valid sorting algorithm?",
    answers: {
      a: "Insertion Sort",
      b: "Merge Sort",
      c: "Combine Sort",
      d: " Bubble Sort",
    },
    correctAnswer: "c",
  },
  {
    question: "Which of the following is not a valid OSI layer?",
    answers: {
      a: "Application Layer",
      b: "Network Layer",
      c: "Data Link Layer",
      d: "Session Layer",
    },
    correctAnswer: "a",
  },
  {
    question: "What is the output of the following code snippet?",
    image:"Images/question3.png",
    answers: {
      a: "0 1 2 3 4",
      b: "1 2 3 4 5",
      c: " 0 1 2 3 4 5",
      d: "None of the above",
    },
    correctAnswer: "a",
  },
  {
    question: "Which of the following is not a valid keyword in Java?",
    answers: {
      a: "float",
      b: "unsigned",
      c: "long",
      d: "double",
    },
    correctAnswer: "b",
  },
  {
    question: "What is the output of the following code snippet?",
    image:"Images/question4.png",
    answers: {
      a: "1 2 3 4 5",
      b: "5 4 3 2 1",
      c: "1 3 5",
      d: "5 3 1",
    },
    correctAnswer: "b",
  },
  {
    question: "Which of the following is not a valid database management system?",
    answers: {
      a: "MongoDB",
      b: "Oracle",
      c: "Apache",
      d: "Redis",
    },
    correctAnswer: "c",
  },
  {
    question: "What is the output of the following code snippet?",
    image:"Images/question5.png",
    answers: {
      a: "Case 1",
      b: "Case 2",
      c: "Default Case",
      d: "None of the above",
    },
    correctAnswer: "c",
  },
  {
    question: "What is the time complexity of quicksort algorithm in worst case?",
    answers: {
      a: "O(log n)",
      b: "O(n)",
      c: "O(n^2)",
      d: "O(1)",
    },
    correctAnswer: "c",
  },
  {
    question: "Which of the following is not a valid programming paradigm?",
    answers: {
      a: "Object-Oriented Programming",
      b: "Procedural Programming",
      c: "Functional Programming",
      d: "Consequential Programming",
    },
    correctAnswer: "d",
  },
  {
    question: "What is the output of the following code snippet?",
    image:"Images/question6.png",
    answers: {
      a: "0",
      b: "10",
      c: "20",
      d: "None of the above",
    },
    correctAnswer: "d",
  },
  {
    question: "Which of the following is not a valid type of loop in Python?",
    answers: {
      a: "for loop",
      b: "while loop",
      c: "do-while loop",
      d: "All of the above",
    },
    correctAnswer: "c",
  },
  {
    question: "Which of the following is not a valid data type in C?",
    answers: {
      a: "byte",
      b: "char",
      c: "int",
      d: "short",
    },
    correctAnswer: "a",
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
      ${question.image ? `<img src="${question.image}" alt="Image for question ${questionNumber}">` : ""}
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
