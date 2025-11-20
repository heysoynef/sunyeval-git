<?php

function loadViteAssets(string $entry = "src/main.js") {

    $manifestPath = __DIR__ . "/dist/.vite/manifest.json";

    // 🚀 MODO PRODUCCIÓN
    if (file_exists($manifestPath)) {

        $manifest = json_decode(file_get_contents($manifestPath), true);

        if (!isset($manifest[$entry])) {
            return "<!-- Entry $entry no encontrado en manifest -->";
        }

        $css = $manifest[$entry]["css"][0] ?? null;
        $js  = $manifest[$entry]["file"];

        $html = "";

        if ($css) {
            $html .= '<link rel="stylesheet" href="/sunyeval/dist/' . $css . '">' . PHP_EOL;
        }

        $html .= '<script type="module" src="/sunyeval/dist/' . $js . '"></script>' . PHP_EOL;

        return $html;
    }

    // 🧑‍💻 MODO DESARROLLO: Vite Dev Server
    return <<<HTML
<!-- VITE DEV -->
<script type="module" src="http://localhost:5173/src/main.js"></script>
HTML;
}
