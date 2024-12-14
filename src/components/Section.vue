<template>
  
  <div v-if="sectionTitle">
    <h2>{{ sectionTitle }}</h2>
    <p v-if="message">Message: {{ message }}</p>
  </div>
</template>

<script>
export default {
  name: "Section",
  props: ["sectionTitle", "message"],
};
</script>

<style>
h2 {
  font-size: 18px;
  text-align: center;
  color: #555;
}
</style>