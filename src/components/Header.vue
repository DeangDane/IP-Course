<template>
  <header>
    <p>Header</p>
    <nav>
      <router-link to="/page1">Page 1</router-link> |
      <router-link to="/page2">Page 2</router-link> |
      <router-link to="/page3">Page 3</router-link>
    </nav>
  </header>
</template>

<script>
export default {
  name: "Header",
};
</script>

<style>
header {
  display: flex; /* Use flexbox for alignment */
  justify-content: space-between; /* Space between header and nav */
  align-items: center; /* Center items vertically */
  background: #f4f4f4;
  padding: 10px 20px; /* Add some padding */
  border-bottom: 1px solid #ccc;
}

p {
  margin: 0; /* Remove default margin */
  font-size: 16px;
  font-weight: bold;
}

nav a {
  margin: 0 10px;
  text-decoration: none;
  color: black;
}

nav a.router-link-active {
  color: red;
}
</style>