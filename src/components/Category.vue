<template>
  <div class="category" :style="{ backgroundColor: bgcolor }">
    <img :src="image" alt="category image" class="category-image" />
    <p class="category-name">{{ name }}</p>
    <p class="category-count">{{ itemCount }} items</p>
  </div>
</template>

<script>
export default {
  props: {
    name: String,
    itemCount: Number,
    image: String,
    bgcolor: String,
  },
};
</script>

<style scoped>
.category {
  padding: 10px;
  border-radius: 8px;
  text-align: center;
  flex-direction: column;
  align-items: center;
  width: 112px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
}

.category-image {
  width: 86px;
  height: 86px;
  margin-bottom: 10px;
  object-fit: contain;
}

.category-name {
  font-size: small;
  font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
  color: #333;
}

.category-count {
  font-size: 10px;
  color: #555;
}
</style>