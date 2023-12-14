<?php

    class buku {
        private $judul;
        private $author;
        private $status;

        public function __construct($judul, $author){
            $this->judul = $judul;
            $this->author = $author;
            $this->status = "Tersedia";
        }
        
        public function getJudul(){
            return $this->judul;
        }
        public function getAuthor(){
            return $this->author;
        }
        public function cekStatus(){
            return $this->status;
        }
        public function pinjam(){
            if ($this->cekStatus() == "Tersedia")
            {
                $this->status = "Dipinjam";
            }
            else
            {
                $this->status = "Tersedia";
            }
        }
    }
    $buku1 = new buku("Buku Bang Rofi", "Spectre");
    $buku2 = new buku("Buku Bang Leon", "Joji");

    if(isset($_POST[''])){
        
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tangent</title>
    <link rel="stylesheet" href="homeStyles.css">
</head>

<body>
    <div id="">
        <h1 id="">E LIBRARY</h1>
    </div>

    <form action="logout.php" method="post">
        <button type="submit">
            LOGOUT
        </button>
    </form>

    <div>
        <h3 id="">Daftar Buku</h3>
        <ul>
            <li>
                <?php echo $buku1->getJudul();?> - <?php echo $buku1->getAuthor();?>
            </li>
            <li>
                <?php echo $buku2->getJudul();?> - <?php echo $buku2->getAuthor();?>
            </li>
        </ul>
        <h3>Tambah Buku</h3>
        <form action="" method="post">
            <ul>
                <tr>
                    <td>
                        <label for="judul">Judul </label>
                        <input name="judul" type="text">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="author">author</label>
                        <input name="author" type="text">
                    </td>
                </tr>
            </ul>
            <button>Submit</button>
        </form>
        
        
    </div>

    <div>

    </div>

</body>

</html>