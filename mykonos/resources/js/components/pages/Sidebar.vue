<template>
  <v-card class="mx-auto ml-1" height="100%" width="100%">
    <v-navigation-drawer absolute width="100%" permanent>
      <app-taxonomy></app-taxonomy>
    </v-navigation-drawer>
  </v-card>
</template>

<script>
import Taxonomies from "./Taxonomies.vue";
export default {
  components: {
    "app-taxonomy": Taxonomies,
  },
};
</script>
