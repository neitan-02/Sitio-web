<style>
    /* General container styling */
.form-container {
    background-color: rgb(255, 255, 255);
    padding: 38px;
    width: 80%;
    max-width: 600px; /* Ancho máximo para pantallas grandes */
    margin: 0 auto; /* Center the form on the page */
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    border-radius: 0; /* Remove border radius */
}

/* Title styling */
.form-container h3 {
    color: #875ca7 !important;
    text-align: center;
}

/* Input field styling */
.form-container .grunion-field-label {
    display: none; /* Hide the label */
}

.service-selection,#service-selection {
    width: 100%; /* Make inputs responsive to 90% of container */
    background-color:rgb(238, 207, 234);
    min-width: 300px;
    color: #875ca7;
    border-radius: 0;
    border: none;
    padding: 10px;
    margin: 30px auto; /* Ensure consistent margin */
}
input{
    width: 100%; /* Make inputs responsive to 90% of container */
    min-width: 300px;
    color: #875ca7;
    border: 1px solid #784F96;
    padding: 10px;
    margin: 20px auto; /* Ensure consistent margin */
}
.enviar{
    height: 40px;
    width: 60%; /* Make inputs responsive to 90% of container */
    background-color: #9155c2;
    min-width: 200px;
    color: #ffffff;
    border-radius: 0;
    border: none;
    padding: 10px;
    margin: 20px auto 0px; /* Ensure consistent margin */

}

/* Placeholder styling */
.form-container input::placeholder {
    width: 90%;
    color: #875ca7; /* Light gray color for placeholder text */
    
}

.titulo {
    width: 80%;
    font-size: 30px;
    font-weight: 100;
    margin: 10px 0px 0px;
}

/* Button styling */
.form-container .contact-submit button {
    background-color: #001f3f;
    color: #fff;
    border-radius: 0;
    padding: 10px 20px;
    cursor: pointer;
    width: 90%;
    max-width: 200px;
    margin: 1px auto; /* Ensure consistent margin */
}

.form-container .contact-submit {
    text-align: center;
}
#contact-form-7{
    margin: 0px 50px;
}
#g7-name {
    background-color: rgb(238, 207, 234);
}
#g7-email {
    background-color: rgb(238, 207, 234);
}
#g7-phone {
    background-color: rgb(238, 207, 234);
}

/* Responsive adjustments */
@media (max-width: 600px) {
    #contact-form-7{
        margin: 0px 0px;
    }
    .form-container {
        max-width: 600px; /* Ancho máximo para dispositivos móviles */
        margin: 1px 0px;
        background-color: rgb(255, 255, 255);
    }

    .form-container input[type='text'],
    .form-container input[type='email'] {
        padding: 8px;
    }

    .form-container .contact-submit button {
        padding: 8px 16px;
    }
}

/* Additional input styling */
.form-container .akismet-fields-container {
    display: none !important;
}
input{
    width: 100%; /* Make inputs responsive to 90% of container */
    background-color: #fff;
    min-width: 280px;
    color: #000;
    border-radius: 0;
    border: none;
    padding: 10px;
    margin: 23px auto; /* Ensure consistent margin */
}

</style>

<section id="primary" class="content-area">
    <main id="main" class="site-main">
        <article id="post-7" class="post-7 page type-page status-publish hentry entry">
            <div class="entry-content">
                <!-- Contenido de la entrada -->
                <div class="form-container">
                    <h3 class="titulo">Contáctanos</h3>
                    <div data-test='contact-form' id='contact-form-7' class='wp-block-jetpack-contact-form-container' style="">
                        <form id='contact-form' method='post' class='contact-form commentsblock' aria-label="Contact" novalidate onsubmit="sendToWhatsApp(event)" style="padding: 20px;">
                            <div>
                                <input type='text' name='g7-name' id='g7-name' value='' class='name grunion-field' placeholder='Nombre (requerido)' required aria-required='true'/>
                            </div>
                            <div>
                                <input type='email' name='g7-email' id='g7-email' value='' class='email grunion-field' placeholder='Email (requerido)' required aria-required='true' />
                            </div>
                            <div>
                                <input type='text' name='g7-phone' id='g7-phone' value='' class='phone grunion-field' placeholder='Teléfono (requerido)' required aria-required='true' />
                            </div>
                            <div>
                                <select name="g7-service" id="g7-service" class='service-selection' required aria-required='true'>
                                    <option value="">Seleccione un servicio</option>
                                    @foreach($services as $service)
                                        <option value="{{ $service->name }}">{{ $service->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="centrado" style="max-width: 300px">
                                <button type="submit" class="enviar">Enviar</button>
                            </div>
                        </form>
                    </div>

                    <script>
                        function sendToWhatsApp(event) {
                            event.preventDefault();

                            var name = document.getElementById('g7-name').value;
                            var email = document.getElementById('g7-email').value;
                            var phone = document.getElementById('g7-phone').value;
                            var serviceElement = document.getElementById('g7-service');
                            var service = serviceElement.options[serviceElement.selectedIndex].text;

                            var whatsappMessage = `Nombre: ${name}\nEmail: ${email}\nTeléfono: ${phone}\nServicio: ${service}`;
                            var encodedMessage = encodeURIComponent(whatsappMessage);
                            var whatsappURL = `https://api.whatsapp.com/send?phone=7224958550&text=${encodedMessage}`;

                            window.open(whatsappURL, '_blank');
                        }
                    </script>

                    <input type="hidden" id="_wpnonce" name="_wpnonce' value="8108cd0437" />
                    <input type="hidden" name="_wp_http_referer" value="/contact/" />
                    <input type='hidden' name='contact-form-id' value='7' />
                    <input type='hidden' name='action' value='grunion-contact-form' />
                    <input type='hidden' name='contact-form-hash' value='d4c9fc8c61a15d31c60449706367040d22a7c69c' />

                    <p class="akismet-fields-container" data-prefix="ak_">
                        <label>&#916;<textarea name="ak_hp_textarea" cols="45" rows="8" maxlength="100"></textarea></label>
                        <input type="hidden" id="ak_js_1" name="ak_js" value="92" />
                        <script>
                            document.getElementById("ak_js_1").setAttribute("value", (new Date()).getTime());
                        </script>
                    </p>
                </div>
            </div>
        </article>
    </main>
</section>
