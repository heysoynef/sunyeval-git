<?php

function loadViteAssets(string $entry = "src/main.js") {

    // 🔥 Ruta correcta EN PRODUCCIÓN (después de tu deploy vía Actions)
    $manifestPath = __DIR__ . "/.vite/manifest.json";

    // 🚀 MODO PRODUCCIÓN
    if (file_exists($manifestPath)) {

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (!isset($manifest[$entry])) {
            return "<!-- Entry $entry no encontrado en manifest -->";
        }

        $css = $manifest[$entry]["css"][0] ?? null;
        $js  = $manifest[$entry]["file"];

        $html = "";

        // CSS (si existe)
        if ($css) {
            $html .= '<link rel="stylesheet" href="/assets/' . $css . '">' . PHP_EOL;
        }

        // JS
        $html .= '<script type="module" src="/assets/' . $js . '"></script>' . PHP_EOL;

        return $html;
    }

    // 🧑‍💻 MODO DEV (Vite Dev Server)
    return <<<HTML
<!-- VITE DEV -->
<script type="module" src="http://localhost:5173/src/main.js"></script>
HTML;
}
