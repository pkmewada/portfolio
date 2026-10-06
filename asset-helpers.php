<?php
function asset_url(string $path): string
{
    $file = __DIR__ . '/' . $path;
    $version = is_file($file) ? filemtime($file) : 0;
    return htmlspecialchars($path . '?v=' . $version, ENT_QUOTES, 'UTF-8');
}
