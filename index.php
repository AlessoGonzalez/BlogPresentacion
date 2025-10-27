<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TECH-INDUSTRIES | Soluciones Innovadoras</title>
    <meta name="description" content="Somos un equipo de 5 expertos en desarrollo de software a medida. Innovamos, creamos y transformamos ideas en soluciones digitales.">

    <!-- Favicon -->
    <link rel="icon" type="image/svg+xml" href="images/logo1.png">
    <link rel="shortcut icon" type="image/svg+xml" href="images/logo1.png">

    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- AOS Animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

    <!-- Estilos Personalizados -->
    <link rel="stylesheet" href="assets/css/index.css">
</head>
<body>

<?php include 'includes/header.php'; ?>

<!-- Hero Section MEJORADO -->
<section class="hero-modern" id="home">
    <div class="hero-background">
        <div class="gradient-overlay"></div>
        <div class="animated-shapes">
            <div class="shape shape-1"></div>
            <div class="shape shape-2"></div>
            <div class="shape shape-3"></div>
            <div class="shape shape-4"></div>
        </div>
    </div>
    
    <div class="container hero-content">
        <div class="row align-items-center min-vh-100">
            <div class="col-lg-7" data-aos="fade-right">
                <div class="hero-badge mb-3">
                    <i class="fas fa-rocket me-2"></i>
                    <span>Innovación Digital</span>
                </div>
                <h1 class="hero-title">
                    Transformamos 
                    <span class="gradient-text">Ideas</span> en 
                    <span class="gradient-text">Software</span>
                </h1>
                <p class="hero-subtitle">
                    Somos un equipo de 5 desarrolladores élite apasionados por crear soluciones tecnológicas que impulsan tu negocio hacia el futuro digital.
                </p>
                <div class="hero-buttons">
                    <a href="#servicios" class="btn-primary-custom">
                        <span>Nuestros Servicios</span>
                        <i class="fas fa-arrow-right ms-2"></i>
                    </a>
                    <a href="#equipo" class="btn-secondary-custom">
                        <i class="fas fa-users me-2"></i>
                        <span>Conoce al Equipo</span>
                    </a>
                </div>
                
                <!-- Stats -->
                <div class="hero-stats mt-5">
                    <div class="stat-item">
                        <h3 class="stat-number">15+</h3>
                        <p class="stat-label">Proyectos</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="stat-number">5</h3>
                        <p class="stat-label">Expertos</p>
                    </div>
                    <div class="stat-item">
                        <h3 class="stat-number">100%</h3>
                        <p class="stat-label">Satisfacción</p>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-5" data-aos="fade-left" data-aos-delay="200">
                <div class="hero-image-container">
                    <div class="floating-card card-1">
                        <i class="fas fa-code"></i>
                        <span>Desarrollo Web</span>
                    </div>
                    <div class="floating-card card-2">
                        <i class="fas fa-mobile-alt"></i>
                        <span>Apps Móviles</span>
                    </div>
                    <div class="floating-card card-3">
                        <i class="fas fa-database"></i>
                        <span>Backend & APIs</span>
                    </div>
                    <div class="hero-main-graphic">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="scroll-indicator" data-aos="fade-up" data-aos-delay="1000">
        <a href="#mision-vision">
            <span></span>
            <span></span>
            <span></span>
        </a>
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

<!-- SECCIÓN: TESTIMONIOS -->
<section class="py-5 testimonials-section" id="testimonios">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Testimonios de Nuestros Clientes</h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="100">
                La satisfacción de nuestros clientes es nuestra mejor carta de presentación
            </p>
        </div>

        <div class="row g-4">
            <!-- Testimonio 1 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="testimonial-card">
                    <div class="stars mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Trabajar con TECH-INDUSTRIES fue una experiencia excepcional. Transformaron nuestra idea en una plataforma web robusta y escalable. Su profesionalismo y atención al detalle superaron nuestras expectativas."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="María González" style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">María González</h6>
                            <p class="author-position">CEO - HealthTech Solutions</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonio 2 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="testimonial-card">
                    <div class="stars mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "El equipo demostró un conocimiento técnico impresionante. Desarrollaron nuestra app móvil en tiempo récord sin comprometer la calidad. Definitivamente volveremos a trabajar con ellos en futuros proyectos."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Carlos Mendoza" style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">Carlos Mendoza</h6>
                            <p class="author-position">Director - InnovaTech Corp</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Testimonio 3 -->
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="400">
                <div class="testimonial-card">
                    <div class="stars mb-3">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <p class="testimonial-text">
                        "Excelente comunicación y soporte durante todo el proyecto. Nos guiaron en cada paso del desarrollo y el resultado final fue exactamente lo que necesitábamos. Altamente recomendados."
                    </p>
                    <div class="testimonial-author">
                        <div class="author-avatar">
                            <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Ana Rodríguez" style="width:40px;height:40px;border-radius:50%;object-fit:cover;">
                        </div>
                        <div class="author-info">
                            <h6 class="author-name">Ana Rodríguez</h6>
                            <p class="author-position">Fundadora - Digital Marketing Pro</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sección de proyectos -->

<!-- Sección Proyectos -->
<section class="py-5 bg-light" id="proyectos">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Nuestros Proyectos</h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="100">
                Soluciones reales que hemos desarrollado para diversos sectores
            </p>
        </div>

        <!-- Grid de Proyectos -->
        <div class="row g-4">

            <!-- PROYECTO 1: Seguros Médicos - Frontend -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?w=800&h=600&fit=crop" 
                             alt="Seguros Frontend" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Frontend</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Seguros Médicos - Cliente</h5>
                        <p class="card-text proyecto-description">
                            Aplicación web para gestión de seguros médicos con cotizador online, panel de cliente y administración de pólizas.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-react"></i> React</span>
                            <span class="tech-tag"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                            <span class="tech-tag"><i class="fas fa-chart-line"></i> Charts</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/Davidl2002/front_seguros_medicos.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 2: Seguros Médicos - Backend -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=800&h=600&fit=crop" 
                             alt="Seguros Backend" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Backend</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Seguros Médicos - API</h5>
                        <p class="card-text proyecto-description">
                            Backend robusto para sistema de gestión de seguros médicos con autenticación, reportes y cálculo de pólizas.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-node-js"></i> Node.js</span>
                            <span class="tech-tag"><i class="fas fa-database"></i> MongoDB</span>
                            <span class="tech-tag"><i class="fas fa-shield-alt"></i> JWT</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/Davidl2002/back_seguros_medicos.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 3: Life Insurance Frontend -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1554224155-6726b3ff858f?w=800&h=600&fit=crop" 
                             alt="Life Insurance Front" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Frontend</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Seguros de Vida - Cliente</h5>
                        <p class="card-text proyecto-description">
                            Aplicación web para cotización y contratación de seguros de vida con calculadora interactiva y gestión de pólizas.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-react"></i> React</span>
                            <span class="tech-tag"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                            <span class="tech-tag"><i class="fas fa-calculator"></i> Calculator</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/christopherpaucar/life_insurance_front.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 4: Life Insurance Backend -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1450101499163-c8848c66ca85?w=800&h=600&fit=crop" 
                             alt="Life Insurance Back" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Backend</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Seguros de Vida - API</h5>
                        <p class="card-text proyecto-description">
                            API REST para gestión de seguros de vida con cálculos actuariales, cotizaciones y procesamiento de pólizas.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-node-js"></i> Node.js</span>
                            <span class="tech-tag"><i class="fas fa-database"></i> PostgreSQL</span>
                            <span class="tech-tag"><i class="fas fa-lock"></i> Security</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/christopherpaucar/life_insurance_back.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 5: VetControl Frontend -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1576201836106-db1758fd1c97?w=800&h=600&fit=crop" 
                             alt="VetControl" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Healthcare</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">VetControl - Sistema Veterinario</h5>
                        <p class="card-text proyecto-description">
                            Interfaz moderna para sistema de gestión veterinaria con historial clínico, citas, control de mascotas y reportes.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-react"></i> React</span>
                            <span class="tech-tag"><i class="fas fa-code"></i> TypeScript</span>
                            <span class="tech-tag"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/jade2803/VetControl-Frontend.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 6: Sistema de Inventarios -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1586528116311-ad8dd3c8310d?w=800&h=600&fit=crop" 
                             alt="Inventory Management" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Enterprise</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Sistema de Inventarios</h5>
                        <p class="card-text proyecto-description">
                            Interfaz completa para gestión de inventarios empresariales con control de stock, alertas y reportes detallados.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-react"></i> React</span>
                            <span class="tech-tag"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                            <span class="tech-tag"><i class="fas fa-boxes"></i> Inventory</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/christopherpaucar/inventory-management-frontend.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 7: MangezCeci Restaurant -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?w=800&h=600&fit=crop" 
                             alt="MangezCeci Restaurant" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Restaurant</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">MangezCeci Restaurant</h5>
                        <p class="card-text proyecto-description">
                            Sistema de gestión integral para restaurante con módulos de reservas, menú digital y administración de pedidos.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-php"></i> PHP</span>
                            <span class="tech-tag"><i class="fas fa-database"></i> MySQL</span>
                            <span class="tech-tag"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/AlessoGonzalez/MangezCeci_Restaurant.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 8: GeoRutas Óptimas -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1569336415962-a4bd9f69cd83?w=800&h=600&fit=crop" 
                             alt="GeoRutas" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Logistics</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">GeoRutas Óptimas</h5>
                        <p class="card-text proyecto-description">
                            Sistema de optimización de rutas con algoritmos de geolocalización para logística y entregas eficientes.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fas fa-route"></i> Algorithms</span>
                            <span class="tech-tag"><i class="fas fa-map"></i> Google Maps</span>
                            <span class="tech-tag"><i class="fab fa-python"></i> Python</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/christopherpaucar/GeoRutas_-ptimas.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 9: Portal Web UTA -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1498243691581-b145c3f54a5a?w=800&h=600&fit=crop" 
                             alt="UTA Web" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Education</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Portal Web UTA</h5>
                        <p class="card-text proyecto-description">
                            Sistema web educativo con gestión de estudiantes, cursos, calificaciones y recursos académicos.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-php"></i> PHP</span>
                            <span class="tech-tag"><i class="fas fa-database"></i> MySQL</span>
                            <span class="tech-tag"><i class="fab fa-bootstrap"></i> Bootstrap</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/Davidl2002/Uta-Web.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 10: Sistema Huellas -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1563013544-824ae1b704d3?w=800&h=600&fit=crop" 
                             alt="Huellas" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Security</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Sistema Huellas - Control Biométrico</h5>
                        <p class="card-text proyecto-description">
                            Interfaz para sistema de control de asistencia biométrico con reportes en tiempo real y gestión de usuarios.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-react"></i> React</span>
                            <span class="tech-tag"><i class="fab fa-css3"></i> Tailwind</span>
                            <span class="tech-tag"><i class="fas fa-fingerprint"></i> Biometric</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/Davidl2002/Front_Huellas.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 11: TaskFlow Backend -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="400">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=800&h=600&fit=crop" 
                             alt="TaskFlow" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Productivity</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">TaskFlow - Gestión de Tareas</h5>
                        <p class="card-text proyecto-description">
                            API para sistema de gestión de tareas y proyectos con autenticación y colaboración en tiempo real.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-node-js"></i> Node.js</span>
                            <span class="tech-tag"><i class="fas fa-database"></i> MongoDB</span>
                            <span class="tech-tag"><i class="fas fa-tasks"></i> Task Mgmt</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/christopherpaucar/taskflow-backend.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 12: Rutas Ecuador -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1526778548025-fa2f459cd5c1?w=800&h=600&fit=crop" 
                             alt="Rutas Ecuador" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Tourism</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Rutas Ecuador</h5>
                        <p class="card-text proyecto-description">
                            Plataforma turística interactiva con mapas, rutas y guías de destinos turísticos del Ecuador.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fas fa-map-marked-alt"></i> Maps API</span>
                            <span class="tech-tag"><i class="fab fa-js"></i> JavaScript</span>
                            <span class="tech-tag"><i class="fab fa-html5"></i> HTML5</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/Davidl2002/rutas-ecuador.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 13: Menú Digital -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504674900247-0877df9cc836?w=800&h=600&fit=crop" 
                             alt="Menu Comida" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Restaurant</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">Menú Digital Interactivo</h5>
                        <p class="card-text proyecto-description">
                            Sistema de menú digital para restaurantes con categorías, búsqueda de platillos y carrito de pedidos.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-react"></i> React</span>
                            <span class="tech-tag"><i class="fab fa-css3"></i> CSS3</span>
                            <span class="tech-tag"><i class="fas fa-utensils"></i> Food</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/Davidl2002/menu_comida.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 14: WebMoviles -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card proyecto-card h-100 border-0 shadow-sm">
                    <div class="proyecto-img-container position-relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1512941937669-90a1b58e7e9c?w=800&h=600&fit=crop" 
                             alt="WebMoviles" class="card-img-top proyecto-img">
                        <span class="proyecto-badge">Mobile</span>
                    </div>
                    <div class="card-body proyecto-body">
                        <h5 class="card-title proyecto-title">WebMoviles - Experiencia Móvil</h5>
                        <p class="card-text proyecto-description">
                            Aplicación web responsive enfocada en experiencia móvil con diseño adaptativo y optimización de rendimiento.
                        </p>
                        <div class="proyecto-tech mb-3">
                            <span class="tech-tag"><i class="fab fa-angular"></i> Angular</span>
                            <span class="tech-tag"><i class="fab fa-node-js"></i> Node.js</span>
                            <span class="tech-tag"><i class="fas fa-mobile-alt"></i> PWA</span>
                        </div>
                        <div class="proyecto-links d-flex gap-2">
                            <a href="https://github.com/jade2803/WebMoviles.git" target="_blank" class="btn btn-github flex-fill">
                                <i class="fab fa-github me-2"></i>Ver Código
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- PROYECTO 15: MasQueFoto -->
          

        </div>
    </div>
</section>

<!-- Sección Equipo -->
<section class="py-5" id="equipo">
    <div class="container">
        <div class="text-center mb-5">
            <h2 class="fw-bold" data-aos="fade-up">Nuestro Equipo</h2>
            <p class="text-muted" data-aos="fade-up" data-aos-delay="100">5 mentes brillantes, un solo objetivo: tu éxito digital.</p>
        </div>
        <div class="row g-4 justify-content-center">

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

            <!-- David L. -->
            <div class="col-md-6 col-lg-4" data-aos="fade-up">
                <div class="card team-card border-0 shadow-sm text-center overflow-hidden">
                    <img src="images/david.jpeg" class="card-img-top team-img" alt="David López">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">David López</h5>
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
                    <img src="images/joel.jpeg" class="card-img-top team-img" alt="Joel Espinoza">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Joel Espinoza</h5>
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
                    <img src="images/jade.jpeg" class="card-img-top team-img" alt="Jade Ramírez">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">Jade Ramírez</h5>
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

        </div>
    </div>
</section>


<!-- Sección Contacto con Botón para Abrir Modal -->
<section class="py-5 bg-dark text-white text-center" id="contacto">
    <div class="container">
        <h2 class="fw-bold mb-4" data-aos="fade-up">¿Listo para comenzar?</h2>
        <p class="lead mb-4" data-aos="fade-up" data-aos-delay="100">Hablemos sobre tu próximo proyecto.</p>
        <button type="button" class="btn btn-outline-light btn-lg px-5 py-3" data-aos="fade-up" data-aos-delay="200" id="btnAbrirModal">
            <i class="fas fa-rocket me-2"></i>Enviar Próximo Proyecto
        </button>
    </div>
