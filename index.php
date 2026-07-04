<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home | TI UNIMUS</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:'Poppins',sans-serif;
        }

        body{
            background:linear-gradient(135deg,#4facfe,#00f2fe);
        }

        .navbar{
            background:#1f2937;
            display:flex;
            justify-content:space-between;
            align-items:center;
            padding:15px 50px;
            box-shadow:0 3px 10px rgba(0,0,0,.2);
        }

        .logo{
            color:white;
            font-size:24px;
            font-weight:bold;
        }

        .menu a{
            color:white;
            text-decoration:none;
            margin-left:20px;
            padding:10px 18px;
            border-radius:8px;
            transition:.3s;
        }

        .menu a:hover{
            background:#3b82f6;
        }

        .menu .active{
            background:#2563eb;
        }

        .container{
            width:90%;
            max-width:1000px;
            margin:40px auto;
            background:white;
            border-radius:15px;
            padding:30px;
            box-shadow:0 10px 20px rgba(0,0,0,.2);
        }

        .container h1{
            text-align:center;
            color:#2563eb;
            margin-bottom:20px;
        }

        .container img{
            display:block;
            margin:auto;
            width:220px;
            border-radius:15px;
            margin-bottom:20px;
        }

        .container p{
            text-align:justify;
            line-height:1.8;
            color:#444;
        }

        .welcome{
            text-align:center;
            margin-top:30px;
            background:#2563eb;
            color:white;
            padding:20px;
            border-radius:12px;
        }

        footer{
            margin-top:40px;
            background:#1f2937;
            color:white;
            text-align:center;
            padding:15px;
        }
    </style>

</head>

<body>

    <nav class="navbar">

        <div class="logo">
            TI UNIMUS
        </div>

        <div class="menu">
            <a href="index.php" class="active">🏠 Home</a>
            <a href="profil.php">👤 Biodata</a>
            <a href="kontak.php">📞 Kontak</a>
            <a href="mahasiswa.php">🎓 Data Mahasiswa</a>
        </div>

    </nav>

    <div class="container">

        <h1>WEB TI UNIMUS 2026</h1>

        <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/720x0/webp/photo/2025/08/28/1067290352.png" alt="Foto">

        <p>
            Halo, saya <b>Ghania Hafsha</b> dengan NIM
            <b>13242520032</b>, mahasiswa Program Studi
            <b>Teknologi Informasi</b>.

            Saya memiliki minat di bidang teknologi, pemrograman,
            dan pengembangan website. Saya senang mempelajari HTML,
            CSS, JavaScript, serta berbagai teknologi baru yang
            mendukung perkembangan dunia digital.
        </p>

        <div class="welcome">
            <h2>Selamat Datang 👋</h2>
            <p>Terima kasih telah mengunjungi website sederhana saya.</p>
        </div>

    </div>

    <footer>
        © 2026 | Website Teknologi Informasi - Universitas Muhammadiyah Semarang
    </footer>

</body>
</html>