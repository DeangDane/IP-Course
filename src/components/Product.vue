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
.product {
display: flex;
flex-direction: column;
align-items: center;
border: 1px solid #ccc;
padding: 10px;
border-radius: 5px;
width: 200px;
}
.product-image {
width: 100%;
height: auto;
margin-bottom: 10px;
}
.product-name {
font-weight: bold;
margin: 5px 0;
}
.product-price {
color: green;
}
.product-popular {
color: orange;
font-weight: bold;
}
</style>