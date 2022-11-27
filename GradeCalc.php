<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<title>Final Grade</title>
<link rel="stylesheet" type="text/css" href="./styles.css">
<body>
  <?php include '../menu.php';?>
  <div class= "col-md-12 col-lg-12" style="min-height: 25.5em; ">
    <?php
      $earnedParticipation = $_POST['earnedParticipation'];
      $maxParticipation = $_POST['maxParticipation'];
      $weightParticipation = $_POST['weightParticipation'];
      $earnedQuiz = $_POST['earnedQuiz'];
      $maxQuiz = $_POST['maxQuiz'];
      $weightQuiz = $_POST['weightQuiz'];
      $earnedLab = $_POST['earnedLab'];
      $maxLab = $_POST['maxLab']; 
      $weightLab = $_POST['weightLab'];
      $earnedPracticum = $_POST['earnedPracticum'];
      $maxPracticum = $_POST['maxPracticum'];
      $weightPracticum = $_POST['weightPracticum'];
      function percentage($obtained, $total) {
        $result = ( $obtained / $total ) * 100;
        Return $result;
      }
      function weightedPercentage($percentage, $weight) {
        $result =  $percentage * ( $weight  / 100);
        Return $result;
      }
      echo "<p class='paras'>You earned a " , $participationPercenage = percentage($earnedParticipation, $maxParticipation),
      "% for Participation, with a weighted value of ", $participationtotal = weightedPercentage($participationPercenage, $weightParticipation), "%</p>";
      echo "<p class='paras'>You earned a ", $quizPercenage = percentage($earnedQuiz, $maxQuiz),
      "% for Quizez, with a weighted value of ", $quiztotal = weightedPercentage($quizPercenage, $weightQuiz), "%</p>";
      echo "<p class='paras'>You earned a ", $labPercenage = percentage($earnedLab, $maxLab),
      "% for Lab Assignments, with a weighted value of ", $labtotal = weightedPercentage($labPercenage, $weightLab), "%</p>";
      echo "<p class='paras'>You earned a ", $practicumPercenage = percentage($earnedPracticum, $maxPracticum),
      "% for Practica, with a weighted value of ", $practicatotal = weightedPercentage($practicumPercenage, $weightPracticum), "%</p>";
      echo "<br>";
      echo "<br>";
      // $gradePercentage = $participationtotal + $quiztotal + $labtotal + $practicatotal;

      $gradePercentage = $participationtotal + $quiztotal + $labtotal + $practicatotal;
      
      $grade = '';
      function findGrade($gradePercentage){
        $myGrade = $gradePercentage >= 95.00? 'A+': 
        ($gradePercentage >= 90.00? 'A':
        ($gradePercentage >= 85.00? 'B+':
        ($gradePercentage >= 80.00? 'B':
        ($gradePercentage >= 75.00? 'C+':
        ($gradePercentage >= 70.00? 'C':
        ($gradePercentage >= 60.00? 'D':
        'F'))))));

        Return $myGrade;
      }
      // switch ($gradePercentage) {
      //   case ($gradePercentage >= 95 && $gradePercentage <=100 ):
      //       $grade = 'A+';
      //       break;
      //   case ($gradePercentage >= 90 && $gradePercentage <=95 ):
      //       $grade = 'A';
      //       break;
      //   case ($gradePercentage >= 85 && $gradePercentage <=90 ):
      //       $grade = 'B+';
      //       break;
      //   case ($gradePercentage >= 80 && $gradePercentage <=85 ):
      //       $grade = 'B';
      //       break;
      //   case ($gradePercentage >= 75 && $gradePercentage <=80 ):
      //       $grade = 'C+';
      //       break;
      //   case ($gradePercentage >= 70 && $gradePercentage <=75 ):
      //       $grade = 'C';
      //       break;
      //   case ($gradePercentage >= 60 && $gradePercentage <=70 ):
      //       $grade = 'D';
      //       break;
      //   case ($gradePercentage >= 0 && $gradePercentage <=60 ):
      //       $grade = 'F';
      //       break;
      // }
      echo "<p class='paras'><b>Your Final Grade is $gradePercentage %, which is a ", findGrade($gradePercentage) ,".</b></p>";
    ?>
    <br>
    <br>
    <button type="button" class="home-button btn btn-success" onclick="window.location.href = '../index.php';">Home</button>
  </div>
  <?php include '../footer.php';?>
</body>
</html>