</section>

<!-- ========================================
     MODAL FLOTANTE DE CONTACTO
======================================== -->
<div id="contactModal" class="contact-modal">
    <div class="contact-modal-overlay"></div>
    <div class="contact-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="modal-header-custom">
            <div class="modal-icon">
                <i class="fas fa-paper-plane"></i>
            </div>
            <h2 class="modal-title">Envíanos tu Próximo Proyecto</h2>
            <p class="modal-subtitle">Completa el formulario y nos pondremos en contacto contigo</p>
        </div>
        
        <form id="contactFormModal" class="contact-form-modal">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="text" class="form-control" id="nombreModal" name="nombreModal" placeholder="Nombre completo" required>
                        <label for="nombreModal"><i class="fas fa-user me-2"></i>Nombre completo</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating">
                        <input type="email" class="form-control" id="emailModal" name="emailModal" placeholder="Correo electrónico" required>
                        <label for="emailModal"><i class="fas fa-envelope me-2"></i>Correo electrónico</label>
                    </div>
                </div>
            </div>
            
            <div class="mt-3">
                <div class="form-floating">
                    <input type="tel" class="form-control" id="telefonoModal" name="telefonoModal" placeholder="Teléfono">
                    <label for="telefonoModal"><i class="fas fa-phone me-2"></i>Teléfono (opcional)</label>
                </div>
            </div>
            
            <div class="mt-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="asuntoModal" name="asuntoModal" placeholder="Asunto" required>
                    <label for="asuntoModal"><i class="fas fa-tag me-2"></i>Asunto del proyecto</label>
                </div>
            </div>
            
            <div class="mt-3">
                <div class="form-floating">
                    <textarea class="form-control" id="mensajeModal" name="mensajeModal" placeholder="Escribe tu mensaje" style="height: 120px" required></textarea>
                    <label for="mensajeModal"><i class="fas fa-comment-dots me-2"></i>Cuéntanos sobre tu proyecto</label>
                </div>
            </div>
            
            <div class="d-grid mt-4">
                <button type="submit" class="btn btn-primary-modal btn-lg">
                    <span class="btn-text">
                        <i class="fas fa-rocket me-2"></i>Enviar Proyecto
                    </span>
                    <span class="btn-loading d-none">
                        <span class="spinner-border spinner-border-sm me-2" role="status"></span>
                        Enviando...
                    </span>
                </button>
            </div>
            
            <div id="formMessageModal" class="mt-3 text-center d-none">
                <div class="alert" role="alert"></div>
            </div>
        </form>
    </div>
</div>

<?php include 'includes/footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- AOS JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- ========================================
     SCRIPTS DEL MODAL DE CONTACTO
======================================== -->
<script>
// ========================================
// FUNCIONES DEL MODAL DE CONTACTO
// ========================================

// Variables globales del modal
const contactModal = document.getElementById('contactModal');
const btnAbrirModal = document.getElementById('btnAbrirModal');
const modalOverlay = document.querySelector('.contact-modal-overlay');
const modalCloseBtn = document.querySelector('.modal-close-btn');
const contactFormModal = document.getElementById('contactFormModal');

// Abrir modal
function openContactModal() {
    if (contactModal) {
        contactModal.classList.add('active');
        document.body.style.overflow = 'hidden';
        
        // Focus en el primer input después de abrir
        setTimeout(() => {
            const firstInput = document.getElementById('nombreModal');
            if (firstInput) firstInput.focus();
        }, 300);
    }
}

// Cerrar modal
function closeContactModal() {
    if (contactModal) {
        contactModal.classList.remove('active');
        document.body.style.overflow = 'auto';
        
        // Limpiar mensajes al cerrar
        const formMessage = document.getElementById('formMessageModal');
        if (formMessage) {
            formMessage.classList.add('d-none');
        }
    }
}

// Event listeners cuando el DOM esté listo
document.addEventListener('DOMContentLoaded', function() {
    
    // Botón principal que abre el modal
    if (btnAbrirModal) {
        btnAbrirModal.addEventListener('click', openContactModal);
    }
    
    // Cerrar modal con overlay
    if (modalOverlay) {
        modalOverlay.addEventListener('click', closeContactModal);
    }
    
    // Cerrar modal con botón X
    if (modalCloseBtn) {
        modalCloseBtn.addEventListener('click', closeContactModal);
    }
    
    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && contactModal && contactModal.classList.contains('active')) {
            closeContactModal();
        }
    });
    
    // Prevenir cierre al hacer click dentro del modal
    const modalContent = document.querySelector('.contact-modal-content');
    if (modalContent) {
        modalContent.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
    
    // Envío del formulario del modal
    if (contactFormModal) {
        contactFormModal.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const btn = this.querySelector('.btn-primary-modal');
            const btnText = btn.querySelector('.btn-text');
            const btnLoading = btn.querySelector('.btn-loading');
            const formMessage = document.getElementById('formMessageModal');
            
            // Obtener valores
            const nombre = document.getElementById('nombreModal').value.trim();
            const email = document.getElementById('emailModal').value.trim();
            const telefono = document.getElementById('telefonoModal').value.trim();
            const asunto = document.getElementById('asuntoModal').value.trim();
            const mensaje = document.getElementById('mensajeModal').value.trim();
            
            // Validar campos requeridos
            if (!nombre || !email || !asunto || !mensaje) {
                mostrarMensajeModal('Por favor completa todos los campos requeridos', 'danger');
                return;
            }
            
            // Validar email
            const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!emailRegex.test(email)) {
                mostrarMensajeModal('Por favor ingresa un correo electrónico válido', 'danger');
                return;
            }
            
            // Mostrar estado de carga
            btn.disabled = true;
            btnText.classList.add('d-none');
            btnLoading.classList.remove('d-none');
            formMessage.classList.add('d-none');
            
            // Simular envío (reemplaza esto con tu lógica de envío real - AJAX/Fetch)
            setTimeout(() => {
                // Restablecer botón
                btn.disabled = false;
                btnText.classList.remove('d-none');
                btnLoading.classList.add('d-none');
                
                // Mostrar mensaje de éxito
                mostrarMensajeModal('¡Mensaje enviado exitosamente! Nos pondremos en contacto contigo pronto.', 'success');
                
                // Limpiar formulario
                contactFormModal.reset();
                
                // Cerrar modal después de 2.5 segundos
                setTimeout(() => {
                    closeContactModal();
                }, 2500);
                
            }, 2000);
        });
    }
    
    // Animación en inputs del modal
    document.querySelectorAll('#contactFormModal .form-control').forEach(input => {
        input.addEventListener('focus', function() {
            this.parentElement.classList.add('input-focused');
        });
        
        input.addEventListener('blur', function() {
            this.parentElement.classList.remove('input-focused');
        });
    });
    
    console.log('✅ Modal de contacto inicializado correctamente');
});

// Función auxiliar para mostrar mensajes en el modal
function mostrarMensajeModal(mensaje, tipo) {
    const formMessage = document.getElementById('formMessageModal');
    const alert = formMessage.querySelector('.alert');
    
    if (formMessage && alert) {
        formMessage.classList.remove('d-none');
        alert.className = `alert alert-${tipo}`;
        
        const iconClass = tipo === 'success' ? 'fa-check-circle' : 'fa-exclamation-triangle';
        alert.innerHTML = `<i class="fas ${iconClass} me-2"></i>${mensaje}`;
        
        // Auto-ocultar después de 5 segundos si es error
        if (tipo === 'danger') {
            setTimeout(() => {
                formMessage.classList.add('d-none');
            }, 5000);
        }
    }
}
</script>

<!-- Main JS -->
<script src="assets/js/main.js"></script>

<!-- Inicializar AOS -->
<script>
    AOS.init({
        duration: 800,
        easing: 'ease-in-out',
        once: true
    });
</script>

<!-- ========================================
     MODAL FLOTANTE TECH LAB
======================================== -->
<div id="techLabModal" class="tech-lab-modal">
    <div class="tech-lab-modal-overlay"></div>
    <div class="tech-lab-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <div class="modal-header-tech">
            <div class="modal-icon-tech">
                <i class="fas fa-flask"></i>
            </div>
            <h2 class="modal-title-tech">Tech Lab</h2>
            <p class="modal-subtitle-tech">Proyectos, investigaciones e informes técnicos</p>
        </div>
        
        <!-- Grid de proyectos -->
        <div class="tech-lab-grid">
            
            <!-- Proyecto 1: Sistema de Pasajes -->
            <a href="tech-lab/proyecto-pasajes-interprovinciales.php" class="tech-lab-card">
                <div class="tech-lab-card-icon">
                    <i class="fas fa-bus"></i>
                </div>
                <div class="tech-lab-card-content">
                    <h3 class="tech-lab-card-title">Sistema de Pasajes</h3>
                    <p class="tech-lab-card-description">
                        Plataforma completa para gestión de reservas de viajes interprovinciales
                    </p>
                    <div class="tech-lab-card-tags">
                        <span class="tech-tag"><i class="fab fa-react"></i> React</span>
                        <span class="tech-tag"><i class="fab fa-node-js"></i> Node.js</span>
                        <span class="tech-tag"><i class="fas fa-database"></i> MongoDB</span>
                    </div>
                </div>
                <div class="tech-lab-card-badge">
                    <i class="fas fa-arrow-right"></i>
                </div>
            </a>
            
            <!-- Proyecto 2: Placeholder -->
            <div class="tech-lab-card tech-lab-card-coming-soon">
                <div class="tech-lab-card-icon">
                    <i class="fas fa-rocket"></i>
                </div>
                <div class="tech-lab-card-content">
                    <h3 class="tech-lab-card-title">Sistema de Inventarios Pro</h3>
                    <p class="tech-lab-card-description">
                        Gestión avanzada de inventarios con IA y predicción de stocks
                    </p>
                    <div class="tech-lab-card-tags">
                        <span class="tech-tag"><i class="fas fa-brain"></i> AI</span>
                        <span class="tech-tag"><i class="fab fa-python"></i> Python</span>
                    </div>
                </div>
                <div class="tech-lab-card-badge coming-soon-badge">
                    <span>Próximamente</span>
                </div>
            </div>
            
            <!-- Proyecto 3: Placeholder -->
            <div class="tech-lab-card tech-lab-card-coming-soon">
                <div class="tech-lab-card-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="tech-lab-card-content">
                    <h3 class="tech-lab-card-title">Dashboard Analytics</h3>
                    <p class="tech-lab-card-description">
                        Panel de análisis de datos en tiempo real con visualizaciones avanzadas
                    </p>
                    <div class="tech-lab-card-tags">
                        <span class="tech-tag"><i class="fab fa-react"></i> React</span>
                        <span class="tech-tag"><i class="fas fa-chart-bar"></i> D3.js</span>
                    </div>
                </div>
                <div class="tech-lab-card-badge coming-soon-badge">
                    <span>Próximamente</span>
                </div>
            </div>
            
            <!-- Proyecto 4: Placeholder -->
            <div class="tech-lab-card tech-lab-card-coming-soon">
                <div class="tech-lab-card-icon">
                    <i class="fas fa-mobile-alt"></i>
                </div>
                <div class="tech-lab-card-content">
                    <h3 class="tech-lab-card-title">App Delivery</h3>
                    <p class="tech-lab-card-description">
                        Aplicación móvil para pedidos y seguimiento en tiempo real
                    </p>
                    <div class="tech-lab-card-tags">
                        <span class="tech-tag"><i class="fab fa-react"></i> React Native</span>
                        <span class="tech-tag"><i class="fas fa-map"></i> Maps API</span>
                    </div>
                </div>
                <div class="tech-lab-card-badge coming-soon-badge">
                    <span>Próximamente</span>
                </div>
            </div>
            
        </div>
        
        <!-- Botón para ver página completa -->
        <div class="text-center mt-4">
            <a href="tech-lab.php" class="btn-tech-lab-full">
                <i class="fas fa-folder-open me-2"></i>
                Ver Laboratorio Completo
            </a>
        </div>
    </div>
</div>

<script>
// ========================================
// FUNCIONES DEL MODAL TECH LAB
// ========================================

