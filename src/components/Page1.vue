<template>
  <div>
    <h1>Welcome to Page 1</h1>
    <router-view />
  </div>
</template>

<script>
export default {
  name: "Page1",
  created() {
    if (!this.$route.params.section) {
      // Default to Section 1 if no section is specified
      this.$router.push("/page1/section1");
    }
  },
};
</script>