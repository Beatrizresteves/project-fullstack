<template>
  <div class="weather-view">
    <div class="card">
      <h1 class="title">Weather View</h1>
      <input v-model="city" type="text" placeholder="Enter city name" class="input" />
      <button @click="getWeather" class="button">Get Weather</button>
  
      <div v-if="weather" class="weather-info">
        <h2 class="weather-city">Weather in {{ weather.city }}</h2>
        <p>Temperature: {{ weather.temperature }}°C</p>
        <p>Humidity: {{ weather.humidity }}%</p>
        <p>Description: {{ weather.description }}</p>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      city: '',
      weather: null
    };
  },
  methods: {
    getWeather() {
      fetch(`http://localhost/backend/get_weather.php?city=${this.city}`)
        .then(response => response.json())
        .then(data => {
          this.weather = data;
        })
        .catch(error => console.error('Error:', error));
    }
  }
};
</script>

<style scoped>
.weather-view {
  display: flex;
  justify-content: center;
  padding: 20px;
  background-color: #f0f2f5;
  height: 100vh;
  align-items: flex-start;
}

.card {
  background: #fff;
  border-radius: 8px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  padding: 20px;
  width: 100%;
  max-width: 600px;
  text-align: center;
}

.title {
  font-size: 28px;
  margin-bottom: 20px;
  color: #333;
}

.input {
  width: calc(100% - 22px);
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  box-sizing: border-box;
}

.button {
  background-color: #007bff;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  font-size: 16px;
}

.button:hover {
  background-color: #0056b3;
}

.weather-info {
  margin-top: 20px;
}

.weather-city {
  font-size: 24px;
  margin-bottom: 10px;
  color: #333;
}
</style>