document.addEventListener('DOMContentLoaded', function() {
    const techLabModal = document.getElementById('techLabModal');
    const modalOverlay = document.querySelector('.tech-lab-modal-overlay');
    const modalCloseBtn = techLabModal.querySelector('.modal-close-btn');
    
    // Función para abrir modal
    function openTechLabModal() {
        if (techLabModal) {
            techLabModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Función para cerrar modal
    function closeTechLabModal() {
        if (techLabModal) {
            techLabModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
    
    // Cerrar con overlay
    if (modalOverlay) {
        modalOverlay.addEventListener('click', closeTechLabModal);
    }
    
    // Cerrar con botón X
    if (modalCloseBtn) {
        modalCloseBtn.addEventListener('click', closeTechLabModal);
    }
    
    // Cerrar con tecla ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && techLabModal.classList.contains('active')) {
            closeTechLabModal();
        }
    });
    
    // Prevenir cierre al hacer click dentro del modal
    const modalContent = techLabModal.querySelector('.tech-lab-modal-content');
    if (modalContent) {
        modalContent.addEventListener('click', function(e) {
            e.stopPropagation();
        });
    }
    
    console.log('✅ Modal Tech Lab inicializado correctamente');
});
</script>


<!-- ========================================
     MODAL SISTEMA DE PASAJES INTERPROVINCIALES
======================================== -->
<div id="pasajesModal" class="proyecto-detail-modal">
    <div class="proyecto-detail-modal-overlay"></div>
    <div class="proyecto-detail-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Header del Modal -->
        <div class="modal-header-proyecto">
            <div class="modal-icon-proyecto">
                <i class="fas fa-bus"></i>
            </div>
            <h2 class="modal-title-proyecto">Sistema de Pasajes Interprovinciales</h2>
            <p class="modal-subtitle-proyecto">Plataforma integral para la gestión y venta de boletos de transporte en Ecuador</p>
        </div>
        
        <div class="proyecto-detail-content">
            
            <!-- Imagen Hero -->
            <div class="proyecto-hero-image">
                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=1400&h=500&fit=crop" 
                     alt="Sistema de Pasajes Interprovinciales">
            </div>
            
            <!-- Descripción Principal -->
            <div class="info-section mb-4">
                <h3><i class="fas fa-info-circle me-3"></i>¿Qué es este proyecto?</h3>
                <p class="lead-text">
                    Una solución completa que revoluciona la forma en que las personas compran boletos de bus en Ecuador. 
                    Los usuarios pueden buscar rutas, seleccionar asientos y pagar en línea de forma segura, mientras que 
                    las cooperativas de transporte gestionan sus operaciones de manera más eficiente y profesional.
                </p>
            </div>

            <!-- Problema y Solución -->
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="problem-card">
                        <div class="card-icon-header">
                            <i class="fas fa-exclamation-triangle"></i>
                            <h4>El Problema</h4>
                        </div>
                        <ul class="problem-list">
                            <li><i class="fas fa-times-circle"></i> Largas filas en taquilla</li>
                            <li><i class="fas fa-times-circle"></i> Errores de asignación de asientos</li>
                            <li><i class="fas fa-times-circle"></i> Doble reservas y conflictos</li>
                            <li><i class="fas fa-times-circle"></i> Sistemas manuales y desactualizados</li>
                            <li><i class="fas fa-times-circle"></i> Falta de trazabilidad en pagos</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="solution-card">
                        <div class="card-icon-header success">
                            <i class="fas fa-check-circle"></i>
                            <h4>La Solución</h4>
                        </div>
                        <ul class="solution-list">
                            <li><i class="fas fa-check"></i> Compra de boletos 100% online</li>
                            <li><i class="fas fa-check"></i> Selección de asientos en tiempo real</li>
                            <li><i class="fas fa-check"></i> Validación con código QR</li>
                            <li><i class="fas fa-check"></i> Panel de administración centralizado</li>
                            <li><i class="fas fa-check"></i> Pagos seguros con PayPal</li>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Características Principales -->
            <div class="features-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-star"></i>
                    Características Principales
                </h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-search"></i>
                            </div>
                            <h5>Búsqueda Inteligente</h5>
                            <p>Encuentra tu ruta ideal filtrando por origen, destino, fecha y cooperativa</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-chair"></i>
                            </div>
                            <h5>Selección de Asientos</h5>
                            <p>Visualiza y elige tu asiento preferido en tiempo real</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <h5>Boletos Digitales</h5>
                            <p>Código QR único para validación rápida y segura</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-credit-card"></i>
                            </div>
                            <h5>Pago Seguro</h5>
                            <p>Integración con PayPal para transacciones confiables</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5>Dashboard Admin</h5>
                            <p>Panel completo con estadísticas y reportes en tiempo real</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-route"></i>
                            </div>
                            <h5>Gestión de Rutas</h5>
                            <p>Control total de rutas, horarios y frecuencias</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-bell"></i>
                            </div>
                            <h5>Notificaciones</h5>
                            <p>Alertas y recordatorios automáticos para usuarios</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-history"></i>
                            </div>
                            <h5>Historial Completo</h5>
                            <p>Registro detallado de todas las transacciones</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Usuarios del Sistema -->
            <div class="users-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users"></i>
                    ¿Quién usa esta plataforma?
                </h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="user-type-card">
                            <div class="user-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4>Cooperativas</h4>
                            <p>Administran rutas, buses, horarios y visualizan estadísticas de ventas</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="user-type-card">
                            <div class="user-icon">
                                <i class="fas fa-user-cog"></i>
                            </div>
                            <h4>Oficinistas</h4>
                            <p>Gestionan la venta de boletos, validan pagos y asignan asientos</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="user-type-card">
                            <div class="user-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Pasajeros</h4>
                            <p>Buscan rutas, compran boletos y gestionan sus viajes desde su móvil</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Stack Tecnológico -->
            <div class="tech-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-code"></i>
                    Tecnologías Utilizadas
                </h3>
                <div class="tech-grid">
                    <div class="tech-item">
                        <i class="fab fa-react"></i>
                        <div>
                            <strong>React.js</strong>
                            <span>Frontend Web</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-node-js"></i>
                        <div>
                            <strong>Node.js</strong>
                            <span>Backend</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-database"></i>
                        <div>
                            <strong>MySQL</strong>
                            <span>Base de Datos</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-react"></i>
                        <div>
                            <strong>React Native</strong>
                            <span>Apps Móviles</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-paypal"></i>
                        <div>
                            <strong>PayPal</strong>
                            <span>Pagos</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <strong>JWT</strong>
                            <span>Autenticación</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beneficios -->
            <div class="benefits-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-trophy"></i>
                    Beneficios del Sistema
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h5>Ahorro de Tiempo</h5>
                                <p>Reduce tiempos de espera hasta en un 80% eliminando filas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-chart-line"></i>
                            <div>
                                <h5>Incremento de Ventas</h5>
                                <p>Aumenta las ventas online y el alcance de las cooperativas</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-shield-alt"></i>
                            <div>
                                <h5>Mayor Seguridad</h5>
                                <p>Elimina errores de asignación y conflictos de asientos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-mobile-alt"></i>
                            <div>
                                <h5>Acceso 24/7</h5>
                                <p>Compra de boletos en cualquier momento y lugar</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Metodología -->
            <div class="info-section mb-5 text-white">
                <h3><i class="fas fa-project-diagram me-3"></i>Metodología de Desarrollo</h3>
                <div class="methodology-content">
                    <div class="scrum-badge">
                        <i class="fas fa-sync-alt"></i>
                        <span>SCRUM</span>
                    </div>
                    <p>
                        El proyecto se desarrolló utilizando <strong>metodología ágil SCRUM</strong>, con sprints de 7-14 días, 
                        permitiendo entregas iterativas y adaptación continua a los requisitos. Esta metodología garantizó 
                        transparencia, colaboración efectiva del equipo y revisiones constantes del progreso.
                    </p>
                    <div class="sprint-info">
                        <div class="sprint-stat">
                            <h4>8</h4>
                            <p>Sprints</p>
                        </div>
                        <div class="sprint-stat">
                            <h4>75</h4>
                            <p>Días</p>
                        </div>
                        <div class="sprint-stat">
                            <h4>5</h4>
                            <p>Desarrolladores</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipo -->
            <div class="team-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users-cog"></i>
                    Equipo de Desarrollo
                </h3>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="images/joel.jpeg" alt="Joel Espinoza" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Joel Espinoza</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/alesso.jpeg" alt="Alessandro González" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Alessandro González</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/david.jpeg" alt="David López" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>David López</strong>
                        <span>Frontend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/cris.jpeg" alt="Christopher Paucar" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Christopher Paucar</strong>
                        <span>Backend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/jade.jpeg" alt="Jade Ramírez" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Jade Ramírez</strong>
                        <span>Mobile Developer</span>
                    </div>
                </div>
            </div>

            <!-- Enlaces y Recursos -->
            <div class="resources-section">
                <h3 class="section-title">
                    <i class="fas fa-link"></i>
                    Recursos del Proyecto
                </h3>
                <div class="resource-buttons">
                    <a href="https://blogpresentacion.onrender.com/" target="_blank" class="resource-btn blog">
                        <i class="fas fa-blog"></i>
                        <span>Ver Blog del Proyecto</span>
                    </a>
                    <a href="https://www.canva.com/design/DAGy_0H5N4Q/Wvv_nhfJGYs1oJ1Y90mbtg/view" target="_blank" class="resource-btn presentation">
                        <i class="fas fa-presentation"></i>
                        <span>Ver Presentación</span>
                    </a>
                    <a href="#" class="resource-btn github disabled" title="Repositorio privado">
                        <i class="fab fa-github"></i>
                        <span>Código Fuente (Privado)</span>
                    </a>
                    <a href="#" class="resource-btn demo disabled" title="Próximamente">
                        <i class="fas fa-rocket"></i>
                        <span>Demo en Vivo (Próximamente)</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// ========================================
// MODAL SISTEMA DE PASAJES
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const pasajesModal = document.getElementById('pasajesModal');
    const modalOverlay = pasajesModal?.querySelector('.proyecto-detail-modal-overlay');
    const modalCloseBtn = pasajesModal?.querySelector('.modal-close-btn');
    
    // Abrir modal
    function openPasajesModal(e) {
        if (e) e.preventDefault();
        if (pasajesModal) {
            pasajesModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Cerrar modal
    function closePasajesModal() {
        if (pasajesModal) {
            pasajesModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
    
    // Event listener para el enlace del header
    const pasajesLink = document.querySelector('a[href="tech-lab/proyecto-pasajes-interprovinciales.php"]');
    if (pasajesLink) {
        pasajesLink.addEventListener('click', openPasajesModal);
    }
    
    // Cerrar con overlay
    modalOverlay?.addEventListener('click', closePasajesModal);
    
    // Cerrar con botón X
    modalCloseBtn?.addEventListener('click', closePasajesModal);
    
    // Cerrar con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && pasajesModal?.classList.contains('active')) {
            closePasajesModal();
        }
    });
    
    // Prevenir cierre al hacer clic dentro
    const modalContent = pasajesModal?.querySelector('.proyecto-detail-modal-content');
    modalContent?.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    console.log('✅ Modal Sistema de Pasajes inicializado');
});
</script>

<!-- ========================================
     MODAL HERRAMIENTAS CASE
     Agregar antes del cierre de </body> en index.php
     (después del modal de Sistema de Pasajes)
======================================== -->
<div id="caseModal" class="proyecto-detail-modal">
    <div class="proyecto-detail-modal-overlay"></div>
    <div class="proyecto-detail-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Header del Modal -->
        <div class="modal-header-proyecto">
            <div class="modal-icon-proyecto">
                <i class="fas fa-tools"></i>
            </div>
            <h2 class="modal-title-proyecto">Herramientas CASE</h2>
            <p class="modal-subtitle-proyecto">Ingeniería de Software Asistida por Computadora - Automatización del ciclo de vida del desarrollo</p>
        </div>
        
        <div class="proyecto-detail-content">
            
            <!-- Imagen Hero -->
            <div class="proyecto-hero-image">
                <img src="https://images.unsplash.com/photo-1517694712202-14dd9538aa97?w=1400&h=500&fit=crop" 
                     alt="Herramientas CASE">
            </div>
            
            <!-- Descripción Principal -->
            <div class="info-section mb-4">
                <h3><i class="fas fa-info-circle me-3"></i>¿Qué es CASE?</h3>
                <p class="lead-text">
                    CASE (Computer Aided Software Engineering) no es solo un conjunto de programas, sino un entorno 
                    integrado donde convergen herramientas, repositorios, metodologías y usuarios calificados. Su función 
                    principal es mejorar la productividad y calidad en todas las fases del ciclo de vida del software: 
                    análisis, diseño, construcción, pruebas, mantenimiento y documentación.
                </p>
            </div>

            <!-- Problema y Solución -->
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="problem-card">
                        <div class="card-icon-header">
                            <i class="fas fa-exclamation-triangle"></i>
                            <h4>Desafíos del Desarrollo Manual</h4>
                        </div>
                        <ul class="problem-list">
                            <li><i class="fas fa-times-circle"></i> Tareas repetitivas y propensas a errores</li>
                            <li><i class="fas fa-times-circle"></i> Falta de estandarización en procesos</li>
                            <li><i class="fas fa-times-circle"></i> Difícil coordinación de equipos distribuidos</li>
                            <li><i class="fas fa-times-circle"></i> Poca trazabilidad de cambios</li>
                            <li><i class="fas fa-times-circle"></i> Documentación desactualizada o inconsistente</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="solution-card">
                        <div class="card-icon-header success">
                            <i class="fas fa-check-circle"></i>
                            <h4>Beneficios de CASE</h4>
                        </div>
                        <ul class="solution-list">
                            <li><i class="fas fa-check"></i> Reducción del esfuerzo humano</li>
                            <li><i class="fas fa-check"></i> Estandarización de procesos y documentación</li>
                            <li><i class="fas fa-check"></i> Facilidad para reutilizar componentes</li>
                            <li><i class="fas fa-check"></i> Mejora en coordinación de equipos</li>
                            <li><i class="fas fa-check"></i> Mayor control mediante métricas y versiones</li>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bloques de un Entorno CASE -->
            <div class="features-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-cubes"></i>
                    Bloques de un Entorno CASE
                </h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-server"></i>
                            </div>
                            <h5>Arquitectura del Entorno</h5>
                            <p>Infraestructura tecnológica: hardware, SO, redes y gestores de BD</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-exchange-alt"></i>
                            </div>
                            <h5>Servicios de Portabilidad</h5>
                            <p>Garantizan migración entre plataformas y sistemas</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h5>Marco de Integración</h5>
                            <p>Asegura trabajo coordinado y compartición de datos</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-tools"></i>
                            </div>
                            <h5>Herramientas CASE</h5>
                            <p>Software específico para cada fase del desarrollo</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Taxonomía de Herramientas CASE -->
            <div class="taxonomy-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-sitemap"></i>
                    Taxonomía de Herramientas CASE
                </h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-tasks"></i>
                            </div>
                            <h5>Planificación de Proyectos</h5>
                            <p>Estimación de costos, esfuerzos y tiempos</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5>Gestión de Proyectos</h5>
                            <p>Seguimiento, métricas y control de calidad</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-pencil-ruler"></i>
                            </div>
                            <h5>Análisis y Diseño</h5>
                            <p>Modelos de datos, procesos y arquitectura</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-file-alt"></i>
                            </div>
                            <h5>Documentación</h5>
                            <p>Elaboración y estandarización de documentos</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-check-double"></i>
                            </div>
                            <h5>Métricas y Calidad</h5>
                            <p>Evaluación basada en estándares</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <h5>Configuración y BD</h5>
                            <p>Gestión de versiones y repositorios</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-code"></i>
                            </div>
                            <h5>Programación</h5>
                            <p>Compiladores, depuradores y generadores</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-vial"></i>
                            </div>
                            <h5>Prototipado y Simulación</h5>
                            <p>Construcción rápida de interfaces</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-redo"></i>
                            </div>
                            <h5>Reingeniería</h5>
                            <p>Análisis y modernización de código existente</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Entornos I-CASE -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-layer-group me-3"></i>Entornos CASE Integrados (I-CASE)</h3>
                <p class="lead-text mb-4">
                    El verdadero potencial de CASE se alcanza en los entornos integrados. Estos permiten que distintas 
                    aplicaciones se comuniquen de manera fluida, compartan información a través de un repositorio común 
                    y presenten una interfaz homogénea para los usuarios.
                </p>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-sync-alt"></i>
                            <div>
                                <h5>Transferencia Automática</h5>
                                <p>Información fluye entre herramientas y fases del ciclo de vida</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-users-cog"></i>
                            <div>
                                <h5>Coordinación Mejorada</h5>
                                <p>Mayor comunicación entre equipos de trabajo</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-route"></i>
                            <div>
                                <h5>Trazabilidad Completa</h5>
                                <p>Seguimiento de requisitos y cambios del proyecto</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-file-invoice"></i>
                            <div>
                                <h5>Documentación Integrada</h5>
                                <p>Reducción del esfuerzo en tareas globales</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- El Repositorio CASE -->
            <div class="repository-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-database"></i>
                    El Repositorio CASE: El Corazón del Sistema
                </h3>
                <div class="info-section">
                    <p class="lead-text mb-4">
                        El repositorio CASE es la base de datos central donde se almacenan todos los artefactos generados 
                        durante el desarrollo: diagramas, modelos de datos, especificaciones, código, documentación, 
                        pruebas y métricas.
                    </p>
                    <div class="row g-3">
                        <div class="col-md-6 col-lg-4">
                            <div class="repo-feature">
                                <i class="fas fa-shield-alt"></i>
                                <strong>Integridad de Datos</strong>
                                <span>Información única y coherente en todas las fases</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="repo-feature">
                                <i class="fas fa-cogs"></i>
                                <strong>Gestión de Configuración</strong>
                                <span>Control de versiones, auditorías y cambios</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="repo-feature">
                                <i class="fas fa-users"></i>
                                <strong>Soporte Multiusuario</strong>
                                <span>Trabajo colaborativo sin pérdida de consistencia</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="repo-feature">
                                <i class="fas fa-clipboard-check"></i>
                                <strong>Estandarización</strong>
                                <span>Impone convenciones y metodologías</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="repo-feature">
                                <i class="fas fa-door-open"></i>
                                <strong>Apertura</strong>
                                <span>Importación y exportación entre entornos</span>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="repo-feature">
                                <i class="fas fa-plug"></i>
                                <strong>Interoperabilidad</strong>
                                <span>Facilita integración con otras herramientas</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Casos de Éxito -->
            <div class="success-cases-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-trophy"></i>
                    Casos de Éxito
                </h3>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="case-study-card">
                            <div class="case-study-header">
                                <i class="fas fa-building"></i>
                                <h4>Adamantio C.A.</h4>
                                <span class="case-badge">Venezuela</span>
                            </div>
                            <p><strong>Herramienta:</strong> Enterprise Architect</p>
                            <p><strong>Objetivo:</strong> Mejorar el diseño y modelado de sistemas empresariales</p>
                            <p><strong>Resultados:</strong></p>
                            <ul>
                                <li>Visión clara del funcionamiento organizacional</li>
                                <li>Enfoque directo en objetivos primordiales</li>
                                <li>Mejora en productividad y estabilidad</li>
                                <li>Optimización de recursos y reducción de tiempos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="case-study-card">
                            <div class="case-study-header">
                                <i class="fas fa-box"></i>
                                <h4>Sistema de Inventario</h4>
                                <span class="case-badge">Caso Práctico</span>
                            </div>
                            <p><strong>Herramientas:</strong> Enterprise Architect / IBM Rational Rhapsody</p>
                            <p><strong>Aplicación:</strong> Planificación y análisis de requisitos</p>
                            <p><strong>Implementación:</strong></p>
                            <ul>
                                <li>Diagramas de casos de uso</li>
                                <li>Diagramas de flujo de datos (DFD)</li>
                                <li>Visualización de requisitos</li>
                                <li>Identificación temprana de dependencias</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Resultados -->
            <div class="benefits-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-chart-bar"></i>
                    Resultados Obtenidos
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-rocket"></i>
                            <div>
                                <h5>Mejora en Productividad</h5>
                                <p>Automatización de tareas repetitivas y simplificación de procesos complejos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-medal"></i>
                            <div>
                                <h5>Incremento en Calidad</h5>
                                <p>Estandarización de procesos y repositorios centralizados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-handshake"></i>
                            <div>
                                <h5>Trabajo Colaborativo</h5>
                                <p>Comunicación efectiva en equipos distribuidos</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-trophy"></i>
                            <div>
                                <h5>Beneficios Estratégicos</h5>
                                <p>Fortalecimiento de competitividad organizacional</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipo -->
            <div class="team-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users-cog"></i>
                    Equipo de Desarrollo
                </h3>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="images/joel.jpeg" alt="Joel Espinoza" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Joel Espinoza</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/alesso.jpeg" alt="Alessandro González" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Alessandro González</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/david.jpeg" alt="David López" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>David López</strong>
                        <span>Frontend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/cris.jpeg" alt="Christopher Paucar" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Christopher Paucar</strong>
                        <span>Backend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/jade.jpeg" alt="Jade Ramírez" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Jade Ramírez</strong>
                        <span>Mobile Developer</span>
                    </div>
                </div>
            </div>

            <!-- Enlaces y Recursos -->
            <div class="resources-section">
                <h3 class="section-title">
                    <i class="fas fa-link"></i>
                    Recursos del Proyecto
                </h3>
                <div class="resource-buttons">
                    <a href="https://das-sbib.onrender.com/" target="_blank" class="resource-btn blog">
                        <i class="fas fa-globe"></i>
                        <span>Ver Sitio Web del Proyecto</span>
                    </a>
                    <a href="https://www.laccei.org/LACCEI2011-Medellin/published/IT180_Alfonzo.pdf" target="_blank" class="resource-btn presentation">
                        <i class="fas fa-file-pdf"></i>
                        <span>Referencia: Caso Adamantio C.A.</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// ========================================
