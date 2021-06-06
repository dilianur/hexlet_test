<?php

$arr = [1, 2, 3, 4];

function change($array)
{
  $array[0] = false;
  return $array;
};

var_dump(change($arr));

var_dump($arr);

echo 'привет';
//Реализуйте функцию isPowerOfThree которая определяет, является ли переданное число натуральной степенью тройки. Например, число 27 это третья степень (33), а 81 это четвертая (34).
print_r("\n");
function isPowerOfThree($number)
{
  return $number > 0 && 1162261467 % $number == 0;
}
print_r(isPowerOfThree(9));
print_r("\n");
// bool isPower3(std::int32_t value) {
//     return value > 0 && 1162261467 % value == 0;
// }
//решения учителя
function isPower(int $number)
{
  $current = 1;
  //если 1 меньше или равно $number в цикле
  while ($current <= $number) {
    // print_r($number);
    //если 9 равен 9 то труу
    if ($current === $number) {
      // print_r($current);
      return true;
    }
    //иначе
    // print_r($current); 
    $current *= 3;
    // print_r($current);
  }
  return false;
}
print_r(isPower(9));
print_r("\n");
//Реализуйте функцию addDigits, которая принимает на вход неотрицательное целое число и возвращает другое число, полученное из первого следующим преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока, не останется одна цифра.
function addDigits(int $num)
{
  //если $num меньше или равно 1 
  if ($num <= 1) return 1;
  //здесь происходит повторный вызов функции
  return $num * addDigits($num - 1);
  // print_r($num);
}
print_r(addDigits(4));
print_r("\n");
//этот же код при помощи цикла
function add(int $num)
{
  $result = 1;
  // print_r($result);
  for ($i = 1; $i <= $num; $i++) {
    $result *= $i;
    // print_r($result);
  }
  return $result;
}
print_r(add(5));
//Реализуйте функцию addDigits, которая принимает на вход неотрицательное целое число и возвращает другое число, полученное из первого следующим преобразованием: Итеративно сложите все входящие в него цифры до тех пор пока, не останется одна цифра.
//Для числа 38 процесс будет выглядеть так:
print_r("\n");
function addDigi(int $number)
{
  $sum = 0;
  //привели $number в тип string
  $string = (string) $number;
  //в циеле проходим, если больше одного, 0 устанавливаем
  while (strlen($string) > 1) {
    $res = 0;
    for ($i = 0; $i < strlen($string); $i++) {
      $current = $string[$i];
      // print_r($current);
      $res += (int) $current;
      // print_r($res);
    }
    $string = (string) $res;
    // print_r($string);
  }
  return $string;
}
print_r(addDigi(10));
//решения учителя
print_r("\n");
function one(int $num)
{
  //преобразование тип инт в стринг
  $string = (string) $num;
  $result = 0;
  for ($i = 0; $i < strlen($string); $i++) {
    //преобразование обратно в тип инт
    $result += (int) $string[$i];
  }
  return $result;
}
function two(int $num) {
  return $num < 10;
}
function tree(int $num)
{
  $result = $num;
  //если число больше 10
  while (!two($result)) {
    $result = one($result);
  }
  return $result;
}
print_r(tree(38));
print_r("\n");
//Создайте функцию isPerfect, которая принимает число и возвращает true, если оно совершенное, и false — в ином случае.
function isPerfect($num)
{
  if ($num === 0) return false;
  $sum = 0;
  for ($i = 1; $i < $num; $i++) {
    if ($num % $i === 0) {
      $sum += $i;
    }
  }
  return $sum === $num;
}
print_r(isPerfect(0));
//решения учителя
print_r("\n");
function ispp($num)
{
  if ($num === 0) return false;
  $sum = $num / 2;
  $sum1 = 0;
  for ($i = 1; $i <= $sum; $i++) {
    if ($num % $i === 0) {
      $sum1 += $i;
    }
  }
  return $sum1 === $num;
}
print_r(ispp(0));
print_r("\n");
//"Счастливым" называют билет с номером, в котором сумма первой половины цифр равна сумме второй половины цифр. Номера могут быть произвольной длины, с единственным условием, что количество цифр всегда чётно, например: 33 или 2341 и так далее.
//Билет с номером 385916 — счастливый, так как 3 + 8 + 5 = 9 + 1 + 6. Билет с номером 231002 не является счастливым, так как 2 + 3 + 1 != 0 + 0 + 2.
//Реализуйте функцию isHappy, проверяющую является ли номер счастливым (номер — всегда строка). Функция должна возвращать true, если билет счастливый, или false, если нет.
function isHappy(string $bilet)
{
  if (strlen($bilet) == 2) {
   return $bilet[0] === $bilet[1] ? true : false;
  }
  $sum1 = 0;
  $sum2 = 0;
  // $result = (int);
  // print_r($result[2]);
  for ($i = 0; $i < strlen($bilet) / 2; $i++) {
    $sum1 += (integer) $bilet[$i - 3];
    $sum2 += $bilet[$i];
    $result = $sum1 === $sum2 ? true : false;
  }
  return $result;
}
print_r(isHappy('231002'));
//решения учителя
print_r("\n");
function is(string $bilet)
{
  $balanse = 0;
  //здесь все в цикле 
  for ($i = 0, $j = strlen($bilet) - 1; $i < $j; $i += 1, $j -= 1) {
    $balanse += $bilet[$i] - $bilet[$j];
    // print_r($bilet[$j]);
  }
  return $balanse === 0;
}
print_r(is('385916'));
//Реализуйте функцию fizzBuzz, которая выводит на экран числа в диапазоне от $begin до $end. При этом:
// Если число делится без остатка на 3, то вместо него выводится слово Fizz
// Если число делится без остатка на 5, то вместо него выводится слово Buzz
// Если число делится без остатка и на 3, и на 5, то вместо числа выводится слово FizzBuzz
// В остальных случаях выводится само число
// Функция принимает два параметра ($begin и $end), определяющих начало и конец диапазона (включительно). Если диапазон пуст (в случае, когда $begin > $end), то функция просто ничего не печатает.
print_r("\n");
function fizzBuzz($begin, $end)
{
  // $result = [$begin, $end];
  // $one = $result[0];
  // $two = $result[1];
  $result = [];
  for ($i = $begin; $i <= $end; $i += 1) {
    // print_r($i);
   if ($i % 15 === 0) {
     $result[] = "FizzBuzz";
    //  print_r($i);
   } elseif ($i % 5 === 0) {
     $result[] = "Buzz";
   } elseif ($i % 3 === 0) {
     $result[] = "Fizz";
   } else {
     $result[] = $i;
   }
   $res = implode(' ', $result);
}
 echo $res;  
}
print_r(fizzBuzz(8, 20));

