<template>
  <div class="app">
    <div class="category-list">
      <Category
        v-for="(item, index) in categories"
        :key="index"
        :name="item.name"
        :itemCount="item.itemCount"
        :image="item.image"
        :bgcolor="item.bgcolor"
      />
    </div>
    <div class="promotion-list">
      <Promotion
        v-for="(promo, index) in promotions"
        :key="index"
        :title="promo.title"
        :image="promo.image"
        :link="promo.link"
        :bgcolor="promo.bgcolor"
        :buttoncolor="promo.buttoncolor"
      />
    </div>
  </div>
</template>

<script>
import Category from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";

export default {
  components: {
    Category,
    Promotion,
  },
  data() {
    return {
      categories: [
        { name: "Cake & Milk", 
          itemCount: 14, 
          image: "src/assets/cat-1.png", 
          bgcolor: "#E9FCE5" },
        { name: "Peach", 
          itemCount: 17, 
          image: "src/assets/cat-2.png", 
          bgcolor: "#FFF5D9" },
        { name: "Organic Kiwi", 
          itemCount: 21, 
          image: "src/assets/cat-3.png", 
          bgcolor: "#E8FFE5" },
        { name: "Red Apple", 
          itemCount: 68, 
          image: "src/assets/cat-4.png", 
          bgcolor: "#FFE6E6" },
        { name: "Snack", 
          itemCount: 34, 
          image: "src/assets/cat-5.png", 
          bgcolor: "#FFF5E5" },
        { name: "Black Plum", 
          itemCount: 25, 
          image: "src/assets/cat-6.png", 
          bgcolor: "#F8E9FF" },
        { name: "Vegetables", 
          itemCount: 65, 
          image: "src/assets/cat-7.png", 
          bgcolor: "#E8FFE5" },
        { name: "Headphone", 
          itemCount: 33, 
          image: "src/assets/cat-8.png", 
          bgcolor: "#FFF9D9" },
        { name: "Cake & Milk", 
          itemCount: 54, 
          image: "src/assets/cat-9.png", 
          bgcolor: "#FFF9E5" },
        { name: "Orange", 
          itemCount: 63, 
          image: "src/assets/cat-10.png", 
          bgcolor: "#f7f9ec" },
      ],
      promotions: [
        { title: "Everyday Fresh & Clean with Our Products", 
          image: "src/assets/Cms-1.png", 
          bgcolor: "#FFF5D9",
          buttoncolor: "#34a853",
          link: "#" },
        { title: "Make your Breakfast Healthy and Easy", 
          image: "src/assets/Cms-2.png", 
          bgcolor: "#FFE6E6",
          buttoncolor: "#34a853", 
          link: "#" },
        { title: "The best Organic Products Online", 
          image: "src/assets/Cms-3.png", 
          bgcolor: "#F0F8FF", 
          buttoncolor: "#f5cb0f",
          link: "#" },
      ],
    };
  },
};
</script>

<style>
.app {
  padding: 20px;
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 30px;
}

.category-list {
  display: flex;
  flex-direction: row;
  gap: 18px;
  margin-bottom: 10px;
}

.promotion-list {
  display: flex;
  gap: 18px;
}
</style>
