<template>
  <v-app-bar color="indigo lighten-3" dark app>
    <v-icon>Mykonos</v-icon>
    <v-tabs color="indigo darken-2" slider-color="indigo lighten-1">
      <v-tab key="0" to="/"> <v-icon left>mdi-home</v-icon>Home</v-tab>
      <v-tab key="1" to="/posts">
        <v-icon left>mdi-book-open-page-variant</v-icon>Articles</v-tab
      >
      <v-tab key="4" to="/users">
        <v-icon left>mdi-account-multiple</v-icon>Utilisateurs</v-tab
      >
      <v-tab key="5" to="/login">
        <v-icon left>mdi-account-check</v-icon>Connexion</v-tab
      >
      <v-tab key="6" to="/register">
        <v-icon left>mdi-account-edit</v-icon>Inscription</v-tab
      >
    </v-tabs>
  </v-app-bar>
</template>

<script>
export default {
  name: "Header",
};
</script>
  
<style>
.v-tabs-bar {
  float: right !important;
}
</style>
