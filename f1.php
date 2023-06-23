<?php
echo "calculator\n";
$x = readline("enter num 1 \n");
$y = readline("enter num 2 \n");
while(1)
{
    echo "1 -> Addition\n";
    echo "2 -> Substration\n";
    echo "3 -> Multiplication\n";
    echo "4 -> Division\n";
    echo "5 -> Exit\n";

    $ch = readline("enter your choice: ");
    switch($ch)
    {
        case 1: echo ($x+$y); echo "\n"; break;
        case 2: echo ($x-$y); echo "\n"; break;
        case 3: echo ($x*$y); echo "\n";break;
        case 4: echo ($x/$y); echo "\n";break;
        case 5: exit();   
        default: echo "enter choice carefully";

    }



}
?>