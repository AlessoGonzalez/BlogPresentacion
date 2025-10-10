<!-- Enlace header -->
<link rel="stylesheet" href="assets/css/header.css">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="images/logo.jpeg" alt="Logo Tu Empresa" class="logo-img">
            <span class="brand-text ms-2">TECH-INDUSTRIES</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto align-items-center">
                <li class="nav-item"><a class="nav-link" href="index.php#home">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#servicios">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#proyectos">Proyectos</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php#equipo">Equipo</a></li>
                 <!-- NUEVO: Tech Lab con dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="techLabDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-flask me-1"></i>Tech Lab
                    </a>
                    <ul class="dropdown-menu dropdown-menu-dark dropdown-menu-end tech-lab-dropdown" aria-labelledby="techLabDropdown">
                        <li class="dropdown-header">
                            <i class="fas fa-project-diagram me-2"></i>Proyectos & Informes
                        </li>
                        <li><hr class="dropdown-divider"></li>
                        <li>
                            <a class="dropdown-item" href="tech-lab/proyecto-pasajes-interprovinciales.php">
                                <i class="fas fa-bus me-2 text-primary"></i>
                                <div class="dropdown-item-content">
                                    <strong>Sistema de Pasajes</strong>
                                    <small class="d-block text-muted">Gestión Interprovincial</small>
                                </div>
                            </a>
                        </li>
                        <!-- NUEVO ITEM: Herramientas CASE -->
                        <li>
                            <a class="dropdown-item" href="#" id="openCaseModal">
                                <i class="fas fa-tools me-2 text-warning"></i>
                                <div class="dropdown-item-content">
                                    <strong>Herramientas CASE</strong>
                                    <small class="d-block text-muted">Ingeniería de Software</small>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#" id="openPlanificacionModal">
                                <i class="fas fa-calendar-alt me-2 text-info"></i>
                                <div class="dropdown-item-content">
                                    <strong>Herramientas de Planificación</strong>
                                    <small class="d-block text-muted">Gestión de Proyectos</small>
                                </div>
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="#" id="openPenpotModal">
                                <i class="fas fa-palette me-2 text-success"></i>
                                <div class="dropdown-item-content">
                                    <strong>Penpot</strong>
                                    <small class="d-block text-muted">Diseño UI/UX Open Source</small>
                                </div>
                            </a>
                        </li>
                    </ul>
                </li>
                
                <li class="nav-item"><a class="nav-link btn-contacto" href="index.php#contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<script>
// Smooth scroll con offset para evitar que el header tape el contenido
document.addEventListener('DOMContentLoaded', function() {
    const navbarHeight = 70;
    const offset = 20;
    
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const targetId = this.getAttribute('href');
            
            // Ignorar enlaces que abren modales o tienen otros propósitos
            if(targetId === '#' || this.hasAttribute('data-bs-toggle')) return;
            
            e.preventDefault();
            
            const targetElement = document.querySelector(targetId);
            
            if(targetElement) {
                const elementPosition = targetElement.getBoundingClientRect().top;
                const offsetPosition = elementPosition + window.pageYOffset - navbarHeight - offset;
                
                window.scrollTo({
                    top: offsetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Manejar clic en "Ver Todos los Proyectos" para abrir modal Tech Lab
    const openModalBtn = document.getElementById('openTechLabModal');
    if(openModalBtn) {
        openModalBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const techLabModal = document.getElementById('techLabModal');
            if(techLabModal) {
                techLabModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    }
    
    // NUEVO: Manejar clic en "Herramientas CASE" para abrir modal
    const openCaseModalBtn = document.getElementById('openCaseModal');
    if(openCaseModalBtn) {
        openCaseModalBtn.addEventListener('click', function(e) {
            e.preventDefault();
            const caseModal = document.getElementById('caseModal');
            if(caseModal) {
                caseModal.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    }
    
    console.log('✅ Header con Herramientas CASE inicializado correctamente');
});
</script>