<?php include 'includes/header.php'; ?>

<section class="contacto-hero py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="section-title fw-bold mb-4">¿Listo para impulsar tu negocio?</h1>
                <p class="lead mb-4">Estamos aquí para ayudarte a alcanzar tus objetivos. Contáctanos hoy mismo y comencemos a trabajar juntos en tu próximo proyecto.</p>
                <div class="d-flex align-items-center mb-4">
                    <div class="contact-icon-box me-3">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div>
                        <p class="mb-0 text-muted">Llámanos</p>
                        <h5 class="mb-0">(123) 456-7890</h5>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="contact-icon-box me-3">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div>
                        <p class="mb-0 text-muted">Escríbenos</p>
                        <h5 class="mb-0">info@tuempresa.com</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <img src="assets/img/contact-illustration.svg" alt="Contacto" class="img-fluid">
            </div>
        </div>
    </div>
</section>

<section class="contacto-form py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card shadow-lg border-0 rounded-lg">
                    <div class="card-body p-5">
                        <h2 class="text-center mb-4">Envíanos un mensaje</h2>
                        <form action="#" method="POST" id="contactForm">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Tu nombre" required>
                                        <label for="nombre">Nombre completo</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" name="email" placeholder="tu@email.com" required>
                                        <label for="email">Correo electrónico</label>
                                    </div>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="asunto" name="asunto" placeholder="Asunto" required>
                                    <label for="asunto">Asunto</label>
                                </div>
                            </div>
                            <div class="mb-4">
                                <div class="form-floating">
                                    <textarea class="form-control" id="mensaje" name="mensaje" style="height: 150px" placeholder="Tu mensaje" required></textarea>
                                    <label for="mensaje">Mensaje</label>
                                </div>
                            </div>
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">Enviar mensaje</button>
                            </div>
                            <div class="mt-3 text-center" id="formMessage"></div>
                        </form>
                        
                        <script>
                        document.getElementById('contactForm').addEventListener('submit', function(e) {
                            e.preventDefault();
                            
                            // En un caso real, aquí enviarías los datos a un servidor
                            // Por ahora, solo mostraremos un mensaje de éxito
                            
                            const formMessage = document.getElementById('formMessage');
                            formMessage.innerHTML = '<div class="alert alert-success">¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.</div>';
                            
                            // Limpiar el formulario
                            this.reset();
                            
                            // Desplazarse al mensaje
                            formMessage.scrollIntoView({ behavior: 'smooth' });
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contacto-mapa py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card shadow-sm border-0">
                    <div class="card-body p-0">
                        <div class="row g-0">
                            <div class="col-md-6">
                                <div class="p-4 p-lg-5">
                                    <h3 class="fw-bold mb-4">Visítanos</h3>
                                    <p class="mb-4">Estamos ubicados en el centro de la ciudad, con fácil acceso y estacionamiento disponible.</p>
                                    <div class="d-flex mb-3">
                                        <div class="contact-icon-box-sm me-3">
                                            <i class="fas fa-map-marker-alt"></i>
                                        </div>
                                        <p class="mb-0">Calle Principal 123, Ciudad</p>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <div class="contact-icon-box-sm me-3">
                                            <i class="fas fa-clock"></i>
                                        </div>
                                        <p class="mb-0">Lunes a Viernes: 9:00 AM - 6:00 PM</p>
                                    </div>
                                    <div class="mt-4">
                                        <h5 class="mb-3">Síguenos en redes sociales</h5>
                                        <div class="d-flex">
                                            <a href="#" class="social-icon me-2"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#" class="social-icon me-2"><i class="fab fa-twitter"></i></a>
                                            <a href="#" class="social-icon me-2"><i class="fab fa-instagram"></i></a>
                                            <a href="#" class="social-icon me-2"><i class="fab fa-linkedin-in"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="ratio ratio-4x3">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3037.6295075543387!2d-3.7035584846051795!3d40.41694597936409!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422997800a3c81%3A0xc436dec1618c2269!2sPuerta%20del%20Sol%2C%20Madrid%2C%20Spain!5e0!3m2!1sen!2ses!4v1650000000000" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<link rel="stylesheet" href="assets/css/contacto.css">

<?php include 'includes/footer.php'; ?>
