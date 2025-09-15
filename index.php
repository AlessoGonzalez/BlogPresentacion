<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tu Empresa de Software | Soluciones Innovadoras</title>
    <meta name="description" content="Somos un equipo de 5 expertos en desarrollo de software a medida. Innovamos, creamos y transformamos ideas en soluciones digitales.">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Estilos Personalizados -->
    <style>
        
/* Equipo */
.team-card img { 
    width: 100%;       /* Ocupa todo el ancho de la tarjeta */
    height: 500px;     /* Altura uniforme para todas las imágenes */
    object-fit: cover; /* Ajusta la imagen sin deformarla */
    transition: transform .3s; 
}
.team-card:hover img { 
    transform: scale(1.05); 
}

        body { font-family: 'Poppins', sans-serif; }

        /* Hero */
        .hero {
    height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
    position: relative;
    color: white;
    overflow: hidden;
    /*background: linear-gradient(135deg,#007bff,#00c6ff);*/
    background: linear-gradient(135deg, #0d573cff, #36be91ff); /* jade degradado */
        }
       .hero::before {
    content: '';
    position: absolute;
    top:0; left:0;
    width:100%; height:100%;
    background: rgba(0,0,0,0.3);
    z-index: 0;
}
        .hero .container { position: relative; z-index:1; }

        /* Equipo */
        .team-card img { transition: transform .3s; }
        .team-card:hover img { transform: scale(1.05); }

        /* Skills */
        .skill-bar { height: 20px; background-color: #e0e0e0; border-radius: 10px; margin-bottom: 10px; overflow: hidden; }
        .skill-fill { height: 100%; color: white; text-align: right; padding-right: 5px; line-height: 20px; border-radius: 10px; transition: width 1.5s ease-in-out; background-color:#007bff; }
    </style>
</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- Hero Section -->
<section class="hero d-flex align-items-center text-center" id="home">
    <div class="container" data-aos="fade-up">
        <h1 class="display-4 fw-bold mb-3">Transformamos Ideas en Software</h1>
        <p class="lead mb-4">Somos un equipo de 5 desarrolladores apasionados por crear soluciones tecnológicas que impulsan tu negocio.</p>
        <a href="#servicios" class="btn btn-light btn-lg px-5 py-3 me-3">Nuestros Servicios</a>
        <a href="#equipo" class="btn btn-outline-light btn-lg px-5 py-3">Conoce al Equipo</a>
    </div>
</section>
<!-- Sección Misión y Visión -->
<section class="py-5 bg-light" id="mision-vision">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Misión y Visión</h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="100">
                Conoce los valores que guían nuestro trabajo y la dirección hacia donde vamos.
            </p>
        </div>
        <div class="row g-4 justify-content-center">
            <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
                <div class="card h-100 border-0 shadow-sm p-4 bg-white">
                    <h4 class="fw-bold mb-3 text-primary">Misión</h4>
                    <p class="mb-0">
                        Desarrollar soluciones de software innovadoras y personalizadas que impulsen la transformación digital de empresas, optimizando procesos, mejorando la experiencia del usuario y generando valor tangible para nuestros clientes, con un equipo comprometido, creativo y en constante aprendizaje.
                    </p>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
                <div class="card h-100 border-0 shadow-sm p-4 bg-white">
                    <h4 class="fw-bold mb-3 text-success">Visión</h4>
                    <p class="mb-0">
                        Ser reconocidos como una empresa líder en desarrollo de software a medida en Ecuador y Latinoamérica, destacándonos por nuestra innovación, calidad y capacidad de ofrecer soluciones tecnológicas que transformen la manera en que las empresas operan y crecen.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Estilos adicionales para Misión y Visión -->
<style>
    #mision-vision h2 {
        color: #007bff; /* Azul brillante para el título */
    }
    #mision-vision .card:hover {
        transform: translateY(-10px);
        transition: all 0.3s ease-in-out;
    }
</style>

<!-- Sección Servicios -->
<section class="py-5 bg-light" id="servicios">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Nuestros Servicios</h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="100">Diseñamos, desarrollamos e implementamos soluciones a medida.</p>
        </div>
        <div class="row g-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 shadow-sm border-0 service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-code fa-3x text-primary mb-3"></i>
                        <h5 class="card-title">Desarrollo Web</h5>
                        <p class="card-text">Aplicaciones web modernas, rápidas y escalables con las últimas tecnologías.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 shadow-sm border-0 service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-mobile-alt fa-3x text-success mb-3"></i>
                        <h5 class="card-title">Apps Móviles</h5>
                        <p class="card-text">iOS y Android nativas o multiplataforma. UX/UI centrado en el usuario.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card h-100 shadow-sm border-0 service-card">
                    <div class="card-body text-center">
                        <i class="fas fa-cogs fa-3x text-info mb-3"></i>
                        <h5 class="card-title">Software a Medida</h5>
                        <p class="card-text">Soluciones empresariales personalizadas según tus necesidades específicas.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección Equipo -->
<!-- Sección Equipo -->
<section class="py-5" id="equipo">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Nuestro Equipo</h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="100">5 mentes brillantes, un solo objetivo: tu éxito digital.</p>
        </div>
        <div class="row g-4 justify-content-center">

            <!-- David L. -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card team-card border-0 shadow-sm text-center overflow-hidden">
                    <img src="images/david.jpeg" class="card-img-top team-img" alt="David L.">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">David L.</h5>
                        <p class="text-muted small">Frontend Developer</p>
                        <p class="card-text">Especialista en interfaces y experiencia de usuario.</p>
                        <div class="team-social mt-3">
                            <a href="https://www.linkedin.com/in/alessandro-gonz%C3%A1lez-91a80b2a1/" target="_blank" class="mx-2"><i class="fab fa-linkedin text-primary"></i></a>
                            <a href="https://github.com/davidl2002" target="_blank" class="mx-2"><i class="fab fa-github text-dark"></i></a>
                            <a href="https://www.instagram.com/davidlopez._2/" target="_blank" class="mx-2"><i class="fab fa-instagram text-danger"></i></a>
                            <a href="https://wa.me/593979049511?text=Hola%20David" target="_blank" class="mx-2"><i class="fab fa-whatsapp text-success"></i></a>
                        </div>
                        <div class="mt-3">
                            <div class="skill-bar" title="HTML/CSS"><div class="skill-fill" style="width:95%;"><i class="fab fa-html5"></i> HTML/CSS 95%</div></div>
                            <div class="skill-bar" title="JavaScript"><div class="skill-fill" style="width:85%;"><i class="fab fa-js"></i> JavaScript 85%</div></div>
                            <div class="skill-bar" title="React"><div class="skill-fill" style="width:75%;"><i class="fab fa-react"></i> React 75%</div></div>
                            <div class="skill-bar" title="Bootstrap"><div class="skill-fill" style="width:80%;"><i class="fab fa-bootstrap"></i> Bootstrap 80%</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Joe7 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card team-card border-0 shadow-sm text-center overflow-hidden">
                    <img src="images/joel.jpeg" class="card-img-top team-img" alt="Joe7">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Joe7</h5>
                        <p class="text-muted small">Backend Developer</p>
                        <p class="card-text">Arquitecto de sistemas robustos y escalables.</p>
                        <div class="team-social mt-3">
                            <a href="https://www.linkedin.com/in/alessandro-gonz%C3%A1lez-91a80b2a1/" target="_blank" class="mx-2"><i class="fab fa-linkedin text-primary"></i></a>
                            <a href="https://github.com/j0e7" target="_blank" class="mx-2"><i class="fab fa-github text-dark"></i></a>
                            <a href="https://www.instagram.com/j0e1.7/" target="_blank" class="mx-2"><i class="fab fa-instagram text-danger"></i></a>
                            <a href="https://wa.me/593986039419?text=Hola%20Joel" target="_blank" class="mx-2"><i class="fab fa-whatsapp text-success"></i></a>
                        </div>
                        <div class="mt-3">
                            <div class="skill-bar" title="PHP"><div class="skill-fill" style="width:90%;"><i class="fab fa-php"></i> PHP 90%</div></div>
                            <div class="skill-bar" title="Node.js"><div class="skill-fill" style="width:80%;"><i class="fab fa-node-js"></i> Node.js 80%</div></div>
                            <div class="skill-bar" title="MySQL"><div class="skill-fill" style="width:85%;"><i class="fas fa-database"></i> MySQL 85%</div></div>
                            <div class="skill-bar" title="Laravel"><div class="skill-fill" style="width:75%;"><i class="fas fa-cogs"></i> Laravel 75%</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jade2803 -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card team-card border-0 shadow-sm text-center overflow-hidden">
                    <img src="images/jade.jpeg" class="card-img-top team-img" alt="Jade2803">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Jade2803</h5>
                        <p class="text-muted small">Fullstack Developer</p>
                        <p class="card-text">Desarrollador completo con enfoque en soluciones integrales.</p>
                        <div class="team-social mt-3">
                            <a href="https://www.linkedin.com/in/alessandro-gonz%C3%A1lez-91a80b2a1/" target="_blank" class="mx-2"><i class="fab fa-linkedin text-primary"></i></a>
                            <a href="https://github.com/Jade2803" target="_blank" class="mx-2"><i class="fab fa-github text-dark"></i></a>
                            <a href="https://www.instagram.com/jadecita12r/" target="_blank" class="mx-2"><i class="fab fa-instagram text-danger"></i></a>
                            <a href="https://wa.me/593998030287?text=Hola%20Jade" target="_blank" class="mx-2"><i class="fab fa-whatsapp text-success"></i></a>
                        </div>
                        <div class="mt-3">
                            <div class="skill-bar" title="Angular"><div class="skill-fill" style="width:80%;"><i class="fab fa-angular"></i> Angular 80%</div></div>
                            <div class="skill-bar" title="React"><div class="skill-fill" style="width:70%;"><i class="fab fa-react"></i> React 70%</div></div>
                            <div class="skill-bar" title="Node.js"><div class="skill-fill" style="width:65%;"><i class="fab fa-node-js"></i> Node.js 65%</div></div>
                            <div class="skill-bar" title="MongoDB"><div class="skill-fill" style="width:60%;"><i class="fas fa-database"></i> MongoDB 60%</div></div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Christopher Paucar -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card team-card border-0 shadow-sm text-center overflow-hidden">
                    <img src="images/cris.jpeg" class="card-img-top team-img" alt="Christopher Paucar">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Christopher Paucar</h5>
                        <p class="text-muted small">Frontend Developer</p>
                        <p class="card-text">Creador de interfaces interactivas y modernas.</p>
                        <div class="team-social mt-3">
                            <a href="https://www.linkedin.com/in/alessandro-gonz%C3%A1lez-91a80b2a1/" target="_blank" class="mx-2"><i class="fab fa-linkedin text-primary"></i></a>
                            <a href="https://github.com/Christopherpaucar" target="_blank" class="mx-2"><i class="fab fa-github text-dark"></i></a>
                            <a href="https://www.instagram.com/cris_edu4r/" target="_blank" class="mx-2"><i class="fab fa-instagram text-danger"></i></a>
                            <a href="https://wa.me/593987964745?text=Hola%20Chris" target="_blank" class="mx-2"><i class="fab fa-whatsapp text-success"></i></a>
                        </div>
                        <div class="mt-3">
                            <div class="skill-bar" title="HTML/CSS"><div class="skill-fill" style="width:85%;"><i class="fab fa-html5"></i> HTML/CSS 85%</div></div>
                            <div class="skill-bar" title="Bootstrap"><div class="skill-fill" style="width:90%;"><i class="fab fa-bootstrap"></i> Bootstrap 90%</div></div>
                            <div class="skill-bar" title="Vue.js"><div class="skill-fill" style="width:60%;"><i class="fab fa-vuejs"></i> Vue.js 60%</div></div>
                            <div class="skill-bar" title="JavaScript"><div class="skill-fill" style="width:80%;"><i class="fab fa-js"></i> JavaScript 80%</div></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Alesso Gonzalez -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card team-card border-0 shadow-sm text-center overflow-hidden">
                    <img src="images/alesso.jpeg" class="card-img-top team-img" alt="Alesso Gonzalez">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Alesso Gonzalez</h5>
                        <p class="text-muted small">Backend Developer</p>
                        <p class="card-text">Desarrollador backend con experiencia en APIs y bases de datos.</p>
                        <div class="team-social mt-3">
                            <a href="https://www.linkedin.com/in/alessandro-gonz%C3%A1lez-91a80b2a1/" target="_blank" class="mx-2"><i class="fab fa-linkedin text-primary"></i></a>
                            <a href="https://github.com/AlessoGonzalez" target="_blank" class="mx-2"><i class="fab fa-github text-dark"></i></a>
                            <a href="https://www.instagram.com/alesso_hbk/" target="_blank" class="mx-2"><i class="fab fa-instagram text-danger"></i></a>
                            <a href="https://wa.me/593987140195?text=Hola%20quiero%20más%20información" target="_blank" class="mx-2"><i class="fab fa-whatsapp text-success"></i></a>
                        </div>
                        <div class="mt-3">
                            <div class="skill-bar" title="PHP"><div class="skill-fill" style="width:85%;"><i class="fab fa-php"></i> PHP 85%</div></div>
                            <div class="skill-bar" title="MySQL"><div class="skill-fill" style="width:80%;"><i class="fas fa-database"></i> MySQL 80%</div></div>
                            <div class="skill-bar" title="Laravel"><div class="skill-fill" style="width:75%;"><i class="fas fa-cogs"></i> Laravel 75%</div></div>
                            <div class="skill-bar" title="JavaScript"><div class="skill-fill" style="width:70%;"><i class="fab fa-js"></i> JavaScript 70%</div></div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>


<style>
/* Efecto hover: mostrar el icono del lenguaje grande */
.skill-bar {
    height: 25px;
    background-color: #e0e0e0;
    border-radius: 10px;
    margin-bottom: 10px;
    overflow: hidden;
    position: relative;
}
.skill-fill {
    height: 100%;
    color: white;
    text-align: right;
    padding-right: 10px;
    line-height: 25px;
    border-radius: 10px;
    transition: width 1.5s ease-in-out, transform 0.3s;
    background-color: #007bff;
    display: flex;
    align-items: center;
    justify-content: flex-end;
    gap: 5px;
}
.skill-fill i {
    opacity: 0;
    transition: opacity 0.3s, transform 0.3s;
}
.skill-fill:hover i {
    opacity: 1;
    transform: scale(1.5);
}
</style>


<!-- Sección Contacto -->
<section class="py-5 bg-dark text-white text-center" id="contacto">
    <div class="container">
        <h2 class="fw-bold mb-4" data-aos="fade-up">¿Listo para comenzar?</h2>
        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Hablemos sobre tu próximo proyecto.</p>
        <a href="contacto.php" class="btn btn-outline-light btn-lg px-5 py-3" data-aos="fade-up" data-aos-delay="200">
            Contáctanos por WhatsApp
        </a>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
</script>

</body>
</html>
