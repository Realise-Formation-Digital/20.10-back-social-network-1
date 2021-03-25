<template>
  <div>
    <v-row
      ><v-col cols="0" lg="3"> <app-sidebar></app-sidebar></v-col
      ><v-col cols="12" lg="9"> <app-posts></app-posts></v-col
    ></v-row>
  </div>
</template>

<script>
//import your components here
import Sidebar from "./Sidebar.vue";
import Posts from "./Posts.vue";

export default {
  components: {
    "app-sidebar": Sidebar,
    "app-posts": Posts,
  },
};
</script>
  
<style>
</style>
