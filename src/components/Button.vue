<template>
  <!-- <a :href="link" class="button">{{ text }}</a> -->
<button :style="{background: bgcolor}"></button>  
</template>

<script>
export default {
  props: {
    text: String,
    link: String,
    bgcolor:{
      type: String,
    },
 
  },
  // methods:{
  //   shopNow(promotion){
  //     alert("Let's shop: " +promotion.title);
  //   }
  // }
};
</script>

<style scoped>
.button {
  display: inline-block;
  padding: 5px 10px;
  color: #fff;
  background-color: #28a745;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease;
  margin-top: 10px;
}

.button:hover {
  background-color: #218838;
}
</style>
