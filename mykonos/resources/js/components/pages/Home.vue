<template>
  <div>
      <v-app-navbar>
          <app-sidebar></app-sidebar>
        </v-app-navbar>

      <v-main>
        <v-container>
            
        </v-container>
      </v-main>
  </div>
  
</template>

<script>

  //import your components here
  import Sidebar from './Sidebar.vue'
  import Posts from './Posts.vue'

  export default {
  	
    components: {
      'app-sidebar' : Sidebar,
      'app-posts' : Posts
    }
    
 }   
</script>
  
<style>
</style>
