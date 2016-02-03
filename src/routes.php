<?php
// Routes

$app->get('/[{name}]', function ($request, $response, $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route");
    $data['args'] = $args;
    ob_start();
    include "../templates/io.php";
    $data['content'] = ob_get_clean();
    // Render index view
    return $this->renderer->render($response, 'index.phtml', $data);
});
