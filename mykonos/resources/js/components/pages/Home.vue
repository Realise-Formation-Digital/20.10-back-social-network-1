<template>
  <v-container fluid pa-0>
    <v-layout row wrap>
      <v-flex xs12 sm12 id="sign-up-form-wrapper" class="active">
        <v-layout column align-center justify-center pa-3 mt-5>
          <v-flex xs12 mb-3 mt-5>
            <div class="login-wrapper text-xs-center">
              <div class="display-1 font-weight-black mb-3">
                Bon retour parmi nous!
              </div>
              <v-layout column align-center justify-center pa-3 mt-5>
                <v-btn class="mt-4 white--text indigo" rounded large to="/login"
                  >Connexion</v-btn
                >
              </v-layout>
            </div>
          </v-flex>
        </v-layout>
      </v-flex>
    </v-layout>
  </v-container>
</template>

<script>
export default {
  name: "Home",
};
</script>

<style>
</style>
