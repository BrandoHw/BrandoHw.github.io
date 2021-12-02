<template>
<v-app data-app>
  <v-main>
        <div class="content-wrapper">
            <transition name="slide-fade">
            <div v-if="animate">
                    <div class="content">

                    
                            <div class="contact-card card">
                                <div class="about-title">
                                    <h1 class="contact-title"> About Me </h1>
                                </div>
                
                    </div>
                    </div>
            </div>
            </transition>
        </div>
    </v-main>
</v-app>
   
</template>

<script>
import Layout from '@/Pages/Layout/Layout';
export default {
    layout: Layout,
    methods: {
    },
    data(){
        return{
            animate: false,
        }
    },
    mounted(){
        this.animate = true;
    },
}
</script>