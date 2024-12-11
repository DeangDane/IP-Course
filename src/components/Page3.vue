<template>
  <div>
    <h1>Welcome to Page 3</h1>
    <router-view />
  </div>
</template>

<script>
export default {
  name: "Page3",
  created() {
    if (!this.$route.params.section) {
      // Default to Section 1 if no section is specified
      this.$router.push("/page3/section1");
    }
  },
};
</script>