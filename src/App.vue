<template>
  <div class="app">
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
        v-bind="promotion"
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
        v-bind="product"
      />
    </div>
  </div>
</template>

---

### **Script**

```vue
<script>
import Category from "./components/Category.vue";
import Promotion from "./components/Promotion.vue";
import Product from "./components/Product.vue";
import Menu from "./components/Menu.vue";
import { useProductStore } from "./stores/productStore";
import { ref, computed, onMounted } from "vue";

export default {
  name: "App",
  components: {
    Category,
    Promotion,
    Product,
    Menu,
  },

  setup() {
    const productStore = useProductStore();

    // Independent state for menus
    const selectedCategoryGroup = ref("All");
    const selectedProductGroup = ref("All");

    // Helper function to extract unique groups
    const getUniqueGroups = (items, key) => {
      const groups = items.map((item) => item[key]);
      return ["All", ...new Set(groups)];
    };

    // Compute groups for categories and products
    const categoryGroups = computed(() =>
      getUniqueGroups(productStore.categories, "group")
    );
    const productGroups = computed(() =>
      getUniqueGroups(productStore.products, "group")
    );

    // Filtered categories and products
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

    // Fetch all data on mount
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
      promotions: productStore.promotions, // Directly access promotions
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

.menuCategorybar,
.menuProductbar {
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-size: 1.2rem;
  margin-bottom: 20px;
  gap: 20px; /* Adjusted for better spacing */
}

.category-row,
.promo-row {
  display: flex;
  /* flex-wrap: wrap; */
  gap: 15px;
  /* justify-content: center; */
  margin-bottom: 20px;
}

.category-list,
.promotion-list {
  display: flex;
  gap: 15px;
  flex-wrap: wrap;
  justify-content: center; /* Center content for better alignment */
  width: 100%;
}

.product-row {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Responsive grid layout */
  gap: 15px;
  width: 100%;
}

.menuCategorybar div,
.menuProductbar div {
  font-weight: bold;
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
  color: green;
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