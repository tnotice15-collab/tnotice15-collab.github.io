<!DOCTYPE html>
<html>
<head>
    <title>PHP Loops</title>
</head>
<body>

<h1>PHP Loops</h1>

<h2>1) For Loop: Numbers 1 to 18</h2>
<?php
for ($i = 1; $i <= 18; $i++) {
    echo $i . " ";
}
?>

<h2>2) While Loop: Numbers 1 to 27</h2>
<?php
$i = 1;
while ($i <= 27) {
    echo $i . " ";
    $i++;
}
?>

<h2>3) Do-While Loop: Numbers 1 to 15</h2>
<?php
$i = 1;
do {
    echo $i . " ";
    $i++;
} while ($i <= 15);
?>

<h2>4) Sum of Odd Numbers from 2 to 21</h2>
<?php
$sum = 0;

for ($i = 2; $i <= 21; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}

echo "Sum = " . $sum;
?>

<h2>5) Product of Even Numbers from 3 to 17</h2>
<?php
$product = 1;

for ($i = 3; $i <= 17; $i++) {
    if ($i % 2 == 0) {
        $product *= $i;
    }
}

echo "Product = " . $product;
?>

<br><br>

<!-- Navigation Button -->
<a href="index.html">
<button>Back to Coursework</button>
</a>

</body>
</html>
