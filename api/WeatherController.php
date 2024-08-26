<?php
require 'config.php';

class WeatherController {
    private $apiKey = 'YOUR_API_KEY_HERE';

    public function getWeather($city) {
        $url = "http://api.openweathermap.org/data/2.5/weather?q={$city}&appid={$this->apiKey}&units=metric";
        $response = file_get_contents($url);
        return json_decode($response, true);
    }

    public function saveSearch($city) {
        global $pdo;
        $stmt = $pdo->prepare("INSERT INTO searches (city) VALUES (:city)");
        $stmt->execute(['city' => $city]);
    }
}
?>
