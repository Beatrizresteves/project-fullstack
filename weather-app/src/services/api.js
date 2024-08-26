// frontend/src/services/api.js

const API_URL = 'http://localhost/api'; // Atualize conforme necessário

export async function addWeather(data) {
  const response = await fetch(`${API_URL}/add_weather.php`, {
    method: 'POST',
    headers: {
      'Content-Type': 'application/x-www-form-urlencoded',
    },
    body: new URLSearchParams(data).toString(),
  });
  return response.text();
}

export async function getWeather(city) {
  const response = await fetch(`${API_URL}/get_weather.php?city=${encodeURIComponent(city)}`);
  return response.json();
}

export async function getHistory() {
  const response = await fetch(`${API_URL}/get_history.php`);
  return response.json();
}
