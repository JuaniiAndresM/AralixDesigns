<?php

$plan = $_POST['Plan'];

$modal = '  <div class="plan">
                <button class="close" onclick="closePlan()">
                <i class="fas fa-times"></i>
                </button>
                <div class="plan-logo">
                    <img src="/AralixDesigns/media/svg/AralixLogo Color.svg" alt="" />
                </div>
                    <h1>Solicitud Plan</h1>
                    <hr />
                    <p>
                        Envia la solicitud de tu Plan y te contestaremos a la brevedad para
                        empezar a trabajar.
                    </p>

                    <form class="plan-modal-content" action="Mail/planMail.php" method="POST">

                    <input
                        type="text"
                        name="Plan"
                        placeholder="Plan"
                        readonly
                        value="' . $plan . '"
                    />

                    <input
                        type="text"
                        name="Nombre"
                        placeholder="Nombre"
                        required 
                    />

                    <input
                        type="email"
                        name="Email"
                        placeholder="Correo Electrónico"
                        required
                    />

                    <input
                        type="text"
                        name="Telefono"
                        placeholder="Telefono / Celular"
                        required
                    />

                    <textarea
                        type="text"
                        name="Comentario"
                        placeholder="Comentario"
                        required
                    ></textarea>

                    <input type="submit" />

                </form>
            </div>';

echo $modal;
return $modal;

?>