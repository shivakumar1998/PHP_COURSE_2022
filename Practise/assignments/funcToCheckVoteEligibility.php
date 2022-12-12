<!--write a program to check if a person is eligible to vote or not -->

<?php
  function isEligibleToVote($age){
    if($age >= 18)
    {
      echo "is eligible to vote {$age}";
    }
    else {
      echo "is not eligible to vote {$age}";
    }
  }
  echo isEligibleToVote(15);

 ?>