// MODAL HERRAMIENTAS CASE
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const caseModal = document.getElementById('caseModal');
    const modalOverlay = caseModal?.querySelector('.proyecto-detail-modal-overlay');
    const modalCloseBtn = caseModal?.querySelector('.modal-close-btn');
    
    // Abrir modal
    function openCaseModal(e) {
        if (e) e.preventDefault();
        if (caseModal) {
            caseModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Cerrar modal
    function closeCaseModal() {
        if (caseModal) {
            caseModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
    
    // Event listener para el enlace del Tech Lab Modal
    const caseLink = document.querySelector('a[href*="herramientas-case"]');
    if (caseLink) {
        caseLink.addEventListener('click', openCaseModal);
    }
    
    // Cerrar con overlay
    modalOverlay?.addEventListener('click', closeCaseModal);
    
    // Cerrar con botón X
    modalCloseBtn?.addEventListener('click', closeCaseModal);
    
    // Cerrar con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && caseModal?.classList.contains('active')) {
            closeCaseModal();
        }
    });
    
    // Prevenir cierre al hacer clic dentro
    const modalContent = caseModal?.querySelector('.proyecto-detail-modal-content');
    modalContent?.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    console.log('✅ Modal Herramientas CASE inicializado');
});
</script>

<!-- ========================================
     MODAL HERRAMIENTAS DE PLANIFICACIÓN
======================================== -->
<div id="planificacionModal" class="proyecto-detail-modal">
    <div class="proyecto-detail-modal-overlay"></div>
    <div class="proyecto-detail-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Header del Modal -->
        <div class="modal-header-proyecto">
            <div class="modal-icon-proyecto">
                <i class="fas fa-calendar-alt"></i>
            </div>
            <h2 class="modal-title-proyecto">Herramientas de Planificación de Proyectos</h2>
            <p class="modal-subtitle-proyecto">Análisis comparativo de herramientas para la gestión efectiva de proyectos de software</p>
        </div>
        
        <div class="proyecto-detail-content">
            
            <!-- Imagen Hero -->
            <div class="proyecto-hero-image">
                <img src="https://images.unsplash.com/photo-1454165804606-c3d57bc86b40?w=1400&h=500&fit=crop" 
                     alt="Herramientas de Planificación">
            </div>
            
            <!-- Descripción Principal -->
            <div class="info-section mb-4">
                <h3><i class="fas fa-info-circle me-3"></i>¿Por qué son importantes?</h3>
                <p class="lead-text">
                    Las herramientas de planificación son fundamentales para el éxito de cualquier proyecto de software. 
                    Permiten visualizar tareas, gestionar recursos, establecer dependencias y realizar seguimiento del progreso 
                    mediante técnicas como Diagramas de Gantt y PERT/CPM, facilitando la toma de decisiones y el cumplimiento 
                    de plazos.
                </p>
            </div>

            <!-- Herramientas Analizadas -->
            <div class="features-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-tools"></i>
                    Herramientas Analizadas
                </h3>
                <div class="row g-4">
                    
                    <!-- Microsoft Project -->
                    <div class="col-md-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fab fa-microsoft"></i>
                            </div>
                            <h5>Microsoft Project</h5>
                            <p>Herramienta profesional líder en gestión de proyectos empresariales complejos</p>
                            <div class="mt-3">
                                <span class="tech-tag"><i class="fas fa-star"></i> Profesional</span>
                                <span class="tech-tag"><i class="fas fa-dollar-sign"></i> Pago</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ProjectLibre -->
                    <div class="col-md-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h5>ProjectLibre</h5>
                            <p>Alternativa open source poderosa y accesible para equipos y estudiantes</p>
                            <div class="mt-3">
                                <span class="tech-tag"><i class="fas fa-code"></i> Open Source</span>
                                <span class="tech-tag"><i class="fas fa-gift"></i> Gratis</span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ClickUp -->
                    <div class="col-md-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-mouse-pointer"></i>
                            </div>
                            <h5>ClickUp</h5>
                            <p>Plataforma moderna y colaborativa ideal para equipos ágiles y dinámicos</p>
                            <div class="mt-3">
                                <span class="tech-tag"><i class="fas fa-users"></i> Colaborativo</span>
                                <span class="tech-tag"><i class="fas fa-cloud"></i> Cloud</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Comparativa de Características -->
            <div class="comparison-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-balance-scale"></i>
                    Comparativa de Características
                </h3>
                <div class="table-responsive">
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>Característica</th>
                                <th><i class="fab fa-microsoft"></i> Microsoft Project</th>
                                <th><i class="fas fa-project-diagram"></i> ProjectLibre</th>
                                <th><i class="fas fa-mouse-pointer"></i> ClickUp</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Costo</strong></td>
                                <td>$10+/mes</td>
                                <td><span class="badge-success">Gratuito</span></td>
                                <td>Desde $5/mes</td>
                            </tr>
                            <tr>
                                <td><strong>Diagramas de Gantt</strong></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr>
                                <td><strong>PERT/CPM</strong></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-warning"></i> Básico</td>
                            </tr>
                            <tr>
                                <td><strong>Colaboración en Tiempo Real</strong></td>
                                <td><i class="fas fa-check text-warning"></i> Limitado</td>
                                <td><i class="fas fa-times text-danger"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                            </tr>
                            <tr>
                                <td><strong>Curva de Aprendizaje</strong></td>
                                <td><span class="badge-danger">Alta</span></td>
                                <td><span class="badge-warning">Moderada</span></td>
                                <td><span class="badge-success">Baja</span></td>
                            </tr>
                            <tr>
                                <td><strong>Plataformas</strong></td>
                                <td>Windows, Web</td>
                                <td>Windows, Mac, Linux</td>
                                <td>Web, iOS, Android</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Ventajas y Desventajas -->
            <div class="pros-cons-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-list-check"></i>
                    Ventajas y Desventajas
                </h3>
                <div class="row g-4">
                    
                    <!-- Microsoft Project -->
                    <div class="col-lg-4">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fab fa-microsoft"></i>
                                <h4>Microsoft Project</h4>
                            </div>
                            <div class="pros-section">
                                <h5><i class="fas fa-thumbs-up"></i> Ventajas</h5>
                                <ul>
                                    <li>Integración con Microsoft 365</li>
                                    <li>Funcionalidades avanzadas</li>
                                    <li>Gestión completa de recursos</li>
                                    <li>Reportes profesionales</li>
                                </ul>
                            </div>
                            <div class="cons-section">
                                <h5><i class="fas fa-thumbs-down"></i> Desventajas</h5>
                                <ul>
                                    <li>Costo elevado</li>
                                    <li>Curva de aprendizaje pronunciada</li>
                                    <li>Requiere instalación</li>
                                    <li>Excesivo para proyectos pequeños</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ProjectLibre -->
                    <div class="col-lg-4">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fas fa-project-diagram"></i>
                                <h4>ProjectLibre</h4>
                            </div>
                            <div class="pros-section">
                                <h5><i class="fas fa-thumbs-up"></i> Ventajas</h5>
                                <ul>
                                    <li>100% gratuito y open source</li>
                                    <li>Compatible con MS Project</li>
                                    <li>Multiplataforma</li>
                                    <li>Sin límites de usuarios</li>
                                </ul>
                            </div>
                            <div class="cons-section">
                                <h5><i class="fas fa-thumbs-down"></i> Desventajas</h5>
                                <ul>
                                    <li>Interfaz menos moderna</li>
                                    <li>Sin colaboración en tiempo real</li>
                                    <li>Rendimiento en proyectos grandes</li>
                                    <li>Soporte comunitario limitado</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                    <!-- ClickUp -->
                    <div class="col-lg-4">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fas fa-mouse-pointer"></i>
                                <h4>ClickUp</h4>
                            </div>
                            <div class="pros-section">
                                <h5><i class="fas fa-thumbs-up"></i> Ventajas</h5>
                                <ul>
                                    <li>Interfaz intuitiva y moderna</li>
                                    <li>Colaboración en tiempo real</li>
                                    <li>Múltiples integraciones</li>
                                    <li>Flexible y escalable</li>
                                </ul>
                            </div>
                            <div class="cons-section">
                                <h5><i class="fas fa-thumbs-down"></i> Desventajas</h5>
                                <ul>
                                    <li>Plan gratuito limitado</li>
                                    <li>Puede ser abrumador</li>
                                    <li>PERT/CPM menos avanzado</li>
                                    <li>Requiere conexión a internet</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

            <!-- Caso Práctico -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-flask me-3"></i>Caso Práctico: Proyecto de Software</h3>
                <p class="lead-text mb-4">
                    Se planificó un proyecto completo de desarrollo de software utilizando ProjectLibre, 
                    abarcando desde el análisis de requerimientos hasta el mantenimiento.
                </p>
                
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="case-result-card">
                            <i class="fas fa-calendar-check"></i>
                            <div>
                                <h5>Duración del Proyecto</h5>
                                <p><strong>125 días</strong> sin mantenimiento</p>
                                <p><strong>490 días</strong> con mantenimiento</p>
                                <small>Inicio: 22 sep 2025 - Fin: 6 ago 2027</small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="case-result-card">
                            <i class="fas fa-route"></i>
                            <div>
                                <h5>Ruta Crítica Identificada</h5>
                                <p>8 tareas críticas encadenadas:</p>
                                <small>Análisis → Diseño → Backend → Pruebas → Integración → Ajustes → Despliegue</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Recomendaciones -->
            <div class="recommendations-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-lightbulb"></i>
                    Recomendaciones de Uso
                </h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="recommendation-card">
                            <div class="rec-icon" style="background: linear-gradient(135deg, #0066FF, #0052cc);">
                                <i class="fab fa-microsoft"></i>
                            </div>
                            <h5>Usa Microsoft Project si:</h5>
                            <ul>
                                <li>Gestionas proyectos grandes y complejos</li>
                                <li>Necesitas integración con Microsoft 365</li>
                                <li>Requieres reportes avanzados</li>
                                <li>Tienes presupuesto disponible</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="recommendation-card">
                            <div class="rec-icon" style="background: linear-gradient(135deg, #28a745, #20873a);">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h5>Usa ProjectLibre si:</h5>
                            <ul>
                                <li>Tienes presupuesto limitado</li>
                                <li>Necesitas compatibilidad con MS Project</li>
                                <li>Prefieres software open source</li>
                                <li>Trabajas en proyectos académicos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="recommendation-card">
                            <div class="rec-icon" style="background: linear-gradient(135deg, #8a2be2, #6a1bb2);">
                                <i class="fas fa-mouse-pointer"></i>
                            </div>
                            <h5>Usa ClickUp si:</h5>
                            <ul>
                                <li>Priorizas la colaboración en equipo</li>
                                <li>Necesitas metodologías ágiles</li>
                                <li>Buscas una interfaz moderna</li>
                                <li>Requieres múltiples integraciones</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Técnicas de Planificación -->
            <div class="techniques-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-chart-gantt"></i>
                    Técnicas de Planificación Implementadas
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="technique-card">
                            <div class="technique-header">
                                <i class="fas fa-chart-bar"></i>
                                <h4>Diagrama de Gantt</h4>
                            </div>
                            <p><strong>¿Qué es?</strong></p>
                            <p>Representación gráfica del cronograma del proyecto que muestra las tareas, sus duraciones y dependencias en una línea de tiempo.</p>
                            <p><strong>Beneficios:</strong></p>
                            <ul>
                                <li>Visualización clara del timeline</li>
                                <li>Identificación de solapamientos</li>
                                <li>Seguimiento del progreso</li>
                                <li>Comunicación efectiva con stakeholders</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="technique-card">
                            <div class="technique-header">
                                <i class="fas fa-project-diagram"></i>
                                <h4>PERT/CPM</h4>
                            </div>
                            <p><strong>¿Qué es?</strong></p>
                            <p>Técnica de evaluación y revisión de proyectos que identifica la ruta crítica y optimiza los tiempos de ejecución.</p>
                            <p><strong>Beneficios:</strong></p>
                            <ul>
                                <li>Identificación de tareas críticas</li>
                                <li>Optimización de recursos</li>
                                <li>Cálculo de holguras</li>
                                <li>Reducción de riesgos</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipo -->
            <div class="team-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users-cog"></i>
                    Equipo de Desarrollo
                </h3>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="images/joel.jpeg" alt="Joel Espinoza" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Joel Espinoza</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/alesso.jpeg" alt="Alessandro González" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Alessandro González</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/david.jpeg" alt="David López" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>David López</strong>
                        <span>Frontend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/cris.jpeg" alt="Christopher Paucar" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Christopher Paucar</strong>
                        <span>Backend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/jade.jpeg" alt="Jade Ramírez" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Jade Ramírez</strong>
                        <span>Mobile Developer</span>
                    </div>
                </div>
            </div>

            <div class="video-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-video"></i>
                    Daily Meeting SCRUM (Ejemplo)
                </h3>
                <div class="video-wrapper" style="position:relative;padding-bottom:56.25%;height:0;overflow:hidden;">
                    <iframe 
                        src="https://www.youtube.com/embed/WmHtzP5BgG0" 
                        title="Daily Meeting SCRUM Example" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen
                        style="position:absolute;top:0;left:0;width:100%;height:100%;">
                    </iframe>
                </div>
            </div>

            <!-- Conclusiones -->
            <div class="info-section">
                <h3><i class="fas fa-check-circle me-3"></i>Conclusiones</h3>
                <p class="lead-text">
                    La elección de la herramienta de planificación depende del contexto específico del proyecto: 
                    <strong>Microsoft Project</strong> es ideal para proyectos empresariales complejos, 
                    <strong>ProjectLibre</strong> ofrece una alternativa gratuita y efectiva para proyectos medianos, 
                    y <strong>ClickUp</strong> destaca en equipos ágiles que priorizan la colaboración.
                </p>
                <p class="lead-text">
                    Las tres herramientas permiten crear Diagramas de Gantt y PERT/CPM efectivos, 
                    pero difieren en características avanzadas, facilidad de uso y modelo de costos.
                </p>
            </div>

        </div>
    </div>
