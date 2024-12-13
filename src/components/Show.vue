<template>
    <div class="showcase">
      <div class="showcase-content">
        <h1>Don’t miss amazing grocery deals</h1>
        <p>Sign up for the daily newsletter</p>
        <div class="newsletter">
          <input
            type="email"
            placeholder="Enter your email address"
            class="newsletter-input"
          />
          <button class="subscribe-button">Subscribe</button>
        </div>
      </div>
      <div class="showcase-image">
        <img src="@/assets/fresh-apples-shopping.png" alt="Grocery Bag" />
      </div>
    </div>
  </template>
  
  <script>
  export default {
    name: "Show",
  };
  </script>
  
  <style scoped>
  .showcase {
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 2px;
    border-radius: 8px;
    background-image: url("@/assets/Background.png"); 
    background-size: cover;
    background-position: center;
    background-color: #fce3cc; /* Fallback color */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    gap: 20px;
    overflow: hidden;
  }
  
  .showcase-content {
    text-align: left;
    flex: 1;
    max-width: 50%;
    margin-left: 80px;
  }
  
  .showcase-content h1 {
    font-size: 3.5rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 10px;
    line-height: 1.2;
  }
  .showcase-content p {
    font-size: 1.2rem;
    color: #666;
    margin-bottom: 20px;
  }
  
  .newsletter {
    display: flex;
    align-items: center;
    gap: 10px;
  }
  
  .newsletter-input {
    padding: 10px;
    width: 300px;
    border: 1px solid #ccc;
    border-radius: 20px;
    font-size: 1rem;
  }
  
  .subscribe-button {
    background-color: #4caf50;
    color: white;
    border: none;
    padding: 10px 20px;
    border-radius: 20px;
    cursor: pointer;
  }
  
  .showcase-image {
    flex: 1;
    display: flex;
    justify-content: flex-end;
  }
  
  .showcase-image img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    object-fit: cover;
  }
  </style>