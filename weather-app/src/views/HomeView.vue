<template>
  <div class="home">
    <img alt="Vue logo" src="../assets/logo.png">
    <Weather/>
  </div>
</template>

<script>
// @ is an alias to /src
import HelloWorld from '@/components/HelloWorld.vue'
import Weather from '../components/Weather.vue'

export default {
  name: 'HomeView',
  components: {
    HelloWorld,
    Weather
  }
}
</script>
<style scoped>

.weather-view {
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
</style>