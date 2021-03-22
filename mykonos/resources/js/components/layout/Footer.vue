<template>
  <v-bottom-navigation
    horizontal
    app
    background-color="indigo lighten-3"
    dark
    color="indigo darken-2"
  >
    <v-btn text>
      <span>Recents</span>
      <v-icon>mdi-history</v-icon>
    </v-btn>
    <v-btn text>
      <span>Favorites</span>
      <v-icon>mdi-heart</v-icon>
    </v-btn>
    <v-btn text>
      <span>Nearby</span>

      <v-icon>mdi-map-marker</v-icon>
    </v-btn>
  </v-bottom-navigation>
</template>

<script>
export default {
  name: "Footer",
};
</script>

<style>
</style>