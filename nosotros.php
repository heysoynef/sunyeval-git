<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nosotros — Sunyeval Balance</title>

    <?php include __DIR__ . "/vite.loader.php"; ?>
    <?php echo loadViteAssets("src/main.js"); ?>
</head>

<body class="bg-white text-slate-800 antialiased">

    <!-- HEADER -->
    <header class="bg-white border-b border-slate-200">
        <div class="max-w-6xl mx-auto px-4 md:px-6 h-16 flex items-center justify-between">
            <a href="index.php" class="font-semibold text-lg text-emerald-700 tracking-tight">
                Sunyeval Balance
            </a>

            <nav class="hidden md:flex gap-6 text-sm font-medium text-slate-700">
                <a href="index.php" class="hover:text-emerald-600">Inicio</a>
                <a href="nosotros.php" class="text-emerald-700">Nosotros</a>
                <a href="contacto.php" class="hover:text-emerald-600">Contacto</a>
            </nav>

            <button class="md:hidden text-slate-700">☰</button>
        </div>
    </header>

    <main class="px-4 md:px-6">

        <!-- HERO -->
        <section class="max-w-3xl mx-auto pt-10 pb-8 text-center">
            <p class="text-xs font-semibold tracking-[0.25em] text-emerald-600 uppercase">
                Nosotros
            </p>
            <h1 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900">
                Un espacio pensado para tu bienestar
            </h1>
            <p class="mt-3 text-sm md:text-base text-slate-600">
                Acompañamos a mujeres que buscan verse y sentirse mejor, desde un enfoque
                de cuidado integral y humano.
            </p>
        </section>

        <!-- CUERPO -->
        <section class="max-w-4xl mx-auto pb-16">
            <div class="grid gap-10 md:grid-cols-[1.3fr,1fr] items-start">

                <!-- Columna texto principal -->
                <div class="space-y-5 text-sm md:text-[15px] leading-relaxed text-slate-700">
                    <h2 class="text-lg md:text-xl font-semibold text-slate-900">
                        Nuestra manera de trabajar
                    </h2>
                    <p>
                        En Sunyeval Balance creemos que el bienestar verdadero se construye día a día,
                        con pequeños cambios y momentos de pausa. Por eso, cada sesión está pensada para
                        que puedas bajar el ritmo, respirar y reconectar contigo.
                    </p>
                    <p>
                        Combinamos terapias naturales y técnicas modernas para cuidar tanto la parte
                        estética como tu estado emocional. No buscamos soluciones mágicas, sino cambios
                        sostenibles que se sientan bien en tu cuerpo y en tu rutina.
                    </p>
                    <p>
                        Nuestro papel es acompañarte, escuchar lo que necesitas y crear un plan que
                        se adapte a ti, sin juicios y sin prisas.
                    </p>
                </div>

                <!-- Columna “enfoque” -->
                <aside class="space-y-4 text-sm md:text-[15px]">
                    <h3 class="text-base md:text-lg font-semibold text-slate-900">
                        Lo que puedes esperar de nosotras
                    </h3>

                    <div class="space-y-3">
                        <div class="border border-slate-200 rounded-xl px-4 py-3">
                            <p class="font-medium text-slate-900 text-sm">Escucha real</p>
                            <p class="mt-1 text-slate-600 text-xs md:text-[13px]">
                                Tiempo para contarnos cómo te sientes y qué te gustaría mejorar.
                            </p>
                        </div>

                        <div class="border border-slate-200 rounded-xl px-4 py-3">
                            <p class="font-medium text-slate-900 text-sm">Tratamientos honestos</p>
                            <p class="mt-1 text-slate-600 text-xs md:text-[13px]">
                                Recomendaciones claras, sin promesas exageradas ni soluciones milagro.
                            </p>
                        </div>

                        <div class="border border-slate-200 rounded-xl px-4 py-3">
                            <p class="font-medium text-slate-900 text-sm">Ambiente tranquilo</p>
                            <p class="mt-1 text-slate-600 text-xs md:text-[13px]">
                                Un lugar discreto y calmado para que puedas estar en paz un rato contigo misma.
                            </p>
                        </div>
                    </div>
                </aside>
            </div>
        </section>

    </main>

    <!-- FOOTER -->
    <footer class="bg-slate-900 text-slate-200 py-6">
        <div class="max-w-6xl mx-auto px-4 md:px-6 flex flex-col md:flex-row justify-between items-center gap-3">
            <p class="text-xs md:text-[13px]">
                &copy; <?= date("Y"); ?> Sunyeval Balance. Todos los derechos reservados.
            </p>
            <nav class="flex gap-4 text-xs md:text-[13px]">
                <a href="#" class="hover:text-white">Aviso de privacidad</a>
                <a href="#" class="hover:text-white">Términos</a>
            </nav>
        </div>
    </footer>

</body>

</html>