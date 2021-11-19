<style>

.header-sidebar {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color:white
}
</style>

<template>
  <SidebarMenu :menu="menu" :hideToggle="hideToggle" width='25%'/>
</template>

<script>
import { SidebarMenu } from 'vue-sidebar-menu'

const headerSidebar = {
    data() {
        return {
            src: "/images/square.png",
            name: "Brandon Hwong",
            title: "Software Engineer"
        }
    },
    template: '<div class="header-sidebar"> <img :src=src> <h1> {{name}} </h1> <p> {{title}} </p> </div>'
}


export default {
  components: {
    SidebarMenu
  },
  data() {
      return {
          hideToggle: true,
          menu: [
              {
                  header: true,
                  title: 'Main Navigation',
                  component: headerSidebar, 
              },
              {
                  href: '/about',
                  title: 'About',
              },
              {
                  href: '/portfolio',
                  title: 'Portfolio',
              },
              {
                  href: '/cv',
                  title: 'CV',
              },
              {
                  href: '/contact',
                  title: 'Contact Me',
              }
          ],
      }
  }
}
</script>