</div>

<script>
// ========================================
// MODAL HERRAMIENTAS DE PLANIFICACIÓN
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const planificacionModal = document.getElementById('planificacionModal');
    const modalOverlay = planificacionModal?.querySelector('.proyecto-detail-modal-overlay');
    const modalCloseBtn = planificacionModal?.querySelector('.modal-close-btn');
    
    // Abrir modal
    function openPlanificacionModal(e) {
        if (e) e.preventDefault();
        if (planificacionModal) {
            planificacionModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Cerrar modal
    function closePlanificacionModal() {
        if (planificacionModal) {
            planificacionModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
    
    // Event listener para el enlace del header
    const planificacionLink = document.getElementById('openPlanificacionModal');
    if (planificacionLink) {
        planificacionLink.addEventListener('click', openPlanificacionModal);
    }
    
    // Cerrar con overlay
    modalOverlay?.addEventListener('click', closePlanificacionModal);
    
    // Cerrar con botón X
    modalCloseBtn?.addEventListener('click', closePlanificacionModal);
    
    // Cerrar con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && planificacionModal?.classList.contains('active')) {
            closePlanificacionModal();
        }
    });
    
    // Prevenir cierre al hacer clic dentro
    const modalContent = planificacionModal?.querySelector('.proyecto-detail-modal-content');
    modalContent?.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    console.log('✅ Modal Herramientas de Planificación inicializado');
});
</script>


<!-- ========================================
     MODAL PENPOT
======================================== -->
<div id="penpotModal" class="proyecto-detail-modal">
    <div class="proyecto-detail-modal-overlay"></div>
    <div class="proyecto-detail-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Header del Modal -->
        <div class="modal-header-proyecto">
            <div class="modal-icon-proyecto">
                <i class="fas fa-palette"></i>
            </div>
            <h2 class="modal-title-proyecto">Penpot</h2>
            <p class="modal-subtitle-proyecto">Herramienta de diseño open source para UI/UX - Alternativa libre y colaborativa</p>
        </div>
        
        <div class="proyecto-detail-content">
            
            <!-- Imagen Hero -->
            <div class="proyecto-hero-image">
                <img src="https://images.unsplash.com/photo-1561070791-2526d30994b5?w=1400&h=500&fit=crop" 
                     alt="Penpot Design Tool">
            </div>
            <!-- Video Demostración -->
            <div class="video-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-play-circle"></i>
                    Video Demostración
                </h3>
                <div class="video-container">
                    <iframe 
                    src="https://drive.google.com/file/d/1MlzVksW5Eoou_GwZTdXkFGtgJHvRjUH_/preview"
                    title="Penpot Tutorial"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen>
                    </iframe>

                </div>
                <p class="video-description">
                    <i class="fas fa-info-circle me-2"></i>
                    Tutorial completo sobre cómo usar Penpot para diseño de interfaces
                </p>
            </div>
            <!-- Descripción Principal -->
            <div class="info-section mb-4">
                <h3><i class="fas fa-info-circle me-3"></i>¿Qué es Penpot?</h3>
                <p class="lead-text">
                    Penpot es una herramienta de diseño de interfaces y prototipado completamente basada en la web. 
                    Es una alternativa open source que permite crear, compartir y colaborar en proyectos de UI/UX de 
                    manera ágil y eficiente, sin depender de licencias de pago ni plataformas propietarias.
                </p>
                <p class="lead-text">
                    A diferencia de herramientas como Figma o Adobe XD, Penpot utiliza tecnologías web estándar 
                    (SVG, HTML y CSS), facilitando la integración directa con flujos de trabajo de desarrollo front-end.
                </p>
            </div>

            <!-- Historia y Origen -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-history me-3"></i>Historia y Origen</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">2020</div>
                            <h5>Nacimiento del Proyecto</h5>
                            <p>Desarrollado por <strong>Kaleidos</strong>, cooperativa tecnológica en Madrid (España), 
                            como una iniciativa interna para crear una alternativa abierta a las herramientas de diseño existentes.</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">2021</div>
                            <h5>Reconocimiento Internacional</h5>
                            <p>Tras la adquisición de Figma por Adobe, miles de profesionales buscaron alternativas libres. 
                            Penpot se consolidó como uno de los proyectos de diseño open source más relevantes a nivel mundial.</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Problema y Solución -->
            <div class="row g-4 mb-5">
                <div class="col-md-6">
                    <div class="problem-card">
                        <div class="card-icon-header">
                            <i class="fas fa-exclamation-triangle"></i>
                            <h4>Problemas de las Herramientas Propietarias</h4>
                        </div>
                        <ul class="problem-list">
                            <li><i class="fas fa-times-circle"></i> Licencias de pago restrictivas</li>
                            <li><i class="fas fa-times-circle"></i> Dependencia de plataformas propietarias</li>
                            <li><i class="fas fa-times-circle"></i> Falta de control sobre los datos</li>
                            <li><i class="fas fa-times-circle"></i> Limitaciones de integración con desarrollo</li>
                            <li><i class="fas fa-times-circle"></i> Poca transparencia en actualizaciones</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="solution-card">
                        <div class="card-icon-header success">
                            <i class="fas fa-check-circle"></i>
                            <h4>La Solución: Penpot</h4>
                        </div>
                        <ul class="solution-list">
                            <li><i class="fas fa-check"></i> 100% gratuito y open source (AGPL)</li>
                            <li><i class="fas fa-check"></i> Sin dependencia de proveedores</li>
                            <li><i class="fas fa-check"></i> Autoalojamiento en servidores propios</li>
                            <li><i class="fas fa-check"></i> Tecnologías web estándar (SVG, CSS)</li>
                            <li><i class="fas fa-check"></i> Comunidad activa y transparente</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Características Principales -->
            <div class="features-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-star"></i>
                    Características Principales
                </h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-code-branch"></i>
                            </div>
                            <h5>Open Source</h5>
                            <p>Código abierto bajo licencia AGPL, completamente transparente y modificable</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5>Colaboración Real Time</h5>
                            <p>Varios usuarios trabajando simultáneamente en el mismo proyecto</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-globe"></i>
                            </div>
                            <h5>100% Web</h5>
                            <p>Funciona desde cualquier navegador sin instalación</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-project-diagram"></i>
                            </div>
                            <h5>Prototipado</h5>
                            <p>Creación de interacciones y flujos de navegación funcionales</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-cubes"></i>
                            </div>
                            <h5>Componentes</h5>
                            <p>Gestión de componentes y bibliotecas reutilizables</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-code"></i>
                            </div>
                            <h5>Exportación CSS</h5>
                            <p>Exporta recursos y estilos directamente en CSS</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-moon"></i>
                            </div>
                            <h5>Modo Oscuro</h5>
                            <p>Interfaz personalizable según preferencias visuales</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-server"></i>
                            </div>
                            <h5>Autoalojable</h5>
                            <p>Instala Penpot en tu propio servidor para control total</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comparativa con Otras Herramientas -->
            <div class="comparison-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-balance-scale"></i>
                    Comparativa con Otras Herramientas
                </h3>
                <div class="table-responsive">
                    <table class="comparison-table">
                        <thead>
                            <tr>
                                <th>Característica</th>
                                <th><i class="fas fa-palette"></i> Penpot</th>
                                <th><i class="fab fa-figma"></i> Figma</th>
                                <th><i class="fab fa-adobe"></i> Adobe XD</th>
                                <th>Sketch</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Licencia</strong></td>
                                <td><span class="badge-success">Gratis (Open Source)</span></td>
                                <td>Privativa (plan limitado)</td>
                                <td>Privativa</td>
                                <td>Privativa (solo macOS)</td>
                            </tr>
                            <tr>
                                <td><strong>Colaboración Real Time</strong></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-success"></i></td>
                                <td><i class="fas fa-check text-warning"></i> Parcial</td>
                                <td><i class="fas fa-check text-warning"></i> Parcial</td>
                            </tr>
                            <tr>
                                <td><strong>Plataforma</strong></td>
                                <td>Web y autoalojable</td>
                                <td>Web / Escritorio</td>
                                <td>Win y macOS</td>
                                <td>Solo macOS</td>
                            </tr>
                            <tr>
                                <td><strong>Propiedad de Datos</strong></td>
                                <td><span class="badge-success">Usuario (servidor propio)</span></td>
                                <td>Nube de Figma</td>
                                <td>Nube de Adobe</td>
                                <td>Nube de Sketch</td>
                            </tr>
                            <tr>
                                <td><strong>Integración Dev</strong></td>
                                <td><i class="fas fa-check text-success"></i> Plugins y API</td>
                                <td><i class="fas fa-check text-success"></i> Amplia</td>
                                <td><i class="fas fa-check text-warning"></i> Limitadas</td>
                                <td><i class="fas fa-check text-warning"></i> Algunas</td>
                            </tr>
                            <tr>
                                <td><strong>Costo</strong></td>
                                <td><span class="badge-success">$0</span></td>
                                <td>Pago mensual</td>
                                <td>Suscripción Adobe</td>
                                <td>Pago único o suscripción</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Ventajas y Desventajas -->
            <div class="pros-cons-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-list-check"></i>
                    Ventajas y Desventajas
                </h3>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fas fa-thumbs-up"></i>
                                <h4>Ventajas</h4>
                            </div>
                            <ul class="pros-section">
                                <li><i class="fas fa-check"></i> Completamente gratuito sin licencias comerciales</li>
                                <li><i class="fas fa-check"></i> Trabajo colaborativo en tiempo real a distancia</li>
                                <li><i class="fas fa-check"></i> Comunidad activa en constante crecimiento</li>
                                <li><i class="fas fa-check"></i> Independencia tecnológica y control de datos</li>
                                <li><i class="fas fa-check"></i> Tecnologías web estándar (SVG, HTML, CSS)</li>
                                <li><i class="fas fa-check"></i> Instalable en servidor propio (self-hosted)</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fas fa-thumbs-down"></i>
                                <h4>Desventajas</h4>
                            </div>
                            <ul class="cons-section">
                                <li><i class="fas fa-times"></i> Menor madurez que Figma o Adobe XD</li>
                                <li><i class="fas fa-times"></i> Número limitado de plugins y extensiones</li>
                                <li><i class="fas fa-times"></i> Requiere buena conexión a internet (al ser web)</li>
                                <li><i class="fas fa-times"></i> Curva de aprendizaje si vienes de otras herramientas</li>
                                <li><i class="fas fa-times"></i> Ecosistema de plugins más pequeño</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Casos de Uso -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-lightbulb me-3"></i>Casos de Uso</h3>
                <div class="use-cases-grid">
                    <div class="use-case-card">
                        <div class="use-case-icon">
                            <i class="fas fa-desktop"></i>
                        </div>
                        <h5>Diseño de Interfaces (UI)</h5>
                        <p>Crea pantallas completas, botones, menús e íconos con coherencia visual. 
                        Ejemplo: Diseño de aplicación bancaria con pantallas de login y panel principal.</p>
                    </div>
                    <div class="use-case-card">
                        <div class="use-case-icon">
                            <i class="fas fa-user-friends"></i>
                        </div>
                        <h5>Experiencia de Usuario (UX)</h5>
                        <p>Facilita la creación de flujos de navegación y análisis de interacción. 
                        Ejemplo: Recorrido desde página principal hasta compra final en e-commerce.</p>
                    </div>
                    <div class="use-case-card">
                        <div class="use-case-icon">
                            <i class="fas fa-handshake"></i>
                        </div>
                        <h5>Colaboración Diseño-Desarrollo</h5>
                        <p>Los diseños se exportan a SVG o CSS para integración directa en proyectos web. 
                        El diseñador crea en Penpot, el dev implementa en HTML/CSS.</p>
                    </div>
                    <div class="use-case-card">
                        <div class="use-case-icon">
                            <i class="fas fa-graduation-cap"></i>
                        </div>
                        <h5>Educación y Academia</h5>
                        <p>Ideal para enseñanza de diseño UI/UX sin costos de licencia. 
                        Ejemplo: Universidades que enseñan diseño digital usando Penpot.</p>
                    </div>
                    <div class="use-case-card">
                        <div class="use-case-icon">
                            <i class="fas fa-rocket"></i>
                        </div>
                        <h5>Startups y Open Source</h5>
                        <p>Permite independencia tecnológica y autoalojamiento. 
                        Ejemplo: Startup instala Penpot en servidor interno para diseñar su app.</p>
                    </div>
                </div>
            </div>

            <!-- Planes Disponibles -->
            <div class="pricing-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-dollar-sign"></i>
                    Planes Disponibles
                </h3>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="pricing-card">
                            <div class="pricing-header">
                                <i class="fas fa-user"></i>
                                <h4>Profesional</h4>
                                <div class="price">$0</div>
                                <span class="price-label">Gratis</span>
                            </div>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check"></i> Hasta 8 miembros del equipo</li>
                                <li><i class="fas fa-check"></i> 10 GB de almacenamiento</li>
                                <li><i class="fas fa-check"></i> 7 días de versiones guardadas</li>
                                <li><i class="fas fa-check"></i> Colaboración en tiempo real</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-card featured">
                            <div class="featured-badge">Popular</div>
                            <div class="pricing-header">
                                <i class="fas fa-users"></i>
                                <h4>Ilimitado</h4>
                                <div class="price">$7</div>
                                <span class="price-label">por editor/mes</span>
                            </div>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check"></i> Miembros ilimitados</li>
                                <li><i class="fas fa-check"></i> 25 GB de almacenamiento</li>
                                <li><i class="fas fa-check"></i> 30 días de versiones</li>
                                <li><i class="fas fa-check"></i> Recuperación de archivos</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="pricing-card">
                            <div class="pricing-header">
                                <i class="fas fa-building"></i>
                                <h4>Empresa</h4>
                                <div class="price">$950</div>
                                <span class="price-label">por org/mes</span>
                            </div>
                            <ul class="pricing-features">
                                <li><i class="fas fa-check"></i> Almacenamiento ilimitado</li>
                                <li><i class="fas fa-check"></i> 90 días de versiones</li>
                                <li><i class="fas fa-check"></i> Facturación fija</li>
                                <li><i class="fas fa-check"></i> Soporte prioritario</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Curva de Aprendizaje -->
            <div class="learning-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-chart-line"></i>
                    Curva de Aprendizaje
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="learning-card">
                            <div class="learning-header">
                                <i class="fas fa-paint-brush"></i>
                                <h4>Para Diseñadores</h4>
                            </div>
                            <div class="learning-content">
                                <p><strong>Interfaz similar a Figma/Adobe XD:</strong> Facilita la adaptación inicial para diseñadores acostumbrados a estas herramientas.</p>
                                <p><strong>Atajos y gestos distintos:</strong> Algunos comandos no son idénticos, puede haber fricción inicial.</p>
                                <div class="time-estimate">
                                    <i class="fas fa-clock"></i>
                                    <div>
                                        <strong>Tiempo de adaptación:</strong>
                                        <p>Con experiencia previa: <span class="badge-success">Días a semanas</span></p>
                                        <p>Principiantes: <span class="badge-warning">Semanas a meses</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="learning-card">
                            <div class="learning-header">
                                <i class="fas fa-code"></i>
                                <h4>Para Desarrolladores</h4>
                            </div>
                            <div class="learning-content">
                                <p><strong>Estructura basada en estándares:</strong> Trabajar con SVG y CSS permite que el modelo mental sea más técnico y compatible con desarrollo web.</p>
                                <p><strong>Flex Layout (similar a Flexbox):</strong> Facilita adaptación a desarrolladores familiarizados con Flexbox CSS.</p>
                                <div class="time-estimate">
                                    <i class="fas fa-rocket"></i>
                                    <div>
                                        <strong>Ventaja clave:</strong>
                                        <p>Curva más suave para devs que dominan HTML/CSS, fomenta trabajo conjunto con diseñadores.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Comunidad -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-users-cog me-3"></i>Comunidad y Ecosistema</h3>
                <p class="lead-text mb-4">
                    Penpot cuenta con una comunidad global muy activa que impulsa su desarrollo continuo.
                </p>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="community-feature">
                            <i class="fab fa-discord"></i>
                            <strong>Foros y Discord</strong>
                            <span>Soporte comunitario activo</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="community-feature">
                            <i class="fas fa-puzzle-piece"></i>
                            <strong>Plugins</strong>
                            <span>Exportadores, iconos, componentes</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="community-feature">
                            <i class="fab fa-github"></i>
                            <strong>GitHub</strong>
                            <span>Contribuciones y CI/CD</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="community-feature">
                            <i class="fas fa-book"></i>
                            <strong>Documentación</strong>
                            <span>Abierta y multiidioma</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="community-feature">
                            <i class="fas fa-calendar-alt"></i>
                            <strong>Eventos</strong>
                            <span>Talleres y charlas</span>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="community-feature">
                            <i class="fas fa-language"></i>
                            <strong>Global</strong>
                            <span>Comunidad internacional</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipo -->
            <div class="team-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users-cog"></i>
                    Equipo de Desarrollo
                </h3>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="images/joel.jpeg" alt="Joel Espinoza" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Joel Espinoza</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/alesso.jpeg" alt="Alessandro González" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Alessandro González</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/david.jpeg" alt="David López" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>David López</strong>
                        <span>Frontend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/cris.jpeg" alt="Christopher Paucar" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Christopher Paucar</strong>
                        <span>Backend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/jade.jpeg" alt="Jade Ramírez" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Jade Ramírez</strong>
                        <span>Mobile Developer</span>
                    </div>
                </div>
            </div>

            <!-- Conclusiones -->
            <div class="info-section">
                <h3><i class="fas fa-check-circle me-3"></i>Conclusiones</h3>
                <p class="lead-text">
                    Penpot se consolida como una alternativa sólida y libre dentro del ecosistema de herramientas de diseño UI/UX. 
                    Su enfoque colaborativo, compatibilidad con tecnologías web y filosofía open source la posicionan como una opción 
                    viable frente a plataformas comerciales.
                </p>
                <p class="lead-text">
                    El diseño de calidad no depende de herramientas de pago, sino del trabajo colaborativo, la creatividad y la innovación abierta. 
                    Penpot demuestra que es posible crear soluciones profesionales sin depender de licencias privativas.
                </p>
            </div>

            <!-- Enlaces y Recursos -->
            <div class="resources-section mt-5">
                <h3 class="section-title">
                    <i class="fas fa-link"></i>
                    Recursos del Proyecto
                </h3>
                <div class="resource-buttons">
                    <a href="https://penpot.app" target="_blank" class="resource-btn blog">
                        <i class="fas fa-globe"></i>
                        <span>Sitio Oficial de Penpot</span>
                    </a>
                    <a href="https://help.penpot.app/" target="_blank" class="resource-btn presentation">
                        <i class="fas fa-book"></i>
                        <span>Documentación Oficial</span>
                    </a>
                    <a href="https://www.canva.com/design/DAG0gYwEDHM/4h_ZT1XhZHhjEvTHrVCQHA/view" target="_blank" class="resource-btn presentation">
                        <i class="fas fa-presentation"></i>
                        <span>Ver Presentación</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// ========================================
