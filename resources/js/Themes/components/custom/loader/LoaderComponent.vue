<template>
  <div id="loading">
    <div :class="`loader simple-loader ${!show ? 'd-none' : ''}`">
      <div class="loader-body">
        <!-- <img :src="@/assets/images/loader.webp" alt="loader" class="light-loader img-fluid w-25" width="200" height="200" /> -->
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    show: {
      type: Boolean,
      default: false,
    },
  },
};
</script>

<style lang="scss" scoped>
.loader.simple-loader {
  height: 100%;
  width: 100%;
  position: fixed;
  place-content: center;
  overflow: hidden !important;
  right: 0px;
  z-index: 1250;

  .loader-body {
    background: url(/assets/images/loader.gif) no-repeat scroll center center;
    background-size: 20%;
    width: 100%;
    height: 100%;
    position: relative;
  }
}
</style>
