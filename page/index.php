<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Summary Report</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-bg: #121212;
            --secondary-bg: #1e1e1e;
            --accent-color: #6c5ce7;
            --text-primary: #f8f9fa;
            --text-secondary: #e9ecef;
            --pass-color: #00b894;
            --fail-color: #d63031;
            --border-color: #333;
            --button-bg: #6c5ce7;
            --button-hover: #5649c0;
            --shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            --transition: all 0.3s ease;
        }

        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background-color: var(--primary-bg);
            color: var(--text-primary);
            line-height: 1.6;
            background-image: 
                radial-gradient(circle at 90% 10%, rgba(108, 92, 231, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 10% 90%, rgba(214, 48, 49, 0.1) 0%, transparent 20%);
        }

        .container {
            background-color: var(--secondary-bg);
            padding: 2.5rem;
            width: 90%;
            max-width: 900px;
            margin: 3rem auto;
            border-radius: 16px;
            box-shadow: var(--shadow);
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
        }

        .container::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: linear-gradient(90deg, var(--accent-color), var(--fail-color));
        }

        .header {
            text-align: center;
            margin-bottom: 2.5rem;
            padding-bottom: 1.5rem;
            border-bottom: 1px solid var(--border-color);
            animation: fadeIn 0.8s ease;
        }

        h1 {
            font-size: 2.5rem;
            background: linear-gradient(90deg, var(--accent-color), var(--fail-color));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            margin-bottom: 0.5rem;
        }

        h2 {
            font-size: 1.5rem;
            color: var(--text-secondary);
            font-weight: 400;
        }

        .summary-stats {
            background-color: rgba(255, 255, 255, 0.03);
            padding: 2rem;
            border-radius: 12px;
            margin-bottom: 2rem;
            border: 1px solid var(--border-color);
            animation: fadeIn 1s ease;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1.5rem;
            text-align: center;
        }

        .stat-item {
            padding: 1.5rem;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            transition: var(--transition);
            animation: slideUp 0.6s ease forwards;
            opacity: 0;
            transform: translateY(30px);
            border: 1px solid var(--border-color);
        }

        .stat-item:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
        }

        .stat-item:nth-child(1) { animation-delay: 0.2s; }
        .stat-item:nth-child(2) { animation-delay: 0.4s; }
        .stat-item:nth-child(3) { animation-delay: 0.6s; }

        .stat-value {
            font-size: 2.5rem;
            font-weight: bold;
            margin: 0.5rem 0;
            color: var(--text-secondary);
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 0.5rem;
        }

        .stat-label {
            font-size: 0.95rem;
            color: #adb5bd;
        }

        .pass-stat {
            color: var(--pass-color);
        }

        .fail-stat {
            color: var(--fail-color);
        }

        .chart-container {
            margin-top: 2rem;
            height: 200px;
            background-color: rgba(255, 255, 255, 0.05);
            border-radius: 10px;
            padding: 1rem;
            border: 1px solid var(--border-color);
            position: relative;
            overflow: hidden;
            animation: fadeIn 1.2s ease;
        }

        .chart-bar {
            position: absolute;
            bottom: 0;
            height: 0;
            background: linear-gradient(to top, var(--accent-color), var(--pass-color));
            border-radius: 4px 4px 0 0;
            transition: height 1.5s ease, width 0.5s ease;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            color: var(--text-primary);
            font-weight: 600;
            padding-top: 0.5rem;
        }

        .navigation {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
        }

        .nav-button {
            background-color: var(--button-bg);
            color: white;
            padding: 0.9rem 2rem;
            text-decoration: none;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: 500;
            transition: var(--transition);
            box-shadow: 0 4px 12px rgba(108, 92, 231, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .nav-button:hover {
            background-color: var(--button-hover);
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(108, 92, 231, 0.4);
        }

        .nav-button i {
            font-size: 1.2rem;
        }

        footer {
            text-align: center;
            margin-top: 3rem;
            padding-top: 1.5rem;
            border-top: 1px solid var(--border-color);
            font-size: 0.9rem;
            color: #6c757d;
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes slideUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Academic Analytics</h1>
            <h2>Performance Overview Report</h2>
        </header>

        <main>
            <div class="summary-stats">
                <div class="stats-grid">
                    <?php
                    // Demonstrating declarations
                    $students = [
                        "Alice Johnson" => 92,
                        "Robert Chen" => 58,
                        "Maria Garcia" => 75,
                        "David Kim" => 64,
                        "Sophia Patel" => 81,
                        "James Wilson" => 43
                    ];
                    
                    // Demonstrating looping and conditionals
                    $total = count($students);
                    $passed = 0;
                    $failed = 0;
                    $totalGrade = 0;
                    
                    foreach ($students as $grade) {
                        $totalGrade += $grade;
                        if ($grade >= 60) {
                            $passed++;
                        } else {
                            $failed++;
                        }
                    }
                    
                    $average = $total > 0 ? round($totalGrade / $total) : 0;
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value"><i class="fas fa-users"></i> ' . $total . '</div>';
                    echo '<div class="stat-label">Total Students</div>';
                    echo '</div>';
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value pass-stat"><i class="fas fa-check-circle"></i> ' . $passed . '</div>';
                    echo '<div class="stat-label">Passed Students</div>';
                    echo '</div>';
                    
                    echo '<div class="stat-item">';
                    echo '<div class="stat-value fail-stat"><i class="fas fa-times-circle"></i> ' . $failed . '</div>';
                    echo '<div class="stat-label">Failed Students</div>';
                    echo '</div>';
                    ?>
                </div>
            </div>

            <div class="chart-container" id="chart">
                <?php
                // Simple bar chart visualization
                $chartData = [
                    'Passed' => $passed,
                    'Failed' => $failed
                ];
                
                $maxValue = max($chartData);
                $barWidth = 100 / count($chartData);
                
                $i = 0;
                foreach ($chartData as $label => $value) {
                    $height = ($value / $maxValue) * 100;
                    $left = $i * $barWidth + ($barWidth / 4);
                    $width = $barWidth / 2;
                    $colorClass = $label == 'Passed' ? 'pass-stat' : 'fail-stat';
                    
                    echo "<div class='chart-bar $colorClass' 
                          style='left: {$left}%; width: {$width}%; height: {$height}%'
                          data-value='$value'>
                          $value
                          </div>";
                    $i++;
                }
                ?>
            </div>
        </main>

        <div class="navigation">
            <a href="../index.php" class="nav-button">
                <i class="fas fa-arrow-left"></i> Back to Grade Report
            </a>
        </div>

        <footer>
            <p>© <?php echo date("Y"); ?> Academic Analytics System | <i class="fas fa-chart-line"></i> Data-Driven Insights</p>
        </footer>
    </div>

    <script>
        // Simple animation trigger for the chart
        document.addEventListener('DOMContentLoaded', function() {
            const bars = document.querySelectorAll('.chart-bar');
            bars.forEach(bar => {
                const height = bar.style.height;
                bar.style.height = '0';
                setTimeout(() => {
                    bar.style.height = height;
                }, 300);
            });
        });
    </script>
</body>
</html>