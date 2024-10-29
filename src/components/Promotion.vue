<template>
  <div class="promotion" :style="{ backgroundColor: bgcolor }">
    <div>
      <h2>{{ title }}</h2>
      <Button :text="'Shop Now'" :link="link" />
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
    bgcolor: String,
  },
  components: {
    Button,
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
  width: 420px;
}

.promotion-image {
   width: 220px;
  height: 180px;
  object-fit: contain;
  margin-top: 50px; 
  margin-right: -20px;
}

h2 {
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  color: black;
  margin-bottom: 16px;
}
</style>
