<template>
<div>
  <a :href="hrefLink">
    <span :class="containerClass">
      <i v-bind:class="iconClass"></i>
      <slot></slot>
    </span>
  </a>
</div>
</template>

<script>
    export default {
    props: {
        containerClass: {
        type: String,
        },
        iconClass: {
        type: String,
        default: 'fas fa-times'
        },
        hrefLink: {
        type: String,
        default: 'https://google.com'
        },
     
    }
}
</script>
