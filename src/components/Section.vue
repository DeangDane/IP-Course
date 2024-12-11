<template>
    <div>
      <h2>This is {{ sectionTitle }}</h2>
    </div>
  </template>
  
  <script>
  export default {
    name: "Section",
    props: ["sectionTitle"],
  };
  </script>
  
  <style>
  h2 {
    font-size: 18px;
    padding: 10px;
    text-align: center;
    color: #555;
  }
  </style>