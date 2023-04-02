<?php
// Inisialisasi variabel
$random_number = rand(1, 10); // Membangkitkan angka acak antara 1 dan 10
$guesses = 0;
$won = false;

// Memeriksa apakah ada tebakan yang dikirim dari form
if(isset($_POST['submit'])) {
    // Memeriksa apakah tebakan yang dikirim dari form adalah angka
    if(is_numeric($_POST['guess'])) {
        // Menyimpan tebakan pengguna dalam variabel
        $guess = $_POST['guess'];
        $guesses++;
        
        // Memeriksa apakah tebakan pengguna benar atau salah
        if($guess == $random_number) {
            $won = true;
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Judul</title>
    <meta charset="utf-8">
    <meta name="author" content="Angga Artupas">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"
            integrity="sha384-n+RnIS6cYKV1xEb/YJkKyGWQ+ys3zqfLO6UdOnKLJStGJwhuV7e+LQlyvV8Wkymj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    <script src="hehe.js"></script>
</head>
<body>
    <!-- bisa isi konten apapun sesuai kebutuhan, gak mesti tebak angka -->
    <h1>Game Tebak Angka</h1>
    
    <?php if($won): ?>
        <p>Selamat! Anda menebak angka yang benar dalam <?= $guesses ?> kali percobaan.</p>
    <?php else: ?>
        <?php if($guesses > 0): ?>
            <p>Tebakan Anda salah. Silakan coba lagi.</p>
        <?php endif; ?>
        <div class="mb-3"> 
        <form method="post" action="">
            <label for="guess">Tebak angka antara 1 dan 10:</label>
            <input type="text" name="guess" id="guess" required>
            <input type="submit" name="submit" value="Tebak">
        </form>
        </div>
    <?php endif; ?>
    <!-- kamu bisa hapus konten diatas komen ini -->
</body>
</html>
