<template>
  <aside>
    <ul>
      <li>
        <button @click="navigateTo('section1')">Section 1</button>
      </li>
      <li>
        <button @click="navigateTo('section2')">Section 2</button>
      </li>
      <li>
        <button @click="navigateTo('section3')">Section 3</button>
      </li>
      <li>
        <button @click="navigateTo('section4')">Section 4</button>
      </li>
    </ul>
  </aside>
</template>

<script>
export default {
  name: "Menu",
  methods: {
    navigateTo(section) {
      const currentPage = this.$route.path.split("/")[1]; // Get the current page from the route
      this.$router.push(`/${currentPage}/${section}`); // Navigate to the selected section
    },
  },
};
</script>

<style>
/* Sidebar styles */
aside {
  width: 200px;
  background: #f9f9f9;
  padding: 10px;
  border-right: 1px solid #ccc;
  box-sizing: border-box;
}

ul {
  list-style: none;
  padding: 0;
  margin: 0;
}

li {
  margin-bottom: 10px;
}

button {
  background: none;
  border: none;
  color: black;
  text-align: left;
  cursor: pointer;
  padding: 5px;
  width: 100%;
  text-decoration: underline;
}

button:hover {
  color: blue;
}

button:focus {
  color: blue;
  font-weight: bold;
}
</style>