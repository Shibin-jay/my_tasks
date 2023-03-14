<?php
print("\nSwitch Statement\n");
print("the options:");
print("\n\t1.print n numbers");
print("\n\t2.print n negative + numbers");
print("\n\t3.print given text for n times\n");
$option= readline("enter the option: ");
$n= readline("\nEnter the value of n:");
switch($option){
    case 1:
        {
            for ($i=1;$i<=$n;$i++){
                print("\n $i");
            }
        }
    case 2:
        {
            for($i=0;$i>=(0-$n);$i--){
                print("\n $i");
            }
        }
    case 3:{
        $text= readline("\nEnter the text :");
        for ($i=0;$i<$n; $i++){
            print("\n$text");
        }
    }
}
?>