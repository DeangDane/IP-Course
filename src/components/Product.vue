<template>
  <div class="product">
    <!-- Dynamic promotion badge -->
    <div v-if="promotionAsPercentage" class="promotion-badge">
      -{{ promotionAsPercentage }}%
    </div>
    
    <!-- Product image -->
    <img :src="image" alt="product image" class="product-image" />

    <!-- Dynamic label (e.g., "Hot" or "Sale") -->
    <div v-if="label" class="product-label">{{ label }}</div>

    <!-- Product details -->
    <h4 class="product-name">{{ name }}</h4>
    <p class="product-size">{{ size }}</p>
    <p class="product-rating">⭐ {{ rating }}</p>

    <!-- Price with old price shown if available -->
    <div class="price-section">
      <span class="current-price">${{ price }}</span>
      <!-- <span v-if="oldPrice" class="old-price">${{ oldPrice }}</span> -->
    </div>

    <!-- Add button -->
    <button class="add-button">Add +</button>
  </div>
</template>

<script>
export default {
  name: "Product",
  props: {
    name: String,
    rating: Number,
    size: String,
    image: String,
    price: Number,
    // oldPrice: Number, // For displaying the old price
    promotionAsPercentage: Number, // Percentage discount
    label: String, // Optional label like "Hot" or "Sale"
  },
};
</script>

<style scoped>
.product {
  width: 280px;
  display: flex;
  flex-direction: column;
  align-items: center;
  border: 1px solid lightgray;
  border-radius: 10px;
  padding: 10px;
  background-color: white;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  transition: transform 0.3s, box-shadow 0.3s;
  position: relative;
}

.product:hover {
  transform: translateY(-5px);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
}

.product-image {
  width: 90%;
  height: 60%;
  margin-bottom: 10px;
}

.product-name {
  font-weight: bold;
  font-size: 1.1rem;
  margin: 5px 0;
}

.product-size,
.product-rating {
  font-size: 0.9rem;
  margin: 5px 0;
}

.price-section {
  display: flex;
  align-items: center;
  gap: 10px;
  margin-top: 10px;
}

.current-price {
  color: green;
  font-size: 1rem;
  font-weight: bold;
}
/* 
.old-price {
  text-decoration: line-through;
  color: gray;
  font-size: 0.9rem;
} */

.promotion-badge {
  position: absolute;
  top: 10px;
  left: 10px;
  background-color: green;
  color: white;
  font-size: 0.8rem;
  padding: 3px 8px;
  border-radius: 5px;
}

.add-button {
  margin-top: 10px;
  padding: 8px 16px;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 5px;
  color: #333;
  font-size: 0.9rem;
  cursor: pointer;
  transition: background-color 0.3s, color 0.3s;
}

.add-button:hover {
  background-color: #e0e0e0;
  color: black;
}
</style>