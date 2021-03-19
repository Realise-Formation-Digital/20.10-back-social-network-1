<template>
 <v-row justify="space-around">
    <v-avatar color="indigo">
      <v-icon dark>
        mdi-account-circle
      </v-icon>
    </v-avatar>

    <v-avatar>
      <img
        src="https://cdn.vuetifyjs.com/images/john.jpg"
        alt="John"
      >
    </v-avatar>

    <v-avatar color="red">
      <span class="white--text headline">Changer l'avatar</span>
    </v-avatar>
  </v-row>

</template>

<script>

export default {
    name:"Settings",
}
</script>

<style>

.v-avatar {
  float:center;
}
</style>