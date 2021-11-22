<template>
  <!-- <svg xmlns="http://www.w3.org/2000/svg"
    :width="width"
    :height="height"
    viewBox="0 0 18 18"
    :aria-labelledby="iconName"
    role="presentation"
  >
    <title
      :id="iconName"
      lang="en"
    >{{ iconName }} icon</title>
    <g :fill="iconColor">
      <slot />
    </g>
  </svg> -->

    <a :href="hrefLink">
        <i v-bind:class="iconClass"></i>
    </a>
</template>

<script>
    export default {
    props: {
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
