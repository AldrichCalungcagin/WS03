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
    function loadView($name) {
        require basePath("views/{$name}.view.php"); }

    // function loadPartial($name) {
    //     require basePath('views/partial/{$name}.php'); }

    /**
     * load a partial
     * @param string $name
     * @return void
     * 
     */

    function loadPartial($name) {
        $path = basePath("views/partials/{$name}.php");
        if(file_exists($path)) {
            require $path;
        } else {
        echo "Partial'{$name}' not found!";
        }
    }
?>