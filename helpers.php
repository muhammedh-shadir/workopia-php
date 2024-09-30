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
function loadView($view, $data = []) {
    $viewPath = basePath("views/{$view}.view.php");
    
    if (file_exists($viewPath)) {
        extract($data);
        require $viewPath;
    } else {
        echo "View {$view} not found";
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

/**
 * Inspect a value(s)
 * @param mixed $values
 * @return void
 */
function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

/**
 * Inspect a value(s) and die
 * @param mixed $values
 * @return void
 */
function inspectAndDie($value) {
    echo '<pre>';
    die(var_dump($value));
    echo '</pre>';
}

/**
 * Format salary
 * 
 * @param string $salary
 * @return string formattedSalary
 */
function formatSalary($salary) {
    return '$' . number_format(floatval($salary));
}