<style>

.mobile-header-title{
  color:darkred;
  font-size: 14px;
  margin-left: 20px;
  font-weight: 600;
}
.mobile-header-subtitle{
  color:black;
  font-size: 9px;
  margin-bottom: 0px;
  margin-left: 20px;
  letter-spacing: 0.1em;
  text-transform: uppercase;
}

/* Hamburger icon color */
.v-icon.mdi-menu{
  color:darkred !important;
}
/* Navigation drawer text color */
.nav-drawer-item{
  color: black;
}
</style>
<template>
<div>
    <v-app-bar
    :outlined=true
    >
      <v-app-bar-nav-icon @click.stop="drawer = !drawer"></v-app-bar-nav-icon>

      <v-toolbar-title>
        <h1 class="mobile-header-title"> Brandon Hwong </h1> 
        <p class="mobile-header-subtitle"> Full-Stack Software Engineer</p> 
      </v-toolbar-title>

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
            active-class="text--accent-4"
          >
            <v-list-item>
              <v-list-item-title>
                <Link href="/about">
                  <div class="nav-drawer-item">About Me</div>
                </Link>
              </v-list-item-title>
            </v-list-item>
  
            <v-list-item>
              <v-list-item-title>
                <Link href="/portfolio">
                  <div class="nav-drawer-item">Portfolio</div>
                </Link>
              </v-list-item-title>

            </v-list-item>
  
            <v-list-item>
              <v-list-item-title>
                  <a class="vsm--link vsm--link_level-1" target="_self" href="/cv">
                    <div class="nav-drawer-item">CV</div>
                  </a>
              </v-list-item-title>
            </v-list-item>
  
            <v-list-item>
              <v-list-item-title>
                <Link href="/contact">
                  <div class="nav-drawer-item">Contact Me</div>
                </Link>
              </v-list-item-title>
              
            </v-list-item>
          </v-list-item-group>
        </v-list>
      </v-navigation-drawer>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
    components: {Link},
    data: () => ({
        drawer: false,
        group: null,
    }),
    watch: {
        group () {
            this.drawer = false
        },
    },
    methods: {
      isUrl(...urls) {
        let currentUrl = this.$page.url.substr(1)
        if (urls[0] === '') {
          return currentUrl === ''
        }
        return urls.filter(url => currentUrl.startsWith(url)).length
      },
    },


}
</script>