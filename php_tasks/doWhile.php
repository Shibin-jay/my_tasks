<?php
print("\nPrint the multiples of 3 upto n\n");
$n= readline("\nEnter the limit n : ");
$mul=1;
print("\nThe multiples are \n");
do{
    if($mul%3 ==0){
        print("\n$mul");
    }    
    $mul++;
}while($mul<=$n);
?>