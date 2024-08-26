<?php
require 'WeatherController.php';

if (isset($_GET['city'])) {
    $controller = new WeatherController();
    $city = htmlspecialchars($_GET['city']);
    $weather = $controller->getWeather($city);
    $controller->saveSearch($city);

    header('Content-Type: application/json');
    echo json_encode($weather);
} else {
    echo json_encode(['error' => 'No city provided']);
}
?>
