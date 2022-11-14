<!DOCTYPE html>
<head>
  <tile>EECS 448: Quiz</title>
</head>

<body style="background-image:url('pokeball.png');">
  <div style="background-color: rgba(255, 255, 255, 0.75)">
  <?php
    $q1 = $_POST["q1"];
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $q4 = $_POST["q4"];
    $q5 = $_POST["q5"];
    $correct = 0;

    //Question 1 Code
    echo "Question 1: Which of the following held items increases a Pokemon's move damage by 30% at the cost of 10% of its max HP per turn?<br>";
    echo "    You answered: ".$q1."<br>";
    echo "    Correct answer: Life Orb<br><br>";
    if ($q1 == 'Life Orb') {
      $correct++;
    }

    //Question 2 Code
    echo "Question 2: Which of the following Pokemon has not won worlds?<br>";
    echo "    You answered: ".$q2."<br>";
    echo "    Correct answer: Xerneas<br><br>";
    if ($q2 == 'Xerneas') {
      $correct++;
    }

    //Question 3 Code
    echo "Question 3: Which of the following Pokemon does not get Fake Out?<br>";
    echo "    You answered: ".$q3."<br>";
    echo "    Correct answer: Charizard<br><br>";
    if ($q3 == 'Charizard') {
      $correct++;
    }

    //Question 4 Code
    echo "Question 4: What is the base speed of Regieleki?<br>";
    echo "    You answered: ".$q4."<br>";
    echo "    Correct answer: 200<br><br>";
    if ($q4 == '200') {
      $correct++;
    }

    //Question 5 Code
    echo "Question 5: Which of the following Pokemon does not have access to a weather setting ability?<br>";
    echo "    You answered: ".$q5."<br>";
    echo "    Correct answer: Quagsire<br><br>";
    if ($q5 == 'Quagsire') {
      $correct++;
    }

    $percent_correct = $correct / 5 * 100;

    echo "You answered: ".$correct."/5 questions correct!<br>";
    echo "Percent correct: ".$percent_correct."%<br>"
  ?>
  </div>
</body>
