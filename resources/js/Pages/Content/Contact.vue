<style>
.icon-red { color: var(--main-theme) }
.icon-black { color: black }
</style>

<template>
<v-app data-app>
  <v-main>
        <div class="content-wrapper">
            <transition name="slide-fade">
            <div v-if="animate">
                <div class="content">
                    <div class="contact-card card">
                        <h1 class="contact-title"> Contact Me </h1>
                        <dl>
                            <dt>E-mail: </dt>
                            <dd>
                                <icon-base containerClass="icon-red" iconClass="fas fa-envelope" hrefLink="mailto:brandohw@gmail.com"> BrandoHw@gmail.com</icon-base>
                            </dd>

                            <!-- <dt>Phone: </dt>
                            <dd>
                                <i class="icon-black fas fa-phone"></i> <span>(+60) 16-331-5865</span>
                            </dd> -->

                            <dt>LinkedIn: </dt>
                            <dd>
                                <icon-base containerClass="icon-red" iconClass="fab fa-linkedin" hrefLink="https://www.linkedin.com/in/brandon-hwong-081461188/">Brandon Hwong</icon-base>
                            </dd>

                            <dt>GitHub: </dt>
                            <dd>
                                <icon-base containerClass="icon-red" iconClass="fab fa-github" hrefLink="https://github.com/BrandoHw">BrandoHw</icon-base>
                            </dd>

                            <dt>Facebook: </dt>
                            <dd>
                                <icon-base containerClass="icon-red" iconClass="fab fa-facebook-square" hrefLink="https://www.facebook.com/brandon.hwong.1">Brandon Hwong</icon-base>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            </transition>
        </div>
    </v-main>
</v-app>
   
</template>

<script>
import IconBase  from  '@/components/icons/IconBase';
import Layout from '@/Pages/Layout/Layout';
export default {
    layout: Layout,
    components: {
        IconBase
    },
    methods: {
    },
    data(){
     return{
        animate: false
     }
    },
    mounted(){
        this.animate = true;
    },
}
</script>