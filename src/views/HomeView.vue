<template>
    <div class="home-view">
      <!-- Menu for Categories -->
      <div class="menuCategorybar">
        <div>Featured Categories</div>
        <Menu
          :menuItems="categoryGroups"
          @menu-selected="(group) => (selectedCategoryGroup = group)"
        />
      </div>
  
      <!-- Category Display -->
      <div class="category-list">
        <Category
          v-for="(category, index) in filteredCategories"
          :key="index"
          v-bind="category"
        />
      </div>
  
      <!-- Promotion Display -->
      <div class="promotion-list">
        <Promotion
          v-for="(promotion, index) in promotions"
          :key="index"
          :title="promotion.title"
          :image="promotion.image"
          :color="promotion.color"
          :buttonColor="promotion.buttonColor"
        />
      </div>
  
      <!-- Menu for Products -->
      <div class="menuProductbar">
        <div>Popular Products</div>
        <Menu
          :menuItems="productGroups"
          @menu-selected="(group) => (selectedProductGroup = group)"
        />
      </div>
  
      <!-- Product Display -->
      <div class="product-row">
        <Product
          v-for="(product, index) in filteredProducts"
          :key="index"
          :name="product.name"
          :rating="product.rating"
          :size="product.size"
          :image="product.image"
          :price="product.price"
          :promotionAsPercentage="product.promotionAsPercentage"
          :label="product.label"
        />
      </div>
    </div>
  </template>
  
  <script>
  import Category from "../components/Category.vue";
  import Promotion from "../components/Promotion.vue";
  import Product from "../components/Product.vue";
  import Menu from "../components/Menu.vue";
  import { useProductStore } from "../stores/productStore";
  import { ref, computed, onMounted } from "vue";
  
  export default {
    name: "HomeView",
    components: {
      Category,
      Promotion,
      Product,
      Menu,
    },
    setup() {
      const productStore = useProductStore();
  
      const selectedCategoryGroup = ref("All");
      const selectedProductGroup = ref("All");
  
      const getUniqueGroups = (items, key) => {
        const groups = items.map((item) => item[key]);
        return ["All", ...new Set(groups)];
      };
  
      const categoryGroups = computed(() =>
        getUniqueGroups(productStore.categories, "group")
      );
      const productGroups = computed(() =>
        getUniqueGroups(productStore.products, "group")
      );
  
      const filteredCategories = computed(() => {
        if (selectedCategoryGroup.value === "All") return productStore.categories;
        return productStore.categories.filter(
          (category) => category.group === selectedCategoryGroup.value
        );
      });
  
      const filteredProducts = computed(() => {
        if (selectedProductGroup.value === "All") return productStore.products;
        return productStore.products.filter(
          (product) => product.group === selectedProductGroup.value
        );
      });
  
      const promotions = computed(() => productStore.promotions);
  
      onMounted(() => {
        productStore.loadAllData();
      });
  
      return {
        productStore,
        categoryGroups,
        productGroups,
        filteredCategories,
        filteredProducts,
        selectedCategoryGroup,
        selectedProductGroup,
        promotions,
      };
    },
  };
  </script>
  <style>
  .home-view {
    padding: 20px;
    display: flex;
    flex-direction: column;
    gap: 30px;
  }
  
  .menuCategorybar,
  .menuProductbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 1.2rem;
    margin-bottom: 20px;
    gap: 20px; /* Adjusted for better spacing */
  }
  
  .category-list,
  .promotion-list {
    display: flex;
    gap: 15px;
    width: 100%;
  }
  
  .product-row {
    display: grid;
    grid-template-columns: auto auto auto auto auto; /* Responsive grid layout */
    gap: 5px;
    width: 100%;
  }
  
  button {
    padding: 10px 20px;
    background-color: transparent;
    color: lightgray;
    border: none;
    cursor: pointer;
    transition: color 0.3s ease, background-color 0.3s ease;
  }
  
  button:hover {
    color: red;
    background-color: #f9f9f9;
    border-radius: 5px;
  }
  
  button.active {
    color: rgb(172, 31, 132);
    background-color: #fff0f6;
    border-radius: 5px;
  }
  
  /* Adjust spacing in menu bars */
  .menuCategorybar {
    gap: 50px; /* Adjusted for better spacing */
  }
  
  .menuProductbar {
    gap: 50px; /* Adjusted for better spacing */
  }
  
  </style>