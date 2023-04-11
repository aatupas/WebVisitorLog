<!DOCTYPE html>
<html>
<head>
    <title>Log</title>
    <meta charset="utf-8">
    <meta name="author" content="Angga Artupas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-n+RnIS6cYKV1xEb/YJkKyGWQ+ys3zqfLO6UdOnKLJStGJwhuV7e+LQlyvV8Wkymj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
    <h2>Log Visitor</h2><br>
    <table class="table table-striped table-hover">
        <thead class="table-light">
        <tr>
            <th>Date</th>
            <th>Maps Link</th>
            <th>User Agent</th>
        </tr>
        </thead>
        <tbody class="table-group-divider">
        <?php // for showing data from log.txt
        $file = "log.txt";
        $data = file_get_contents($file);
        $lines = explode("\n", $data);
        foreach ($lines as $line) {
            $arr = explode("|", $line);
            if (count($arr) > 1) {
                echo "<tr>";
                echo "<td>" . $arr[0] . "</td>";
                echo "<td><a class='btn btn-outline-success btn-sm' href='" . $arr[1] . "' target='_blank'>Link <i class='bi bi-arrow-up-right-square'></i></a></td>";
                echo "<td>" . $arr[2] . "</td>";
                echo "</tr>";
            }
        }
        ?>
        </tbody>
    </table>
</div>
</body>
