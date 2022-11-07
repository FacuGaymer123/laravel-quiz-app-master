<!DOCTYPE html>
<html lang="en">

<head>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQ Accordion</title>
    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>

<body>
    <a name="syllabus"></a>
    <div>
        <h2 class="carotopopito">Lenguajes de LSB<h2>
    </div>
    <div class="container-2">
        <div class="wrapper">
            <button class="toggle">
                lenguaje de señas
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p>La lengua de señas es una lengua como cualquier otra, no se trata de una mera mímica, contiene una estructura y léxico propio. Se diferencian de las lenguas orales solamente en que utilizan el canal de comunicación viso-gestual en lugar del audio-vocal, por ser un lenguaje visual es el único lenguaje completamente accesible para las personas sordas.</p>
                <img src="{{ asset('img/señas.jpg') }}">
            </div>
        </div>
        <div class="wrapper">
            <button class="toggle">
                Sistema de escritura Braille
                <i class="fas fa-plus icon"></i>
            </button>
            <div class="content">
                <p>El sistema de escritura Braille fue creado en 1825 por Luis Braille ideó el sistema braille, también conocido como cecografía, aporta a las personas ciegas una herramienta válida y eficaz para leer, escribir, acceder a la educación, a la cultura y a la información sin necesidad de ver, guiándose solo por el tacto.</p>
                <img src="{{ asset('img/braille.jpg') }}">
            </div>
        </div>
    </div>
    <!--Script-->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>