<template>
  <nav class="menu">
    <button class="browse-button">
      <i class="fas fa-bars"></i> Browse All Categories
    </button>
    <ul class="menu-list">
      <li class="menu-item">
        <i class="fas fa-fire"></i> Hot Deals
      </li>
      <li class="menu-item">Home</li>
      <li class="menu-item dropdown">
        Food
        <i class="fas fa-caret-down"></i>
      </li>
      <li class="menu-item dropdown">
        Vegetables
        <i class="fas fa-caret-down"></i>
      </li>
      <li class="menu-item">Drink</li>
      <li class="menu-item">Cookies</li>
      <li class="menu-item dropdown">
        Meat & Seafood
        <i class="fas fa-caret-down"></i>
      </li>
      <li class="menu-item">Bakery</li>
    </ul>
    <div class="support">
      <i class="fas fa-headphones"></i>
      <span>1900 - 8888</span>
      <small>24/7 Support Center</small>
    </div>
  </nav>
</template>

<script>
export default {
  name: "MenuItem",
};
</script>

<style scoped>
.menu {
  display: flex;
  align-items: center;
  background-color: #ffffff;
  padding: 10px 20px;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
  font-family: Arial, sans-serif;
}

.browse-button {
  background-color: #27ae60;
  color: #ffffff;
  border: none;
  padding: 10px 15px;
  font-size: 14px;
  display: flex;
  align-items: center;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 20px;
}

.browse-button i {
  margin-right: 10px;
}

.menu-list {
  display: flex;
  list-style: none;
  padding: 0;
  margin: 0;
  flex-grow: 1;
}

.menu-item {
  margin: 0 15px;
  cursor: pointer;
  font-size: 14px;
  display: flex;
  align-items: center;
  position: relative;
}

.menu-item i {
  margin-left: 5px;
  font-size: 10px;
}

.menu-item.dropdown:hover::after {
  content: "";
  display: block;
  position: absolute;
  bottom: -5px;
  left: 0;
  right: 0;
  height: 2px;
  background-color: #27ae60;
}

.support {
  display: flex;
  align-items: center;
  margin-left: auto;
  text-align: right;
}

.support i {
  margin-right: 10px;
  color: #27ae60;
}

.support span {
  font-size: 16px;
  font-weight: bold;
  margin-right: 5px;
}

.support small {
  display: block;
  font-size: 12px;
  color: #888;
}
</style>
