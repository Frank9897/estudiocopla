<section id="contacto" class="section">

    <div class="container">

        <div class="contact">

            <div class="contact__info">

                <span class="contact__subtitle">
                    CONTACTO
                </span>

                <h2 class="contact__title">
                    ¿Tenés un proyecto en mente?
                </h2>

                <p class="contact__text">
                    Contanos tu idea y nos pondremos en contacto para analizar tu proyecto y brindarte el mejor asesoramiento.
                </p>

                <ul class="contact__list">

                    <li><strong>Teléfono:</strong> +54 381 XXX-XXXX</li>

                    <li><strong>Email:</strong> contacto@copla.com.ar</li>

                    <li><strong>Ubicación:</strong> San Miguel de Tucumán, Argentina</li>

                </ul>

            </div>

            <div class="contact__form">

                <form action="mail/send.php" method="post">

                    <input
                        type="text"
                        name="nombre"
                        placeholder="Nombre completo"
                        required
                    >

                    <input
                        type="email"
                        name="email"
                        placeholder="Correo electrónico"
                        required
                    >

                    <input
                        type="text"
                        name="telefono"
                        placeholder="Teléfono"
                    >

                    <textarea
                        name="mensaje"
                        rows="6"
                        placeholder="Contanos sobre tu proyecto..."
                        required
                    ></textarea>

                    <button
                        class="button button--primary"
                        type="submit">
                        Enviar consulta
                    </button>

                </form>

            </div>

        </div>

    </div>

</section>