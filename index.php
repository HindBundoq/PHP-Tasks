<?php
// Home page
// Shows every task question as a link, built with foreach

$days = array(

    "Tue 6-10-2026" => array(

        "01-array" => array(
            "Display the colors as an unordered list",
            "Show the capitals sorted by capital name",
            "Display the first element of the array",
            "Insert a new item at any position",
            "Sort the array and show key = value",
            "Average, five lowest and five highest temperatures",
            "Merge two arrays",
            "Turn every string in the array to upper case",
        ),

        "02-function" => array(
            "Check if the number is a prime number",
            "Reverse a string",
            "Swap two variables",
            "Check if a number is an Armstrong number",
            "Check if a sentence is a palindrome",
            "Remove the duplicates from an array",
        ),

        "03-logical" => array(
            "Sum of two numbers equals 30",
            "Check if the number is a multiple of 3",
            "Check if the number is between 20 and 50",
            "Find the largest of three numbers",
            "Calculate the monthly electricity bill",
            "A calculator with the four operations",
            "Check if a person is eligible to vote",
            "Positive, negative or zero",
            "Find the grade of the student",
        ),

        "04-loops" => array(
            "Show 1-2-3 up to 10 on one line",
            "Add all the integers between 0 and 30",
            "Letters pattern",
            "Numbers pattern",
            "Diagonal pattern",
            "The factorial of a number",
            "A multiplication table",
        ),

        "05-strings" => array(
            "Change the case of a string in four ways",
            "Split numbers into a time format",
            "Check if the sentence contains a word",
            "Get the file name from the url",
            "Get the username from the email",
            "Get the last three characters",
            "Make a random password",
            "Replace the first word of the sentence",
        ),
    ),

    "Wed 7-10-2026" => array(

        "01-strings" => array(
            "Put a string in an array and show it with var_dump",
            "Print the next letter",
            "Insert a string at a position, and get the first word",
            "Remove the zeroes from the number",
            "Remove the dashes from the end",
            "Take the first 5 words",
            "Remove the commas from the number",
        ),

        "02-loop" => array(
            "Print the Fibonacci sequence",
            "Floyd triangle",
            "Letters pyramid pattern",
        ),

        "03-logical" => array(
            "Check if the year is a leap year",
            "Winter or summer by temperature",
            "Add two numbers, triple the sum when equal",
            "Numbers between 200 and 250 divisible by 4",
            "10 unique random numbers in a range",
        ),
    ),
);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>PHP Tasks</title>
  <style>
    body    { font-family: Arial, sans-serif; margin: 40px; color: #222; }
    h1      { margin-bottom: 4px; }
    h2      { margin-top: 35px; border-bottom: 2px solid #ff6600; padding-bottom: 6px; }
    h3      { margin-top: 22px; color: #ff6600; }
    .name   { color: #666; margin-top: 0; }
    ol      { line-height: 1.9; }
    a       { color: #0066cc; text-decoration: none; }
    a:hover { text-decoration: underline; }
  </style>
</head>
<body>

  <h1>PHP Tasks</h1>
  <p class="name">Hind Bundoq</p>

  <?php foreach ($days as $day => $sections): ?>

    <h2><?= $day ?></h2>

    <?php foreach ($sections as $folder => $questions): ?>

      <h3><?= $folder ?></h3>

      <ol>
        <?php foreach ($questions as $index => $title): ?>
          <?php $file = "q" . ($index + 1) . ".php"; ?>
          <li>
            <a href="<?= $day ?>/<?= $folder ?>/<?= $file ?>"><?= $title ?></a>
          </li>
        <?php endforeach; ?>
      </ol>

    <?php endforeach; ?>

  <?php endforeach; ?>

</body>
</html>
