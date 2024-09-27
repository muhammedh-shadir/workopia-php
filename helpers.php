<?php

/**
 * Get the base path
 * @param string $path
 * @return string
 */
function basePath($path = '') {
    return __DIR__ . '/' . $path;
}

/**
 * Load a view
 * @param string $viewPath
 * @return void
 */
function loadView($view) {
    $viewPath = basePath("views/{$view}.view.php");

    if (file_exists($viewPath)) {
        require $viewPath;
    } else {
        echo "Partial {$view} not found";
    }
}

/**
 * Load a partial
 * @param string $partial
 * @return void
 */
function loadPartial($partial) {
    $partialPath = basePath("views/partials/{$partial}.php");

    if (file_exists($partialPath)) {
        require $partialPath;
    } else {
        echo "Partial {$partial} not found";
    }
}
