<style>
.icon-white { color: white; }
.icon-dark-blue { color: #4267B2 }
</style>

<template>
    <div class="icons-container">
        <icon-base containerClass="icon-white" iconClass="fas fa-envelope" hrefLink="mailto:brandohw@gmail.com"> </icon-base>
        <icon-base containerClass="icon-white" iconClass="fab fa-linkedin" hrefLink="https://www.linkedin.com/in/brandon-hwong-081461188/"> </icon-base>
        <icon-base containerClass="icon-white" iconClass="fab fa-github" hrefLink="https://github.com/BrandoHw"> </icon-base>
        <icon-base containerClass="icon-white" iconClass="fab fa-facebook-square" hrefLink="https://www.facebook.com/brandon.hwong.1"> </icon-base>
    </div>
</template>

<script>
import IconBase  from  '@/components/icons/IconBase'
export default {
    components: {
        IconBase
    }
    
}
</script>
