<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Autos</title>
    <!-- Enlace a Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./styles/styles.css"> <!-- Archivo CSS adicional -->
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container d-flex justify-content-between align-items-center">
            <!-- Logo -->
            <div class="logo">
                <h1 class="h3 mb-0">MEJY</h1>
            </div>
            <!-- Íconos -->
            <div class="icons d-flex gap-3">
                <span class="icon fs-5" data-bs-toggle="modal" data-bs-target="#searchModal">🔍</span>
                <span class="icon fs-5" data-bs-toggle="offcanvas" data-bs-target="#notificationsSidebar" aria-controls="notificationsSidebar">🔔</span>
                <span class="icon fs-5" data-bs-toggle="offcanvas" data-bs-target="#profileSidebar" aria-controls="profileSidebar">👤</span>
                <!-- Botón de la Sidebar -->
                <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebar" aria-controls="sidebar">
                    ☰
                </button>
            </div>
        </div>
    </header>

    <!-- Search Modal -->
    <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="searchModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="searchModalLabel">Buscar</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="text" class="form-control" placeholder="Buscar...">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Buscar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifications Sidebar -->
    <div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="notificationsSidebar" aria-labelledby="notificationsSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="notificationsSidebarLabel">Notificaciones</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" data-bs-toggle="modal" data-bs-target="#notificationsModal">Notificaciones</a></li>
                <li><a href="#">Notificación 1</a></li>
                <li><a href="#">Notificación 2</a></li>
                <li><a href="#">Notificación 3</a></li>
            </ul>
        </div>
    </div>

    <!-- Profile Sidebar -->
    <div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="profileSidebar" aria-labelledby="profileSidebarLabel">
        <div class="offcanvas-header bg-primary text-white d-flex align-items-center">
            <i class="bi bi-person-circle fs-3 me-2"></i>
            <h5 class="offcanvas-title" id="profileSidebarLabel">Mi perfil</h5>
            <button type="button" class="btn-close btn-close-white ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" data-bs-toggle="modal" data-bs-target="#accountModal">Cuenta</a></li>
                <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" data-bs-toggle="modal" data-bs-target="#purchasesModal">Compras</a></li>
                <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" data-bs-toggle="offcanvas" data-bs-target="#notificationsSidebar" aria-controls="notificationsSidebar">Notificaciones</a></li>
                <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" id="logoutLink">Cerrar sesión</a></li>
            </ul>
        </div>
    </div>

    <!-- Sidebar -->
    <div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="sidebar" aria-labelledby="sidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="sidebarLabel">Filtros</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <!-- Sección Color -->
            <div class="mb-4">
                <h6 class="border-bottom pb-2">Color</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">Negro</a></li>
                    <li><a href="#" class="text-decoration-none">Blanco</a></li>
                    <li><a href="#" class="text-decoration-none">Rojo</a></li>
                </ul>
            </div>
            <!-- Sección Marca -->
            <div class="mb-4">
                <h6 class="border-bottom pb-2">Marca</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">Nissan</a></li>
                    <li><a href="#" class="text-decoration-none">Chevrolet</a></li>
                    <li><a href="#" class="text-decoration-none">Volkswagen</a></li>
                </ul>
            </div>
            <!-- Sección Año -->
            <div>
                <h6 class="border-bottom pb-2">Año</h6>
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none">2010</a></li>
                    <li><a href="#" class="text-decoration-none">2015</a></li>
                    <li><a href="#" class="text-decoration-none">2018</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Account Modal -->
    <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="accountModalLabel">Cuenta</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Información de la cuenta del usuario.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Purchases Modal -->
    <div class="modal fade" id="purchasesModal" tabindex="-1" aria-labelledby="purchasesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="purchasesModalLabel">Compras</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Historial de compras del usuario.</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Login/Register Sidebar -->
    <div class="offcanvas offcanvas-start bg-light" tabindex="-1" id="loginSidebar" aria-labelledby="loginSidebarLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="loginSidebarLabel">Iniciar sesión</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-unstyled">
                <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" data-bs-toggle="modal" data-bs-target="#loginModal">Iniciar sesión</a></li>
                <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</a></li>
            </ul>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Iniciar sesión</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="loginEmail" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="loginEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="loginPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="loginPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Registrarse</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label for="registerName" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="registerName" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerEmail" class="form-label">Correo electrónico</label>
                            <input type="email" class="form-control" id="registerEmail" required>
                        </div>
                        <div class="mb-3">
                            <label for="registerPassword" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="registerPassword" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Registrarse</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Notifications Modal -->
    <div class="modal fade" id="notificationsModal" tabindex="-1" aria-labelledby="notificationsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationsModalLabel">Notificaciones</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <ul class="list-unstyled">
                        <li><a href="#">Notificación 1</a></li>
                        <li><a href="#">Notificación 2</a></li>
                        <li><a href="#">Notificación 3</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex">
        <!-- Contenido principal -->
        <div class="content flex-grow-1">
            <!-- Contenido principal aquí -->
        </div>
    </div>
    <!-- Enlace a Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.getElementById('logoutLink').addEventListener('click', function() {
            // Simular cierre de sesión
            document.getElementById('profileSidebarLabel').innerText = 'Iniciar sesión';
            document.querySelector('#profileSidebar .offcanvas-body').innerHTML = `
                <ul class="list-unstyled">
                    <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" data-bs-toggle="offcanvas" data-bs-target="#loginSidebar" aria-controls="loginSidebar">Iniciar sesión</a></li>
                    <li><a href="#" class="text-decoration-none d-block py-2 border-bottom" data-bs-toggle="modal" data-bs-target="#registerModal">Registrarse</a></li>
                </ul>
            `;
        });
    </script>
</body>
</html>