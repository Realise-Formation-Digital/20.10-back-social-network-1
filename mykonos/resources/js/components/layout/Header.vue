<template>
       <v-app-bar max-height="64"
  color="indigo lighten-3"
  dark
      >
              <v-icon> Logo </v-icon>
              <v-tabs active color="indigo darken-2">
                <v-tab>
                <v-icon left>mdi-home</v-icon>
                Home</v-tab>

                <v-tab>
                <v-icon left>mdi-book-account</v-icon>Mes publications</v-tab>
                <v-tab>
                <v-icon left>mdi-book-plus</v-icon>Ajouter une publication</v-tab>

                <v-tab>
                <v-icon left>mdi-thumb-up</v-icon>
                Mes like</v-tab>

                <v-tab>
                  <v-icon left>mdi-account-circle</v-icon>
                  Mon compte</v-tab>
                <v-tab>
                <v-icon left>mdi-tools</v-icon>
                Settings</v-tab>
              </v-tabs>
          </v-app-bar>
</template>

<script>
export default {
  name:  "Home",
}
</script>
  
<style>
.v-tabs-bar {
    float:right !important;
};

.v-tab {
    text-transform: none !important ;
};

</style>
