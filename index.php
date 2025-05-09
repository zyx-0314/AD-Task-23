<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades Report</title>
    <style>
        :root {
            --primary-bg: #1e1e1e;
            --secondary-bg: #2c2c2c;
            --text-primary: #f2f2f2;
            --text-secondary: #ffffff;
            --pass-color: #4CAF50;
            --fail-color: #F44336;
            --border-color: #444;
            --button-bg: #444;
            --button-hover: #666;
            --shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-primary);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        .container {
            background-color: var(--secondary-bg);
            padding: 2rem;
            width: 90%;
            max-width: 800px;
            margin: 2rem auto;
            border-radius: 12px;
            box-shadow: var(--shadow);
        }

        .header {
            text-align: center;
            margin-bottom: 2rem;
            padding-bottom: 1rem;
            border-bottom: 1px solid var(--border-color);
        }

        h1, h2 {
            color: var(--text-secondary);
            margin: 0.5rem 0;
        }

        h1 {
            font-size: 2.2rem;
        }

        h2 {
            font-size: 1.8rem;
        }

        .grades-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .grades-list li {
            padding: 1rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .student-name {
            font-weight: 500;
        }

        .grade-status {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .pass {
            color: var(--pass-color);
            font-weight: bold;
        }

        .fail {
            color: var(--fail-color);
            font-weight: bold;
        }

        .navigation {
            display: flex;
            justify-content: center;
            margin-top: 2rem;
        }

        .nav-button {
            background-color: var(--button-bg);
            color: white;
            padding: 0.8rem 1.5rem;
            text-decoration: none;
            border-radius: 8px;
            font-size: 1.1rem;
            transition: background-color 0.3s;
        }

        .nav-button:hover {
            background-color: var(--button-hover);
        }

        footer {
            text-align: center;
            margin-top: 2rem;
            padding-top: 1rem;
            border-top: 1px solid var(--border-color);
            font-size: 0.9rem;
            color: #aaa;
        }
    </style>
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Student Academic Portal</h1>
            <h2>Grade Report</h2>
        </header>

        <main>
            <ul class="grades-list">
                <?php
                $students = ["Alice" => 85, "Bob" => 62, "Clara" => 45, "David" => 78];
                
                foreach ($students as $name => $grade) {
                    echo "<li>";
                    echo "<span class='student-name'>$name</span>";
                    echo "<div class='grade-status'>";
                    echo "<span>Grade: $grade</span>";
                    echo ($grade >= 60) 
                        ? "<span class='pass'>Pass</span>" 
                        : "<span class='fail'>Fail</span>";
                    echo "</div>";
                    echo "</li>";
                }
                ?>
            </ul>
        </main>

        <div class="navigation">
            <a href="./page/index.php" class="nav-button">View Summary Report</a>
        </div>

        <footer>
            <p>© <?php echo date("Y"); ?> Academic Records System</p>
        </footer>
    </div>
</body>
</html>