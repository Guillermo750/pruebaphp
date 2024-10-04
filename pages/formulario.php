<!DOCTYPE html>
<html lang="en">


<head>
    <!-- <link rel="canonical" href="https://https://demo.themesberg.com/landwind/" /> -->
    <meta charset="UTF-8">
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kraftwerk</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="../js/index.js"></script>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <!-- <link rel="manifest" href="/site.webmanifest"> -->
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <!-- <link href="./output.css" rel="stylesheet"> -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
</head>

<body class="overflow-x-hidden">
    
    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL HEADER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../components/header.php"; ?>

    <main class="flex-grow">
        <!-- Start block -->
        <section class="bg-[url('../assets/kraftwerk1.jpg')] bg-cover bg-center w-screen h-screen dark:bg-gray-900">
            <div class="w-full px-4 pb-8 mx-auto lg:py-16 flex items-end min-h-screen bg-black/40">
                <h1 class="max-w-full mb-4 text-6xl lg:text-8xl text-center text-white font-bold leading-none w-full">Contacto</h1>
            </div>
        </section>
        <!-- End block -->

        <!-- Modo oscuro -->
        <section class="container overflow-x-hidden max-w-full bg-white dark:bg-gray-800 text-gray-900 dark:text-white transition-colors duration-300">
            <div class=" flex flex-col items-center mx-auto p-4">
                <button id="theme-toggle" class="w-20 bg-gray-200 dark:bg-gray-600 p-2 rounded-md text-2xl">
                    🌞
                </button>
            </div>


            <!-- Formulario -->
            <form class="group md:px-10 py-10 md:py-20 flex flex-col items-center" action="" id="form" method="post" novalidate>
                <div class="flex flex-col space-y-6 w-[90%] max-w-[650px]">

                    <!-- nombre -->
                    <div class="flex flex-col">
                        <h4 class="font-medium text-lg pb-1">Nombre y Apellidos <span class="text-sm font-semibold text-gray-500">(obligatorio)</span></h4>
                        <p></p>
                        <div class="flex w-full">
                            <div class="flex flex-col w-[50%]">
                                <label class="text-sm" for="nombre">Nombre</label>
                                <input type="text" id="nombre" name="nombre" maxlength="20" required
                                    class="peer my-1 mr-1 border border-gray-400 hover:border-2 hover:border-indigo-400 focus:border-primary focus:border-indigo-400 
                                    px-2 py-3 text-gray-700 bg-neutral-100 [.validated_&]:invalid:border-black [.validated_&]:invalid:ring-2 [.validated_&]:invalid:ring-blue-200">
                                    <p class="invisible [.validated_&]:peer-invalid:visible text-white text-[10px] py-1 bg-[rgb(206,44,48)] text-sm"><i class="fa-solid fa-circle-exclamation mx-4" style="color: #ffffff;"></i> El campo 'Nombre' es obligatorio.</p>
                            </div>
                            <div class="flex flex-col w-[50%]">
                                <label class="text-sm" for="nombre">Apellido</label>
                                <input type="text" id="apellido" name="apellido" maxlength="20" required
                                    class="peer my-1 ml-1 border border-gray-400 hover:border-2 hover:border-indigo-400 focus:border-primary focus:border-indigo-400 
                                    px-2 py-3 text-gray-700 bg-neutral-100 [.validated_&]:invalid:border-black [.validated_&]:invalid:ring-2 [.validated_&]:invalid:ring-blue-200"> 
                                    <p class="invisible [.validated_&]:peer-invalid:visible text-white text-[10px] py-1 bg-[rgb(206,44,48)] text-sm"><i class="fa-solid fa-circle-exclamation mx-4" style="color: #ffffff;"></i> El campo 'Apellido' es obligatorio.</p> 
                            </div>
                        </div>
                    </div>

                    <!-- correo -->
                    <div class="flex flex-col">
                        <h4 class="font-medium text-lg pb-1">Correo <span class="text-sm font-semibold text-gray-500">(obligatorio)</span></h4>
                        <input type="email" id="email" name="email" required
                                    class="peer w-full my-1 border border-gray-400 hover:border-2 hover:border-black focus:border-primary focus:border-indigo-400 
                                    px-2 py-3 text-gray-700 bg-neutral-100 [.validated_&]:invalid:border-black [.validated_&]:invalid:ring-2 [.validated_&]:invalid:ring-blue-200">
                        <p class="invisible [.validated_&]:peer-invalid:visible text-white text-[10px] py-1 bg-[rgb(206,44,48)] text-sm"><i class="fa-solid fa-circle-exclamation mx-4" style="color: #ffffff;"></i> El campo 'Correo' es obligatorio.</p>
                    </div>

                    <!-- gimansio de interes -->
                    <div class="flex flex-col">
                        <h4 class="font-medium text-lg pb-1">Gimnasio de interés <span class="text-sm font-semibold text-gray-500">(obligatorio)</span></h4>
                        <select name="gimnasio" id="gimansio"
                            class="peer my-1 border border-gray-400 focus:border-primary bg-neutral-100 text-sm
                                px-2 py-2 text-gray-700 [.validated_&]:invalid:border-black [.validated_&]:invalid:ring-2 [.validated_&]:invalid:ring-blue-200"
                            required>
                            <option value="" class="text-teal-600" disabled selected>Seleccionar</option>
                            <option value="0">Kraftwerk Mercatenerife</option>
                            <option value="1">Kraftwerk León y Castillo</option>
                            <option value="2">Kraftwerk La Orotava</option>
                            <option value="1">Kraftwerk Miller Bajo</option>
                            <option value="0">Kraftwerk Tres Forte</option>
                            <option value="1">Kraftwerk Tacoronte</option>
                        </select>
                        <p class="invisible [.validated_&]:peer-invalid:visible text-white text-[10px] py-1 bg-[rgb(206,44,48)] text-sm"><i class="fa-solid fa-circle-exclamation mx-4" style="color: #050505;"></i> El campo 'Gimnasio de interés' es obligatorio.</p>
                    </div>

                    <!-- mensaje -->
                    <div class="flex flex-col">
                        <h4 class="font-medium text-lg pb-1">Mensaje <span class="text-sm font-semibold text-gray-500">(obligatorio)</span></h4>
                        <textarea name="medication" id="medication"
                            class="peer md:w-full h-28 my-1 border border-gray-400 hover:border-2 hover:border-indigo-400 focus:border-primary focus:border-indigo-400 px-2 py-1 text-gray-700 bg-neutral-100"></textarea>
                        <p class="invisible [.validated_&]:peer-invalid:visible text-white text-[10px] py-1 bg-[rgb(206,44,48)] text-sm"><i class="fa-solid fa-circle-exclamation mx-4" style="color: #ffffff;"></i> El campo 'Mensaje' es obligatorio.</p>
                    </div>

                    <!-- checkbox -->
                    <div class="flex flex-col">
                        <h4 class="font-medium text-lg pb-1"><span class="text-sm font-semibold text-gray-500">(obligatorio)</span></h4>
                        <div class="flex space-x-2">
                        <input type="checkbox" class="peer w-full my-1 border border-gray-400 hover:border-2 hover:border-black focus:border-primary focus:border-indigo-400 
                        px-2 py-3 text-gray-700 bg-neutral-100 [.validated_&]:invalid:border-black [.validated_&]:invalid:ring-2 [.validated_&]:invalid:ring-blue-200">
                        <label class="text-sm" for="checkbox">He leído y acepto la <a href="">Política de Privacidad</a></label>
                        <p class="invisible [.validated_&]:peer-invalid:visible text-white text-[10px] py-1 bg-[rgb(206,44,48)] text-sm"><i class="fa-solid fa-circle-exclamation mx-4" style="color: #ffffff;"></i> El campo '' es obligatorio.</p>
                    </div>
                </div>
            </form>

            <!-- submit -->
            <div class="flex justify-center pt-4 pb-6">
                <button class="bg-neutral-500 text-white px-10 py-2 rounded-md text-lg font-medium tracking-loose"
                    type="submit">Enviar</button>
            </div>
            
            <div class="md:pl-16 pb-10">
                <p><i>En virtud de la legislación vigente en materia de Protección de Datos de Carácter Personal, le informamos que sus datos personales formarán parte de los tratamientos de KRAFTWERK FITNESS CLUB, con la finalidad de atender su solicitud de información, prestar los servicios profesionales que mejor se ajusten a sus necesidades y enviarle comunicaciones informativas sobre nuestros servicios y actividades al correo electrónico que nos facilite. Sus datos serán conservados durante el tiempo de vigencia de nuestra relación y sean necesarios para el cumplimiento de las finalidades indicadas. Podrá ejercitar los derechos de acceso, rectificación, supresión, limitación del tratamiento y portabilidad de sus datos, dirigiéndose por escrito, adjuntando fotocopia del DNI, a la dirección de correo electrónico info@kraftwerk-fitnessclub.es</i> </p>
            </div>
        </section>
    </main>
    <!-- ¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡¡ AQUI LA MAGIA DE INCLUYE EL FOOTER !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!! -->
    <?php include_once "../components/footer.php"; ?>
</body>

</html>