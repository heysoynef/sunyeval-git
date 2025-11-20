<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto — Sunyeval Balance</title>

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
                <a href="nosotros.php" class="hover:text-emerald-600">Nosotros</a>
                <a href="contacto.php" class="text-emerald-700">Contacto</a>
            </nav>

            <button class="md:hidden text-slate-700">☰</button>
        </div>
    </header>

    <main class="px-4 md:px-6">

        <!-- TÍTULO -->
        <section class="max-w-3xl mx-auto pt-10 pb-8 text-center">
            <p class="text-xs font-semibold tracking-[0.25em] text-emerald-600 uppercase">
                Contacto
            </p>
            <h1 class="mt-3 text-3xl md:text-4xl font-extrabold text-slate-900">
                Hablemos de lo que necesitas
            </h1>
            <p class="mt-3 text-sm md:text-base text-slate-600">
                Cuéntanos en qué te podemos ayudar y te responderemos lo antes posible.
            </p>
        </section>

        <!-- CONTENIDO 2 COLUMNAS -->
        <section class="max-w-5xl mx-auto pb-16">
            <div class="grid gap-10 md:grid-cols-[1.1fr,1.2fr] items-start">

                <!-- INFO -->
                <div class="space-y-6 text-sm md:text-[15px] text-slate-700">
                    <div>
                        <h2 class="text-base md:text-lg font-semibold text-slate-900">
                            Formas de contacto
                        </h2>
                        <p class="mt-2">
                            Si lo prefieres, también puedes escribirnos por WhatsApp o llamarnos directamente
                            para agendar una cita o resolver dudas sobre los tratamientos.
                        </p>
                    </div>

                    <div class="space-y-3">
                        <div>
                            <p class="text-[13px] font-medium text-slate-500 uppercase tracking-[0.18em]">
                                WhatsApp
                            </p>
                            <a href="#"
                                class="mt-1 inline-flex text-emerald-700 font-medium text-sm">
                                55 · 0000 · 0000
                            </a>
                        </div>

                        <div>
                            <p class="text-[13px] font-medium text-slate-500 uppercase tracking-[0.18em]">
                                Correo
                            </p>
                            <p class="mt-1 text-sm">
                                contacto@sunyevalbalance.com
                            </p>
                        </div>

                        <div>
                            <p class="text-[13px] font-medium text-slate-500 uppercase tracking-[0.18em]">
                                Horarios
                            </p>
                            <p class="mt-1 text-sm">
                                Lunes a Viernes · 8:00 a.m. — 6:00 p.m.
                            </p>
                        </div>
                    </div>
                </div>

                <!-- FORMULARIO -->
                <div>
                    <form action="#" method="post"
                        class="bg-slate-50 border border-slate-200 rounded-2xl px-5 py-6 md:p-7 grid gap-4 text-sm md:text-[15px]">

                        <div class="grid md:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-medium text-slate-700 mb-1">Nombre</label>
                                <input type="text" required
                                    class="w-full rounded-xl border border-slate-300 px-3 py-2.5 text-sm text-slate-800">
                            </div>

                            <div>
                                <label class="block text-xs font-medium text-slate-700 mb-1">Teléfono</label>
                                <input type="tel" required
                                    class="w-full rounded-xl border border-slate-300 px-3 py-2.5 text-sm text-slate-800">
                            </div>
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-slate-700 mb-1">Correo electrónico</label>
                            <input type="email" required
                                class="w-full rounded-xl border border-slate-300 px-3 py-2.5 text-sm text-slate-800">
                        </div>

                        <div>
                            <label class="block text-xs font-medium text-slate-700 mb-1">Mensaje</label>
                            <textarea rows="4" required
                                class="w-full rounded-xl border border-slate-300 px-3 py-2.5 text-sm text-slate-800"></textarea>
                        </div>

                        <button type="submit"
                            class="mt-2 inline-flex justify-center rounded-xl bg-emerald-600 px-5 py-2.5 text-sm font-semibold text-white hover:bg-emerald-700">
                            Enviar mensaje
                        </button>
                    </form>
                </div>

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