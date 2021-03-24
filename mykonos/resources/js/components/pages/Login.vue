<template>
  <v-container fluid pa-0>
    <v-layout row wrap>
      <v-flex xs12 sm12 id="sign-up-form-wrapper" class="active">
        <v-layout column align-center justify-center pa-3 mt-5>
          <v-flex xs12 mb-3 mt-5>
            <div class="login-wrapper text-xs-center">
              <div class="display-1 font-weight-black">Se connecter</div>
            </div>
          </v-flex>
          <v-flex xs12 class="form-wrapper">
            <v-text-field
              filled
              full-width
              single-line
              label="Email"
              background-color="#f4f8f7"
              color="grey darken-2"
              prepend-inner-icon="mdi-email-outline"
            ></v-text-field>
            <v-text-field
              v-model="password"
              :append-icon="show ? 'mdi-eye-outline' : 'mdi-eye-off-outline'"
              :type="show ? 'text' : 'password'"
              filled
              full-width
              single-line
              label="Mot de passe"
              background-color="#f4f8f7"
              color="grey darken-2"
              prepend-inner-icon="mdi-lock-outline"
              @click:append="show = !show"
            ></v-text-field>
          </v-flex>
          <v-btn rounded large dark ripple color="indigo" id="sign-up"
            >ok</v-btn
          >
        </v-layout>
      </v-flex>
    </v-layout>
  </v-container>
</template>
</template>

<script>
export default {
  name: "Login",

  data: () => ({
    show: false,
    password: "",
  }),
};
</script>

<style>
</style>
