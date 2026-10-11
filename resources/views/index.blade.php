<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta
        name="description"
        content="Personal website dan portfolio Hadi Sumanjaya."
    >

    @vite('resources/js/app.js')
    @vite('resources/css/style.css')

    <title>Beranda | KazoosaneWeb</title>
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