<?php
// Simple front controller for the simulated project. It serves the rendered dashboard directly.
// In a real Laravel app, public/index.php would bootstrap the framework.
header('Content-Type: text/html; charset=utf-8');
echo file_get_contents(__DIR__ . '/../resources/views/rendered_dashboard.html');
