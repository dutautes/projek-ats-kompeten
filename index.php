<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompeten</title>
    <!-- my own css -->
    <link rel="stylesheet" href="assets/styles/style.css">
</head>
<body>
    <header>
        <h1>readdir</h1>
    </header>

    <!-- main -->
    <main>
        <div class="main-container">
            <div class="container-left">
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = $_POST["nama"];
                        $nilai = $_POST["nilai"];

                        if (isset($_POST["nama"]) && isset($_POST["nilai"])) {
                            $nama = $_POST["nama"];
                            $usia = $_POST["nilai"];
        
                        if($nilai > 70){
                            echo "<img class='emoticon-k' src='assets/images/kompeten-yellow.png' alt='sudah-kompeten'>";
                        }else {
                            echo "<img class='emoticon-bk' src='assets/images/belum-kompeten-blue.png' alt='belum-kompeten'>";
                        }
                    }
                }
                ?>
                <h1>
                    <?php 
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = $_POST["nama"];
                        $nilai = $_POST["nilai"];
                        
                        if (isset($_POST["nama"]) && isset($_POST["nilai"])) {
                            $nama = $_POST["nama"];
                            $usia = $_POST["nilai"];

                        if($nilai > 70){
                            echo "Kompeten";
                        }else {
                            echo "Belum Kompeten";
                        }
                    }
                    }
                    ?>
                </h1>
                <p class="rincian">Rincian Nilai</p>
                <h1>
                    <?php 
                    $nama = $_POST["nama"];
                    echo $nama;
                    ?>
                </h1>
                <p>Nilai</p>
                <p>
                    <?php 
                    $nilai = $_POST["nilai"];
                    echo "$nilai";
                    ?>
                </p>
            </div>
            <div class="container-right">
                <h1>Cek Keterangan Nilai</h1>
                <form method="post" action="">
                    <label>Nama </label><br/>
                    <input type="text" name="nama"><br/>
                    <label>Nilai </label><br/>
                    <input type="text" name="nilai"><br/>	
                    <input type="submit" value="kirim">
	            </form>
            </div>
        </div>
    </main>
    <!-- end of main -->


    <footer>
        <p>&copy Projek Kompeten - Duta 2025</p>
    </footer>
</body>
</html>