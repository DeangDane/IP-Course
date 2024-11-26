<template>
    <div class="product">
        <img :src="image" alt="product image" class="product-image" />
        <h4 class="product-name">{{ name }}</h4>
        <p class="product-size">{{ size }}</p>
        <p class="product-price">${{ price }}</p>
        <p class="product-rating">Rating : {{ rating }}</p>
        <p class="product-instock">IN Stock : {{ instock }}</p>
        <p v-if="countSold > 10" class="product-popular">popular Products</p>
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
promotionAsPercentage: Number,
categoryId: Number,
instock: Number,
countSold: Number,
group: String
}
};
</script>
<style>
.container {
  display: grid;
  grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); /* Responsive grid */
  gap: 15px; /* Space between items */
  padding: 10px; /* Padding around the container */
}

.product {
  display: flex;
  flex-direction: column;
  align-items: center; /* Center content horizontally */
  border: 1px solid lightgray; /* Unified border styling */
  padding: 10px;
  margin: 3px; /* Small gap around each product */
  border-radius: 10px;
  width: 100%; /* Adjust to fit within the grid layout */
  max-width: 200px; /* Limit maximum width for better scaling */
  background-color: white; /* Consistent background */
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow for a modern look */
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Add hover animation */
}

.product:hover {
  transform: translateY(-5px); /* Lift on hover */
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Enhanced shadow on hover */
}

.product-image {
  width: 90%;
  height: auto; /* Maintain aspect ratio */
  margin: 0 auto 10px; /* Center image and add space below */
  object-fit: cover; /* Ensure image fits nicely */
}

.product-name {
  font-weight: bold;
  font-size: 1.1rem; /* Slightly larger for emphasis */
  margin: 5px 0;
  text-align: center; /* Center text */
}

.product-price {
  color: green;
  font-size: 1rem; /* Clear and readable */
  margin: 5px 0; /* Add spacing */
}

.product-rating {
  color: orange;
  font-size: 0.9rem; /* Slightly smaller for context */
  margin-bottom: 5px;
}

.product-popular {
  color: orange;
  font-weight: bold;
  font-size: 0.95rem; /* Highlight popular products */
  margin-top: 5px; /* Space above */
}

button {
  padding: 8px 16px;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 5px;
  color: #333;
  font-size: 0.9rem;
  cursor: pointer;
  transition: background-color 0.3s ease, color 0.3s ease;
}

button:hover {
  background-color: #e0e0e0;
  color: #000;
}
</style>