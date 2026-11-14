
<?php

include("CarPolicy2.php");

$PN = $_POST['policyNumber'];

$premium = $_POST['yearlyPremium'];

$dateOfLastClaim = $_POST['dateOfLastClaim'];

$car1 = new CarPolicy($PN, $premium);

$car1->setDateOfLastClaim($dateOfLastClaim);

echo "Policy Number: " . $car1 . "<br>";

echo "Original Yearly Premium: €" . $premium . "<br>";

echo "Discounted Premium: €" . $car1->getDiscountedPremium();

?>
