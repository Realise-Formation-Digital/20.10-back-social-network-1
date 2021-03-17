<template>
<div>
 <v-app-bar dense color red>
   <template v-slot:extension>
      <v-icon> Logo </v-icon>
      <v-tabs>
          <v-tab>Home</v-tab>
          <v-tab>Mes publications</v-tab>
          <v-tab>Mon compte</v-tab>
          <v-tab>Settings</v-tab>
      </v-tabs>
   </template>
 </v-app-bar>
</div>

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