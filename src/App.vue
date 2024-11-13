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
    <div class="product-row">
      <Product
        v-for="product in productsByGroup"
        :key="product.id"
        :name="product.name"
        :rating="product.rating"
        :size="product.size"
        :image="product.image"
        :price="product.price"
        :promotionAsPercentage="product.promotionAsPercentage"
        :categoryId="product.categoryId"
        :instock="product.instock"
        :countSold="product.countSold"
        :group="product.group"
      />
    </div>
  </div>
</template>

<script>
import Category from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";
import Product from "./components/Product.vue";
import { useProductStore } from './stores/productStore';
import { onMounted } from 'vue';
import { mapState } from 'pinia';

export default {
  components: {
    Category,
    Promotion,
    Product,
  },
  setup() {
    const productStore = useProductStore();

    // Load all data on component mount
    onMounted(() => {
      productStore.loadAllData();
    });
    
    // Define any reactive properties needed for getters
    const currentGroupName = 'fruits'; // example
    const selectedCategoryId = 1; // example category ID

    return {
      currentGroupName,
      selectedCategoryId,
      productStore
    };
  },

  computed: {
  ...mapState(useProductStore, {
    popularProducts: 'getPopularProducts' 
  }),

  categories() {
    return this.productStore.getCategoriesByGroup(this.currentGroupName);
  },
  promotions() {
    return this.productStore.getCategoriesByGroup(this.currentGroupName);
  },
  productsByGroup() {
    return this.productStore.getProductsByGroup(this.currentGroupName);
  },
  productsByCategory() {
    return this.productStore.getProductsByCategory(this.selectedCategoryId);
  }
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

.product-row {
  display: flex;
  flex-direction: row;
  gap: 15px;
  margin-bottom: 10px;
}
</style>
