<?php
   $age = 22;
   $pvc = true;
   $ward = "20";
   //validation logic
   if ($age < 18) {
       echo "Not up to 18 years; not eligible to vote.";
   } else if (!$pvc) {
       echo "Invalid PVC; not eligible to vote.";
   } else if ($ward !== "20") {
       echo "Voter's does not belong to ward 20; not eligible to vote.";
   } else {
       echo "Voter is eligible to vote.";
   }
?>
   