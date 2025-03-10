<?php include './Views/header.php'; ?>

<main class="container my-5">
    <h1 class="text-center mb-4" id="mainTitle">Catálogo de Autos</h1>
    <!-- Botón para redirigir a otra página -->
    <div class="text-center">
        <a href="https://danielfashion.webcindario.com/pagina.php" id="redirectButton" class="btn btn-secondary mt-3">DanielFashion</a>
        <button id="languageButton" class="btn btn-secondary mt-3">Cambiar a Inglés</button>
    </div>
    <div class="container mt-5">
        <div class="row">
            <!-- Auto 1 -->
            <div class="col-md-4 mb-4">
                <img src="./images/Nissan_logo.png" style="width: 33%; height: auto;" class="d-block mx-auto"><p></p>
                <div class="card">
                    <img src="./images/auto1.jpg" class="card-img-top" alt="Auto 1" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Versa Drive 2024</h5>
                        <p class="card-text">Un sedán de tamaño mediano con un motor eficiente y una conducción suave. Con un diseño moderno y tecnología avanzada, el Nissan Altima ofrece comodidad y seguridad en cada viaje.</p>
                        <p class="card-text"><strong>Precio: $20,000</strong></p>
                    </div>
                </div>
            </div>
            <!-- Auto 2 -->
            <div class="col-md-4 mb-4">
                <img src="./images/logofrod.png" style="width: 50%; height: auto;" class="d-block mx-auto"><p></p>
                <div class="card">
                    <img src="./images/ford2.png" class="card-img-top" alt="Auto 2" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Ford F-150</h5>
                        <p class="card-text">Estilo, rendimiento y eficiencia de combustible. Su manejo ágil y su interior cómodo hacen del Ford Focus una opción popular para los conductores urbanos.</p>
                        <p class="card-text"><strong>Precio: $25,000</strong></p>
                    </div>
                </div>
            </div>
            <!-- Auto 3 -->
            <div class="col-md-4 mb-4">
                <img src="./images/lwos.jpg" style="width: 28%; height: auto;" class="d-block mx-auto"><p></p>
                <div class="card">
                    <img src="./images/wols.png" class="card-img-top" alt="Auto 3" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Volkswagen</h5>
                        <p class="card-text">Ofrece una excelente combinación de rendimiento, tecnología y comodidad.</p>
                        <p class="card-text"><strong>Precio: $30,000</strong></p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <!-- Auto 4 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./images/dalt.png" class="card-img-top" alt="Auto 4" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Nissan Frontier</h5>
                        <p class="card-text">Una camioneta pickup robusta y confiable, perfecta para el trabajo y el ocio. Con un motor potente y capacidades de carga sobresalientes.</p>
                        <p class="card-text"><strong>Precio: $18,000</strong></p>
                    </div>
                </div>
            </div>
            <!-- Auto 5 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./images/ford.jpg" class="card-img-top" alt="Auto 5" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Ford Focus</h5>
                        <p class="card-text">Una de las camionetas más icónicas y poderosas, conocida por su capacidad de carga, remolque y rendimiento off-road.</p>
                        <p class="card-text"><strong>Precio: $22,000</strong></p>
                    </div>
                </div>
            </div>
            <!-- Auto 6 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./images/wols3.jpg" class="card-img-top" alt="Auto 6" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Volkswagen Golf6</h5>
                        <p class="card-text">El Golf es reconocido por su manejo preciso y su interior bien equipado, ideal para quienes buscan un auto práctico y deportivo.</p>
                        <p class="card-text"><strong>Precio: $28,000</strong></p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row">
            <!-- Auto 7 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./images/march.jpg" class="card-img-top" alt="Auto 7" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Nissan Rogue</h5>
                        <p class="card-text">SUV compacta con tracción integral, ideal para aventuras familiares. Ofrece una excelente economía de combustible, un amplio espacio interior y una interfaz de infoentretenimiento de fácil acceso.</p>
                        <p class="card-text"><strong>Precio: $35,000</strong></p>
                    </div>
                </div>
            </div>
            <!-- Auto 8 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./images/ford3.png" class="card-img-top" alt="Auto 8" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Lobo Raptor</h5>
                        <p class="card-text">Todoterreno, capaces de entregar experiencias de conducción más allá de lo imaginable.</p>
                        <p class="card-text"><strong>Precio: $24,000</strong></p>
                    </div>
                </div>
            </div>
            <!-- Auto 9 -->
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="./images/wols2.jpg" class="card-img-top" alt="Auto 9" style="width: 100%; height: auto;" data-bs-toggle="modal" data-bs-target="#contactModal">
                    <div class="card-body">
                        <h5 class="card-title">Volkswagen Tiguan</h5>
                        <p class="card-text">SUV compacta con un diseño elegante y un interior espacioso. Con un manejo ágil y opciones de motorización eficientes, el Tiguan es perfecto para quienes buscan versatilidad y confort en su vehículo familiar.</p>
                        <p class="card-text"><strong>Precio: $40,000</strong></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- Contact Modal -->
