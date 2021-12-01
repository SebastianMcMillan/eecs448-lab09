<?php

$q1 = $_POST["q1"];
$q2 = $_POST["q2"];
$q3 = $_POST["q3"];
$q4 = $_POST["q4"];
$q5 = $_POST["q5"];

$score = 0;

if($q1 == "Kefka")
    $score++;
if($q2 == "Kyoto")
    $score++;
if($q3 == "42")
    $score++;
if($q4 == "2x Dual Core")
    $score++;
if($q5 == "IBM Model F (XT Layout)")
    $score++;

echo(
        "Results:
        <br>
        <br>
        Question 1: Who is the main antagonist of Final Fantasy VI?
        <br>
        Your Answer: " . $q1 . 
        "<br>
        Correct Answer: Kefka
        <br>
        <br>
        Question 2: Nintendo's original headquarters were located in:
        <br>
        Your Answer: " . $q2 . 
        "<br>
        Correct Answer: Kyoto
        <br>
        <br>
        Question 3: What is the answer to the ultimate question of life, the universe, and everything?
        <br>
        Your Answer: " . $q3 .
        "<br>
        Correct Answer: 42
        <br>
        <br>
        Question 4: On the Power Mac G5, what was the highest tier CPU config available?
        <br>
        Your Answer: " . $q4 .
        "<br>
        Correct Answer: 2x Dual Core
        <br>
        <br>
        Question 5: Which keyboard made its debut on the original IBM PC (Model 5150)?
        <br>
        Your Answer: " . $q5 . 
        "<br>
        Correct Answer: IBM Model F (XT Layout)
        <br>
        <br>
        Final Score: " . $score * 20 . "%"
    );

?>