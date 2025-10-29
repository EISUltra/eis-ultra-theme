<?php
/**
 * EIS Ultra Theme Version Bumper
 *
 * Run manually or via CI/CD before committing.
 * Example usage:
 *   php scripts/bump_version.php patch
 *   php scripts/bump_version.php minor
 *   php scripts/bump_version.php major
 */

$version_file = __DIR__ . '/../VERSION';

if (!file_exists($version_file)) {
    echo "⚠️ VERSION file not found. Creating one starting at 1.0.0\n";
    file_put_contents($version_file, "1.0.0");
    $current = "0.0.0";
} else {
    $current = trim(file_get_contents($version_file));
}

$current = trim(file_get_contents($version_file));
list($major, $minor, $patch) = explode('.', $current);

// Determine bump type
$bump = $argv[1] ?? 'patch';
switch ($bump) {
    case 'major':
        $major++;
        $minor = 0;
        $patch = 0;
        break;
    case 'minor':
        $minor++;
        $patch = 0;
        break;
    default:
        $patch++;
        break;
}

$new_version = "{$major}.{$minor}.{$patch}";
file_put_contents($version_file, $new_version);

echo "✅ Version bumped: {$current} → {$new_version}\n";
