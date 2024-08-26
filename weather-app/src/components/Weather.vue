<template>
    <div class="weather-app">
      <h1>Weather App</h1>
      <input type="text" v-model="city" placeholder="Enter city name" />
      <button @click="getWeather">Get Weather</button>
  
      <div v-if="weather">
        <h2>{{ weather.name }}</h2>
        <p>Temperature: {{ weather.main.temp }}°C</p>
        <p>Condition: {{ weather.weather[0].description }}</p>
      </div>
    </div>
  </template>
  
  <script>
  export default {
    data() {
      return {
        city: '',
        weather: null,
      };
    },
    methods: {
      async getWeather() {
        try {
          const response = await fetch(`http://localhost/api/index.php?city=${this.city}`);
          this.weather = await response.json();
        } catch (error) {
          console.error('Error fetching weather data', error);
        }
      },
    },
  };
  </script>
  
  <style>
  .weather-app {
    text-align: center;
    margin-top: 50px;
  }
  </style>
  