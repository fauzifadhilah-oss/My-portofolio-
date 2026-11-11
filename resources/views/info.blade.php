
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info | Fauzi Fadhilah</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        :root {
            --bg: #080d18;
            --card: #111a2b;
            --blue: #70c5ff;
            --blue2: #a5dcff;
            --white: #f5f8ff;
            --muted: #9baac0;
            --border: rgba(255,255,255,.09);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
        }

        body {
            font-family: 'DM Sans', sans-serif;
            background: var(--bg);
            color: var(--white);
            line-height: 1.7;
        }

        a {
            color: inherit;
            text-decoration: none;
        }

        .container {
            width: min(1100px, 90%);
            margin: auto;
        }

        /* NAVBAR */

        nav {
            position: sticky;
            top: 0;
            z-index: 100;
            background: rgba(8,13,24,.88);
            backdrop-filter: blur(15px);
            border-bottom: 1px solid var(--border);
        }

        .nav-content {
            min-height: 75px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 20px;
        }

        .logo {
            font-family: 'Outfit', sans-serif;
            font-size: 25px;
            font-weight: 800;
            letter-spacing: 1px;
        }

        .logo span {
            color: var(--blue);
        }

        .nav-links {
            display: flex;
            gap: 25px;
            flex-wrap: wrap;
        }

        .nav-links a {
            color: var(--muted);
            font-size: 13px;
            transition: .3s;
        }

        .nav-links a:hover {
            color: var(--blue);
        }

        /* HERO */

        .hero {
            min-height: 610px;
            display: flex;
            align-items: center;
            padding: 90px 0;
            background:
                radial-gradient(circle at 85% 25%, rgba(69,157,220,.17), transparent 30%),
                radial-gradient(circle at 15% 85%, rgba(69,157,220,.10), transparent 30%);
        }

        .hero-content {
            max-width: 760px;
        }

        .badge {
            display: inline-block;
            padding: 7px 16px;
            border: 1px solid rgba(112,197,255,.35);
            border-radius: 30px;
            color: var(--blue);
            background: rgba(112,197,255,.07);
            font-size: 13px;
            margin-bottom: 25px;
        }

        .hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(42px, 8vw, 78px);
            line-height: 1.08;
            margin-bottom: 20px;
        }

        .hero h1 span {
            color: var(--blue);
        }

        .hero p {
            color: var(--muted);
            max-width: 620px;
            font-size: 16px;
            margin-bottom: 30px;
        }

        .button {
            display: inline-block;
            background: var(--blue);
            color: #07111e;
            padding: 13px 23px;
            border-radius: 10px;
            font-weight: 800;
            transition: .3s;
        }

        .button:hover {
            transform: translateY(-4px);
            background: var(--blue2);
        }

        .secondary {
            margin-left: 10px;
            background: transparent;
            color: var(--white);
            border: 1px solid var(--border);
        }

        /* GENERAL SECTION */

        section {
            padding: 85px 0;
            scroll-margin-top: 75px;
        }

        .section-heading {
            margin-bottom: 35px;
        }

        .section-heading small {
            color: var(--blue);
            text-transform: uppercase;
            letter-spacing: 3px;
            font-size: 11px;
            font-weight: 800;
        }

        .section-heading h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(30px, 5vw, 43px);
            margin-top: 8px;
        }

        .section-heading p {
            color: var(--muted);
            margin-top: 8px;
        }

        /* CARDS */

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 25px;
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-5px);
            border-color: rgba(112,197,255,.4);
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 18px;
        }

        .profile-card {
            grid-column: span 2;
            display: flex;
            align-items: center;
            gap: 25px;
        }

        .sticker {
            min-width: 105px;
            height: 105px;
            border-radius: 25px;
            background: linear-gradient(135deg, #70c5ff, #d7edff);
            display: grid;
            place-items: center;
            font-size: 55px;
        }

        .card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .card p {
            color: var(--muted);
        }

        .data-row {
            display: flex;
            justify-content: space-between;
            gap: 15px;
            padding: 10px 0;
            border-bottom: 1px solid var(--border);
        }

        .data-row:last-child {
            border-bottom: none;
        }

        .data-row span:first-child {
            color: var(--muted);
        }

        .data-row span:last-child {
            text-align: right;
            font-weight: 600;
        }

        /* TAGS */

        .tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }

        .tag {
            padding: 9px 15px;
            border-radius: 30px;
            background: rgba(112,197,255,.08);
            border: 1px solid rgba(112,197,255,.2);
            color: var(--blue2);
            font-size: 13px;
        }

        /* SELECTED PROJECTS */

        .projects-grid {
            display: grid;
            grid-template-columns: repeat(2, minmax(0, 1fr));
            gap: 22px;
            margin-top: 30px;
        }

        .project-card {
            position: relative;
            padding: 28px;
            border: 1px solid var(--border);
            border-radius: 18px;
            background: var(--card);
            transition: .3s ease;
            overflow: hidden;
        }

        .project-card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(
                90deg,
                var(--blue),
                transparent
            );
            opacity: .7;
        }

        .project-card:hover {
            transform: translateY(-6px);
            border-color: rgba(112,197,255,.45);
            box-shadow: 0 15px 35px rgba(0,0,0,.2);
        }

        .project-top,
        .project-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 12px;
        }

        .project-number {
            color: var(--blue);
            font-size: 14px;
            font-weight: 800;
            letter-spacing: 2px;
        }

        .project-status {
            padding: 6px 11px;
            border-radius: 30px;
            color: var(--blue2);
            background: rgba(112,197,255,.09);
            border: 1px solid rgba(112,197,255,.18);
            font-size: 10px;
        }

        .project-category {
            display: inline-block;
            margin-top: 30px;
            color: var(--blue);
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
        }

        .project-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 22px;
            margin: 10px 0;
        }

        .project-description {
            color: var(--muted);
            font-size: 13px;
            line-height: 1.8;
            min-height: 95px;
        }

        .project-technologies {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 20px;
        }

        .project-technologies span {
            padding: 7px 12px;
            border: 1px solid rgba(112,197,255,.2);
            border-radius: 30px;
            color: var(--blue2);
            background: rgba(112,197,255,.07);
            font-size: 11px;
        }

        .project-footer {
            margin-top: 25px;
            padding-top: 17px;
            border-top: 1px solid var(--border);
            color: var(--muted);
            font-size: 10px;
            letter-spacing: 1.5px;
        }

        .project-footer span:last-child {
            color: var(--blue);
            font-size: 17px;
        }

        /* TIMELINE */

        .timeline {
            border-left: 2px solid rgba(112,197,255,.35);
            padding-left: 25px;
            display: grid;
            gap: 25px;
        }

        .timeline-item {
            position: relative;
        }

        .timeline-item::before {
            content: "";
            position: absolute;
            left: -33px;
            top: 8px;
            width: 13px;
            height: 13px;
            background: var(--blue);
            border-radius: 50%;
        }

        .timeline-item h3 {
            font-size: 17px;
            margin-bottom: 5px;
        }

        .timeline-item p {
            color: var(--muted);
        }

        /* QUOTE */

        .quote {
            text-align: center;
            padding: 50px 25px;
            border-radius: 22px;
            background: linear-gradient(135deg, #12243a, #142b42);
            border: 1px solid rgba(112,197,255,.2);
        }

        .quote .symbol {
            font-size: 45px;
            color: var(--blue);
        }

        .quote h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(23px, 4vw, 35px);
            margin: 10px auto;
            max-width: 800px;
        }

        .quote p {
            color: var(--blue2);
            font-size: 13px;
        }

        /* FOOTER */

        footer {
            padding: 30px 0;
            border-top: 1px solid var(--border);
            text-align: center;
            color: var(--muted);
            font-size: 13px;
        }

        footer span {
            color: var(--blue);
        }

        /* RESPONSIVE */

        @media(max-width: 700px) {

            .nav-content {
                padding: 15px 0;
                align-items: flex-start;
                flex-direction: column;
            }

            .nav-links {
                gap: 14px;
            }

            .grid {
                grid-template-columns: 1fr;
            }

            .profile-card {
                grid-column: span 1;
                flex-direction: column;
                align-items: flex-start;
            }

            .hero {
                min-height: 520px;
            }

            .secondary {
                margin: 12px 0 0;
            }

            .data-row {
                flex-direction: column;
                gap: 2px;
            }

            .data-row span:last-child {
                text-align: left;
            }

            .projects-grid {
                grid-template-columns: 1fr;
            }

            .project-card {
                padding: 23px;
            }

            .project-description {
                min-height: auto;
            }
        }

    </style>
