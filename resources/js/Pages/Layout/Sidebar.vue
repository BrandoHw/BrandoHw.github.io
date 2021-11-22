<style>

.v-sidebar-menu .vsm--title {
  padding-left: 50px;
}

.header-img {
    width: 60%;
}
.header-sidebar {
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    color:white;
    font: 16px/1.6 Roboto,Helvetica,sans-serif;
}

.sidebar-header-title{
    font-weight: 500;
    font-size: 22px;
}

.sidebar-header-subtitle{
    font-weight: 300;
    font-size: 16px;
}
</style>

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
