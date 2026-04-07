<template>
  <div class="bd-example mt-4 mx-3">
    <nav aria-label="Custom Pagination">
      <ul :class="`pagination pagination justify-content-${align}`">
        <li
          class="page-item"
          :class="{
            active: link.active,
            disabled: link.url === null,
          }"
          v-for="(link, index) in links"
          :key="index"
        >
          <Link
            :href="link.url === null ? '#' : link.url"
            :class="{
              'page-link': true,
            }"
            v-html="link.label"
          >
          </Link>
        </li>
      </ul>
    </nav>
  </div>
</template>
<script>
import { Link } from "@inertiajs/vue3";

export default {
  props: {
    links: {
      type: Array,
    },
    align: {
      type: String,
      default: "center",
    },
  },
  components: {
    Link,
  },
};
</script>
<style scoped>
</style>