<div class="modal fade" id="contactModal" tabindex="-1" aria-labelledby="contactModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="contactModalLabel">Contactar al Vendedor</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="contactName" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="contactName" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactEmail" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="contactEmail" required>
                    </div>
                    <div class="mb-3">
                        <label for="contactMessage" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="contactMessage" rows="3" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    <p class="mb-0">&copy; 2023 MEJY. Todos los derechos reservados.</p>
</footer>

<!-- Enlace a Bootstrap JS (opcional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    const translations = {
        es: {
            title: "Catálogo de Autos",
            redirectButton: "DanielFashion",
            contactModalLabel: "Contactar al Vendedor",
            nameLabel: "Nombre",
            emailLabel: "Correo electrónico",
            messageLabel: "Mensaje",
            sendButton: "Enviar",
            footerText: "&copy; 2023 MEJY. Todos los derechos reservados.",
            header: {
                logo: "MEJY",
                search: "Buscar",
                notifications: "Notificaciones",
                profile: "Mi perfil",
                logout: "Cerrar sesión",
                login: "Iniciar sesión",
                register: "Registrarse"
            },
            cars: [
                { title: "Versa Drive 2024", description: "Un sedán de tamaño mediano con un motor eficiente y una conducción suave. Con un diseño moderno y tecnología avanzada, el Nissan Altima ofrece comodidad y seguridad en cada viaje." },
                { title: "Ford F-150", description: "Estilo, rendimiento y eficiencia de combustible. Su manejo ágil y su interior cómodo hacen del Ford Focus una opción popular para los conductores urbanos." },
                { title: "Volkswagen", description: "Ofrece una excelente combinación de rendimiento, tecnología y comodidad." },
                { title: "Nissan Frontier", description: "Una camioneta pickup robusta y confiable, perfecta para el trabajo y el ocio. Con un motor potente y capacidades de carga sobresalientes." },
                { title: "Ford Focus", description: "Una de las camionetas más icónicas y poderosas, conocida por su capacidad de carga, remolque y rendimiento off-road." },
                { title: "Volkswagen Golf6", description: "El Golf es reconocido por su manejo preciso y su interior bien equipado, ideal para quienes buscan un auto práctico y deportivo." },
                { title: "Nissan Rogue", description: "SUV compacta con tracción integral, ideal para aventuras familiares. Ofrece una excelente economía de combustible, un amplio espacio interior y una interfaz de infoentretenimiento de fácil acceso." },
                { title: "Lobo Raptor", description: "Todoterreno, capaces de entregar experiencias de conducción más allá de lo imaginable." },
                { title: "Volkswagen Tiguan", description: "SUV compacta con un diseño elegante y un interior espacioso. Con un manejo ágil y opciones de motorización eficientes, el Tiguan es perfecto para quienes buscan versatilidad y confort en su vehículo familiar." }
            ],
            prices: ["$20,000", "$25,000", "$30,000", "$18,000", "$22,000", "$28,000", "$35,000", "$24,000", "$40,000"]
        },
        en: {
            title: "Car Catalog",
            redirectButton: "DanielFashion",
            contactModalLabel: "Contact the Seller",
            nameLabel: "Name",
            emailLabel: "Email",
            messageLabel: "Message",
            sendButton: "Send",
            footerText: "&copy; 2023 MEJY. All rights reserved.",
            header: {
                logo: "MEJY",
                search: "Search",
                notifications: "Notifications",
                profile: "My Profile",
                logout: "Logout",
                login: "Login",
                register: "Register"
            },
            cars: [
                { title: "Versa Drive 2024", description: "A mid-size sedan with an efficient engine and smooth ride. Featuring modern design and advanced technology, the Nissan Altima provides comfort and safety on every trip." },
                { title: "Ford F-150", description: "Style, performance, and fuel efficiency. Its agile handling and comfortable interior make the Ford Focus a popular choice for urban drivers." },
                { title: "Volkswagen", description: "Offers an excellent combination of performance, technology, and comfort." },
                { title: "Nissan Frontier", description: "A sturdy and reliable pickup truck, perfect for work and leisure. Featuring a powerful engine and outstanding load capacity." },
                { title: "Ford Focus", description: "One of the most iconic and powerful trucks, known for its cargo capacity, towing, and off-road performance." },
                { title: "Volkswagen Golf6", description: "The Golf is known for its precise handling and well-equipped interior, ideal for those looking for a practical and sporty car." },
                { title: "Nissan Rogue", description: "A compact SUV with all-wheel drive, ideal for family adventures. It offers excellent fuel economy, ample interior space, and an easy-to-use infotainment interface." },
                { title: "Lobo Raptor", description: "Off-road capable, delivering driving experiences beyond imagination." },
                { title: "Volkswagen Tiguan", description: "A compact SUV with sleek design and spacious interior. With agile handling and efficient powertrain options, the Tiguan is perfect for those seeking versatility and comfort in a family vehicle." }
            ],
            prices: ["$20,000", "$25,000", "$30,000", "$18,000", "$22,000", "$28,000", "$35,000", "$24,000", "$40,000"]
        }
    };

    let currentLanguage = "es";

    document.getElementById('languageButton').addEventListener('click', () => {
        currentLanguage = currentLanguage === "es" ? "en" : "es";
        updateLanguage();
    });

    function updateLanguage() {
        const lang = translations[currentLanguage];

        // Actualizar títulos y descripciones de los autos
        const carCards = document.querySelectorAll('.card');
        carCards.forEach((card, index) => {
            card.querySelector('.card-title').textContent = lang.cars[index].title;
            card.querySelector('.card-text:nth-of-type(1)').textContent = lang.cars[index].description;
            card.querySelector('.card-text:nth-of-type(2)').textContent = `Precio: ${lang.prices[index]}`;
        });

        // Actualizar el resto de los textos
        document.getElementById('mainTitle').textContent = lang.title;
        document.getElementById('redirectButton').textContent = lang.redirectButton;
        document.getElementById('contactModalLabel').textContent = lang.contactModalLabel;
        document.querySelector('label[for="contactName"]').textContent = lang.nameLabel;
        document.querySelector('label[for="contactEmail"]').textContent = lang.emailLabel;
        document.querySelector('label[for="contactMessage"]').textContent = lang.messageLabel;
        document.querySelector('.modal-body button[type="submit"]').textContent = lang.sendButton;
        document.querySelector('footer p').innerHTML = lang.footerText;

        // Actualizar el texto del botón
        document.getElementById('languageButton').textContent =
            currentLanguage === "es" ? "Cambiar a Inglés" : "Switch to Spanish";

        // Actualizar el header
        document.querySelector('.logo h1').textContent = lang.header.logo;
        document.querySelector('#searchModalLabel').textContent = lang.header.search;
        document.querySelector('#notificationsSidebarLabel').textContent = lang.header.notifications;
        document.querySelector('#profileSidebarLabel').textContent = lang.header.profile;
        document.getElementById('logoutLink').textContent = lang.header.logout;
        document.querySelector('#loginSidebarLabel').textContent = lang.header.login;
        document.querySelector('#registerModalLabel').textContent = lang.header.register;
    }
</script>

</div> <!-- Cierre del div .d-flex -->
</body>
</html>