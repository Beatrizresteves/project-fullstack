<template>
  <div class="weather-history">
    <div class="card">
      <div class="card-title">Weather History</div>
      <table class="table">
        <thead>
          <tr>
            <th>City</th>
            <th>Temperature</th>
            <th>Humidity</th>
            <th>Description</th>
            <th>Date</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="item in items" :key="item.id">
            <td>{{ item.city }}</td>
            <td>{{ item.temperature }} °C</td>
            <td>{{ item.humidity }} %</td>
            <td>{{ item.description }}</td>
            <td>{{ item.created_at }}</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

  <script>
  export default {
    data() {
      return {
        history: []
      };
    },
    mounted() {
      fetch('http://localhost/backend/get_history.php')
        .then(response => response.json())
        .then(data => {
          this.history = data;
        })
        .catch(error => console.error('Error:', error));
    }
  };
  </script>
  <style scoped>
  .weather-history {
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
    max-width: 800px;
  }
  
  .card-title {
    font-size: 24px;
    margin-bottom: 10px;
    color: #333;
  }
  
  .table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 20px;
  }
  
  .table th, .table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
  }
  
  .table th {
    background-color: #f4f4f4;
  }
  </style>