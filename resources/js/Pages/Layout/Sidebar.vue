<template>
    <div>
        <sidebar-menu :menu="menu" :hideToggle="hideToggle" width='25%'/>
    </div>
</template>

<script>
import { SidebarMenu } from 'vue-sidebar-menu'
import FooterSidebar from  '@/components/FooterSidebar'
import LinkSidebar  from '@/Pages/Layout/LinkSidebar'

const headerSidebar = {
    data() {
        return {
            src: "/images/square.png",
            name: "Brandon Hwong",
            title: "Full-Stack Software Engineer"
        }
    },
    template: `
    <a href="/">
        <div class="header-sidebar"> 
            <img class="header-img" :src=src> 
            <h1 class="sidebar-header-title"> {{name}} </h1> 
            <h2 class="sidebar-header-subtitle"> {{title}} </h2> 
        </div>
    </a>
    `
}


export default {
    components: {
        SidebarMenu,
        FooterSidebar,
        LinkSidebar,
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
                    component: LinkSidebar,
                },
                {
                    footer: true,
                    component: FooterSidebar
                }
            ],
        }
    },
    methods: {
    },

}
</script>
