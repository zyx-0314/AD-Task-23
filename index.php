<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Grades Report</title>
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
                radial-gradient(circle at 10% 20%, rgba(108, 92, 231, 0.1) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(0, 184, 148, 0.1) 0%, transparent 20%);
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
            background: linear-gradient(90deg, var(--accent-color), var(--pass-color));
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
            background: linear-gradient(90deg, var(--accent-color), var(--pass-color));
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

        .grades-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .grades-list li {
            padding: 1.2rem 1.5rem;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: var(--transition);
            animation: slideIn 0.5s ease forwards;
            opacity: 0;
            transform: translateY(20px);
        }

        .grades-list li:hover {
            background-color: rgba(255, 255, 255, 0.03);
            transform: translateY(-2px);
        }

        .grades-list li:nth-child(1) { animation-delay: 0.1s; }
        .grades-list li:nth-child(2) { animation-delay: 0.2s; }
        .grades-list li:nth-child(3) { animation-delay: 0.3s; }
        .grades-list li:nth-child(4) { animation-delay: 0.4s; }

        .student-name {
            font-weight: 500;
            font-size: 1.1rem;
        }

        .grade-status {
            display: flex;
            align-items: center;
            gap: 1.5rem;
        }

        .grade-value {
            font-weight: 600;
            position: relative;
            padding-right: 1.2rem;
        }

        .grade-value::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 4px;
            background-color: var(--text-secondary);
            border-radius: 50%;
        }

        .pass {
            color: var(--pass-color);
            font-weight: bold;
            padding: 0.3rem 0.8rem;
            background-color: rgba(0, 184, 148, 0.1);
            border-radius: 20px;
            border: 1px solid var(--pass-color);
        }

        .fail {
            color: var(--fail-color);
            font-weight: bold;
            padding: 0.3rem 0.8rem;
            background-color: rgba(214, 48, 49, 0.1);
            border-radius: 20px;
            border: 1px solid var(--fail-color);
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

        @keyframes slideIn {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Grade meter visualization */
        .grade-meter {
            width: 100px;
            height: 6px;
            background-color: var(--border-color);
            border-radius: 3px;
            margin-top: 0.3rem;
            overflow: hidden;
        }

        .grade-meter-fill {
            height: 100%;
            background: linear-gradient(90deg, var(--fail-color), var(--pass-color));
            border-radius: 3px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Student Academic Portal</h1>
            <h2>Grade Performance Dashboard</h2>
        </header>

        <main>
            <ul class="grades-list">
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
                foreach ($students as $name => $grade) {
                    $percentage = min(100, max(0, $grade)); // Ensure between 0-100
                    echo "<li>";
                    echo "<div>";
                    echo "<div class='student-name'>$name</div>";
                    echo "<div class='grade-meter'><div class='grade-meter-fill' style='width: $percentage%'></div></div>";
                    echo "</div>";
                    echo "<div class='grade-status'>";
                    echo "<span class='grade-value'>$grade%</span>";
                    echo ($grade >= 60) 
                        ? "<span class='pass'><i class='fas fa-check-circle'></i> Pass</span>" 
                        : "<span class='fail'><i class='fas fa-times-circle'></i> Fail</span>";
                    echo "</div>";
                    echo "</li>";
                }
                ?>
            </ul>
        </main>

        <div class="navigation">
            <a href="./page/index.php" class="nav-button">
                <i class="fas fa-chart-bar"></i> View Summary Report
            </a>
        </div>

        <footer>
            <p>© <?php echo date("Y"); ?> Academic Records System | <i class="fas fa-graduation-cap"></i> BY DULUTAN JOHN CARLO RAMIREZ</p>
        </footer>
    </div>
</body>
</html>