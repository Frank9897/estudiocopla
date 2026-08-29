<section id="contacto" class="contact section">

    <div class="container">

        <div class="section-header" data-reveal="fade">

            <span class="section-subtitle">
                Contacto
            </span>

            <h2 class="section-title">
                ¿Tenés un proyecto en mente?
            </h2>

            <p class="section-description">
                Cada proyecto comienza con una conversación. Contanos tu idea y nos comunicaremos con vos para asesorarte y acompañarte durante todo el proceso.
            </p>

        </div>

        <div class="contact__wrapper">

            <div class="contact__info" data-reveal="left">

                <ul class="contact__list">

                    <li>
                        <strong>Teléfono</strong>
                        <a href="tel:<?= SITE_PHONE ?>">
                            <?= SITE_PHONE ?>
                        </a>
                    </li>

                    <li>
                        <strong>Email</strong>
                        <a href="mailto:<?= SITE_EMAIL ?>">
                            <?= SITE_EMAIL ?>
                        </a>
                    </li>

                    <li>
                        <strong>Ubicación</strong>
                        <?= SITE_LOCATION ?>
                    </li>

                    <li>
                        <strong>Instagram</strong>
                        <a
                            href="<?= SITE_INSTAGRAM ?>"
                            target="_blank"
                            rel="noopener noreferrer">
                            @estudio.copla
                        </a>
                    </li>

                </ul>

            </div>

            <div class="contact__form" data-reveal="right">

                <form id="contactForm">

                    <input
                        type="text"
                        id="nombre"
                        name="nombre"
                        placeholder="Nombre"
                        autocomplete="name"
                        required
                    >

                    <textarea
                        id="mensaje"
                        name="mensaje"
                        rows="8"
                        placeholder="Contanos sobre tu proyecto..."
                        required
                    ></textarea>

                    <button
                        type="submit"
                        class="button button--primary">

                        <i class="fa-brands fa-whatsapp"></i>

                        Enviar por WhatsApp

                    </button>

                </form>

            </div>

        </div>

        <!-- Contacto alternativo: acceso directo a WhatsApp y código QR. -->
        <div class="contact__direct" data-reveal="fade">

            <div class="contact__direct-copy">

                <span class="contact__direct-label">
                    CONTACTO DIRECTO
                </span>

                <h3 class="contact__direct-title">
                    O comunicate directamente con nosotros.
                </h3>

                <p class="contact__direct-text">
                    Podés escribirnos por WhatsApp o escanear el código QR para iniciar la conversación desde tu teléfono.
                </p>

                <a
                    href="https://wa.me/<?= SITE_WHATSAPP ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="button button--primary contact__direct-button">

                    <i class="fa-brands fa-whatsapp"></i>

                    Hablar por WhatsApp

                </a>

            </div>

            <div class="contact__qr" aria-label="Código QR para contactar por WhatsApp">

                <span class="contact__qr-label">
                    ESCANEÁ EL QR
                </span>

                <div class="contact__qr-frame">

                    <img
                        src="https://api.qrserver.com/v1/create-qr-code/?size=220x220&margin=10&data=<?= urlencode('https://wa.me/' . SITE_WHATSAPP) ?>"
                        alt="Código QR para iniciar una conversación por WhatsApp"
                        width="220"
                        height="220"
                        loading="lazy"
                        decoding="async">

                </div>

            </div>

        </div>

        <!-- El mapa se mantiene centrado en San Salvador de Jujuy. -->
        <div class="contact__map" data-reveal="fade">

            <iframe
                title="Ubicación de Estudio COPLA"
                src="https://maps.google.com/maps?q=San+Salvador+de+Jujuy,+Jujuy,+Argentina&z=12&output=embed"
                loading="lazy"
                allowfullscreen
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>

        </div>

    </div>

</section>

<script>

document.getElementById("contactForm").addEventListener("submit", function (e) {

    e.preventDefault();

    const nombre = document.getElementById("nombre").value.trim();
    const mensaje = document.getElementById("mensaje").value.trim();

    const texto =
`Hola, soy ${nombre}.

Me gustaría consultar por el siguiente proyecto:

${mensaje}`;

    const url =
        "https://wa.me/<?= SITE_WHATSAPP ?>?text=" + encodeURIComponent(texto);

    window.open(url, "_blank");

});

</script>
