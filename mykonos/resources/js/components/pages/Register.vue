<template>
 <v-app>
		<v-content>
			<v-container fluid pa-0>
				<v-layout row wrap>
					<v-flex xs12 sm4 id="sign-in-text-wrapper">
            <v-layout column align-center justify-center fill-height pa-3>
							<div class="login-wrapper text-xs-center mb-3">
								<div class="display-1 font-weight-black mb-3">Bon retour parmi nous!</div>	<span class="subheading">Pour rester connecté, merci de se connecter avec tes infos personnelles</span>
							</div>
							<v-btn round outline large dark ripple id="sign-in">Sign in</v-btn>
						</v-layout>
					</v-flex>
					<v-flex xs12 sm8 id="sign-up-form-wrapper" class="active">
						<v-layout column align-center justify-center pa-3 mt-5>
							<v-flex xs12 mb-3 mt-5>
								<div class="login-wrapper text-xs-center">
									<div class="display-1 font-weight-black">Créer un compte</div>
								</div>
							</v-flex>
							<v-flex xs12 mb-3>
								<v-btn outline fab small color="blue-grey lighten-4">
									<v-icon color="grey darken-4">mdi-facebook</v-icon>
								</v-btn>
								<v-btn outline fab small color="blue-grey lighten-4">
									<v-icon color="grey darken-4">mdi-google-plus</v-icon>
								</v-btn>
								<v-btn outline fab small color="blue-grey lighten-4">
									<v-icon color="grey darken-4">mdi-linkedin</v-icon>
								</v-btn>
							</v-flex>
							<v-flex xs12 mb-2>	<span class="grey--text text--lighten-1">tu peux utiliser ton e-mail pour l'enregistrement</span>
							</v-flex>
							<v-flex xs12 class="form-wrapper">
								<v-text-field box full-width single-line label="Nom" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-account-outline" mb-0></v-text-field>
                	<v-text-field box full-width single-line label="Prénom" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-account-outline" mb-0></v-text-field>
								<v-text-field box full-width single-line label="Email" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-email-outline"></v-text-field>
                	<v-text-field box full-width single-line label="Avatar" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-account-outline" mb-0></v-text-field>
                  	<v-text-field box full-width single-line label="Adresse" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-account-outline" mb-0></v-text-field>
                    	<v-text-field box full-width single-line label="Telephone" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-phone" mb-0></v-text-field>
                      	<v-text-field box full-width single-line label="Date de naissance" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-calendar-account" mb-0></v-text-field>
								<v-text-field v-model="password" :append-icon="show1 ? 'mdi-eye-outline' : 'mdi-eye-off-outline'" :type="show1 ? 'text' : 'password'" box full-width single-line label="Mot de passe" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-lock-outline" @click:append="show1 = !show1"></v-text-field>
                <v-text-field v-model="password" :append-icon="show1 ? 'mdi-eye-outline' : 'mdi-eye-off-outline'" :type="show1 ? 'text' : 'password'" box full-width single-line label="Confirmer le mot de passe" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-lock-outline" @click:append="show1 = !show1"></v-text-field>
							</v-flex>
							<v-btn round large dark ripple color="teal" id="sign-up" @click="show = !show">Sign up</v-btn>
						</v-layout>
					</v-flex>
				</v-layout>
			</v-container>
		</v-content>
	</v-app>
</template>

<script>
export default {
  name: "Register",
};
</script>

<style>
</style>