//Реализуйте функцию getMirrorMatrix, которая принимает двумерный массив (матрицу) и возвращает массив, изменённый таким образом, что правая половина матрицы становится зеркальной копией левой половины, симметричной относительно вертикальной оси матрицы. Для простоты условимся, что матрица всегда имеет чётное количество столбцов и количество столбцов всегда равно количеству строк.
print_r("\n");
function getMirrorMatrix(array $array)
{
//  $result = array_chunk($array, 2);
//  print_r($result);
// //  var_dump(array_splice($result[1], 2, count($result[1]), [12, 11]));
// $res = array_replace_recursive($result[1], $result[0]);
// $size = count($array);
// $merge = implode(' ', $array);
// print_r($merge);
$result = count($array) / 2;
print_r($result / 2);
//  for ($i = 0; $i < count($array); $i++) {
//         for ($j = 0; $j < column / 2; $j++) {
//             matrix[$i][$j] = matrix[$i][column - 1 - $j];
//         }
//  }

}
print_r(getMirrorMatrix([
  [11, 12, 13, 14],
  [21, 22, 23, 24],
  [31, 32, 33, 34],
  [41, 42, 43, 44],
]));
//array_slice срез массива
//array_splice — Удаляет часть массива и заменяет её чем-нибудь ещё
//array_chunk разбивает массив на части
//array_replace_recursive — Рекурсивно заменяет элементы первого массива элементами переданных массивов
//array_replace_recursive — Рекурсивно заменяет элементы первого массива элементами переданных массивов
//array_fill_keys
print_r("\n");
//Реализуйте функцию lengthOfLastWord, которая возвращает длину последнего слова переданной на вход строки. Словом считается любая последовательность, не содержащая пробелов.
function lengthOfLastWord(string $string)
{
  $sum = 0;
  $str = trim($string);
  $result = explode(' ',$str);
  $num = array_pop($result);
  $i = 0;
  while ($i < strlen($num)) {
    $sum += 1;
    $i++;
  }
  return $sum;
}
print_r(lengthOfLastWord('hello, world!  '));
//решения учителя
print_r("\n");
function length(string $string)
{
  //привратили в массив, удалили пробелы последние и начальные
  $result = explode(' ',trim($string));
  // print_r($result);
  //возвращаем последний элемент в массиве
  return strlen($result[count($result) - 1]);
}
print_r(length('hello, world!  '));
print_r("\n");
//Реализуйте функцию multiply, которая принимает две матрицы и возвращает новую матрицу — результат их произведения.
function multiply($mat1, $mat2)
{
  // $result = 1;
  for ($i = 0; $i < count($mat1); $i++) {
    // print_r($i);
    for ($j = 0; $j < count($mat2); $j++) {
      print_r($mat1[$j][$i] * $mat2[$i][$j]);
    }
  }
  // return $result;
}
print_r(multiply([[1, 2], [3, 2]], [[3, 2], [1, 1]]));
//[[5, 4], [11, 8]]
print_r("\n");
//Треугольник Паскаля — бесконечная таблица биномиальных коэффициентов, имеющая треугольную форму. В этом треугольнике на вершине и по бокам стоят единицы. Каждое число равно сумме двух расположенных над ним чисел. Строки треугольника симметричны относительно вертикальной оси.
function generate(int $num)
{
  $array = [        0 =>     [1],
                    1 =>    [1, 1],
                    2 =>   [1, 2, 1],
                    3 =>  [1, 3, 3, 1],
                    4 => [1, 4, 6, 4, 1],
                    7 => [1, 7, 21, 35, 35, 21, 7, 1]];
                    // print_r($array);
                    $result = [];
                    foreach ($array as $key => $value) {
                      if ($num === $key) {
                        $result = $value;
                      }
                    }
                    return $result;
}
print_r(generate(7));
//решения учителя
print_r("\n");
function t($nextrow)
{
  $result1 = count($nextrow);
  $result2 = [];
  for ($i = 0; $i <= $result1; $i++) {
    // print_r($nextrow);
    $one = $nextrow[$i - 1] ?? 0;
    $two = $nextrow[$i] ?? 0;
    // $result2[$i] = $one + $two;
  }
  // return $result;
}
print_r(t([        0 =>     [1],
                    1 =>    [1, 1],
                    2 =>   [1, 2, 1],
                    3 =>  [1, 3, 3, 1],
                    4 => [1, 4, 6, 4, 1],
                    7 => [1, 7, 21, 35, 35, 21, 7, 1]]));
