<?php
/**
 * Auto-add #[\AllowDynamicProperties] to PHP classes that use dynamic properties.
 * For PHP 8.2+ compatibility.
 */

$dir = __DIR__; // or set a specific path
$excludedDirs = ['vendor', 'node_modules'];
$regexClass = '/^\s*(?:abstract\s+|final\s+)?class\s+(\w+)/m';

function shouldSkip($path, $excludedDirs) {
    foreach ($excludedDirs as $ex) {
        if (strpos($path, DIRECTORY_SEPARATOR . $ex . DIRECTORY_SEPARATOR) !== false) {
            return true;
        }
    }
    return false;
}

function patchFile($filePath, $regexClass) {
    $contents = file_get_contents($filePath);

    if (!preg_match($regexClass, $contents, $matches)) return;

    if (strpos($contents, '#[\\AllowDynamicProperties]') !== false) return;

    // Backup
    copy($filePath, $filePath . '.bak');

    // Add attribute above the class
    $newContents = preg_replace(
        $regexClass,
        "#[\\AllowDynamicProperties]\n$0",
        $contents,
        1 // Only once per file
    );

    file_put_contents($filePath, $newContents);
    echo "✅ Patched: $filePath\n";
}

$rii = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));

foreach ($rii as $file) {
    if ($file->isDir()) continue;

    $path = $file->getPathname();

    if (shouldSkip($path, $excludedDirs)) continue;

    if (pathinfo($path, PATHINFO_EXTENSION) === 'php') {
        patchFile($path, $regexClass);
    }
}

echo "\n🎉 All done! Backup files have a .bak extension.\n";