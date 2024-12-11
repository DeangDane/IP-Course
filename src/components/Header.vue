<template>
  <header>
    <!-- <p>Header</p> -->
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
  background: #f4f4f4;
  padding: 10px;
  text-align: center;
  border-bottom: 1px solid #ccc;
}
nav a {
  margin: 0 10px;
  text-decoration: none;
  color: black;
}
nav a.router-link-active {
  color: red;
}
/* p{
  margin-right: 500px;
} */
</style>