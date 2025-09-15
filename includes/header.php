<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="index.php">
            <img src="images/logo.jpeg" alt="Logo Tu Empresa" class="logo-small">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#home">Inicio</a></li>
                <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                <li class="nav-item"><a class="nav-link" href="#equipo">Equipo</a></li>
                <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
            </ul>
        </div>
    </div>
</nav>

<style>
.logo-small {
    height: 150px;
    width: auto;
}

.navbar {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1030;
    padding: 0.5rem 1rem;
    font-size: 1.1rem; /* tamaño base de las letras del navbar */
}

.navbar .nav-link {
    font-size: 1.2rem; /* letras más grandes */
    font-weight: 500;  /* un poco más gruesas */
    padding: 0.5rem 1rem; /* más espacio para hacer click */
    transition: color 0.3s, transform 0.3s;
}

.navbar .nav-link:hover {
    color: #00a86b; /* jade */
    transform: scale(1.1); /* efecto sutil al pasar el mouse */
}

body {
    padding-top: 80px; /* ajustado según altura del navbar */
}
</style>
