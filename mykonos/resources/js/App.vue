<template>
  <v-app>
    <Header />
    <v-main>
      <v-container fluid>
        <router-view></router-view>
      </v-container>
    </v-main>
    <Footer />
  </v-app>
</template>

<script>
import Header from "./components/layout/Header.vue";
import Footer from "./components/layout/Footer.vue";
export default {
  name: "App",
  components: { Header, Footer },
  data: () => ({
    //
  }),
};
</script>

<style>
</style>