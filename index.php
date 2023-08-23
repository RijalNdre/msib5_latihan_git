<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Personal Web</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <style class="">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .fade-image {
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
            margin-left: 45px;
        }

        .fade-image:hover {
            opacity: 0.7;
        }

        .card-img-top {
            opacity: 1;
            transition: opacity 0.5s ease-in-out;
        }

        .card-img-top:hover {
            opacity: 0.7;
        }

        button {
            background-color: #FBD85D;
            border: none;
            border-radius: 30px;
            width: 200px;
            height: 45px;
            transition: .3s;
        }

        button:hover {
            background-color: #3b82f6;
            box-shadow: 0 0 0 5px #3b83f65f;
            color: #fff;
        }
        
    </style>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-white mb-5 mt-4">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Andreas.</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">home</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="header-section" id="header">
        <div data-aos="fade-up" data-aos-duration="1000">
            <div class="container mb-5">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-6">
                        <p class="text-blue fw-semibold">Rizal Andrias Mahardika</p>
                        <h1 class="header-title text-uppercase fw-bold">Mahasiswa Teknologi Informasi Fakultas Ilmu Komputer</h1>
                        <h2 class="header-title text-uppercase">Universitas Jember</h2>
                        <button class="mt-4">
                            About me
                        </button>
                    </div>
                    <div class="col-md-5">
                        <img src="assets/fotoku.jpg" alt="" width="400" heigt="400" class="rounded fade-image shadow-lg">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="hobby-section" id="hobby">
        <div data-aos="fade-up" data-aos-duration="1000">
            <div class="container mb-5">
                <h1 class="section-title">Hobi</h1>
                <div class="row align-items-center justify-content-between mt-4">
                    <?php
                    $cards = [
                        ["Badminton", "Olahraga tiap weekend biar badan ga kaku", "assets/badminton.jpg"],
                        ["Baca Buku", "Baca buku kalo lagi bosen dan gatau mau ngapain biasanya baca novel", "assets/baca.jpg"],
                        ["Ngegame", "Main game buat ngilangin stress setelah seharian ngoding", "assets/ml.jpg"],
                    ];
                    foreach ($cards as $card) {
                        echo '<div class="col-md-4 mb-4">
                    <div class="card shadow-lg">
                      <img src="' . $card[2] . '" class="card-img-top" alt="Gambar Card">
                      <div class="card-body">
                        <h5 class="card-title">' . $card[0] . '</h5>
                        <p class="card-text">' . $card[1] . '</p>
                      </div>
                    </div>
                  </div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>
