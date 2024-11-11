<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    
    <!----------- task 1.1 ----------->

    <?php
    echo strtoupper("hello world");
    echo "<br>";
    echo strtolower("HELLO WORLD");
    echo "<br>";
    echo ucfirst("hello world");
    echo "<br>";
    echo lcfirst("HELLO WORLD");
    echo "<br>";

    ?>
    <hr>

    <!----------- task 1.2 ----------->

    <?php
    $timeS = '085119';
    $timeFormat = chunk_split($timeS, 2, ':');
    $timeFormat = rtrim($timeFormat, ':');
    echo $timeFormat;

    echo ("<br>");

    echo (substr($timeS, 0, 2) . ":" . substr($timeS, 2, 2) . ":" . substr($timeS, 4, 2));
    ?>
    <hr>
    <!----------- task 1.3 ----------->
    <!-- using str_contains -->
    <?php
    echo '<br>';
    $sentence = "I am a full stack developer at orange coding academy";
    $orange = "Orange";
    if (str_contains($sentence, 'orange')) {
        echo 'found';
    } else {
        echo 'not found';
    }
    ?>
    <!-- using strpos -->
    <?php
    echo '<br>';
    $sentence = "I am a full stack developer at orange coding academy";
    $orange = "Orange";
    if (strpos($sentence, 'orange')) {
        echo 'found';
    } else {
        echo 'not found';
    }
    ?>
    <!----------- task 1.4 ----------->
    <hr>
    <?php
    echo '<br>';
    $URL = 'www.orange.com/index.php';
    echo basename($URL)
    ?>
    <hr>
    <!----------- task 1.5 ----------->
    <?php
    echo '<br>';
    $email = 'priyank@geeks.com';
    echo strstr($email, '@', true);

    ?>
    <hr>
    <!----------- task 1.6 ----------->
    <?php
    $str1 = 'info@orange.com';
    echo substr($str1, -3);

    ?>
    <hr>
   <!----------- task 1.7 ----------->
   <?php
   function random_password($char)
   {
       $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
       return substr(str_shuffle($data), 0, $char);
    }
    echo random_password((7));
   ?>
   <hr>
     <!----------- task 1.8 ----------->
    <?php
    $str2 = 'That new trainee is so genius.';
    echo str_replace('That', 'Our', $str2);
    ?>
    <hr>

    <!----------- task 1.9 ----------->
    <?php
    
    $str1 = 'dragonball';
    $str2 = 'dragonboll';
    

    $dif = strspn($str1 ^  $str2 , "\0");

    echo ("First difference between two strings at position " .$dif ." : ". $str1[$dif]. " vs " . $str2[$dif] );
     ?>
     <hr>

        <!----------- task 1.10 ----------->
    <?php
    
    $string = "Twinkle, twinkle, twinkle, little star.";
    $array = explode(",", $string);
    var_dump($array);
    ?>
    <hr>

  <!----------- task 1.12 ----------->
    <?php
    $str = 'z';

    echo ++$str;
    ?>

     <hr>
     <!----------- task 1.12 ----------->
     <?php
     
     $sentence = 'The brown fox';
     $insertString = 'qiuck';
     
     echo substr_replace($sentence, $insertString .' ', 4,0);

    echo '<br>';

     echo strtok($sentence, ' ');
     ?>

    <hr>
    <!----------- task 1.13 ----------->
    
    <?php
     $numbers = '0000657022.24';
     
     echo ltrim($numbers, '0');
     ?>
     
     <hr>
     <!----------- task 1.14 ----------->

     <?php
     $sentence =  'The quick brown fox jumps over the lazy dog';
     
     echo str_replace('fox', '', $sentence);
     ?>

<hr>
    <!----------- task 1.15 ----------->
    
    <?php
     $sentence = 'The quick brown fox jumps over the lazy dog---';
     
     echo rtrim($sentence, '-' );
     ?>

<hr>
    <!----------- task 1.16 ----------->
    
    <?php
     $special_numbers = '\"\1+2/3*2:2-3/4*3';
     
     echo str_replace(str_split('\/*+-:"'), " ", $special_numbers);
     ?>

<hr>
    <!----------- task 1.17 ----------->
    
    <?php
$selStr = "The quick brown fox jumps over the lazy dog";
echo "<br>";
echo implode(" ", array_slice(explode(" ", $selStr), 0, 5));
?>

     
     <hr>
    <!----------- task 1.18 ----------->
    <?php
      $numbers = '2,543.12';

      echo str_replace(",", "", $numbers  );
    ?>

    <hr>
    <!----------- task 1.19 ----------->
    <?php
      foreach (range('a', 'z') as $alphabet) {
        echo $alphabet." ";
      }
    ?>

</body>

</html>