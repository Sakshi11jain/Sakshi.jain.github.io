<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PracView</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
</head>
<body>
    <nav>
        <span><img src="Images\PracViewLogo.png" alt="PracView Logo"></span>
        <ul>
            <li><a href = "dodont.html">Interview Etiquette</a><li>
            <li><a href = "contact.php">Contact us</a></li>
            <li><a href = "about.html">About us</a></li>
            <li><a href="logout.php">LogOut</a></li>
        </ul>
    </nav>
    <main>
        <div class="container">
        <div id="Tech">
            <h2>Technical Round</h2>
            <a href="Technical.html"><div class="box">Start Practicing</div></a>
            <a href="tech_mcq.php"><div class="box1">Start Quiz</div></a>
            <p>Test your technical skills with our simulated technical interview questions. 
                Get ready to tackle challenging questions covering programming languages, 
                algorithms, and data structures. Practice your answers and boost your confidence
                before your actual interview.</p>
        </div>
    </div>
    <div class="container_1">
        <div id="Mg">
            <h2>Managerial Round</h2>
            <a href="Managerial.html"><div class="box">Start Practicing</div></a>
            <a href="mang_mcq.php"><div class="box1">Start Quiz</div></a>
            <p>Prepare for the managerial round of your interview with our simulated questions.
                  During this round, the manager will ask questions to understand your skills, work history,
                   and goals, as well as your motivations for wanting the job. Practice your answers and develop your leadership skills.</p>
        </div>
    </div>
    <div>
        <div id="Hr">
            <h2>HR Round</h2>
            <a href="Hrround.html"><div class="box">Start Practicing</div></a>
            <a href="hr_mcq.php"><div class="box1">Start Quiz</div></a>
            <p>HR interview questions should include what interested the candidate in the role and clarify their experience
            and past responsibilities to determine if they are a good fit for the role.</p>
        </div>
</div>
    <div class="container_1ex">
        <div id="Ex">
            <h2>Most Asked Question and answers</h2>
            <a href="Example.html"><div class="box">Start Learning</div></a>
            <p>Here are some questions as well as their sample answers which are commonly asked in interviews. You can 
            read the questions and answers here to learn how to answer them. Then, you can practice by answering mock 
            interview questions from the boxes above.</p>
        </div>
    </div>
    </main>    
    <footer>
    <p>Copyright © 2023 - PracView</p>
    </footer>
</body>
</html>