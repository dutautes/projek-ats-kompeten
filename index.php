<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kompeten</title>
    <!-- my own css -->
    <link rel="stylesheet" href="assets/styles/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>
</head>.
<body id="bodyPage" >
    <header>
        <!-- toggle change theme -->
        <div class="tema justify-content-center mt-4">
            <input type="checkbox" class="checkbox" id="checkbox">
            <label for="checkbox" class="checkbox-label">
                <i class="fas fa-moon"></i>
                <i class="fas fa-sun"></i>
                <span class="ball"></span>
            </label>
            <p class="ket-tema">Change Theme</p>
        </div>
    </header>

    <!-- main -->
    <main>
        <div class="main-container">

            <div class="container-left">
                <!-- smile img -->
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                        $nama = $_POST["nama"];
                        $nilai = $_POST["nilai"];

                        if (isset($_POST["nama"]) && isset($_POST["nilai"])) {
        
                        if($nilai >= 70){
                            echo "<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='rgb(56, 142, 171)' class='bi bi-emoji-sunglasses' viewBox='0 0 16 16'>
                                    <path d='M4.968 9.75a.5.5 0 1 0-.866.5A4.5 4.5 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.5 3.5 0 0 1 8 11.5a3.5 3.5 0 0 1-3.032-1.75M7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A3 3 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.2 4.2 0 0 0 8 5c-.35 0-.69.04-1 .116'/>
                                    <path d='M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0'/>
                                </svg>";
                        } else {
                            echo "<svg xmlns='http://www.w3.org/2000/svg' width='100' height='100' fill='red' class='emot bi bi-emoji-frown' viewBox='0 0 16 16'>
                              <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16'/>
                              <path d='M4.285 12.433a.5.5 0 0 0 .683-.183A3.5 3.5 0 0 1 8 10.5c1.295 0 2.426.703 3.032 1.75a.5.5 0 0 0 .866-.5A4.5 4.5 0 0 0 8 9.5a4.5 4.5 0 0 0-3.898 2.25.5.5 0 0 0 .183.683M7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5m4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5'/>
                            </svg>";
                        }
                
                ?>
                <!-- Kompeten or not -->
                <?php 
                            if($nilai >= 70){
                                echo "<h1 class='result' style='color: rgb(56, 142, 171)'>Kompeten</h1>";
                            } else {
                                echo "<h1 class='result' style='color: red'>Belum Kompeten</h1>";
                            } 
                ?>
                
                <p class="rincian">Rincian Nilai</p>
                <!-- nama dari inputan user -->
                <h1 class="nama">
                    <?php
                        echo $nama;
                    ?>
                </h1>
                <p class="nilai">Nilai</p>
                <!-- nilai dari inputan user -->
                
                    <?php 
                        if($nilai >= 70 ) {
                            echo "<h1 style='color: rgb(56, 142, 171);'>$nilai</h1>"; 
                        } else {
                            echo "<h1 style='color: red;'>$nilai</h1>"; 
                        }
                        }}
                    ?>
                </p>
            </div>

            <div class="container-right">
                <!-- form input user -->
                <h1>Cek Keterangan Nilai</h1>
                <br>
                <form method="post" action="">
                    <label>Nama</label>
                    <br>
                    <input type="text" name="nama" class="inputNama" required>
                    <br>
                    <label>Nilai</label>
                    <br>
                    <input type="text" name="nilai" class="inputNilai" required>
                    <br><br>	
                    <input type="submit" value="kirim" class="submit">
	            </form>
            </div>

        </div>
    </main>
    <!-- end of main -->

    <!-- footer -->
    <footer>
        <p>&copy Projek ATS Kompeten - Duta 2025</p>
    </footer>
    <!-- end of footer -->

    <!-- javascript -->
    <script src="assets/script/script.js"></script>
</body>
</html>

<!-- tinggal responsif sama atur dikit containerleft -->