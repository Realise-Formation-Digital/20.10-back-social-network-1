<template>
<v-app>
    <v-toolbar>
       <v-app-bar dense color red>
           <template v-slot:extension>
              <v-icon> Logo </v-icon>
              <v-tabs>
                <v-tab>
                <v-icon left>mdi-home</v-icon>
                Home</v-tab>

                <v-tab>Mes publications</v-tab>
                <v-icon>mdi-add_circle</v-icon>
                <v-tab>Ajouter une publication</v-tab>

                <v-tab>
                <v-icon>mdi-thumb_up_alt</v-icon>
                Mes like</v-tab>

                <v-tab>
                  <v-icon>mdi-account_circle</v-icon>
                  Mon compte</v-tab>
                <v-tab>
                <v-icon>mdi-settings</v-icon>
                Settings</v-tab>
              </v-tabs>
           </template>
          </v-app-bar>
      </v-toolbar>
  </v-app>

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

.v-app-bar {
    color:green;
};
</style>
