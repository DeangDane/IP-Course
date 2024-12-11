<template>
    <div>
      <Header />
      <div class="content">
        <Menu />
        <main>
          <router-view />
        </main>
      </div>
      <Footer />
    </div>
  </template>
  
  <script>
  import Header from "@/components/Header.vue";
  import Footer from "@/components/Footer.vue";
  import Menu from "@/components/Menu.vue";
  
  export default {
    name: "Layout",
    components: {
      Header,
      Footer,
      Menu,
    },
  };
  </script>
  
  <style>
  /* General layout */
  .content {
    display: flex;
    padding-top: 50px;
  }
  
  /* Sidebar (Menu) */
  aside {
    width: 200px;
    height: 220px;
    background: #f9f9f9;
    padding: 10px;
    border-right: 1px solid #ccc;
  }
  
  /* Main content area */
  main {
    flex: 1;
    padding: 20px;
    min-height: calc(50vh - 100px); /* Full height minus header and footer */
    overflow-y: auto;
  }
  
  /* Utility styles for text alignment */
  h1,
  h2 {
    text-align: center;
  }
  </style>