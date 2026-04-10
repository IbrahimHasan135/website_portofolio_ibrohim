<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Technopreneur Portfolio - V2</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Outfit', sans-serif;
      background-color: #f5f7fa;
      scroll-behavior: smooth;
    }
    nav {
      background-color: #fff;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
    }

    .text-head{
      color: #0856c8;
      font-size: 2.5rem;
    }


    .navbar-brand {
      font-weight: 700;
      color: #0d6efd;
    }
    .hero {
      height: 650px;
      display: flex;
      align-items: center;
      justify-content: space-between;
      text-align: left;
      color: white;
      background: linear-gradient(135deg, var(--bs-primary), #6c16ac);
      padding: 0 5%;
      position: relative
    }
    .hero-text {
      max-width: 50%;
      padding-top: 150px;
      padding-left: 50px;
    }
    .hero h1 {
      font-size: 3.5rem;
      font-weight: bold;
      animation: fadeInUp 1.5s ease-in-out;
    }
    .hero p {
      font-size: 1.3rem;
      animation: fadeInUp 2s ease-in-out;
    }
    .custom-btn{
      font-weight: bold;
      color: #0856c8;
      animation: fadeInUp 2.5s ease-in-out;
    }

    .hero-img {
      width: 50%;
      height: 100%;
      display: flex;
      align-items: flex-end; /* Tempatkan gambar di bagian bawah */
      justify-content: center;
    }
    .hero-img img {
      max-width: 100%;
      height: auto;
      border-radius: 20px;
      box-shadow: none; /* Hilangkan bayangan */
      position: relative;
      z-index: 2;
    }

    .hero-pattern {
      position: absolute;
      z-index: 0;
    }

    .hero-pattern img {
      width: 380px; /* atau sesuai ukuran pattern kamu */
      height: auto;
    }

    .c1 {
      top: 0;
      left: 0;
    }

    .c2 {
      bottom: 0;
      right: 0;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(50px);
      }
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .skills-p{
      margin-bottom : 0;
      margin-top : 0.5rem;
    }

    .section {
      padding: 6rem 0;
    }
    .section-alt {
      background-color: white;
    }
    .section-gradient {
      background: linear-gradient(135deg, var(--bs-primary), #6c16ac);
      color: white;
    }
    .card-custom {
      background-color: white;
      border: none;
      border-radius: 16px;
      box-shadow: 0 10px 20px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
    }
    .card-custom:hover {
      transform: translateY(-10px);
    }

    .carousel-item {
      min-height: 170px; /* Tetap tinggi walau card sedikit */
      padding : 10px;
    }

    /* Geser tombol ke samping */
    .carousel-control-prev,
    .carousel-control-next {
      width: 5%;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
      background-size: 100% 100%;
    }

    .section-projects-bg {
      position: relative;
      z-index: 1;
      overflow: hidden;
    }

    .section-projects-bg::before {
      content: "";
      position: absolute;
      top: 0; left: 0; right: 0; bottom: 0;
      background-image: url('bg.png'); /* Ganti dengan gambar background */
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      opacity: 0.1;
      z-index: 0;
    }


    @media (min-width: 768px) {
      .carousel-control-prev {
        left: -40px;
      }

      .carousel-control-next {
        right: -40px;
      }
    }

    footer {
      background: #2c2c54;
      color: white;
      text-align: center;
      padding: 2rem 0;
    }

    .img-wrapper {
      position: relative;
      display: inline-block;
    }

    .rounded-custom {
      border-radius: 20px;
      position: relative;
      z-index: 2;
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">Ibrohim Hasan</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <header class="hero">
    <div class="hero-text">
      <h1>Innovating the Future with Technology</h1>
      <br>
      <p>Building innovative technology-driven solutions through the synergy of creativity, engineering, and intelligent systems — from design to control systems.</p>
      <a href="#projects" class="btn btn-light mt-3 rounded-pill px-5 custom-btn">My Project</a>
    </div>
    <div class="hero-img">
      <img src="profile.png" alt="Your Photo" />
    </div>
    <div class="hero-pattern c1">
      <img src="c1.png" alt="Circuit Pattern" />
    </div>
    <div class="hero-pattern c2">
      <img src="c2.png" alt="Circuit Pattern" />
    </div>
  </header>

  <!-- SOSIAL MEDIA - Horizontal -->
<div class="d-flex justify-content-center flex-wrap py-4 bg-white border-bottom">
  <a href="https://www.instagram.com/ibrohim_hsn.135/" target="_blank" class="mx-3 text-primary fs-3"><i class="bi bi-instagram"></i></a>
  <a href="https://www.linkedin.com/in/ibrohim-hasan-46212b25a/" target="_blank" class="mx-3 text-primary fs-3"><i class="bi bi-linkedin"></i></a>
  <a href="https://github.com/IbrahimHasan135" target="_blank" class="mx-3 text-primary fs-3"><i class="bi bi-github"></i></a>
  <a href="https://wa.me/6281806124037" target="_blank" class="mx-3 text-primary fs-3"><i class="bi bi-whatsapp"></i></a>
  <a href="https://www.freepik.com/author/ibrahimhasan" target="_blank" class="mx-3">
    <img src="https://cdn.worldvectorlogo.com/logos/freepik.svg" width="35" alt="Freepik">
  </a>
  <a href="https://www.logoground.com/designer.php?did=200165" target="_blank" class="mx-3">
    <img src="https://www.logoground.com/img2021/lg-logo.png" width="35" alt="Logoground"
         style="filter: brightness(0) saturate(100%) invert(28%) sepia(91%) saturate(745%) hue-rotate(180deg);">
  </a>
</div>

<!-- ABOUT ME -->
<section id="about" class="py-5 bg-light">
  <div class="container">
    <div class="row align-items-center">
      <!-- Gambar kiri -->
      <div class="col-md-4 text-center mb-4 mb-md-0">
        <div class="img-wrapper position-relative d-inline-block">
          <img src="aboutme.jpg" alt="Your Photo" class="img-fluid rounded-custom position-relative">
        </div>
      </div>
      <!-- Teks kanan -->
      <div class="col-md-8 px-5">
        <h2 class="fw-bold text-head mb-3">About Me</h2>
        <p class="lead">
          I am a technopreneur who blends creativity, innovation, and technology to deliver real-world solutions. With a strong background in mechatronics, embedded systems, full stack, and the Internet of Things (IoT), I specialize in developing intelligent, efficient, and impactful solutions.
        </p>
        <a href="Ibrahim Hasan.pdf" class="btn btn-primary mt-3" download>
          Download CV
        </a>
      </div>
    </div>
  </div>
</section>

<!-- SKILLS -->
<section id="skills" class="py-5">
  <div class="container text-center">
    <h2 class="fw-bold text-head mb-4">Skills</h2>
    <div class="row justify-content-center">
      <div class="col-6 col-md-2 mb-4">
        <i class="bi bi-cpu-fill display-4 text-primary"></i>
        <h6 class="mt-2">Mechatronic & IoT</h6>
      </div>
      <div class="col-6 col-md-2 mb-4">
        <i class="bi bi-motherboard-fill display-4 text-primary"></i>
        <h6 class="mt-2">Embedded System</h6>
      </div>
      <div class="col-6 col-md-2 mb-4">
        <i class="bi bi-code-slash display-4 text-primary"></i>
        <h6 class="mt-2">Web & Software</h6>
      </div>
      <div class="col-6 col-md-2 mb-4">
        <i class="bi bi-box-fill display-4 text-primary"></i>
        <h6 class="mt-2">3D Modeling</h6>
      </div>
      <div class="col-6 col-md-2 mb-4">
        <i class="bi bi-brush-fill display-4 text-primary"></i>
        <h6 class="mt-2">Graphic Design</h6>
      </div>
    </div>
  </div>
</section>

<!-- TOOLS -->
<section id="tools" class="py-5 bg-light">
  <div class="container text-center">
    <h2 class="fw-bold text-head mb-4">Tools</h2>
    <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-3">
      <div><span class="badge bg-primary p-3 w-100">MATLAB & SIMULINK</span></div>
      <div><span class="badge bg-primary p-3 w-100">Arduino</span></div>
      <div><span class="badge bg-primary p-3 w-100">ESP32 & ESP8266</span></div>
      <div><span class="badge bg-primary p-3 w-100">Sensor & Actuator</span></div>
      <div><span class="badge bg-primary p-3 w-100">Proteus</span></div>
      <div><span class="badge bg-primary p-3 w-100">Excel & Word</span></div>
      <div><span class="badge bg-primary p-3 w-100">TensorFlow</span></div>
      <div><span class="badge bg-primary p-3 w-100">Numpy</span></div>
      <div><span class="badge bg-primary p-3 w-100">Pandas</span></div>
      <div><span class="badge bg-primary p-3 w-100">Laravel</span></div>
      <div><span class="badge bg-primary p-3 w-100">Firebase</span></div>
      <div><span class="badge bg-primary p-3 w-100">CAD & Inventor</span></div>
      <div><span class="badge bg-primary p-3 w-100">Blender 3D</span></div>
      <div><span class="badge bg-primary p-3 w-100">Photoshop & AI</span></div>
      <div><span class="badge bg-primary p-3 w-100">Capcut</span></div>
      <div><span class="badge bg-primary p-3 w-100">Davinci Resolve</span></div>
      <div><span class="badge bg-primary p-3 w-100">3D OpenGL</span></div>
      <div><span class="badge bg-primary p-3 w-100">Forsk Atoll</span></div>
    </div>
  </div>
</section>


<section id="projects" class="section section-gradient section-projects-bg">
  <div class="container position-relative" style="z-index: 2;">
    <h2 class="text-center mb-5 fw-bold">Projects</h2>

    <div id="projectCarousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row g-4 justify-content-center">
            <!-- Project 1 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=Web" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">Web CEI 2023</h5>
                <div><span class="badge bg-primary">Website Designer</span></div>
              </div>
            </div>
            <!-- Project 2 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=IoT" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">Smart Irrigation</h5>
                <div>
                  <span class="badge bg-primary">IoT</span>
                  <span class="badge bg-primary">Embedded System</span>
                  <span class="badge bg-primary">Web Programming</span>
                </div>
              </div>
            </div>
            <!-- Project 3 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=3D" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">Automatic Farming </h5>
                <div>
                  <span class="badge bg-primary">Mechanical</span>
                  <span class="badge bg-primary">3D Modeling</span>
                  <span class="badge bg-primary">Assembly</span>
                  <span class="badge bg-primary">Electrical</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <!-- Project 4 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=GH" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">Greenhouse (Sunflower)</h5>
                <div>
                  <span class="badge bg-primary">3D Modeling</span>
                  <span class="badge bg-primary">Assembly</span>
                </div>
              </div>
            </div>
            <!-- Project 5 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=Health" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">Health Monitor</h5>
                <div>
                  <span class="badge bg-primary">Software Developer</span>
                  <span class="badge bg-primary">IoT</span>
                  <span class="badge bg-primary">Embedded System</span>
                </div>
              </div>
            </div>
            <!-- Project 6 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=Ezpark" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">EzPark</h5>
                <div>
                  <span class="badge bg-primary">Image Processing</span>
                  <span class="badge bg-primary">IoT</span>
                  <span class="badge bg-primary">Embedded System</span>
                  <span class="badge bg-primary">Software Developer</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <!-- Project 7 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=BTS" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">IoT Oscilloscope for Heart Rate</h5>
                <div>
                  <span class="badge bg-primary">IoT</span>
                  <span class="badge bg-primary">Software Developer</span>
                  <span class="badge bg-primary">Microcontroller</span>
                </div>
              </div>
            </div>
            <!-- Project 8 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=Rakaat Counter" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">Smart Rakaat Counter</h5>
                <div>
                  <span class="badge bg-primary">Embedded System</span>
                  <span class="badge bg-primary">3D Modeling</span>
                  <span class="badge bg-primary">Sensor Calibration</span>
                </div>
              </div>
            </div>
            <!-- Project 9 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=BTS" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">Planning BTS with Atoll</h5>
                <div>
                  <span class="badge bg-primary">Coverage Optimization</span>
                  <span class="badge bg-primary">Atoll Software</span>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item">
          <div class="row g-4 justify-content-center">
            <!-- Project 10 -->
            <div class="col-md-4">
              <div class="card card-custom p-4 h-100 text-center shadow-sm">
                <img src="https://via.placeholder.com/80x80.png?text=BTS" class="mx-auto mb-3" width="80">
                <h5 class="fw-bold mb-2">Smart Chick Coop</h5>
                <div>
                  <span class="badge bg-primary">Microcontroller</span>
                  <span class="badge bg-primary">System Control</span>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

      <!-- Carousel controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#projectCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#projectCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>

  <br>

  <div class="container position-relative" style="z-index: 2;">
    <h2 class="text-center mb-5 fw-bold">Product</h2>
    <div class="row g-4 justify-content-center">
      <div class="col-md-4">
        <div class="card card-custom p-4">
          <h5 class="fw-bold text-center">Coming Soon</h5>
          <p class="text-center">Not yet available</p>
        </div>
      </div>
    </div>
  </div>
</section>


  <section id="contact" class="section section-alt py-5">
    <div class="container">
      <h2 class="text-center fw-bold text-head mb-4">Contact</h2>
      <form class="row g-3 justify-content-center" action="https://formspree.io/f/xzzgeeyk" method="POST">
        <div class="col-md-6">
          <input type="text" class="form-control" name="name" placeholder="Your Name" required />
        </div>
        <div class="col-md-6">
          <input type="email" class="form-control" name="email" placeholder="Your Email" required />
        </div>
        <div class="col-12">
          <textarea class="form-control" name="message" rows="4" placeholder="Your Message" required></textarea>
        </div>
        <div class="col-12 text-center">
          <button type="submit" class="btn btn-primary px-5">Send</button>
        </div>
      </form>
    </div>
  </section>


  <footer>
    <p>&copy; 2025 Technopreneur Portfolio. Built with passion and purpose.</p>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const myCarousel = document.querySelector('#projectCarousel');
    const carousel = new bootstrap.Carousel(myCarousel, {
      interval: 5000,
      ride: 'carousel',
      pause: 'hover',
      wrap: true
    });
  });
</script>


</body>
</html>
