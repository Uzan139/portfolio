<?php
/* =====================
   DATA PROFILE
===================== */
$profile = [
    "nama" => "Hilman",
    "role" => "Mahasiswa Rekayasa Perangkat Lunak",
    "univ" => "Universitas Pendidikan Indonesia (UPI)",
    "email" => "ahmadhilman19@upi.edu",
    "sosial" => [
        "github" => "https://github.com/jauh.disini",
        "linkedin" => "https://linkedin.com/in/username_kamu",
        "instagram" => "https://instagram.com/alhfizh_"
    ]
];

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $profile["nama"]; ?> | Portfolio</title>
    <meta name="description" content="Portfolio <?= $profile["nama"]; ?> - <?= $profile["role"]; ?> di <?= $profile["univ"]; ?>">
    <meta name="author" content="<?= $profile["nama"]; ?>">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- =====================
     HERO
===================== -->
<header class="hero-container">
    <div class="hero-content">
        <p class="subtitle">HALO, SAYA</p>
        <h1><?= $profile["nama"]; ?> <br><span class="highlight"><?= $profile["role"]; ?></span></h1>

        <p class="description">
            Saya adalah <?= $profile["role"]; ?> di <?= $profile["univ"]; ?> yang tertarik pada pengembangan web,
            quality assurance, dan software engineering.
        </p>

        <div class="cta-buttons">
            <a href="#projects" class="btn btn-primary">Lihat Proyek</a>
            <a href="https://mail.google.com/mail/?view=cm&to=<?= $profile["email"]; ?>"
                target="_blank"
                class="btn btn-outline">
            Hubungi Saya
            </a>
        </div>

        <nav class="social-links" aria-label="Social Media">
            <a href="<?= $profile["sosial"]["github"]; ?>" target="_blank" aria-label="GitHub">
                <i class="fa-brands fa-github"></i>
            </a>
            <a href="<?= $profile["sosial"]["linkedin"]; ?>" target="_blank" aria-label="LinkedIn">
                <i class="fa-brands fa-linkedin"></i>
            </a>
            <a href="<?= $profile["sosial"]["instagram"]; ?>" target="_blank" aria-label="Instagram">
            <i class="fa-brands fa-instagram"></i>
            </a>
        </nav>
    </div>

    <div class="hero-image">
        <img src="foto ozan.jpg" alt="Foto profil <?= $profile["nama"]; ?>" loading="lazy">
    </div>
</header>

<!-- =====================
     ABOUT ME
===================== -->
<section class="about-modern" id="about">
    <div class="container">

        <div class="about-heading">
            <span class="about-eyebrow">TENTANG SAYA</span>
            <h2>Fondasi Teknis yang Terintegrasi dengan Design Thinking</h2>
            <p>
                Saya menerapkan pendekatan rekayasa perangkat lunak yang menyeimbangkan
                ketelitian teknis dengan empati terhadap pengguna, guna menghasilkan solusi
                yang tidak hanya andal secara fungsional, tetapi juga dirancang secara
                sistematis dan berorientasi pada kebutuhan pengguna.
            </p>
        </div>

        <div class="about-cards">

            <div class="about-card">
                <a href="https://www.figma.com/design/1WkbnLv1kMASV2NCLmqqQz/TanEasy-New-Version?node-id=0-1&t=V2OIouCe26a8l3TV-1"
                   target="_blank"
                   rel="noopener"
                   class="card-link">

                    <div class="about-icon">🎨</div>
                    <h3>UI/UX Design</h3>
                    <p>
                        Perancangan antarmuka berpusat pada pengguna dengan pendekatan design thinking
                        yang sistematis serta penerapan pola desain yang telah tervalidasi.
                    </p>

                </a>
            </div>

            <div class="about-card">
                <a href="https://github.com/velocity-id/velocity-fe"
                   target="_blank"
                   rel="noopener"
                   class="card-link">

                    <div class="about-icon">&lt;/&gt;</div>
                    <h3>Frontend Development</h3>
                    <p>
                        Pengembangan kode yang bersih, terstruktur, dan mudah dipelihara
                        menggunakan React, TypeScript, serta teknologi web modern.
                    </p>

                </a>
            </div>

            <div class="about-card">
                <a href="https://drive.google.com/drive/folders/1M8jwhM_Qg8Sc_m5_oGTQXSzJKkbRFg_X?usp=sharing"
                   target="_blank"
                   rel="noopener"
                   class="card-link">

                    <div class="about-icon">✔</div>
                    <h3>QA/QC </h3>
                    <p>
                        Pendekatan berorientasi kualitas melalui pengujian sistematis,
                        analisis edge case, serta proses validasi yang terstruktur.
                    </p>

                </a>
            </div>

        </div>
    </div>
