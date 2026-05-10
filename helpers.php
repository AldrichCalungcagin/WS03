<?php
    // function basePath(string $path): string {
    //     return BASE_PATH . '/' . $path;
    // }

    /**
     * Get the base path
     *  
     * @param string $path
     * @return string
     * 
     */

    function basePath($path = '') {
        return __DIR__ . '/' . $path;
    }

    /**
     * load a view
     *  
     * @param string $name
     * @return void
     * 
     */
    function loadView($name, $data = []) {
        $viewPath = basePath("App/views/{$name}.view.php");
        if(file_exists($viewPath)) {
            extract($data);
            require $viewPath;
        } else {
            echo "View '{$name}' not found!";
        }
    }

    // function loadPartial($name) {
    //     require basePath('views/partial/{$name}.php'); }

    /**
     * load a partial
     * @param string $name
     * @return void
     * 
     */

    function loadPartial($name) {
        $partialPath = basePath("App/views/partials/{$name}.php");
        if(file_exists($partialPath)) {
            require $partialPath;
        } else {
        echo "Partial'{$name}' not found!";
        }
    }

    function inspect($value) {
        echo '<pre>';
        var_dump($value);
        echo '</pre>';
    }

    function formatSalary($salary) {
        return '$' . number_format(floatval($salary));
    }
?>