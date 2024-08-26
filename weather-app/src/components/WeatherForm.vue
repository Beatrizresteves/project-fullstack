<template>
  <div class="weather-form">
    <div class="card">
      <div class="card-title">Add Weather Data</div>
      <div class="card-subtitle">Enter weather information below:</div>
      <form @submit.prevent="submitForm">
        <input class="input" v-model="city" placeholder="City" required />
        <input class="input" v-model="temperature" type="number" placeholder="Temperature (°C)" required />
        <input class="input" v-model="humidity" type="number" placeholder="Humidity (%)" required />
        <input class="input" v-model="description" placeholder="Description" required />
        <button class="button" type="submit">Submit</button>
      </form>
    </div>
  </div>
</template>
  
  <script>
  export default {
    data() {
      return {
        city: '',
        temperature: null,
        humidity: null,
        description: ''
      };
    },
    methods: {
      addWeather() {
        fetch('http://localhost:8000/add_weather.php', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: `city=${encodeURIComponent(this.city)}&temperature=${this.temperature}&humidity=${this.humidity}&description=${encodeURIComponent(this.description)}`
        })
        .then(response => response.text())
        .then(data => {
          alert('Weather data added successfully!');
          this.city = '';
          this.temperature = null;
          this.humidity = null;
          this.description = '';
        })
        .catch(error => console.error('Error:', error));
      }
    }
  };
  </script>
  <style scoped>
  .weather-form {
    display: flex;
    justify-content: center;
    padding: 20px;
  }
  
  .card {
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 500px;
  }
  
  .card-title {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
  }
  
  .card-subtitle {
    font-size: 18px;
    margin-bottom: 20px;
    color: #666;
  }
  
  .input {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
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
  </style> 