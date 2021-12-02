<style>
.v-application{
  background-image:url("/images/background/trees.jpg") !important;
}
</style>
<template>
<v-app data-app>
  <v-main>
        <div class="content-wrapper">
            <div class="content">
            </div>
        </div>
    </v-main>
</v-app>

</template>

<script>
import Layout from '@/Pages/Layout/Layout'

export default {
    metaInfo: { title: "Home" },
    layout: Layout,
    data(){
     return{
        projects: [
            { title: "WeCare - St. John's Home For Elderly Persons",
                content: "stuff"
            },
            { title: 'SmartFactory - BoingTech',
                content: "moar stuf"
            }
        ]
     }
    }
}
</script>