function generet(int $num)
{
  // current содержит текущую строку.
    // Начальное значение — вершина треугольника.
  $current = [1];
  //обработку начинаем со второй строки
  for ($i = 1; $i <= $num; $i++) {
    //текущей становится только что вычисленная строка
    $current = t($current);
  }
  return $current;
}

//еще один вариант
// Определяем функцию для вычисления факториала
// function factorial(int $number): int
// {
//     if ($number < 2) {
//         return 1;
//     }

//     return $number * factorial($number - 1);
// }

// function generate(int $rowNumber): array
// {
//     $result = [];
//
//     for ($i = 0; $i <= $rowNumber; $i++) {
//         Для вычисления числа заданной строки используем формулу
//         расчёта биноминальных коэффициентов  С(n, k) = n! / (k! * (n - k)!)
//         $result[] = factorial($rowNumber) / (factorial($i) * factorial($rowNumber - $i));
//     }

//     return $result;
// }
print_r("\n");
//Реализуйте функцию summaryRanges, которая находит в массиве непрерывные возрастающие последовательности чисел и возвращает массив с их перечислением.
function summaryRanges(array $array)
{
  for ($i = 0; $i < count($array); $i++) {
    $current = $array[$i];
    if ($current === $array[$i] + 1) {
      
    }
  }
  return $array[$i - 1] + 1;
}
print_r(summaryRanges([0, 1, 2, 4, 5, 7]));

print_r("\n");
//Вес Хэмминга это количество единиц в двоичном представлении числа.
//Реализуйте функцию hammingWeight, которая считает вес Хэмминга.
//decbin переводит 10 система счисления в двоичную
function hammingWeight($num)
{
  $str = str_split(decbin($num));
  $result = 0;
  foreach ($str as $value) {
    if ($value === '1') {
      $result++;
    }
  }
  return $result;
}
print_r(hammingWeight(101));
//Реализуйте функцию compareVersion(), которая сравнивает переданные версии version1 и version2. Если version1 > version2, то функция должна вернуть 1, если version1 < version2, то - -1, если же version1 = version2, то - 0.
// Версия - это строка, в которой два числа (мажорная и минорные версии) разделены точкой, например: 12.11. Важно понимать, что версия - это не число с плавающей точкой, а несколько чисел не связанных между собой. Проверка на больше/меньше производится сравнением каждого числа независимо. Поэтому версия 0.12 больше версии 0.2.
print_r("\n");
function compareVersion($ver1, $ver2)
{
  $str = explode('.', $ver1);
  $str1 = explode('.', $ver2);
  // print_r($str);
  return $str <=> $str1;
}
print_r(compareVersion("3.2", "4.12"));
print_r("\n");
//Реализуйте функции rotateLeft и rotateRight, которые поворачивают матрицу влево (против часовой стрелки) и соответственно вправо (по часовой стрелке).
function rotateLeft(array $array)
{
  while(count($array) > 0) {
    // $b = [count($array[0])-1][] = array_shift($array[0]);
    // print_r($b);
    $str = [];
    if (count($array[0]) == 0) {
         $str[] = array_shift($array);
    }
}
return $str; 
}
print_r(rotateLeft([
  [1, 2, 3, 4],
  [5, 6, 7, 8],
  [9, 0, 1, 2],
]));
//// [4, 8, 2],
//   [3, 7, 1],
//   [2, 6, 0],
//   [1, 5, 9],
//array_flip меняет местами ключи с их значениями
//array_reverse
print_r("\n");
//Реализуйте функцию findWhere, которая принимает на вход массив (элементы которого - ассоциативные массивы) и пары ключ-значение (тоже в виде массива), а возвращает первый элемент исходного массива, значения которого соответствуют переданным парам (всем переданным). Если совпадений не было, то функция должна вернуть null.
function findWhere($array1, $array2)
{
 print_r($array2);
  
}
print_r(findWhere([
        ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
        ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
        ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
        ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
        ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
    ],
    ['author' => 'Shakespeare', 'year' => 1611]));
    print_r("\n");
    echo 'hello';
    //array_intersect_assoc
