<template>
  <div class="promotion" :style="{ backgroundColor: color }">
    <div>
      <h2>{{ title }}</h2>
      <!-- <Button :text="'Shop Now'" :link="link" /> -->
      <button class="shop-now-button" @click="shopNow()" :style="{backgroundColor :buttonColor}">Shop Now--></button> 

    </div>
    <img :src="image" alt="promotion image" class="promotion-image" />

  </div>
</template>

<script>
import Button from "./Button.vue";

export default {
  props: {
    title: String,
    image: String,
    link: String,
    color: String,
    buttonColor:{
      type: String,
    },
  },
  components: {
    Button,
  },
  methods:{
  shopNow(){
    alert("Let's shop: " +this.title);
    window.location.href = this.link;
    },
  },
};

</script>

<style scoped>
.promotion {
  padding: 20px;
  border-radius: 8px;
  display: flex;
  align-items: center;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  color: #333;
  height: 220px;
  width: 465px;
}

.promotion-image {
   width: 220px;
  height: 180px;
  object-fit: contain;
  margin-top: 50px; 
  margin-right: -20px;
}

.shop-now-button {
  background-color: green; /* Coral background color */
  color: #fff; /* White text color */
  padding: 10px 20px;
  border: none;
  border-radius: 4px;
  font-size: 10px;
  cursor: pointer;
  transition: background-color 0.3s ease;
}

h2 {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  color: black;
  margin-bottom: 16px;
}
</style>
