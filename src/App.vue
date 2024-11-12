<template>
  <div class="app">
    <div class="category-list">
      <Category
        v-for="(item, index) in categories"
        :key="index"
        :name="item.name"
        :itemCount="item.itemCount"
        :image="item.image"
        :color="item.color"
      />
    </div>
    <div class="promotion-list">
      <Promotion
        v-for="(promo, index) in promotions"
        :key="index"
        :title="promo.title"
        :image="promo.image"
        :link="promo.link"
        :color="promo.color"
        :buttonColor="promo.buttonColor"
      />
    </div>
  </div>
</template>

<script>
import Category from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";

import axios from 'axios';

export default {
  components: {
    Category,
    Promotion,
  },
  data() {
    return {
      categories: [
       
      ],
      promotions: [
        // { title: "Everyday Fresh & Clean with Our Products", 
        //   image: "src/assets/Cms-1.png", 
        //   bgcolor: "#FFF5D9",
        //   buttoncolor: "#34a853",
        //   link: "#" },
        // { title: "Make your Breakfast Healthy and Easy", 
        //   image: "src/assets/Cms-2.png", 
        //   bgcolor: "#FFE6E6",
        //   buttoncolor: "#34a853", 
        //   link: "#" },
        // { title: "The best Organic Products Online", 
        //   image: "src/assets/Cms-3.png", 
        //   bgcolor: "#F0F8FF", 
        //   buttoncolor: "#f5cb0f",
        //   link: "#" },
      ],
    };
  },
  mounted(){
    //fetch data categories, promotions from backend
    this.fetchCategories()
    this.fetchPromotions()
  },
  methods: {
    fetchCategories() {
      axios.get("http://localhost:3000/api/categories").then((result) => {
        this.categories = result.data
      })
    },
    fetchPromotions() {
      axios.get("http://localhost:3000/api/promotions").then((result) => {
        this.promotions = result.data
      })
  },
}
  
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
