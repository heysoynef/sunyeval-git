<?php

function loadViteAssets(string $entry = "src/main.js") {

    // Ruta al manifest en tu servidor (Hostinger)
    $manifestPath = __DIR__ . "/.vite/manifest.json";

    // 🚀 PRODUCCIÓN
    if (file_exists($manifestPath)) {

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (!isset($manifest[$entry])) {
            return "<!-- Entry $entry no encontrado en manifest -->";
        }

        // OJO: El manifest YA incluye "assets/..."
        $css = $manifest[$entry]["css"][0] ?? null;
        $js  = $manifest[$entry]["file"];

        $html = "";

        // CSS
        if ($css) {
            $html .= '<link rel="stylesheet" href="/' . $css . '">' . PHP_EOL;
        }

        // JS
        $html .= '<script type="module" src="/' . $js . '"></script>' . PHP_EOL;

        return $html;
    }

    // 🧑‍💻 DEV
    return <<<HTML
<!-- VITE DEV -->
<script type="module" src="http://localhost:5173/src/main.js"></script>
HTML;
}
