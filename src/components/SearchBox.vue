<template>
  <div class="search-box-wrapper">
    <!-- Logo -->
    <img src="../assets/Lo.png" class="logo" alt="Logo" />

    <!-- Search Box -->
    <div class="search-box">
      <select class="category-select">
        <option value="all">All Categories</option>
        <option value="vegetables">Vegetables</option>
        <option value="fruits">Fruits</option>
        <option value="bakery">Bakery</option>
      </select>
      <input
        type="text"
        class="search-input"
        v-model="searchTerm"
        placeholder="Search for items"
      />
      <button class="search-button" @click="onSearch">
        <i class="fas fa-search"></i>
      </button>
    </div>

    <!-- Right Menu Section -->
    <div class="menu-section">
      <div class="menu-item">
        <i class="fas fa-user"></i>
        <span>Account</span>
      </div>
      <div class="menu-item">
        <i class="fas fa-exchange-alt"></i>
        <span>Compare</span>
      </div>
      <div class="menu-item">
        <i class="fas fa-heart"></i>
        <span>Wishlist</span>
      </div>
      <div class="menu-item">
        <i class="fas fa-shopping-cart"></i>
        <span>Cart</span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "SearchBox",
  data() {
    return {
      searchTerm: "", // Binds to the search input
    };
  },
  methods: {
    onSearch() {
      console.log("Searching for:", this.searchTerm);
      // Implement your search functionality here
    },
  },
};
</script>

<style scoped>
.search-box-wrapper {
  display: flex;
  align-items: center;
  justify-content: space-between;
  padding: 10px 20px;
  background-color: #fcf8f8; /* Light background for the header */
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.logo {
  width: 150px;
}

.search-box {
  display: flex;
  align-items: center;
  border: 1px solid #ccc;
  border-radius: 5px;
  overflow: hidden;
  background-color: white;
  flex-grow: 1;
  max-width: 800px;
  margin: 0 20px;
}

.category-select {
  border: none;
  padding: 8px;
  outline: none;
  background-color: #f8f8f8;
  font-size: 14px;
  flex-shrink: 0;
}

.search-input {
  flex-grow: 1;
  border: none;
  padding: 8px;
  outline: none;
  font-size: 14px;
}

.search-button {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 8px 12px;
  cursor: pointer;
  display: flex;
  align-items: center;
  justify-content: center;
}

.search-button i {
  font-size: 16px;
}

.menu-section {
  display: flex;
  align-items: center;
  gap: 15px;
}

.menu-item {
  display: flex;
  align-items: center;
  font-size: 14px;
  color: #333;
  cursor: pointer;
}

.menu-item i {
  margin-right: 5px;
  font-size: 16px;
}
</style>
