<?php
    print("\nGrading system");
    $grade= null;
    $mark=readline("\nEnter the mark:");
    if($mark>90 && $mark<=100){
        $grade="Distinction";
    }
    elseif( $mark>80 && $mark<=90 ){
        $grade="A";
    }
    elseif($mark>70 && $mark<=80){
        $grade="B";
    }
    elseif($mark>60 && $mark<=70){
        $grade="C";
    }
    else{
        $grade="D";
    }
    if($grade=="D"){
        print("\nyour grade is $grade \nyou have failed the exam\n");
    }
    else{
        print("\nYour grade is $grade \nyou have passed the exam\n");
    }
?>