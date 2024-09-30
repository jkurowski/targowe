<?php

if (!function_exists('estate2link')) {
    function estate2link(string $html): ?string
    {
        $matchCount = preg_match('/href="([^"]+)"/', $html, $match);
        return $matchCount ? $match[1] : null;
    }
}

