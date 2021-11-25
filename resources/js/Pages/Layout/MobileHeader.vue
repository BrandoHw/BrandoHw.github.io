<template>
<div>
    <v-app-bar
        
        color="deep-purple accent-4"
        dark
        scroll-target="#scrolling-techniques-6"
    >
        <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>

        <v-toolbar-title>Collapsing Bar</v-toolbar-title>

        <v-spacer></v-spacer>
      </v-app-bar>

       <v-navigation-drawer
        v-model="drawer"
        absolute
        temporary
      >
        <v-list
          nav
          dense
        >
          <v-list-item-group
            v-model="group"
            active-class="deep-purple--text text--accent-4"
          >
            <v-list-item>
              <v-list-item-title>About Me</v-list-item-title>
            </v-list-item>
  
            <v-list-item>
              <v-list-item-title>Portfolio</v-list-item-title>
            </v-list-item>
  
            <v-list-item>
              <v-list-item-title>CV</v-list-item-title>
            </v-list-item>
  
            <v-list-item>
              <v-list-item-title href="/contact">Contact Me</v-list-item-title>
              
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </v-navigation-drawer>
    </div>
</template>

<script>
export default {
    data: () => ({
        drawer: false,
        group: null,
    }),
    watch: {
        group () {
            this.drawer = false
        },
    },

}
</script>