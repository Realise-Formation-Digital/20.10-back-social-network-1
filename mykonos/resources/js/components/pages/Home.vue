<template>
  <v-flex xs12 sm12 id="sign-in-text-wrapper">
    <v-layout column align-center justify-center fill-height pa-3>
      <div class="login-wrapper text-xs-center mb-3">
        <div class="display-1 font-weight-black mb-3">
          Bon retour parmi nous!
        </div>
      </div>
      <v-btn class="mt-4 white--text indigo" rounded large to="/login"
        >Connexion</v-btn
      >
    </v-layout>
  </v-flex>
</template>

<script>
export default {
  name: "Home",
};
</script>

<style>
</style>
