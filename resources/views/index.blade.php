<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Personal website dan portfolio."
    >

    @vite('resources/js/app.js')

    <title>InComing Page | Kazoosane</title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    html {
        scroll-behavior: smooth;
    }
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #070b14;
        color: #e5e7eb;
        line-height: 1.6;
    }
    a {
        color: inherit;
        text-decoration: none;
    }
    .container {
        width: min(1100px, 90%);
        margin-inline: auto;
    }
    /* --- NAVBAR --- */
    .navbar {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: rgba(7, 11, 20, 0.85);
        backdrop-filter: blur(12px);
        border-bottom: 1px solid #172033;
        z-index: 100;
    }
    .nav-content {
        height: 70px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .logo {
        font-size: 1.5rem;
        font-weight: 800;
    }
    .logo span {
        color: #3b82f6;
    }
    nav {
        display: flex;
        gap: 28px;
    }
    nav a {
        color: #9ca3af;
        font-size: 0.9rem;

        transition: 0.3s;
    }
    nav a:hover {
        color: #60a5fa;
    }
    /* --- HERO --- */
    .hero {
        min-height: 100vh;
        display: flex;
        align-items: center;
        padding-top: 70px;
        /*background:
            radial-gradient(
                circle at 80% 40%,
                rgba(37, 99, 235, 0.15),
                transparent 35%
            );
        */
        background: #090f1c;
    }
    .hero-content {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 70px;
        align-items: center;
    }
    .subtitle {
        color: #60a5fa;
        font-size: 0.8rem;
        font-weight: 700;
        letter-spacing: 3px;
        margin-bottom: 12px;
    }
    .hero h1 {
        font-size: clamp(3rem, 7vw, 5.5rem);
        line-height: 1;
        margin-bottom: 25px;
    }
    .hero h1 span {
        display: block;
        color: #3b82f6;
    }
    .description {
        max-width: 550px;
        color: #9ca3af;
        font-size: 1.05rem;
    }
    .hero-buttons {
        display: flex;
        gap: 15px;
        margin-top: 35px;
    }
    /* --- BUTTON --- */
    .btn {
        display: inline-block;

        padding: 8px 22px;

        border-radius: 8px;

        font-size: 0.9rem;
        font-weight: 600;

        transition: 0.3s;
    }
    .primary {
        background: #2563eb;
        color: white;
    }
    .primary:hover {
        background: #1d4ed8;
        transform: translateY(-2px);
    }
    .secondary {
        border: 1px solid #26344d;
        color: #d1d5db;
    }
    .secondary:hover {
        border-color: #3b82f6;
        color: #60a5fa;
    }
    /* --- CODE CARD --- */
    .hero-card {
        display: flex;
        justify-content: center;
    }
    .code-window {
        width: 100%;
        max-width: 500px;
        background: #0d1321;
        border: 1px solid #1d293d;
        border-radius: 14px;
        box-shadow: 0 25px 80px rgba(0, 0, 0, 0.4);
        overflow: hidden;
    }
    .window-header {
        height: 40px;
        display: flex;
        align-items: center;
        gap: 7px;
        padding: 0 15px;
        border-bottom: 1px solid #1d293d;
    }
    .window-header span {
        width: 10px;
        height: 10px;
        border-radius: 50%;
        background: #334155;
    }
    pre {
        padding: 30px;
        overflow-x: auto;
        color: #cbd5e1;
        font-size: 0.9rem;
    }
    .purple {
        color: #a78bfa;
    }
    .green {
        color: #4ade80;
    }
    /* --- SECTION --- */
    .section {
        padding: 120px 0;
    }
    .section-title {
        margin-bottom: 55px;
    }
    .section-title p {
        color: #3b82f6;
        font-size: 0.75rem;
        font-weight: bold;
        letter-spacing: 3px;
    }
    .section-title h2 {
        font-size: 2.4rem;
        margin-top: 8px;
    }
    /* --- ABOUT --- */
    .about-grid {
        display: grid;
        grid-template-columns: 1.2fr 0.8fr;
        gap: 80px;
    }
    .about-text h3 {
        font-size: 1.6rem;
        margin-bottom: 20px;
    }
    .about-text p {
        color: #9ca3af;
        margin-bottom: 15px;
    }
    .about-info {
        display: flex;
        flex-direction: column;
        gap: 15px;
    }
    .info-card {
        display: flex;
        align-items: center;
        gap: 15px;
        padding: 20px;
        background: #0d1321;
        border: 1px solid #1d293d;
        border-radius: 10px;
    }
    .info-card > span {
        font-size: 1.5rem;
    }
    .info-card small {
        display: block;
        color: #64748b;
    }
    .info-card strong {
        color: #e5e7eb;
    }
    /* --- SKILS --- */
    .skills-section {
        background: #090f1c;
    }
    .skills {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 30px 60px;
    }
    .skill-top {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        font-size: 0.9rem;
    }
    .skill-top span:last-child {
        color: #60a5fa;
    }
    .progress {
        height: 6px;
        background: #172033;
        border-radius: 10px;
        overflow: hidden;
    }
    .progress span {
        display: block;
        height: 100%;
        background: #2563eb;
        border-radius: inherit;
    }
    /* --- PROJECTS --- */
    .projects {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    .project-card {
        display: flex;
        flex-direction: column;
        padding: 25px;
        min-height: 350px;
        background: #0d1321;
        border: 1px solid #1d293d;
        border-radius: 12px;
        transition: 0.3s;
    }
    .project-card--disabled {
        cursor: default;
        a {
            pointer-events: none;
        }
        &:hover {
            transform: none;
            border-color: #1d293d;
        }
    }
    .project-card--overlay {
        position: relative;
        &::after {
            display: flex;
            justify-content: center;
            align-items: center;
            background: rgba(7, 11, 20, 0.75);
            backdrop-filter: blur(3px);
            border-radius: 12px;
            width: 100%;
            height: 100%;
            content: "Coming Soon";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #60a5fa;
            font-size: 1.2rem;
            font-weight: bold;
        }
    }
    .project-card:hover {
        transform: translateY(-7px);
        border-color: #2563eb;
    }
    .project-icon {
        font-size: 2rem;
        margin-bottom: 25px;
    }
    .project-type {
        color: #60a5fa;
        font-size: 0.7rem;
        font-weight: bold;
        letter-spacing: 2px;
    }
    .project-content h3 {
        font-size: 1.3rem;
        margin: 7px 0 10px;
    }
    .project-content p:not(.project-type) {
        color: #9ca3af;
        font-size: 0.9rem;
    }
    .tags {
        display: flex;
        flex-wrap: wrap;
        gap: 7px;
        margin-top: 20px;
    }
    .tags span {
        padding: 5px 9px;
        background: #111c31;
        color: #93c5fd;
        border-radius: 5px;
        font-size: 0.7rem;
    }
    .project-link {
        margin-top: auto;
        color: #60a5fa;
        font-size: 0.85rem;
    }
    /* --- CONTACT --- */
    .contact-section {
        padding-top: 40px;
    }
    .contact-box {
        display: flex;
        align-items: center;
        justify-content: space-between;
        gap: 30px;
        padding: 50px;
        background:
            linear-gradient(
                135deg,
                #0d1b35,
                #0b1220
            );
        border: 1px solid #1d3a68;
        border-radius: 15px;
    }
    .contact-box h2 {
        max-width: 600px;
        font-size: 2.3rem;
        line-height: 1.2;
        margin-bottom: 10px;
    }
    .contact-box p:last-child {
        color: #9ca3af;
    }
    /* --- FOOTER --- */
    footer {
        border-top: 1px solid #172033;
    }
    .footer-content {
        min-height: 80px;
        display: flex;
        align-items: center;
        justify-content: space-between;
        color: #64748b;
        font-size: 0.8rem;
    }
    .footer-content div {
        display: flex;
        gap: 20px;
    }
    .footer-content a:hover {
        color: #60a5fa;
    }
    /* --- RESPONSIVE --- */
    @media (max-width: 850px) {
        nav {
            display: none;
        }
        .hero-content {
            grid-template-columns: 1fr;
            gap: 50px;

            padding: 80px 0;
        }
        .hero {
            min-height: auto;
        }
        .about-grid {
            grid-template-columns: 1fr;
            gap: 40px;
        }
        .projects {
            grid-template-columns: 1fr 1fr;
        }
    }
    @media (max-width: 600px) {
        .section {
            padding: 80px 0;
        }
        .hero h1 {
            font-size: 3.5rem;
        }
        .hero-buttons {
            flex-direction: column;
        }
        .btn {
            text-align: center;
        }
        .skills {
            grid-template-columns: 1fr;
        }
        .projects {
            grid-template-columns: 1fr;
        }
        .contact-box {
            flex-direction: column;
            align-items: flex-start;

            padding: 30px;
        }
        .contact-box h2 {
            font-size: 1.8rem;
        }
        .footer-content {
            flex-direction: column;
            justify-content: center;
            gap: 10px;
            padding: 20px 0;
        }

    }
    </style>
</head>

<body>

    <!-- Navbar -->
    <header class="navbar">
        <div class="container nav-content">

            <a href="{{ url('/incoming') }}" class="logo">
                Kazoosane<span>Web</span>
            </a>

            <nav>
                <a href="#home">Rumah</a>
                <a href="#about">Tentang</a>
                <a href="#skills">Kemampuan</a>
                <a href="#projects">Portfolio</a>
                <a href="#contact">Kontak</a>
            </nav>

        </div>
    </header>


    <main>

        <!-- Hero -->
        <section id="home" class="hero">
            <div class="container hero-content">

                <div class="hero-text">
                    <p class="subtitle">Halo, nama saya</p>

                    <h1>
                        Hadi
                        <span>Sumanjaya.</span>
                    </h1>

                    <p class="description">
                        Pelajar dan web developer yang sedang belajar
                        membangun aplikasi berbasis web, khususnya di bidang backend.
                    </p>

                    <div class="hero-buttons">
                        <a href="#projects" class="btn primary">
                            Lihat Project
                        </a>

                        <a href="#contact" class="btn secondary">
                            Hubungi Saya
                        </a>
                    </div>
                </div>

                <div class="hero-card">
                    <div class="code-window">

                        <div class="window-header">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <pre><code id="code-animation"> </code></pre>

                    </div>
                </div>

            </div>
        </section>


        <!-- About -->
        <section id="about" class="section">
            <div class="container">

                <div class="section-title">
                    <p>ABOUT ME</p>
                    <h2>Tentang Saya</h2>
                </div>

                <div class="about-grid">

                    <div class="about-text">

                        <p>
                            Saya adalah seorang pelajar yang tertarik
                            dengan dunia pemrograman dan pengembangan apilkasi berbasis web.
                        </p>

                        <p>
                            Saat ini saya fokus mempelajari backend,
                            database, REST API, PHP, dan Laravel.
                        </p>

                        <p>
                            Saya suka membuat project untuk meningkatkan
                            kemampuan dan memahami bagaimana sebuah web atau aplikasi bekerja.
                        </p>
                    </div>

                    <div class="about-info">

                        <div class="info-card">
                            <span>🎓</span>
                            <div>
                                <small>Status</small>
                                <strong>Pelajar</strong>
                            </div>
                        </div>

                        <div class="info-card">
                            <span>💻</span>
                            <div>
                                <small>Focus</small>
                                <strong>Backend Development</strong>
                            </div>
                        </div>

                        <div class="info-card">
                            <span>🚀</span>
                            <div>
                                <small>Goal</small>
                                <strong>Full-Stack Developer</strong>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </section>


        <!-- Skills -->
        <section id="skills" class="section skills-section">
            <div class="container">

                <div class="section-title">
                    <p>MY SKILLS</p>
                    <h2>Teknologi yang Dipelajari</h2>
                </div>

                <div class="skills">

                    <div class="skill">
                        <div class="skill-top">
                            <span>HTML</span>
                            <span>90%</span>
                        </div>
                        <div class="progress">
                            <span style="width: 90%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-top">
                            <span>CSS</span>
                            <span>80%</span>
                        </div>
                        <div class="progress">
                            <span style="width: 80%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-top">
                            <span>PHP</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <span style="width: 75%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-top">
                            <span>Laravel</span>
                            <span>70%</span>
                        </div>
                        <div class="progress">
                            <span style="width: 70%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-top">
                            <span>MySQL</span>
                            <span>75%</span>
                        </div>
                        <div class="progress">
                            <span style="width: 75%"></span>
                        </div>
                    </div>

                    <div class="skill">
                        <div class="skill-top">
                            <span>REST API</span>
                            <span>65%</span>
                        </div>
                        <div class="progress">
                            <span style="width: 65%"></span>
                        </div>
                    </div>

                </div>

            </div>
        </section>


        <!-- Projects -->
        <section id="projects" class="section">
            <div class="container">

                <div class="section-title">
                    <p>MY WORK</p>
                    <h2>Project Saya</h2>
                </div>

                <div class="projects">

                    <article class="project-card">

                        <div class="project-content">
                            <p class="project-type">
                                WEB APPLICATION
                            </p>

                            <h3>Personal Web</h3>

                            <p>
                                Aplikasi untuk menampilkan informasi tentang diri saya, project, skill, dan kontak.
                            </p>

                            <div class="tags">
                                <span>Laravel</span>
                                <span>PHP</span>
                                <span>JavaScript</span>
                                <span>CSS</span>
                            </div>
                        </div>

                        <a href="{{ url('https://kazoosane-web.vercel.app') }}" class="project-link" target="_blank">
                            Lihat Project →
                        </a>
                    </article>


                    <article class="project-card project-card--disabled project-card--overlay">
                        <div class="project-icon">🔐</div>

                        <div class="project-content">
                            <p class="project-type">
                                REST API
                            </p>

                            <h3>Authentication API</h3>

                            <p>
                                REST API dengan sistem autentikasi,
                                login, register, dan authorization.
                            </p>

                            <div class="tags">
                                <span>PHP</span>
                                <span>REST API</span>
                                <span>JWT</span>
                            </div>
                        </div>

                        <a href="#" class="project-link">
                            Lihat Project →
                        </a>
                    </article>


                    <article class="project-card project-card--disabled project-card--overlay">
                        <div class="project-icon">💰</div>

                        <div class="project-content">
                            <p class="project-type">
                                KATEGORI
                            </p>

                            <h3>App Name</h3>

                            <p>
                                Deskripsi project
                            </p>

                            <div class="tags">
                                <span>tag</span>
                                <span>tag</span>
                                <span>tag</span>
                            </div>
                        </div>

                        <a href="#" class="project-link">
                            Lihat Project →
                        </a>
                    </article>

                    <article class="project-card project-card--disabled project-card--overlay">
                        <div class="project-icon">💰</div>

                        <div class="project-content">
                            <p class="project-type">
                                KATEGORI
                            </p>

                            <h3>App Name</h3>

                            <p>
                                Deskripsi project
                            </p>

                            <div class="tags">
                                <span>tag</span>
                                <span>tag</span>
                                <span>tag</span>
                            </div>
                        </div>

                        <a href="#" class="project-link">
                            Lihat Project →
                        </a>
                    </article>

                </div>

            </div>
        </section>


        <!-- Contact -->
        <section id="contact" class="section contact-section">
            <div class="container">

                <div class="contact-box">

                    <div>
                        <p class="subtitle">LET'S CONNECT</p>

                        <h2>
                            Kontak Saya
                        </h2>

                        <p>
                            Jangan ragu untuk menghubungi saya.
                        </p>
                    </div>

                    <a href="mailto:hadisumanjaya282@gmail.com" class="btn primary">
                        Email Saya
                    </a>

                </div>

            </div>
        </section>

    </main>
    <x-footer />
</body>
</html>