<template>
  <div :class="{ loading: loading }">
    <v-row dense>
      <v-col
        v-for="user in orderedList"
        :key="user.id"
        cols="12"
        sm="12"
        md="6"
        lg="4"
        xl="3"
      >
        <v-card>
          <v-card-title>
            <v-avatar size="100" color="grey" class="mx-4 my-4">
              <v-img
                :src="user.avatar | subStr(7)"
                class="white--text align-end"
                gradient="to bottom, rgba(0,0,0,.1), rgba(0,0,0,.5)"
                height="200px"
              >
              </v-img
            ></v-avatar>
            <div class="infoList">
              <v-list-item color="rgba(0, 0, 0, .4)">
                <v-list-item-content>
                  <v-list-item-title class="title"
                    ><span>
                      <a
                        class="primary--text userLink"
                        :href="'/users/' + user.id"
                        >{{ user.firstname }} {{ user.name }}</a
                      >
                    </span></v-list-item-title
                  >
                  <v-list-item-subtitle
                    ><span
                      ><v-icon small>mdi-email</v-icon> {{ user.email }}
                    </span></v-list-item-subtitle
                  >
                  <v-list-item-subtitle>
                    <span
                      ><v-icon small>mdi-phone</v-icon> {{ user.phone }}
                    </span></v-list-item-subtitle
                  >
                  <v-list-item-subtitle
                    ><span
                      ><v-icon small>mdi-map-marker</v-icon>
                      {{ user.address }}
                    </span></v-list-item-subtitle
                  >
                  <v-list-item-subtitle
                    ><span
                      ><v-icon small>mdi-calendar-clock</v-icon>
                      {{ user.birth_date }}
                    </span></v-list-item-subtitle
                  >
                </v-list-item-content>
              </v-list-item>
            </div>
          </v-card-title>
          <div class="px-4 pb-4">
            <v-divider></v-divider>
            <v-row>
              <v-col class="col-auto mt-4 mb-2 mx-auto">
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
                  >{{ user.islikes.length }}
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
                  <v-icon class="mr-2" dark small> mdi-heart </v-icon
                  >{{ user.dislikes.length }}
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
      this.users = response.data.map((r) => {
        r.islikes = r.likes.filter((item) => item.is_dislike === 0);
        r.dislikes = r.likes.filter((item) => item.is_dislike === 1);
        /* 
        console.log("likes", r.likes);
        console.log("dislikes", r.dislikes);
         */
        return r;
      });
      this.loading = false;
    });
  },
  computed: {
    orderedList: function () {
      return _.orderBy(this.users, "name", "asc");
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
.infoList {
  width: 300px;
}
</style>
