<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sunyeval Balance — Inicio</title>

    <?php include __DIR__ . "/vite.loader.php"; ?>
    <?php echo loadViteAssets("src/main.js"); ?>
</head>

<body class="bg-white text-slate-800 antialiased">

    <!-- HEADER (mismo que en nosotros / contacto) -->
    <header class="bg-white border-b border-slate-200">
        <div class="max-w-5xl mx-auto px-4 h-16 flex items-center justify-between">
            <a href="index.php" class="font-semibold text-lg text-emerald-700 tracking-tight">
                Sunyeval Balance
            </a>

            <nav class="hidden md:flex gap-6 text-sm font-medium text-slate-700">
                <a href="index.php" class="text-emerald-700">Inicio</a>
                <a href="nosotros.php" class="hover:text-emerald-600">Nosotros</a>
                <a href="contacto.php" class="hover:text-emerald-600">Contacto</a>
            </nav>

            <button class="md:hidden text-slate-700">☰</button>
        </div>
    </header>

    <main class="px-4">

        <!-- HERO -->
        <section class="max-w-3xl mx-auto pt-10 pb-14 text-center">
            <p class="text-xs font-semibold tracking-[0.25em] text-emerald-600 uppercase">
                Bienestar integral
            </p>

            <h1 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900 leading-tight">
                Bienestar que transforma tu día
            </h1>

            <p class="mt-3 text-sm md:text-base text-slate-600">
                Terapias naturales, estéticas y holísticas diseñadas para equilibrar tu energía
                y mejorar tu bienestar físico y emocional.
            </p>

            <div class="mt-7 flex flex-col sm:flex-row justify-center gap-3 sm:gap-4">
                <a href="contacto.php"
                    class="inline-flex justify-center px-6 py-2.5 rounded-xl bg-emerald-600 text-white text-sm md:text-[15px] font-semibold hover:bg-emerald-700">
                    Agendar cita
                </a>

                <a href="nosotros.php"
                    class="inline-flex justify-center px-6 py-2.5 rounded-xl border border-slate-300 text-sm md:text-[15px] text-slate-700 font-semibold hover:bg-slate-50">
                    Conocer más
                </a>
            </div>
        </section>

        <!-- SECCIÓN: Terapias -->
        <section class="max-w-4xl mx-auto pb-16 border-t border-slate-200 pt-12">
            <div class="text-center max-w-2xl mx-auto">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900">
                    Terapias que hacen la diferencia
                </h2>
                <p class="mt-3 text-sm md:text-[15px] text-slate-600 leading-relaxed">
                    Combinamos técnicas modernas con conocimientos tradicionales para ayudarte
                    a sentirte mejor física, mental y emocionalmente.
                </p>
            </div>

            <div class="mt-10 grid gap-6 md:grid-cols-3">
                <article class="p-5 rounded-2xl border border-slate-200 bg-white">
                    <h3 class="text-base md:text-lg font-semibold text-emerald-700">
                        Reducción de tallas
                    </h3>
                    <p class="mt-2 text-xs md:text-sm text-slate-600">
                        Tratamientos que moldean tu cuerpo de forma natural y efectiva.
                    </p>
                </article>

                <article class="p-5 rounded-2xl border border-slate-200 bg-white">
                    <h3 class="text-base md:text-lg font-semibold text-emerald-700">
                        Equilibrio energético
                    </h3>
                    <p class="mt-2 text-xs md:text-sm text-slate-600">
                        Técnicas integrales que estabilizan mente, cuerpo y emociones.
                    </p>
                </article>

                <article class="p-5 rounded-2xl border border-slate-200 bg-white">
                    <h3 class="text-base md:text-lg font-semibold text-emerald-700">
                        Relajación profunda
                    </h3>
                    <p class="mt-2 text-xs md:text-sm text-slate-600">
                        Sesiones para liberar tensiones y recuperar tu bienestar interior.
                    </p>
                </article>
            </div>
        </section>

        <!-- SECCIÓN: ¿Por qué elegirnos? -->
        <section class="bg-slate-50 border-t border-slate-200">
            <div class="max-w-5xl mx-auto py-12 md:py-14">
                <h2 class="text-2xl md:text-3xl font-bold text-slate-900 text-center">
                    ¿Por qué elegirnos?
                </h2>

                <p class="mt-3 text-sm md:text-[15px] text-slate-600 text-center max-w-2xl mx-auto">
                    Cuidamos cada detalle para que tu experiencia sea cálida, clara y realmente útil
                    para lo que quieres mejorar.
                </p>

                <ul class="mt-9 grid gap-4 md:grid-cols-2 text-sm md:text-[15px] text-slate-700">
                    <li class="p-4 rounded-2xl border border-slate-200 bg-white">
                        ✔ Atención profesional y humana.
                    </li>
                    <li class="p-4 rounded-2xl border border-slate-200 bg-white">
                        ✔ Resultados visibles desde las primeras sesiones.
                    </li>
                    <li class="p-4 rounded-2xl border border-slate-200 bg-white">
                        ✔ Tratamientos personalizados a tus necesidades.
                    </li>
                    <li class="p-4 rounded-2xl border border-slate-200 bg-white">
                        ✔ Enfoque integral en bienestar físico y emocional.
                    </li>
                </ul>
            </div>
        </section>

    </main>

    <!-- FOOTER (mismo que en las otras páginas) -->
    <footer class="bg-slate-900 text-slate-200 py-6">
        <div class="max-w-5xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-3">
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