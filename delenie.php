$num1 = readline("Введите первое число: ");
   $num2 = readline("Введите второе число: ");

   if ($num2 == 0) {
       echo "Деление на ноль невозможно!\n";
   } else {
       $quotient = $num1 / $num2;
       echo "Частное: $quotient\n";
   }