</section>



        <div class="about-education">
            <h3>Pendidikan dan Latar Belakang</h3>

            <ul>
                <li>
                    <strong>Status Saat Ini:</strong>
                    Mahasiswa Rekayasa Perangkat Lunak, Universitas Pendidikan Indonesia (UPI)
                </li>
                <li>
                    <strong>Bidang Fokus:</strong>
                    Frontend Development, UI/UX Design, Quality Assurance, dan Teknologi Web
                </li>
                <li>
                    <strong>Pendekatan Kerja:</strong>
                    Pemecahan masalah secara sistematis dengan penekanan pada kualitas kode,
                    konsistensi design system, serta implementasi yang realistis dan terukur
                </li>
            </ul>
        </div>

    </div>
</section>

<!-- =====================
     PROJECTS
===================== -->
<section class="project-section" id="projects">
    <div class="container">
        <div class="section-header">
            <p class="subtitle-centered">PORTOFOLIO</p>
            <h2>Proyek Terbaru</h2>
        </div>

        <div class="project-grid">

            <!-- Project Card 1 -->
            <article class="project-card-modern">
                <div class="project-media">
                    <video class="project-video" autoplay muted loop playsinline>
                        <source src="video_project_taneasy.mp4" type="video/mp4">
                        Browser Anda tidak mendukung video.
                    </video>
                    <span class="project-badge">Web App</span>
                </div>

                <div class="project-content">
                    <h3>Aplikasi Bercocok Tanam</h3>
                    <p>
                        Aplikasi web untuk belajar mengedukasi membantu ekonomi para petani berguna untuk para petani dalam ekosistem pada saat ini
                    </p>

                    <div class="project-tags">
                        <span>Next js</span>
                        <span>Machine Learning</span>
                        <span>UI/UX</span>
                        <span>Frontend</span>
                    </div>

                    <div class="project-actions">
                        <a href="https://www.figma.com/design/1WkbnLv1kMASV2NCLmqqQz/TanEasy-New-Version?t=ZvbHYBwWjxPrU7Kg-1"
                           target="_blank" rel="noopener">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            Lihat Proyek
                        </a>
                        <a href="https://github.com/taneasy-company"
                           target="_blank" rel="noopener">
                            <i class="fa-brands fa-github"></i>
                            Kode Sumber
                        </a>
                    </div>
                </div>
            </article>

            <!-- Project Card 2 -->
            <article class="project-card-modern">
                <div class="project-media">
                    <video class="project-video" autoplay muted loop playsinline>
                        <source src="video_project_velocity.mp4" type="video/mp4">
                        Browser Anda tidak mendukung video.
                    </video>
                    <span class="project-badge">Web App</span>
                </div>

                <div class="project-content">
                    <h3>Velocity Adlaunch</h3>
                    <p>
                        Aplikasi yang membantu advertising pada jaman sekarang 
                        digital marketing menampilkan performa iklan dapat berjalan seberapa menjakau luasnya
                    </p>

                    <div class="project-tags">
                        <span>Next.js</span>
                        <span>UI/UX</span>
                        <span>Metaads API</span>
                    </div>

                    <div class="project-actions">
                        <a href="#" target="_blank" rel="noopener">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            Lihat Proyek
                        </a>
                        <a href="#" target="_blank" rel="noopener">
                            <i class="fa-brands fa-github"></i>
                            Kode Sumber
                        </a>
                    </div>
                </div>
            </article>

            <!-- Project Card 3 -->
            <article class="project-card-modern">
                <div class="project-media">
                    <img src="QA QC.png" alt="Website Portfolio">
                    <span class="project-badge">Web App</span>
                </div>

                <div class="project-content">
                    <h3>Website Portfolio</h3>
                    <p>
                        Website portfolio personal untuk menampilkan profil, skill, dan proyek
                        dengan tampilan modern serta responsif.
                    </p>

                    <div class="project-tags">
                        <span>Integration Test</span>
                        <span>functional Test</span>
                        <span>Smoke Test</span>
                    </div>

                    <div class="project-actions">
                        <a href="#" target="_blank" rel="noopener">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i>
                            Lihat Proyek
                        </a>
                        <a href="#" target="_blank" rel="noopener">
                            <i class="fa-brands fa-github"></i>
                            Kode Sumber
                        </a>
                    </div>
                </div>
            </article>

        </div>
    </div>
</section>

</body>
</html>
