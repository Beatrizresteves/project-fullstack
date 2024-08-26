import axios from 'axios';

const API_URL = 'http://localhost:8000'; // URL do seu backend Lumen

const api = axios.create({
  baseURL: API_URL,
  timeout: 1000,
  headers: { 'Content-Type': 'application/json' }
});

// Função para obter o clima
export const getWeather = (city) => {
  return api.get(`/weather?city=${city}`);
};
