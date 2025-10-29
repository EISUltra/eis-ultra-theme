<?php
/**
 * EIS Ultra Theme – Version Utilities
 * Provides a single source of truth for version retrieval across environments.
 */

if (!function_exists('eis_ultra_get_version')) {
    function eis_ultra_get_version() {
        // Search paths (relative to both WordPress & Replit structures)
        $paths = [
            __DIR__ . '/../../VERSION',     // For Replit workspace
            __DIR__ . '/../../../VERSION',  // For WordPress structure
        ];

        foreach ($paths as $path) {
            if (file_exists($path)) {
                return trim(file_get_contents($path));
            }
        }

        return '1.0.0'; // Fallback version
    }
}