// MODAL PENPOT
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const penpotModal = document.getElementById('penpotModal');
    const modalOverlay = penpotModal?.querySelector('.proyecto-detail-modal-overlay');
    const modalCloseBtn = penpotModal?.querySelector('.modal-close-btn');
    
    // Abrir modal
    function openPenpotModal(e) {
        if (e) e.preventDefault();
        if (penpotModal) {
            penpotModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Cerrar modal
    function closePenpotModal() {
        if (penpotModal) {
            penpotModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
    
    // Event listener para el enlace del header
    const penpotLink = document.getElementById('openPenpotModal');
    if (penpotLink) {
        penpotLink.addEventListener('click', openPenpotModal);
    }
    
    // Cerrar con overlay
    modalOverlay?.addEventListener('click', closePenpotModal);
    
    // Cerrar con botón X
    modalCloseBtn?.addEventListener('click', closePenpotModal);
    
    // Cerrar con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && penpotModal?.classList.contains('active')) {
            closePenpotModal();
        }
    });
    
    // Prevenir cierre al hacer clic dentro
    const modalContent = penpotModal?.querySelector('.proyecto-detail-modal-content');
    modalContent?.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    console.log('✅ Modal Penpot inicializado');
});
</script>

<!-- ========================================
     MODAL MOVIPASS - DESARROLLO DE LA APP
======================================== -->
<div id="movipassModal" class="proyecto-detail-modal">
    <div class="proyecto-detail-modal-overlay"></div>
    <div class="proyecto-detail-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Header del Modal -->
        <div class="modal-header-proyecto">
            <div class="modal-icon-proyecto">
                <i class="fas fa-bus"></i>
            </div>
            <h2 class="modal-title-proyecto">MoviPass - Desarrollo Completo</h2>
            <p class="modal-subtitle-proyecto">Sistema integral de gestión y venta de pasajes interprovinciales</p>
        </div>
        
        <div class="proyecto-detail-content">
            
            <!-- Imagen Hero -->
            <div class="proyecto-hero-image">
                <img src="https://images.unsplash.com/photo-1544620347-c4fd4a3d5957?w=1400&h=500&fit=crop" 
                     alt="MoviPass Development">
            </div>
            
            <!-- Descripción Principal -->
            <div class="info-section mb-4">
                <h3><i class="fas fa-rocket me-3"></i>Visión del Proyecto</h3>
                <p class="lead-text">
                    MoviPass revoluciona el transporte interprovincial en Ecuador mediante una plataforma 
                    completa que digitaliza la venta de pasajes, optimiza la gestión operativa y mejora 
                    la experiencia del usuario final con tecnologías modernas y metodologías ágiles.
                </p>
            </div>

            <!-- Stack Tecnológico -->
            <div class="tech-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-code"></i>
                    Stack Tecnológico
                </h3>
                <div class="tech-grid">
                    <div class="tech-item">
                        <i class="fab fa-react"></i>
                        <div>
                            <strong>React + TypeScript</strong>
                            <span>Frontend Web</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-node-js"></i>
                        <div>
                            <strong>Node.js + Express</strong>
                            <span>Backend API</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-database"></i>
                        <div>
                            <strong>MySQL</strong>
                            <span>Base de Datos</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-react"></i>
                        <div>
                            <strong>React Native</strong>
                            <span>Apps Móviles</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fab fa-paypal"></i>
                        <div>
                            <strong>PayPal SDK</strong>
                            <span>Pagos Online</span>
                        </div>
                    </div>
                    <div class="tech-item">
                        <i class="fas fa-shield-alt"></i>
                        <div>
                            <strong>JWT + Bcrypt</strong>
                            <span>Seguridad</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Arquitectura del Sistema -->
            <div class="features-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-sitemap"></i>
                    Arquitectura del Sistema
                </h3>
                <div class="row g-3">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-desktop"></i>
                            </div>
                            <h5>Aplicación Web</h5>
                            <p>Panel administrativo para cooperativas y oficinistas</p>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-qrcode"></i>
                            </div>
                            <h5>App Validador</h5>
                            <p>Escaneo y validación de boletos digitales</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-server"></i>
                            </div>
                            <h5>API RESTful</h5>
                            <p>Backend centralizado con endpoints seguros</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Metodología Ágil -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-sync-alt me-3"></i>Metodología Ágil - SCRUM</h3>
                <div class="methodology-content">
                    <div class="scrum-badge">
                        <i class="fas fa-running"></i>
                        <span>Desarrollo en Sprints</span>
                    </div>
                    <p class="lead-text">
                        El proyecto se desarrolló en <strong>8 sprints de 7-14 días</strong>, permitiendo 
                        entregas iterativas y adaptación continua. Cada sprint incluyó planificación, desarrollo, 
                        revisión y retrospectiva, garantizando calidad y alineación con los objetivos.
                    </p>
                    <div class="sprint-info">
                        <div class="sprint-stat">
                            <h4>8</h4>
                            <p>Sprints</p>
                        </div>
                        <div class="sprint-stat">
                            <h4>75</h4>
                            <p>Días</p>
                        </div>
                        <div class="sprint-stat">
                            <h4>5</h4>
                            <p>Desarrolladores</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Fases del Proyecto -->
            <div class="phases-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-tasks"></i>
                    Fases del Desarrollo
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">Sprint 1-2</div>
                            <h5>Análisis y Diseño</h5>
                            <p>Levantamiento de requisitos, diseño de arquitectura, modelado de base de datos y prototipos visuales</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">Sprint 3-5</div>
                            <h5>Desarrollo Backend</h5>
                            <p>API RESTful, autenticación JWT, integración con PayPal, gestión de cooperativas y frecuencias</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">Sprint 4-6</div>
                            <h5>Desarrollo Frontend</h5>
                            <p>Interfaces administrativas, sistema de compra de boletos, selección de asientos y dashboard</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">Sprint 6-7</div>
                            <h5>Apps Móviles</h5>
                            <p>Aplicación para usuarios finales y app de validación para choferes con lectura QR</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">Sprint 7-8</div>
                            <h5>Pruebas y Despliegue</h5>
                            <p>Testing integral, corrección de bugs, optimización y lanzamiento en producción</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Roles del Sistema -->
            <div class="users-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users"></i>
                    Roles del Sistema
                </h3>
                <div class="row g-4">
                    <div class="col-md-3">
                        <div class="user-type-card">
                            <div class="user-icon">
                                <i class="fas fa-user-shield"></i>
                            </div>
                            <h4>Administrador</h4>
                            <p>Gestión completa de cooperativas, rutas y configuración del sistema</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user-type-card">
                            <div class="user-icon">
                                <i class="fas fa-user-tie"></i>
                            </div>
                            <h4>Oficinista</h4>
                            <p>Venta de boletos, atención al cliente y gestión de frecuencias</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user-type-card">
                            <div class="user-icon">
                                <i class="fas fa-user"></i>
                            </div>
                            <h4>Cliente</h4>
                            <p>Búsqueda de rutas, compra de pasajes y visualización de boletos</p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="user-type-card">
                            <div class="user-icon">
                                <i class="fas fa-clipboard-check"></i>
                            </div>
                            <h4>Validador</h4>
                            <p>Escaneo y validación de boletos al momento del embarque</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Beneficios Clave -->
            <div class="benefits-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-trophy"></i>
                    Beneficios del Sistema
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-clock"></i>
                            <div>
                                <h5>Reducción de Tiempos</h5>
                                <p>Elimina filas y agiliza el proceso de compra hasta en un 80%</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-shield-alt"></i>
                            <div>
                                <h5>Mayor Seguridad</h5>
                                <p>Autenticación robusta y validación digital con código QR</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-chart-line"></i>
                            <div>
                                <h5>Control Operativo</h5>
                                <p>Dashboard con métricas en tiempo real y reportes detallados</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="benefit-card">
                            <i class="fas fa-mobile-alt"></i>
                            <div>
                                <h5>Acceso Multiplataforma</h5>
                                <p>Disponible en web, iOS y Android para máxima cobertura</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Equipo de Desarrollo -->
            <div class="team-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users-cog"></i>
                    Equipo de Desarrollo
                </h3>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="images/joel.jpeg" alt="Joel Espinoza" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Joel Espinoza</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/alesso.jpeg" alt="Alessandro González" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Alessandro González</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/david.jpeg" alt="David López" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>David López</strong>
                        <span>Frontend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/cris.jpeg" alt="Christopher Paucar" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Christopher Paucar</strong>
                        <span>Backend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/jade.jpeg" alt="Jade Ramírez" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Jade Ramírez</strong>
                        <span>Mobile Developer</span>
                    </div>
                </div>
            </div>

            <!-- Enlaces y Recursos -->
            <div class="resources-section">
                <h3 class="section-title">
                    <i class="fas fa-link"></i>
                    Recursos del Proyecto
                </h3>
                <div class="resource-buttons">
                    <a href="https://tech-industries-proy-das.atlassian.net/wiki/x/AIEO" target="_blank" class="resource-btn blog">
                        <i class="fas fa-book"></i>
                        <span>Documentación Confluence</span>
                    </a>
                    <a href="https://blogpresentacion.onrender.com/" target="_blank" class="resource-btn presentation">
                        <i class="fas fa-blog"></i>
                        <span>Blog del Proyecto</span>
                    </a>
                    <a href="https://www.canva.com/design/DAGy_0H5N4Q/Wvv_nhfJGYs1oJ1Y90mbtg/view" target="_blank" class="resource-btn presentation">
                        <i class="fas fa-presentation"></i>
                        <span>Presentación</span>
                    </a>
                    <a href="https://design.penpot.app/#/view?file-id=aadbbc88-0e4c-80b8-8006-f1722535374a&page-id=bd830f34-5ac9-8161-8006-bcc05e13058b&section=interactions&index=0&share-id=aadbbc88-0e4c-80b8-8006-f2bcef4620e6" target="_blank" class="resource-btn design">
                        <i class="fas fa-palette"></i>
                        <span>Diseño en Penpot</span>
                    </a>
                    <a href="#" class="resource-btn github disabled" title="Repositorio privado">
                        <i class="fab fa-github"></i>
                        <span>Código Fuente (Privado)</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// ========================================
