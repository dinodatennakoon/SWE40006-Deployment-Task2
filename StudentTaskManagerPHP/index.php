<?php
$tasks = [
    "Complete deployment assignment",
    "Review Azure logs",
    "Check Application Insights"
];

$currentTime = date("Y-m-d H:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Task Manager PHP</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 40px;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 30px;
            border-radius: 10px;
        }

        h1 {
            margin-bottom: 10px;
        }

        .info {
            background: #e8f4ff;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 6px;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>

<body>

<div class="container">

    <h1>Student Task Manager - PHP</h1>

    <div class="info">
        <p><strong>Runtime:</strong> PHP <?php echo PHP_VERSION; ?></p>
        <p><strong>Server Time:</strong> <?php echo $currentTime; ?></p>
    </div>

    <h2>Current Study Tasks</h2>

    <ul>
        <?php foreach ($tasks as $task): ?>
            <li><?php echo htmlspecialchars($task); ?></li>
        <?php endforeach; ?>
    </ul>

</div>

</body>
</html>