<?php
// add_weather.php

// Configurações do banco de dados
error_reporting(E_ALL);
ini_set('display_errors', 1);
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "weather_app";

// Cria conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}

// Obtém dados do POST
$city = $_POST['city'];
$temperature = $_POST['temperature'];
$humidity = $_POST['humidity'];
$description = $_POST['description'];

// Prepara e executa a consulta SQL
$stmt = $conn->prepare("INSERT INTO weather (city, temperature, humidity, description) VALUES (?, ?, ?, ?)");
$stmt->bind_param("sdds", $city, $temperature, $humidity, $description);

if ($stmt->execute()) {
    echo "Weather data added successfully!";
} else {
    echo "Error: " . $stmt->error;
}

// Fecha a conexão
$stmt->close();
$conn->close();
?>
