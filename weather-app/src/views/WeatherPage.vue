<template>
    <div class="home">
      <div class="nav-buttons">
        <button @click="currentView = 'form'" class="nav-button">Weather Form</button>
        <button @click="currentView = 'view'" class="nav-button">Weather View</button>
        <button @click="currentView = 'history'" class="nav-button">Weather History</button>
      </div>
      
      <div class="content">
        <WeatherForm v-if="currentView === 'form'" />
        <WeatherView v-if="currentView === 'view'" />
        <WeatherHistory v-if="currentView === 'history'" />
      </div>
    </div>
  </template>
  
  <script>
  import WeatherForm from '@/components/WeatherForm.vue';
  import WeatherView from '@/components/WeatherView.vue';
  import WeatherHistory from '@/components/WeatherHistory.vue';
  
  export default {
    components: {
      WeatherForm,
      WeatherView,
      WeatherHistory
    },
    data() {
      return {
        currentView: 'form'
      };
    }
  };
  </script>
  
  <style scoped>
  .home {
    display: flex;
    flex-direction: column;
    min-height: 100vh;
    padding: 20px;
    background-color: #f0f2f5; 
  }
  
  .nav-buttons {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
  }
  
  .nav-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 16px;
    margin: 0 5px;
  }
  
  .nav-button:hover {
    background-color: #0056b3;
  }
  
  .content {
    display: flex;
    justify-content: center;
  }
  </style>
  