<style>

.link--active{
  box-shadow: 3px 0px 0px 0px #ffffff inset !important;
}
</style>

<template>

<div>
 <div class="vsm--item">
    <Link :class="isUrl('about') ? 'link--active vsm--link vsm--link_level-1' : 'vsm--link vsm--link_level-1'" href="/about">
      <div class="vsm--title">About Me</div>
    </Link>
  </div>
  <div class="vsm--item">
    <Link :class="isUrl('portfolio') ? 'link--active vsm--link vsm--link_level-1' : 'vsm--link vsm--link_level-1'" href="/portfolio">
      <div class="vsm--title">Portfolio</div>
    </Link>
  </div>
  <div class="vsm--item">
    <a class="vsm--link vsm--link_level-1" target="_self" href="/cv">
      <div class="vsm--title">CV</div>
    </a>
  </div>
  <div class="vsm--item">
    <Link :class="isUrl('contact') ? 'link--active vsm--link vsm--link_level-1' : 'vsm--link vsm--link_level-1'" href="/contact">
      <div class="vsm--title">Contact Me</div>
    </Link>
  </div>
</div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
  components: {Link},
  methods: {
    isUrl(...urls) {
      let currentUrl = this.$page.url.substr(1)
      if (urls[0] === '') {
        return currentUrl === ''
      }
      return urls.filter(url => currentUrl.startsWith(url)).length
    },
  },
}
</script>
