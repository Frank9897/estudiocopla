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
                        <a href="tel:+543884480633">
                            +54 388 4480633
                        </a>
                    </li>

                    <li>
                        <strong>Email</strong>
                        <a href="mailto:coplajujuy@gmail.com">
                            coplajujuy@gmail.com
                        </a>
                    </li>

                    <li>
                        <strong>Ubicación</strong>
                        San Salvador de Jujuy, Argentina
                    </li>

                    <li>
                        <strong>Instagram</strong>
                        <a href="https://www.instagram.com/estudio.copla"
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
                        placeholder="Nombre"
                        required
                    >

                    <textarea
                        id="mensaje"
                        rows="8"
                        placeholder="Contanos sobre tu proyecto..."
                    ></textarea>

                    <button
                        type="submit"
                        class="button button--primary">

                        <i class="fa-brands fa-whatsapp"></i>

                        Iniciar conversación

                    </button>

                </form>

            </div>

        </div>

        <div class="contact__map" data-reveal="fade">

            <iframe
                title="Ubicación de Estudio COPLA"
                src="https://www.google.com/maps/embed?pb=..."
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
        "https://wa.me/543884480633?text=" + encodeURIComponent(texto);

    window.open(url, "_blank");

});

</script>
