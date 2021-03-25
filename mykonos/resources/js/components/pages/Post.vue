<template>
  <div :class="{ loading: loading }">
    <v-row dense>
      <v-col cols="12">
        <v-card>
          <v-img
            :src="'../assets/img/' + post.image"
            class="white--text align-end"
            gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
            height="200px"
          >
            <v-card-title>
              {{ post.title }}
            </v-card-title>
          </v-img>
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
          <div class="px-4 pt-4">
            <v-row>
              <v-col class="col-auto mr-auto">
                {{ post.text }}
              </v-col>
            </v-row>
          </div>
          <v-divider class="mx-4 my-4"></v-divider>
          <div class="px-4 pt-4">
            <v-row>
              <v-col
                class="col-auto"
                v-for="comment in post.comments"
                :key="comment.id"
              >
                <div class="figure">
                  <div class="blockquote">
                    <p>{{ comment.text }}</p>
                  </div>
                  <div class="ml-4 pt-2">
                    <a
                      class="primary--text userLink"
                      :href="'/users/' + comment.user.id"
                      >{{ comment.user.firstname }} {{ comment.user.name }}</a
                    >
                    ({{ comment.created_at | formatDate }})
                  </div>
                </div>
              </v-col>
            </v-row>
          </div>
          <v-divider class="mx-4 my-4"></v-divider>

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
  name: "Post",
  props: ["id"],
  data() {
    return {
      post: null,
      loading: true,
    };
  },
  mounted() {
    axios.get("/api/posts/" + this.id).then((response) => {
      this.post = response.data.data;
      this.loading = false;
      return this.post;
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
.blockquote {
  margin: 0;
  padding: 15px;
  background: rgb(250, 255, 233);
  border-radius: 5px;
}
</style>
