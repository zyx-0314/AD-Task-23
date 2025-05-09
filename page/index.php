<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Summary Report</title>
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

        .summary-stats {
            background-color: rgba(255, 255, 255, 0.05);
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1rem;
            text-align: center;
        }

        .stat-item {
            padding: 1rem;
        }

        .stat-value {
            font-size: 2rem;
            font-weight: bold;
            margin: 0.5rem 0;
            color: var(--text-secondary);
        }

        .stat-label {
            font-size: 0.9rem;
            color: #aaa;
        }

        .pass-stat {
            color: var(--pass-color);
        }

        .fail-stat {
            color: var(--fail-color);
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
            <h1>Academic Summary</h1>
            <h2>Performance Overview</h2>
        </header>

        <main>
            <div class="summary-stats">
                <div class="stats-grid">
                    <?php
                    $students = ["Alice" => 85, "Bob" => 62, "Clara" => 45, "David" => 78];
                    $total = count($students);
                    $passed = 0;
                    $failed = 0;
                    
                    foreach ($students as $grade) {
                        if ($grade >= 60) {
                            $passed++;
                        } else {
                            $failed++;
                        }
                    }
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value">' . $total . '</div>';
                    echo '<div class="stat-label">Total Students</div>';
                    echo '</div>';
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value pass-stat">' . $passed . '</div>';
                    echo '<div class="stat-label">Passed Students</div>';
                    echo '</div>';
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value fail-stat">' . $failed . '</div>';
                    echo '<div class="stat-label">Failed Students</div>';
                    echo '</div>';
                    ?>
                </div>
            </div>
        </main>

        <div class="navigation">
            <a href="../index.php" class="nav-button">Back to Grade Report</a>
        </div>

        <footer>
            <p>© <?php echo date("Y"); ?> Academic Records System</p>
        </footer>
    </div>
</body>
</html>