// MODAL MOVIPASS
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const movipassModal = document.getElementById('movipassModal');
    const modalOverlay = movipassModal?.querySelector('.proyecto-detail-modal-overlay');
    const modalCloseBtn = movipassModal?.querySelector('.modal-close-btn');
    
    // Abrir modal
    function openMovipassModal(e) {
        if (e) e.preventDefault();
        if (movipassModal) {
            movipassModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Cerrar modal
    function closeMovipassModal() {
        if (movipassModal) {
            movipassModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
    
    // Event listener para abrir desde el Tech Lab
    const movipassLink = document.getElementById('openMovipassModal');
    if (movipassLink) {
        movipassLink.addEventListener('click', openMovipassModal);
    }
    
    // Cerrar con overlay
    modalOverlay?.addEventListener('click', closeMovipassModal);
    
    // Cerrar con botón X
    modalCloseBtn?.addEventListener('click', closeMovipassModal);
    
    // Cerrar con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && movipassModal?.classList.contains('active')) {
            closeMovipassModal();
        }
    });
    
    // Prevenir cierre al hacer clic dentro
    const modalContent = movipassModal?.querySelector('.proyecto-detail-modal-content');
    modalContent?.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    console.log('✅ Modal MoviPass inicializado');
});

// NUEVO: Manejar clic en "MoviPass" para abrir modal
const openMovipassModalBtn = document.getElementById('openMovipassModalHeader');
if(openMovipassModalBtn) {
    openMovipassModalBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const movipassModal = document.getElementById('movipassModal');
        if(movipassModal) {
            movipassModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    });
}

// NUEVO: Manejar clic en "Herramientas de Planificación" para abrir modal
const openPlanificacionModalBtn = document.getElementById('openPlanificacionModal');
if(openPlanificacionModalBtn) {
    openPlanificacionModalBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const planificacionModal = document.getElementById('planificacionModal');
        if(planificacionModal) {
            planificacionModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    });
}

