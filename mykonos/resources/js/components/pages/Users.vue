<template>
  <div :class="{ loading: loading }">
    <v-row dense>
      <v-col
        v-for="user in users"
        :key="user.id"
        cols="12"
        sm="6"
        md="4"
        lg="3"
        xl="2"
      >
        <v-card>
          <v-img
            :src="user.avatar | subStr(7)"
            class="white--text align-end"
            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
            height="200px"
          >
          </v-img>
          <v-divider></v-divider>
          <div class="px-4 pt-4">
            <v-row>
              <v-col class="col-auto mr-auto">
                <span>
                  Nom:
                  <a class="success--text userLink" :href="'/users/' + user.id"
                    >{{ user.firstname }} {{ user.name }}</a
                  >
                </span>
                <v-spacer></v-spacer>
                <span> Email: {{ user.email }} </span>
                <v-spacer></v-spacer>
                <span> Tel: {{ user.phone }} </span>
                <v-spacer></v-spacer>
                <span> Adresse: {{ user.address }} </span>
              </v-col>
              <v-col class="col-auto">
                <v-chip
                  class="mr-1"
                  elevation="0"
                  fab
                  pill
                  dark
                  small
                  color="orange"
                >
                  <v-icon class="mr-2" dark small> mdi-comment </v-icon
                  >{{ user.comments.length }}
                </v-chip>
                <v-chip
                  class="mr-1"
                  elevation="0"
                  fab
                  pill
                  dark
                  small
                  color="pink"
                >
                  <v-icon class="mr-2" dark small> mdi-heart </v-icon
                  >{{ user.likes.length }}
                </v-chip>
                <v-chip
                  class="mr-1"
                  elevation="0"
                  fab
                  pill
                  dark
                  small
                  color="green"
                >
                  <v-icon class="mr-2" dark small> mdi-book-multiple </v-icon
                  >{{ user.posts.length }}
                </v-chip>
              </v-col>
            </v-row>
          </div>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  name: "Users",
  data() {
    return {
      users: null,
      loading: true,
    };
  },
  mounted() {
    axios.get("/api/users").then((response) => {
      this.users = response.data;
      this.loading = false;
    });
  },
};
</script>

<style>
i.v-icon.notranslate.mdi.mdi-chevron-left,
i.v-icon.notranslate.mdi.mdi-chevron-right {
  color: rgb(63, 81, 181);
}
i.v-icon.v-icon.v-icon.v-icon--disabled {
  color: rgba(63, 81, 181, 0.2) !important;
}
.userLink {
  text-decoration: none;
}
.userLink:hover {
  text-decoration: underline;
}
.taxonomyLink {
  text-decoration: none;
}
.taxonomyLink:hover {
  text-decoration: underline;
}
</style>
