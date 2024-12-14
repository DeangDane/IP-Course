<template>
  <aside>
    <h3>Menu</h3>

    <ul>
      <li v-for="section in sections" :key="section">
        <button
          :class="{ active: currentSection === section }"
          @click="navigateTo(section)"
        >
          {{ section }}
        </button>
      </li>
    </ul>
  </aside>
</template>

<script>
export default {
  name: "Menu",
  data() {
    return {
      sections: ["section1", "section2", "section3", "section4"],
    };
  },
  computed: {
    currentSection() {
      return this.$route.params.section; // Get the current section from the route
    },
  },
  methods: {
    navigateTo(section) {
      const currentPage = this.$route.path.split("/")[1]; // Get the current page from the route
      this.$router.push(`/${currentPage}/${section}`); // Navigate to the selected section
    },
  },
};
</script>

<style>
aside {
  background: #f9f9f9;
  padding: 10px;
  border-right: 1px solid #ccc;
  box-sizing: border-box;
}

h3 {
  margin: 0; 
  font-size: 16px;
  font-weight: bold;
  padding: 10px;
  border-bottom: 2px solid #ccc; 
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
  background: #ffffff; 
  border: 1px solid #ccc; 
  border-radius: 5px; 
  color: black;
  text-align: center;
  cursor: pointer;
  padding: 10px; 
  width: 100%;
  text-decoration: none; 
  transition: background 0.3s, border-color 0.3s; 
}

button.active {
  color: blue;
  font-weight: bold;
  background: #e0f7fa;
  border-color: #007bff; 
}

button:hover {
  background: #f0f0f0; 
  border-color: #007bff; 
}

button:focus {
  outline: none;
}
</style>