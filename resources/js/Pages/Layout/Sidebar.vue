<template>
    <div>
        <SidebarMenu :menu="menu" :hideToggle="hideToggle" width='25%'/>
    </div>
</template>

<script>
import { SidebarMenu } from 'vue-sidebar-menu'
import FooterSidebar from  '@/components/FooterSidebar'

const headerSidebar = {
    data() {
        return {
            src: "/images/square.png",
            name: "Brandon Hwong",
            title: "Full-Stack Software Engineer"
        }
    },
    template: `
    <div class="header-sidebar"> 
        <img class="header-img" :src=src> 
        <h1 class="sidebar-header-title"> {{name}} </h1> 
        <h2 class="sidebar-header-subtitle"> {{title}} </h2> 
    </div>
    `
}


export default {
  components: {
    SidebarMenu,
    FooterSidebar,
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
                  title: 'About Me',
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
              },
              {
                  footer: true,
                  component: FooterSidebar
              }
          ],
      }
  }
}
</script>