// NUEVO: Manejar clic en "Penpot" para abrir modal
const openPenpotModalBtn = document.getElementById('openPenpotModal');
if(openPenpotModalBtn) {
    openPenpotModalBtn.addEventListener('click', function(e) {
        e.preventDefault();
        const penpotModal = document.getElementById('penpotModal');
        if(penpotModal) {
            penpotModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    });
}
</script>


<!-- ========================================
     MODAL DEVOPS & CI/CD
======================================== -->
<div id="devOpsModal" class="proyecto-detail-modal">
    <div class="proyecto-detail-modal-overlay"></div>
    <div class="proyecto-detail-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Header del Modal -->
        <div class="modal-header-proyecto">
            <div class="modal-icon-proyecto">
                <i class="fas fa-infinity"></i>
            </div>
            <h2 class="modal-title-proyecto">DevOps & CI/CD</h2>
            <p class="modal-subtitle-proyecto">Integración y Despliegue Continuo - Cultura de colaboración entre desarrollo y operaciones</p>
        </div>
        
        <div class="proyecto-detail-content">
            
            <!-- Imagen Hero -->
            <div class="proyecto-hero-image">
                <img src="https://images.unsplash.com/photo-1667372393119-3d4c48d07fc9?w=1400&h=500&fit=crop" 
                     alt="DevOps CI/CD">
            </div>
            


            <!-- Descripción Principal -->
            <div class="info-section mb-4">
                <h3><i class="fas fa-info-circle me-3"></i>¿Qué es DevOps?</h3>
                <p class="lead-text">
                    DevOps es una <strong>filosofía de trabajo, cultura organizativa y conjunto de prácticas</strong> 
                    que busca integrar de manera fluida el desarrollo de software (Development) con las operaciones 
                    de TI (Operations). Su propósito principal es entregar software de forma <strong>rápida, confiable, 
                    segura y continua</strong>, reduciendo errores, fallas en producción y retrasos en los despliegues.
                </p>
                <p class="lead-text">
                    A diferencia de los métodos tradicionales donde desarrollo y operaciones trabajaban de manera 
                    separada, DevOps promueve la <strong>colaboración constante, responsabilidad compartida y 
                    automatización de tareas repetitivas</strong>.
                </p>
            </div>

            <!-- Historia -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-history me-3"></i>Historia de DevOps</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">2008</div>
                            <h5>Nacimiento de DevOps</h5>
                            <p>
                                El consultor belga <strong>Patrick Debois</strong> organizó la primera conferencia 
                                "DevOps Days" en Bélgica, consolidando el concepto que combina "Development" y "Operations". 
                                El objetivo: crear una cultura de colaboración para entregar software de manera más 
                                rápida y confiable.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">2010-2015</div>
                            <h5>Adopción Masiva</h5>
                            <p>
                                Empresas líderes como <strong>Amazon, Netflix, Google y Facebook</strong> adoptaron 
                                DevOps para desplegar cientos de actualizaciones diarias sin comprometer la estabilidad. 
                                Surge el auge de herramientas de CI/CD, contenedores (Docker) y orquestadores (Kubernetes).
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="timeline-card">
                            <div class="timeline-year">Actualidad</div>
                            <h5>DevOps Moderno</h5>
                            <p>
                                DevOps se ha consolidado como un enfoque global que incluye prácticas de monitoreo 
                                constante, resiliencia, seguridad (DevSecOps) y automatización avanzada. Se está 
                                integrando con inteligencia artificial para hacer procesos más inteligentes, 
                                predictivos y eficientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Características Principales -->
            <div class="features-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-star"></i>
                    Características Principales
                </h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5>Colaboración Continua</h5>
                            <p>Comunicación constante entre desarrolladores, operadores y demás involucrados en el proyecto</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-robot"></i>
                            </div>
                            <h5>Automatización</h5>
                            <p>Reduce tareas manuales y repetitivas en compilación, prueba y despliegue del software</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <h5>Integración y Entrega Continua</h5>
                            <p>Software que se construye, prueba y publica de forma rápida y constante</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5>Monitoreo Constante</h5>
                            <p>Supervisión del comportamiento de aplicaciones para detectar y resolver errores</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-code"></i>
                            </div>
                            <h5>Infraestructura como Código</h5>
                            <p>Gestión de entornos mediante archivos de configuración para consistencia y rapidez</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h5>DevSecOps</h5>
                            <p>Controles de seguridad integrados en todo el ciclo de desarrollo</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Infografía CI/CD -->
            <div class="infografia-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-project-diagram"></i>
                    Integración y Distribución Continua (CI/CD)
                </h3>
                <div class="infografia-container">
                    <img src="images/Integracion YDistribucionContinuaCICD.png" 
                         alt="Integración y Distribución Continua CI/CD" 
                         class="infografia-image">
                    <p class="infografia-description">
                        <i class="fas fa-info-circle me-2"></i>
                        Diagrama del flujo de trabajo CI/CD en DevOps
                    </p>
                </div>
            </div>

            <!-- Metodología -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-project-diagram me-3"></i>Metodología DevOps</h3>
                <p class="lead-text mb-4">
                    La metodología DevOps combina los principios de las metodologías ágiles con la automatización 
                    y la integración continua. El proceso general sigue estas etapas:
                </p>
                <div class="devops-cycle">
                    <div class="cycle-step">
                        <div class="step-number">1</div>
                        <h5>Planificación</h5>
                        <p>Definición de objetivos y tareas, priorizando la comunicación entre equipos</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">2</div>
                        <h5>Codificación</h5>
                        <p>Desarrollo aplicando buenas prácticas y control de versiones</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">3</div>
                        <h5>Integración Continua</h5>
                        <p>Cambios integrados automáticamente con pruebas para evitar errores</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">4</div>
                        <h5>Entrega Continua</h5>
                        <p>Software preparado para despliegue automático tras superar pruebas</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">5</div>
                        <h5>Despliegue</h5>
                        <p>Implementación segura y controlada en entornos de producción</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">6</div>
                        <h5>Monitoreo</h5>
                        <p>Análisis de resultados y rendimiento del sistema</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">7</div>
                        <h5>Retroalimentación</h5>
                        <p>Recopilación de comentarios para optimización continua</p>
                    </div>
                </div>
            </div>

            <!-- Herramientas DevOps -->
            <div class="tools-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-toolbox"></i>
                    Herramientas DevOps Esenciales
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fab fa-git-alt"></i>
                                <h4>Control de Versiones</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Git</strong>
                                <p>Sistema distribuido compatible con GitHub, GitLab y Bitbucket</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fas fa-sync"></i>
                                <h4>CI/CD</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Jenkins</strong>
                                <p>+1,900 plugins, Pipeline-as-Code, altamente personalizable</p>
                            </div>
                            <div class="tool-item">
                                <strong>GitLab CI/CD</strong>
                                <p>Integrado con GitLab, fácil de usar, configuración YAML</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fas fa-cogs"></i>
                                <h4>Gestión de Configuración</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Ansible</strong>
                                <p>Automatiza configuración de sistemas usando YAML, sin agentes</p>
                            </div>
                            <div class="tool-item">
                                <strong>Puppet</strong>
                                <p>Popular en entornos empresariales, configuraciones declarativas</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fab fa-docker"></i>
                                <h4>Contenedores y Orquestación</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Docker</strong>
                                <p>Plataforma para crear y ejecutar aplicaciones en contenedores</p>
                            </div>
                            <div class="tool-item">
                                <strong>Kubernetes</strong>
                                <p>Orquestador de contenedores con escalado y gestión automática</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fas fa-chart-bar"></i>
                                <h4>Monitoreo</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Prometheus</strong>
                                <p>Monitorización basada en métricas, ideal para Kubernetes</p>
                            </div>
                            <div class="tool-item">
                                <strong>Grafana</strong>
                                <p>Visualización de métricas y creación de dashboards</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fas fa-shield-alt"></i>
                                <h4>Seguridad (DevSecOps)</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Snyk</strong>
                                <p>Escaneo de vulnerabilidades en dependencias de código</p>
                            </div>
                            <div class="tool-item">
                                <strong>SonarQube</strong>
                                <p>Análisis estático de código para detectar errores</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ventajas y Desventajas -->
            <div class="pros-cons-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-balance-scale"></i>
                    Ventajas y Desventajas
                </h3>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fas fa-thumbs-up"></i>
                                <h4>Ventajas</h4>
                            </div>
                            <ul class="pros-section">
                                <li><i class="fas fa-check"></i> Entrega continua y más rápida del software</li>
                                <li><i class="fas fa-check"></i> Mejora la colaboración entre equipos</li>
                                <li><i class="fas fa-check"></i> Incrementa estabilidad y calidad del software</li>
                                <li><i class="fas fa-check"></i> Automatiza procesos reduciendo errores humanos</li>
                                <li><i class="fas fa-check"></i> Adaptación rápida a cambios del mercado</li>
                                <li><i class="fas fa-check"></i> Optimiza recursos y reduce costos operativos</li>
                                <li><i class="fas fa-check"></i> Monitoreo constante y retroalimentación continua</li>
                                <li><i class="fas fa-check"></i> Cultura de mejora continua e innovación</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fas fa-thumbs-down"></i>
                                <h4>Desventajas</h4>
                            </div>
                            <ul class="cons-section">
                                <li><i class="fas fa-times"></i> Requiere cambio cultural complejo</li>
                                <li><i class="fas fa-times"></i> Curva de aprendizaje en herramientas</li>
                                <li><i class="fas fa-times"></i> Dependencia de automatización bien configurada</li>
                                <li><i class="fas fa-times"></i> Riesgo de seguridad si no se integra correctamente</li>
                                <li><i class="fas fa-times"></i> Costos iniciales altos para infraestructura</li>
                                <li><i class="fas fa-times"></i> Posibles conflictos de roles y responsabilidades</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusiones -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-check-circle me-3"></i>Conclusiones</h3>
                <div class="conclusions-grid">
                    <div class="conclusion-item">
                        <i class="fas fa-arrow-right"></i>
                        <p>DevOps representa un paradigma transformador al integrar desarrollo y operaciones en un flujo colaborativo y automatizado</p>
                    </div>
                    <div class="conclusion-item">
                        <i class="fas fa-arrow-right"></i>
                        <p>Las metodologías y herramientas DevOps mejoran significativamente la eficiencia, calidad y velocidad en la entrega de software</p>
                    </div>
                    <div class="conclusion-item">
                        <i class="fas fa-arrow-right"></i>
                        <p>Impulsa la transformación digital permitiendo responder rápidamente a cambios del mercado</p>
                    </div>
                    <div class="conclusion-item">
                        <i class="fas fa-arrow-right"></i>
                        <p>Su implementación requiere preparación adecuada: capacitación, cambio cultural y gestión de riesgos</p>
                    </div>
                </div>
            </div>

            <!-- Equipo -->
            <div class="team-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users-cog"></i>
                    Equipo de Desarrollo
                </h3>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="images/joel.jpeg" alt="Joel Espinoza" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Joel Espinoza</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/alesso.jpeg" alt="Alessandro González" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Alessandro González</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/david.jpeg" alt="David López" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>David López</strong>
                        <span>Frontend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/cris.jpeg" alt="Christopher Paucar" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Christopher Paucar</strong>
                        <span>Backend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/jade.jpeg" alt="Jade Ramírez" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Jade Ramírez</strong>
                        <span>Mobile Developer</span>
                    </div>
                </div>
            </div>

            <!-- Video Explicativo CI/CD -->
            <div class="video-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-play-circle"></i>
                    Video Explicativo: CI/CD en la Práctica
                </h3>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/iroj36h5-FA"
                        title="CI/CD Explicación"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <p class="video-description">
                    <i class="fas fa-info-circle me-2"></i>
                    Video explicativo de Integración y Despliegue Continuo (CI/CD)
                </p>
            </div>

            <!-- Enlaces y Recursos -->
            <div class="resources-section">
                <h3 class="section-title">
                    <i class="fas fa-link"></i>
                    Recursos del Proyecto
                </h3>
                <div class="resource-buttons">
                    <a href="https://www.canva.com/design/DAG2Xd_8S0s/PbohdMPS4PV7ucUFrtTbXg/view" target="_blank" class="resource-btn presentation">
                        <i class="fas fa-image"></i>
                        <span>Ver Infografía Completa</span>
                    </a>
                    <a href="https://www.youtube.com/watch?v=iroj36h5-FA" target="_blank" class="resource-btn blog">
                        <i class="fab fa-youtube"></i>
                        <span>Ver Video en YouTube</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ========================================
     MODAL DEVOPS & CI/CD
======================================== -->
<div id="devOpsModal" class="proyecto-detail-modal">
    <div class="proyecto-detail-modal-overlay"></div>
    <div class="proyecto-detail-modal-content">
        <button class="modal-close-btn" type="button" aria-label="Cerrar modal">
            <i class="fas fa-times"></i>
        </button>
        
        <!-- Header del Modal -->
        <div class="modal-header-proyecto">
            <div class="modal-icon-proyecto">
                <i class="fas fa-infinity"></i>
            </div>
            <h2 class="modal-title-proyecto">DevOps & CI/CD</h2>
            <p class="modal-subtitle-proyecto">Integración y Despliegue Continuo - Cultura de colaboración entre desarrollo y operaciones</p>
        </div>
        
        <div class="proyecto-detail-content">
            
            <!-- Imagen Hero -->
            <div class="proyecto-hero-image">
                <img src="https://images.unsplash.com/photo-1667372393119-3d4c48d07fc9?w=1400&h=500&fit=crop" 
                     alt="DevOps CI/CD">
            </div>
            
            <!-- Descripción Principal -->
            <div class="info-section mb-4">
                <h3><i class="fas fa-info-circle me-3"></i>¿Qué es DevOps?</h3>
                <p class="lead-text">
                    DevOps es una <strong>filosofía de trabajo, cultura organizativa y conjunto de prácticas</strong> 
                    que busca integrar de manera fluida el desarrollo de software (Development) con las operaciones 
                    de TI (Operations). Su propósito principal es entregar software de forma <strong>rápida, confiable, 
                    segura y continua</strong>, reduciendo errores, fallas en producción y retrasos en los despliegues.
                </p>
                <p class="lead-text">
                    A diferencia de los métodos tradicionales donde desarrollo y operaciones trabajaban de manera 
                    separada, DevOps promueve la <strong>colaboración constante, responsabilidad compartida y 
                    automatización de tareas repetitivas</strong>.
                </p>
            </div>

            <!-- Historia -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-history me-3"></i>Historia de DevOps</h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">2008</div>
                            <h5>Nacimiento de DevOps</h5>
                            <p>
                                El consultor belga <strong>Patrick Debois</strong> organizó la primera conferencia 
                                "DevOps Days" en Bélgica, consolidando el concepto que combina "Development" y "Operations". 
                                El objetivo: crear una cultura de colaboración para entregar software de manera más 
                                rápida y confiable.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="timeline-card">
                            <div class="timeline-year">2010-2015</div>
                            <h5>Adopción Masiva</h5>
                            <p>
                                Empresas líderes como <strong>Amazon, Netflix, Google y Facebook</strong> adoptaron 
                                DevOps para desplegar cientos de actualizaciones diarias sin comprometer la estabilidad. 
                                Surge el auge de herramientas de CI/CD, contenedores (Docker) y orquestadores (Kubernetes).
                            </p>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="timeline-card">
                            <div class="timeline-year">Actualidad</div>
                            <h5>DevOps Moderno</h5>
                            <p>
                                DevOps se ha consolidado como un enfoque global que incluye prácticas de monitoreo 
                                constante, resiliencia, seguridad (DevSecOps) y automatización avanzada. Se está 
                                integrando con inteligencia artificial para hacer procesos más inteligentes, 
                                predictivos y eficientes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Características Principales -->
            <div class="features-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-star"></i>
                    Características Principales
                </h3>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-users"></i>
                            </div>
                            <h5>Colaboración Continua</h5>
                            <p>Comunicación constante entre desarrolladores, operadores y demás involucrados en el proyecto</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-robot"></i>
                            </div>
                            <h5>Automatización</h5>
                            <p>Reduce tareas manuales y repetitivas en compilación, prueba y despliegue del software</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-sync-alt"></i>
                            </div>
                            <h5>Integración y Entrega Continua</h5>
                            <p>Software que se construye, prueba y publica de forma rápida y constante</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-chart-line"></i>
                            </div>
                            <h5>Monitoreo Constante</h5>
                            <p>Supervisión del comportamiento de aplicaciones para detectar y resolver errores</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-code"></i>
                            </div>
                            <h5>Infraestructura como Código</h5>
                            <p>Gestión de entornos mediante archivos de configuración para consistencia y rapidez</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="feature-card-modern">
                            <div class="feature-icon-modern">
                                <i class="fas fa-shield-alt"></i>
                            </div>
                            <h5>DevSecOps</h5>
                            <p>Controles de seguridad integrados en todo el ciclo de desarrollo</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Infografía CI/CD -->
            <div class="infografia-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-project-diagram"></i>
                    Integración y Distribución Continua (CI/CD)
                </h3>
                <div class="infografia-container">
                    <img src="images/Integracion YDistribucionContinuaCICD.png" 
                         alt="Integración y Distribución Continua CI/CD" 
                         class="infografia-image">
                    <p class="infografia-description">
                        <i class="fas fa-info-circle me-2"></i>
                        Diagrama del flujo de trabajo CI/CD en DevOps
                    </p>
                </div>
            </div>

            <!-- Metodología -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-project-diagram me-3"></i>Metodología DevOps</h3>
                <p class="lead-text mb-4">
                    La metodología DevOps combina los principios de las metodologías ágiles con la automatización 
                    y la integración continua. El proceso general sigue estas etapas:
                </p>
                <div class="devops-cycle">
                    <div class="cycle-step">
                        <div class="step-number">1</div>
                        <h5>Planificación</h5>
                        <p>Definición de objetivos y tareas, priorizando la comunicación entre equipos</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">2</div>
                        <h5>Codificación</h5>
                        <p>Desarrollo aplicando buenas prácticas y control de versiones</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">3</div>
                        <h5>Integración Continua</h5>
                        <p>Cambios integrados automáticamente con pruebas para evitar errores</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">4</div>
                        <h5>Entrega Continua</h5>
                        <p>Software preparado para despliegue automático tras superar pruebas</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">5</div>
                        <h5>Despliegue</h5>
                        <p>Implementación segura y controlada en entornos de producción</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">6</div>
                        <h5>Monitoreo</h5>
                        <p>Análisis de resultados y rendimiento del sistema</p>
                    </div>
                    <div class="cycle-step">
                        <div class="step-number">7</div>
                        <h5>Retroalimentación</h5>
                        <p>Recopilación de comentarios para optimización continua</p>
                    </div>
                </div>
            </div>

            <!-- Herramientas DevOps -->
            <div class="tools-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-toolbox"></i>
                    Herramientas DevOps Esenciales
                </h3>
                <div class="row g-4">
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fab fa-git-alt"></i>
                                <h4>Control de Versiones</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Git</strong>
                                <p>Sistema distribuido compatible con GitHub, GitLab y Bitbucket</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fas fa-sync"></i>
                                <h4>CI/CD</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Jenkins</strong>
                                <p>+1,900 plugins, Pipeline-as-Code, altamente personalizable</p>
                            </div>
                            <div class="tool-item">
                                <strong>GitLab CI/CD</strong>
                                <p>Integrado con GitLab, fácil de usar, configuración YAML</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fas fa-cogs"></i>
                                <h4>Gestión de Configuración</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Ansible</strong>
                                <p>Automatiza configuración de sistemas usando YAML, sin agentes</p>
                            </div>
                            <div class="tool-item">
                                <strong>Puppet</strong>
                                <p>Popular en entornos empresariales, configuraciones declarativas</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fab fa-docker"></i>
                                <h4>Contenedores y Orquestación</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Docker</strong>
                                <p>Plataforma para crear y ejecutar aplicaciones en contenedores</p>
                            </div>
                            <div class="tool-item">
                                <strong>Kubernetes</strong>
                                <p>Orquestador de contenedores con escalado y gestión automática</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fas fa-chart-bar"></i>
                                <h4>Monitoreo</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Prometheus</strong>
                                <p>Monitorización basada en métricas, ideal para Kubernetes</p>
                            </div>
                            <div class="tool-item">
                                <strong>Grafana</strong>
                                <p>Visualización de métricas y creación de dashboards</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="tool-category-card">
                            <div class="tool-category-header">
                                <i class="fas fa-shield-alt"></i>
                                <h4>Seguridad (DevSecOps)</h4>
                            </div>
                            <div class="tool-item">
                                <strong>Snyk</strong>
                                <p>Escaneo de vulnerabilidades en dependencias de código</p>
                            </div>
                            <div class="tool-item">
                                <strong>SonarQube</strong>
                                <p>Análisis estático de código para detectar errores</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ventajas y Desventajas -->
            <div class="pros-cons-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-balance-scale"></i>
                    Ventajas y Desventajas
                </h3>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fas fa-thumbs-up"></i>
                                <h4>Ventajas</h4>
                            </div>
                            <ul class="pros-section">
                                <li><i class="fas fa-check"></i> Entrega continua y más rápida del software</li>
                                <li><i class="fas fa-check"></i> Mejora la colaboración entre equipos</li>
                                <li><i class="fas fa-check"></i> Incrementa estabilidad y calidad del software</li>
                                <li><i class="fas fa-check"></i> Automatiza procesos reduciendo errores humanos</li>
                                <li><i class="fas fa-check"></i> Adaptación rápida a cambios del mercado</li>
                                <li><i class="fas fa-check"></i> Optimiza recursos y reduce costos operativos</li>
                                <li><i class="fas fa-check"></i> Monitoreo constante y retroalimentación continua</li>
                                <li><i class="fas fa-check"></i> Cultura de mejora continua e innovación</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="tool-analysis-card">
                            <div class="tool-header">
                                <i class="fas fa-thumbs-down"></i>
                                <h4>Desventajas</h4>
                            </div>
                            <ul class="cons-section">
                                <li><i class="fas fa-times"></i> Requiere cambio cultural complejo</li>
                                <li><i class="fas fa-times"></i> Curva de aprendizaje en herramientas</li>
                                <li><i class="fas fa-times"></i> Dependencia de automatización bien configurada</li>
                                <li><i class="fas fa-times"></i> Riesgo de seguridad si no se integra correctamente</li>
                                <li><i class="fas fa-times"></i> Costos iniciales altos para infraestructura</li>
                                <li><i class="fas fa-times"></i> Posibles conflictos de roles y responsabilidades</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Conclusiones -->
            <div class="info-section mb-5">
                <h3><i class="fas fa-check-circle me-3"></i>Conclusiones</h3>
                <div class="conclusions-grid">
                    <div class="conclusion-item">
                        <i class="fas fa-arrow-right"></i>
                        <p>DevOps representa un paradigma transformador al integrar desarrollo y operaciones en un flujo colaborativo y automatizado</p>
                    </div>
                    <div class="conclusion-item">
                        <i class="fas fa-arrow-right"></i>
                        <p>Las metodologías y herramientas DevOps mejoran significativamente la eficiencia, calidad y velocidad en la entrega de software</p>
                    </div>
                    <div class="conclusion-item">
                        <i class="fas fa-arrow-right"></i>
                        <p>Impulsa la transformación digital permitiendo responder rápidamente a cambios del mercado</p>
                    </div>
                    <div class="conclusion-item">
                        <i class="fas fa-arrow-right"></i>
                        <p>Su implementación requiere preparación adecuada: capacitación, cambio cultural y gestión de riesgos</p>
                    </div>
                </div>
            </div>

            <!-- Equipo -->
            <div class="team-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-users-cog"></i>
                    Equipo de Desarrollo
                </h3>
                <div class="team-grid">
                    <div class="team-member">
                        <img src="images/joel.jpeg" alt="Joel Espinoza" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Joel Espinoza</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/alesso.jpeg" alt="Alessandro González" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Alessandro González</strong>
                        <span>Full Stack Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/david.jpeg" alt="David López" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>David López</strong>
                        <span>Frontend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/cris.jpeg" alt="Christopher Paucar" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Christopher Paucar</strong>
                        <span>Backend Developer</span>
                    </div>
                    <div class="team-member">
                        <img src="images/jade.jpeg" alt="Jade Ramírez" style="width:90px;height:90px;border-radius:50%;object-fit:cover;">
                        <strong>Jade Ramírez</strong>
                        <span>Mobile Developer</span>
                    </div>
                </div>
            </div>

            <!-- Video Explicativo CI/CD -->
            <div class="video-section mb-5">
                <h3 class="section-title">
                    <i class="fas fa-play-circle"></i>
                    Video Explicativo: CI/CD en la Práctica
                </h3>
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/iroj36h5-FA"
                        title="CI/CD Explicación"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen>
                    </iframe>
                </div>
                <p class="video-description">
                    <i class="fas fa-info-circle me-2"></i>
                    Explicación de Integración y Despliegue Continuo (CI/CD)
                </p>
            </div>

            <!-- Enlaces y Recursos -->
            <div class="resources-section">
                <h3 class="section-title">
                    <i class="fas fa-link"></i>
                    Recursos del Proyecto
                </h3>
                <div class="resource-buttons">
                    <a href="https://www.canva.com/design/DAG2Xd_8S0s/PbohdMPS4PV7ucUFrtTbXg/view" target="_blank" class="resource-btn presentation">
                        <i class="fas fa-image"></i>
                        <span>Ver Infografía Completa</span>
                    
                    <a href="https://www.youtube.com/watch?v=iroj36h5-FA" target="_blank" class="resource-btn blog">
                        <i class="fab fa-youtube"></i>
                        <span>Ver Video en YouTube</span>
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
// ========================================
// MODAL DEVOPS & CI/CD
// ========================================
document.addEventListener('DOMContentLoaded', function() {
    const devOpsModal = document.getElementById('devOpsModal');
    const modalOverlay = devOpsModal?.querySelector('.proyecto-detail-modal-overlay');
    const modalCloseBtn = devOpsModal?.querySelector('.modal-close-btn');
    
    // Abrir modal
    function openDevOpsModal(e) {
        if (e) e.preventDefault();
        if (devOpsModal) {
            devOpsModal.classList.add('active');
            document.body.style.overflow = 'hidden';
        }
    }
    
    // Cerrar modal
    function closeDevOpsModal() {
        if (devOpsModal) {
            devOpsModal.classList.remove('active');
            document.body.style.overflow = 'auto';
        }
    }
    
    // Event listener para el enlace del header
    const devOpsLink = document.getElementById('openDevOpsModal');
    if (devOpsLink) {
        devOpsLink.addEventListener('click', openDevOpsModal);
    }
    
    // Cerrar con overlay
    modalOverlay?.addEventListener('click', closeDevOpsModal);
    
    // Cerrar con botón X
    modalCloseBtn?.addEventListener('click', closeDevOpsModal);
    
    // Cerrar con ESC
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && devOpsModal?.classList.contains('active')) {
            closeDevOpsModal();
        }
    });
    
    // Prevenir cierre al hacer clic dentro
    const modalContent = devOpsModal?.querySelector('.proyecto-detail-modal-content');
    modalContent?.addEventListener('click', function(e) {
        e.stopPropagation();
    });
    
    console.log('✅ Modal DevOps & CI/CD inicializado');
});
</script>
