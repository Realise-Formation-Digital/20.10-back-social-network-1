<template>
  <v-card
    class="mx-auto ml-1"
    height="800"
    width="300"
  >
    <v-navigation-drawer
      absolute
      dark
      src="https://cdn.vuetifyjs.com/images/backgrounds/bg-2.jpg"
      width="300"
      permanent
    >
      <v-list>
        <v-list-item
          v-for="([text], i) in items"
          :key="i"
          link
        >
          <v-list-item-content>
            <v-list-item-title>{{ text }}</v-list-item-title>
          </v-list-item-content>

        </v-list-item>
      </v-list>
    </v-navigation-drawer>
  </v-card>
</template>

<script>
  export default {
    data: () => ({
      items: [
        ['football'],
        ['Supervisors'],
        ['Clock-in'],
        ['maison'],
        ['mode'],
        ['cuisine'],
        ['DIY'],
        ['voyage'],
        ['art'],
      ],
    }),
  }
</script>
