<template>
  <div>
    <h1>Welcome to Page 1</h1><br>
    <p>------------------------------------------------------</p><br>
    <router-view /><br>
    <p v-if="messageFromPage">Message from Page 1: {{ messageFromPage }}</p> <br>
    <label>
      Message:
      <input v-model="message" @input="updateMessage" />
    </label>
  </div>
</template>

<script>
export default {
  name: "Page1",
  data() {
    return {
      message: "hello", 
    };
  },
  computed: {
    messageFromPage() {
      return this.$route.query.messageFromPage;
    },
  },
  methods: {
    updateMessage() {
      // Update the query parameter with the latest message
      this.$router.push({
        path: this.$route.path,
        query: { messageFromPage: this.message },
      });
    },
  },
};
</script>
<style>
body{
  align-content: center;
  align-items: center;
}

p{
  text-align: center;
}</style>