</head>

<body>

<!-- NAVBAR -->

<nav>
    <div class="container nav-content">

        <a href="#home" class="logo">OJI<span>.</span></a>

        <div class="nav-links">
            <a href="#home">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#projects">Projects</a>
            <a href="#journey">Journey</a>
            <a href="#hobbies">Hobbies</a>
            <a href="#goals">Goals</a>
        </div>

    </div>
</nav>


<!-- HERO -->

<header class="hero" id="home">
    <div class="container">

        <div class="hero-content">

            <div class="badge">
                ✦ PERSONAL PROFILE · STUDENT DEVELOPER
            </div>

            <h1>
                Hello, I'm<br>
                <span>{{ $profil['nama'] }}</span>
            </h1>

            <p>
                Hai! Kenalin, aku Oji. Seorang siswa RPL yang suka
                bertemu orang baru, aktif berorganisasi, menyukai
                dunia teknologi, dan selalu tertarik untuk mencoba
                hal-hal baru. Selamat datang di halaman kecil
                tentang perjalanan dan cerita hidupku!
            </p>

            <a href="#about" class="button">Kenali Aku ✦</a>
            <a href="#skills" class="button secondary">Explore My Skills</a>

        </div>

    </div>
</header>


<!-- ABOUT -->

<section id="about">
    <div class="container">

        <div class="section-heading">
            <small>01 / ABOUT ME</small>
            <h2>Get to Know Me.</h2>
            <p>Beberapa hal tentang siapa aku dan bagaimana kepribadianku.</p>
        </div>

        <div class="grid">

            <div class="card profile-card">

                <div class="sticker">🧑🏻‍💻</div>

                <div>
                    <h3>{{ $profil['panggilan'] }} — Student & Future Developer</h3>
                    <p>{{ $profil['deskripsi'] }}</p>
                </div>

            </div>

            <div class="card">

                <h3>✦ Personal Information</h3>

                @foreach($profil as $key => $value)
                    @if($key != 'deskripsi')
                        <div class="data-row">
                            <span>{{ ucwords(str_replace('_', ' ', $key)) }}</span>
                            <span>{{ $value }}</span>
                        </div>
                    @endif
                @endforeach

            </div>

            <div class="card">

                <h3>✦ My Personality</h3>

                @foreach($kepribadian as $key => $value)
                    <div class="data-row">
                        <span>{{ $key }}</span>
                        <span>{{ $value }}</span>
                    </div>
                @endforeach

            </div>

        </div>

    </div>
