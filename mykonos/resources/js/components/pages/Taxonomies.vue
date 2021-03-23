<template>
  <div>
    <v-row dense>
      <v-col
        v-for="taxonomy in taxonomies"
        :key="taxonomy.id"
        cols="12"
        sm="6"
        md="4"
        lg="3"
        xl="2"
      >
        <v-card>
          <div class="px-4 pb-4 pt-4">
            <div>{{ taxonomy.label }}</div>
            <v-divider class="my-2"></v-divider>
            <v-chip-group column>
              <v-chip
                v-for="post in taxonomy.posts"
                :key="post.id"
                :href="'/posts/' + post.id"
                color="indigo"
                class="indigo postLink my-1 py-2"
                outlined
                label
              >
                {{ post.title }}
              </v-chip>
            </v-chip-group>
          </div>
        </v-card>
      </v-col>
    </v-row>
  </div>
</template>

<script>
export default {
  name: "Taxonomies",
  data() {
    return {
      taxonomies: null,
    };
  },
  mounted() {
    axios.get("/api/taxonomies").then((response) => {
      this.taxonomies = response.data;
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
.postLink {
  text-decoration: none;
}
.postLink:hover {
  text-decoration: underline;
}
</style>
