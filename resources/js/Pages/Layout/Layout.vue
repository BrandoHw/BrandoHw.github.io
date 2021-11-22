<template>
 <div class="container-scroller">
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
export default {
    components:{Sidebar},
    methods: {

    },
    mounted() {
      
    }
};
</script>