<template>
<div>
    <div class="container-scroller">
        <mobile-header></mobile-header>
        <sidebar></sidebar>

        <div class="container-fluid page-body-wrapper">
    
            <slot/>

        </div>
    </div>
</div>
</template>

<script>
import Sidebar from '@/Pages/Layout/Sidebar'
import MobileHeader from '@/Pages/Layout/MobileHeader'

export default {
    components:{Sidebar, MobileHeader},
};
</script>