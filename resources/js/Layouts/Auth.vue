<template>
  <!-- loader component -->
  <loader-component :show="isLoader"></loader-component>

  <div class="wrapper">
    <section class="login-content">
      <slot />
    </section>
  </div>
</template>
<script>
import LoaderComponent from "@/Themes/components/custom/loader/LoaderComponent.vue";
import { onMounted, onUnmounted, ref } from "vue";
import "@/Themes/plugins/styles";

export default {
  components: {
    LoaderComponent,
  },
  setup() {
    const isLoader = ref(true);

    onMounted(() => {
      setTimeout(() => {
        isLoader.value = false;
      }, 1000);
    });
    onUnmounted(() => {});

    return {
      isLoader,
    };
  },
};
</script>
<style></style>