<template>
 <div class="container-scroller">
    <MobileHeader></MobileHeader>
    <Sidebar></Sidebar>

    <div class="container-fluid page-body-wrapper">
  
      <!-- partial -->
     
          <slot></slot>
    
      <!-- main-panel ends -->
    </div>
</div>

</template>

<script>
import Sidebar from '@/Pages/Layout/Sidebar'
import MobileHeader from '@/Pages/Layout/MobileHeader'
export default {
    components:{Sidebar, MobileHeader},
    methods: {

    },
    mounted() {
      
    }
};
</script>