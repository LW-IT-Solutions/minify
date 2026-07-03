<?php
class CodeOptimizer {
    public static function minify($code) {
        // Usuwanie komentarzy wieloliniowych i jednoliniowych
        $code = preg_replace('!/\*.*?\*/!s', '', $code);
        $code = preg_replace('/\/\/.*?\n/', '', $code);
        // Usuwanie białych znaków (nowe linie, tabulatory)
        $code = preg_replace('/\s+/', ' ', $code);
        return trim($code);
    }

    public static function obfuscate($code) {
        // Bardzo prosty obfuscator: zamienia "var" na "v"
        $code = str_replace('var ', 'v ', $code);
        $code = str_replace('function ', 'f ', $code);
        return $code;
    }
}