</section>


<!-- SKILLS -->

<section id="skills">
    <div class="container">

        <div class="section-heading">
            <small>02 / EDUCATION & SKILLS</small>
            <h2>My Learning Journey.</h2>
            <p>Belajar, mencoba, berkembang, dan terus meningkatkan kemampuan.</p>
        </div>

        <div class="grid">

            <div class="card">

                <h3>🎓 Education</h3>

                <div class="data-row">
                    <span>Sekolah</span>
                    <span>{{ $profil['sekolah'] }}</span>
                </div>

                <div class="data-row">
                    <span>Kelas</span>
                    <span>{{ $profil['kelas'] }}</span>
                </div>

                <div class="data-row">
                    <span>Jurusan</span>
                    <span>{{ $profil['jurusan'] }}</span>
                </div>

                <div class="data-row">
                    <span>Alasan</span>
                    <span>Mengikuti perkembangan zaman</span>
                </div>

            </div>

            <div class="card">

                <h3>💡 Favorite Subjects</h3>

                <div class="tags">
                    @foreach($pelajaran as $item)
                        <span class="tag">{{ $item }}</span>
                    @endforeach
                </div>

                <p style="margin-top:20px">
                    Aku tertarik dengan teknologi yang terus berkembang,
                    khususnya kecerdasan buatan dan pengembangan software.
                </p>

            </div>

            <div class="card" style="grid-column:span 2">

                <h3>💻 Technologies I'm Exploring</h3>

                <p>Berikut beberapa teknologi dan tools yang sedang aku pelajari:</p>

                <div class="tags">
                    @foreach($skills as $skill)
                        <span class="tag">{{ $skill }}</span>
                    @endforeach
                </div>

            </div>

        </div>

    </div>
</section>


<!-- SELECTED PROJECTS -->

<section id="projects">
    <div class="container">

        <div class="section-heading">
            <small>03 / SELECTED WORKS</small>
            <h2>Projects I've Explored.</h2>
            <p>
                A collection of projects where I turn ideas into practical
                experiences while continuously improving my skills.
            </p>
        </div>

        <div class="projects-grid">

            @foreach ($projects as $project)

                <article class="project-card">

                    <div class="project-top">

                        <span class="project-number">
                            {{ $project['number'] }}
                        </span>

                        <span class="project-status">
                            {{ $project['status'] }}
                        </span>

                    </div>

                    <span class="project-category">
                        {{ $project['category'] }}
                    </span>

                    <h3>{{ $project['name'] }}</h3>

                    <p class="project-description">
                        {{ $project['description'] }}
                    </p>

                    <div class="project-technologies">

                        @foreach ($project['technologies'] as $technology)
                            <span>{{ $technology }}</span>
                        @endforeach

                    </div>

                    <div class="project-footer">
                        <span>PERSONAL DEVELOPMENT</span>
                        <span>↗</span>
                    </div>

                </article>

            @endforeach

        </div>

    </div>
