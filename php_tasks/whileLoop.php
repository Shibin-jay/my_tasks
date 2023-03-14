<?php
print("\nThe sum of n natural numbers\n");
$n=readline("Enter the value of n: ");
$i=0;
$sum=0;
while($i<=$n){
$sum+= $i;
$i++;
}
print("\nThe sum of $n natural numbers are : $sum \n");
?>