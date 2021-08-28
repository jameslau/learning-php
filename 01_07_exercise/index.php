
// php variables
<?php
$name = 'Michael'; // Heading 1
$city = 'NYC';
$movie = 'Star Trek'; // Italics
$friend = 'Jim'; // Bold
$snack = 'Popcorn';
?>

// format php variables into HTML
// note:'\n' these are line breaks

<h1>Hello <?php echo $name; ?>!</h1>

<p>Just found out your in the <?php echo $city; ?> neighborhood!</p>

<p>The new <?php echo $movie; ?> movie came out today. Would you like to go see it?</p> 

<p>A friend of mine, <?php echo $friend; ?>, will be joining us as well.</p> 

<p>I'm hungry! I might fill up on <?php echo $snack; ?> at the movies!</p>