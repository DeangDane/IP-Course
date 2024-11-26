<template>
    <div class="menu-container">
      <ul>
        <li
          v-for="menuItem in menuItems"
          :key="menuItem"
          :class="{ active: menuItem === selectedMenu }"
        >
          <a
            href="#"
            @click.prevent="selectMenu(menuItem)"
          >
            {{ menuItem }}
          </a>
        </li>
      </ul>
    </div>
  </template>
  
  <script>
  export default {
    name: "Menu",
    props: {
      menuItems: {
        type: Array,
        required: true,
      },
    },
    emits: ["menu-selected"],
    data() {
      return {
        selectedMenu: "All",
      };
    },
    methods: {
      selectMenu(menuItem) {
        this.selectedMenu = menuItem;
        this.$emit("menu-selected", menuItem);
      },
    },
  };
  </script>
  
  <style>
  .menu-container ul {
    list-style-type: none;
    padding: 0;
    display: flex;
    gap: 10px;
  }
  
  .menu-container li {
    display: inline-block;
  }
  
  .menu-container a {
    text-decoration: none;
    color: lightgrey;
    font-size: 16px;
    padding: 5px 10px;
    border-radius: 5px;
    transition: color 0.3s ease, background 0.3s ease;
  }
  
  .menu-container a:hover {
    color: green;
  }
  
  .menu-container .active a {
    color: yellow;
    font-weight: bold;
  }
  </style>  