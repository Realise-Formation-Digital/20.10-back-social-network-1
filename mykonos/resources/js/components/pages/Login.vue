<template>
   <v-app>
		<v-content>
			<v-container fluid pa-0>
				<v-layout row wrap>
					<v-flex xs12 sm8 id="sign-up-form-wrapper" class="active">
						<v-layout column align-center justify-center pa-3 mt-5>
							<v-flex xs12 mb-3 mt-5>
								<div class="login-wrapper text-xs-center">
									<div class="display-1 font-weight-black">Se connecter</div>
								</div>
							</v-flex>
							<v-flex xs12 class="form-wrapper">
								<v-text-field box full-width single-line label="Email" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-email-outline"></v-text-field>
								<v-text-field v-model="password" :append-icon="show1 ? 'mdi-eye-outline' : 'mdi-eye-off-outline'" :type="show1 ? 'text' : 'password'" box full-width single-line label="Mot de passe" background-color="#f4f8f7" color="grey darken-2" prepend-inner-icon="mdi-lock-outline" @click:append="show1 = !show1"></v-text-field>
							</v-flex>
							<v-btn round large dark ripple color="teal" id="sign-up" @click="show = !show">Sign up</v-btn>
						</v-layout>
					</v-flex>
				</v-layout>
			</v-container>
		</v-content>
	</v-app>
</template>
</template>

<script>
export default {
  name: "Login",
};
</script>

<style>
</style>
