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
                    <p>{{ taxonomy.label }}</p>
                    <v-chip
                        v-for="post in taxonomy.posts"
                        :key="post.id"
                        :href="'/posts/' + post.id"
                        color="indigo"
                        class="indigo--text ml-2 mr-0 postLink"
                        outlined
                        label
                    >
                        {{ post.title }}
                    </v-chip>
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
            taxonomies: null
        };
    },
    mounted() {
        axios.get("/api/taxonomies").then(response => {
            this.taxonomies = response.data;
        });
    }
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
