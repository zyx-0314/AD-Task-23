<!-- index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Student Grades</title>
    <style>
        body { font-family: Arial; margin: 20px; }
        .pass { color: green; }
        .fail { color: red; }
    </style>
</head>
<body>

<h2>Student Grades</h2>

<?php
$students = ["Alice" => 85, "Bob" => 62, "Clara" => 45, "David" => 78];

echo "<ul>";
foreach ($students as $name => $grade) {
    echo "<li>";
    echo "$name - Grade: $grade - ";
    
    if ($grade >= 60) {
        echo "<span class='pass'>Pass</span>";
    } else {
        echo "<span class='fail'>Fail</span>";
    }

    echo "</li>";
}
echo "</ul>";
?>

<a href="./page/index.php">Go to Summary</a>

</body>
</html>
