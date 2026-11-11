
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Fauzi Web | Beranda</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: Arial, sans-serif;
            background: #f8fafc;
            color: #1e293b;
        }

        /* NAVBAR */
        nav {
            width: 100%;
            padding: 22px 8%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: white;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .logo {
            font-size: 25px;
            font-weight: bold;
            color: #2563eb;
        }

        .menu {
            display: flex;
            gap: 30px;
        }

        .menu a {
            text-decoration: none;
            color: #334155;
            font-weight: 600;
            transition: 0.3s;
        }

        .menu a:hover {
            color: #2563eb;
        }

        /* HERO */
        .hero {
            min-height: 580px;
            padding: 100px 8%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
            background: linear-gradient(135deg, #eff6ff, #ffffff);
        }

        .hero-text {
            max-width: 600px;
        }

        .hero-text h1 {
            font-size: 52px;
            line-height: 1.2;
            margin-bottom: 20px;
            color: #0f172a;
        }

        .hero-text h1 span {
            color: #2563eb;
        }

        .hero-text p {
            font-size: 17px;
            line-height: 1.8;
            color: #64748b;
            margin-bottom: 30px;
        }

        .buttons {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn {
            padding: 14px 25px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }

        .btn-primary {
            background: #2563eb;
            color: white;
        }

        .btn-primary:hover {
            background: #1d4ed8;
        }

        .btn-secondary {
            border: 2px solid #2563eb;
            color: #2563eb;
        }

        .btn-secondary:hover {
            background: #2563eb;
            color: white;
        }

        .hero-image {
            width: 420px;
            height: 350px;
            border-radius: 25px;
            background: linear-gradient(135deg, #2563eb, #7c3aed);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 45px;
            font-weight: bold;
            box-shadow: 0 20px 50px rgba(37,99,235,0.2);
        }

        /* SECTION */
        section {
            padding: 85px 8%;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            font-size: 35px;
            margin-bottom: 15px;
            color: #0f172a;
        }

        .section-title p {
            color: #64748b;
            line-height: 1.7;
        }

        /* ABOUT */
        .about {
            background: white;
            text-align: center;
        }

        .about-content {
            max-width: 750px;
            margin: auto;
            color: #64748b;
            line-height: 1.9;
            font-size: 17px;
        }

        /* SERVICES */
        .services {
            background: #f8fafc;
        }

        .service-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 25px;
        }

        .service-card {
            background: white;
            padding: 35px 25px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 5px 20px rgba(0,0,0,0.04);
            transition: 0.3s;
        }

        .service-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.08);
        }

        .service-icon {
            font-size: 45px;
            margin-bottom: 20px;
        }

        .service-card h3 {
            margin-bottom: 15px;
            color: #2563eb;
        }

        .service-card p {
            color: #64748b;
            line-height: 1.7;
        }

        /* CONTACT */
        .contact {
            background: #1e40af;
            text-align: center;
            color: white;
        }

        .contact h2 {
            font-size: 35px;
            margin-bottom: 20px;
        }

        .contact p {
            margin-bottom: 30px;
            line-height: 1.7;
        }

        .contact .btn {
            display: inline-block;
            background: white;
            color: #2563eb;
        }

        /* FOOTER */
        footer {
            background: #0f172a;
            color: #cbd5e1;
            text-align: center;
            padding: 25px;
            font-size: 14px;
        }

        /* RESPONSIVE */
        @media (max-width: 768px) {
            nav {
                padding: 20px 5%;
                flex-direction: column;
                gap: 18px;
            }

            .menu {
                gap: 15px;
                flex-wrap: wrap;
                justify-content: center;
            }

            .menu a {
                font-size: 13px;
            }

            .hero {
                padding: 70px 6%;
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 36px;
            }

            .buttons {
                justify-content: center;
            }

            .hero-image {
                width: 100%;
                max-width: 420px;
                height: 250px;
                font-size: 35px;
            }

            .service-container {
                grid-template-columns: 1fr;
            }

            section {
                padding: 65px 6%;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav>
        <div class="logo">Fauzi Web.</div>

        <div class="menu">
            <a href="#home">Beranda</a>
            <a href="#about">Tentang</a>
            <a href="#services">Layanan</a>
            <a href="#contact">Kontak</a>
        </div>
    </nav>

    <!-- HERO -->
    <div class="hero" id="home">

        <div class="hero-text">
            <h1>
                Selamat Datang di
                <span>Fauzi Web</span>
            </h1>

            <p>
                Selamat datang di website saya.
                Website ini dibuat menggunakan framework Laravel
                dengan tampilan modern, sederhana, dan mudah digunakan.
            </p>

            <div class="buttons">
                <a href="#about" class="btn btn-primary">
                    Mulai Sekarang
                </a>

                <a href="#services" class="btn btn-secondary">
                    Pelajari Lebih Lanjut
                </a>
            </div>
        </div>

        <div class="hero-image">
            Fauzi Web
        </div>

    </div>

    <!-- ABOUT -->
    <section class="about" id="about">

        <div class="section-title">
            <h2>Tentang Kami</h2>
            <p>Mengenal lebih dekat website kami</p>
        </div>

        <div class="about-content">
            <p>
                Fauzi Web merupakan website yang dikembangkan
                menggunakan Laravel. Website ini dirancang untuk
                memberikan pengalaman pengguna yang nyaman,
                menarik, dan mudah diakses melalui berbagai perangkat.
            </p>
        </div>

    </section>

    <!-- SERVICES -->
    <section class="services" id="services">

        <div class="section-title">
            <h2>Layanan Kami</h2>
            <p>Beberapa hal yang dapat kamu temukan di website ini</p>
        </div>

        <div class="service-container">

            <div class="service-card">
                <div class="service-icon">💻</div>
                <h3>Web Development</h3>
                <p>
                    Pengembangan website modern
                    dengan teknologi Laravel.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">🎨</div>
                <h3>Desain Website</h3>
                <p>
                    Tampilan website yang menarik,
                    sederhana, dan responsif.
                </p>
            </div>

            <div class="service-card">
                <div class="service-icon">🚀</div>
                <h3>Teknologi Modern</h3>
                <p>
                    Menggunakan teknologi yang
                    membantu pengembangan website.
                </p>
            </div>

        </div>

    </section>

    <!-- CONTACT -->
    <section class="contact" id="contact">

        <h2>Hubungi Kami</h2>

        <p>
            Terima kasih telah mengunjungi Fauzi Web.
            Sampai jumpa di halaman berikutnya!
        </p>

        <a href="mailto:emailkamu@example.com" class="btn">
            Hubungi Sekarang
        </a>

    </section>

    <!-- FOOTER -->
    <footer>
        <p>
            &copy; {{ date('Y') }} Fauzi Web.
            All Rights Reserved.
        </p>
    </footer>

</body>
</html>
