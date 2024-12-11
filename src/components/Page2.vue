<template>
  <div>
    <h1>Welcome to Page 2</h1>
    <router-view />
  </div>
</template>

<script>
export default {
  name: "Page2",
  created() {
    if (!this.$route.params.section) {
      // Default to Section 1 if no section is specified
      this.$router.push("/page2/section1");
    }
  },
};
</script>