</section>


<!-- JOURNEY -->

<section id="journey">
    <div class="container">

        <div class="section-heading">
            <small>04 / EXPERIENCE</small>
            <h2>My Organization & Achievements.</h2>
            <p>Pengalaman yang membentuk diriku untuk menjadi lebih baik.</p>
        </div>

        <div class="grid">

            <div class="card">

                <h3>🤝 Organizations</h3>

                <div class="timeline">

                    @foreach($organisasi as $item)

                        <div class="timeline-item">
                            <h3>{{ $item }}</h3>
                            <p>Bagian dari pengalaman dan aktivitas organisasiku.</p>
                        </div>

                    @endforeach

                </div>

            </div>

            <div class="card">

                <h3>🏆 Achievements</h3>

                <div class="timeline">

                    @foreach($prestasi as $item)

                        <div class="timeline-item">
                            <h3>{{ $item }}</h3>
                            <p>Salah satu pencapaian yang pernah aku raih.</p>
                        </div>

                    @endforeach

                </div>

                <p style="margin-top:25px">
                    Bagiku, pengalaman memimpin, bekerja sama dengan tim,
                    dan mendapatkan prestasi merupakan bagian penting
                    dari proses berkembang.
                </p>

            </div>

        </div>

    </div>
</section>


<!-- HOBBIES -->

<section id="hobbies">
    <div class="container">

        <div class="section-heading">
            <small>05 / MY INTERESTS</small>
            <h2>Things I Enjoy.</h2>
            <p>Hal-hal sederhana yang membuat hari-hariku lebih berwarna.</p>
        </div>

        <div class="grid">

            <div class="card">

                <h3>🏀 My Hobbies</h3>

                <div class="tags">
                    @foreach($hobi as $item)
                        <span class="tag">{{ $item }}</span>
                    @endforeach
                </div>

                <p style="margin-top:20px">
                    Basket menjadi salah satu hobiku karena selain
                    membuat tubuh lebih bugar, aku juga bisa mendapatkan
                    teman dan pengalaman baru.
                </p>

            </div>

            <div class="card">

                <h3>🎧 Music I Like</h3>

                <div class="tags">
                    @foreach($musik as $item)
                        <span class="tag">{{ $item }}</span>
                    @endforeach
                </div>

                <p style="margin-top:20px">
                    Musik menjadi salah satu teman saat belajar,
                    beristirahat, atau mengisi waktu luang.
                </p>

            </div>

            <div class="card">

                <h3>⭐ My Favorites</h3>

                @foreach($favorit as $key => $value)

                    <div class="data-row">
                        <span>{{ $key }}</span>
                        <span>{{ $value }}</span>
                    </div>

                @endforeach

            </div>

            <div class="card">

                <h3>🌟 My Free Time</h3>

                <p>
                    Saat memiliki waktu luang, aku suka belajar,
                    bermain game, melakukan hobi, dan mendengarkan musik.
                    Aku juga senang menghabiskan waktu bersama teman-teman.
                </p>

            </div>

        </div>

    </div>
</section>


<!-- GOALS -->

<section id="goals">
    <div class="container">

        <div class="section-heading">
            <small>06 / MY FUTURE</small>
            <h2>Dream Big, Work Hard.</h2>
            <p>Aku punya banyak hal yang ingin dicapai di masa depan.</p>
        </div>

        <div class="card">

            <h3>🚀 My Future Goals</h3>

            <div class="timeline">

                @foreach($impian as $item)

                    <div class="timeline-item">
                        <h3>{{ $item }}</h3>
                        <p>Salah satu target yang ingin aku wujudkan.</p>
                    </div>

                @endforeach

            </div>

        </div>

    </div>
</section>


<!-- MOTIVATION -->

<section>
    <div class="container">

        <div class="quote">

            <div class="symbol">“</div>

            <h2>{{ $motivasi }}</h2>

            <p>MY PERSONAL MOTIVATION — OJI</p>

        </div>

    </div>
</section>


<!-- FOOTER -->

<footer>
    <div class="container">

        <p>
            Designed with passion by
            <span>Fauzi Fadhilah</span>
            © {{ date('Y') }}
        </p>

        <p>
            Keep Growing · Keep Learning · Keep Being Yourself.
        </p>

    </div>
</footer>

</body>
</html>
