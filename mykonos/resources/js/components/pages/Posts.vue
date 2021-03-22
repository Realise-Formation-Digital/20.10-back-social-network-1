<template>
  <div :class="{ loading: loading }">
    <v-row dense>
      <v-col
        v-for="post in orderedList"
        :key="post.id"
        cols="12"
        sm="6"
        md="4"
        lg="3"
        xl="2"
      >
        <v-card>
          <v-img
            :src="post.image | subStr(7)"
            class="white--text align-end"
            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
            height="200px"
          >
            <v-card-title>
              {{ post.title | truncate(24, "...") }}
            </v-card-title>
          </v-img>
          <v-card-actions class="justify-center"
            ><v-btn color="primary" text :href="'/posts/' + post.id"
              >Lire cette publication</v-btn
            ></v-card-actions
          >
          <v-divider></v-divider>
          <div class="px-4 pt-4">
            <v-row>
              <v-col class="col-auto mr-auto">
                <span>
                  Auteur:
                  <a
                    class="success--text userLink"
                    :href="'/users/' + post.user.id"
                    >{{ post.user.firstname }} {{ post.user.name }}</a
                  >
                </span>
                <v-spacer></v-spacer>
                <span> Date: {{ post.created_at | formatDate }} </span>
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
                  >{{ post.comments.length }}
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
                  >{{ post.likes.length }}
                </v-chip>
                <v-chip
                  class="mr-1"
                  elevation="0"
                  fab
                  pill
                  dark
                  small
                  color="brown"
                >
                  <v-icon class="mr-2" dark small> mdi-heart-broken </v-icon
                  >{{ post.likes.length }}
                </v-chip>
              </v-col>
            </v-row>
          </div>
          <div class="px-4 pb-4 pt-2">
            <v-row>
              <v-col cols="12">
                <v-chip-group class="mt-2 indigo lighten-4 rounded" show-arrows>
                  <v-chip
                    v-for="taxonomy in post.taxonomies"
                    :key="taxonomy.id"
                    :href="'/taxonomies/' + taxonomy.id"
                    color="indigo"
                    class="indigo--text ml-2 mr-0 taxonomyLink"
                    outlined
                    label
                  >
                    {{ taxonomy.label }}
                  </v-chip>
                </v-chip-group>
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
  name: "Posts",
  data() {
    return {
      posts: null,
      loading: true,
    };
  },
  mounted() {
    axios.get("/api/posts").then((response) => {
      this.posts = response.data.map((r) => {
        r.taxonomies = _.orderBy(r.taxonomies, "label");
        r.likes = r.likes.filter(
          (item) => item.is_dislike == 0
        ); /* 
        r.likes = r.likes.filter((item) => item.is_dislike == 1); */
        return r;
      });
      this.loading = false;
    });
  },
  computed: {
    orderedList: function () {
      return _.orderBy(this.posts, "created_at", "desc");
    },
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