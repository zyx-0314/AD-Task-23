<!-- summary.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Summary</title>
</head>
<body>

<h2>Summary of Results</h2>

<?php
$students = ["Alice" => 85, "Bob" => 62, "Clara" => 45, "David" => 78];
$total = 0;
$passed = 0;
$failed = 0;

foreach ($students as $grade) {
    $total++;
    if ($grade >= 60) {
        $passed++;
    } else {
        $failed++;
    }
}

echo "<p>Total Students: $total</p>";
echo "<p>Passed: $passed</p>";
echo "<p>Failed: $failed</p>";
?>

<a href="../index.php">Back to Grades</a>

</body>
</html>
