<?php
print("\n Printing factorial number upto n\n");
$n= readline("enter the value of n: ");
$facto=1;
for($i=$n;$i>=1;$i--){
    $facto=$facto* $i;
}
print("\nThe factorial of $n is $facto\n")
?>