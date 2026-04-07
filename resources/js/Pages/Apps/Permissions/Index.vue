<template>
  <Head>
    <title>Permissions - Aplikasi Kasir</title>
  </Head>

  <!-- awal table list permissions-->
  <div class="col-md-12 col-lg-12">
    <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
      <div
        v-if="permissions.data.length <= 0"
        class="flex-wrap card-header d-flex justify-content-between"
      >
        <div class="header-title">
          <h4 class="mb-2 card-title">Search Information</h4>
          <p class="mb-0">
            <svg
              class="me-2 text-primary icon-24"
              width="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"
              />
            </svg>
            Tidak ada data ditemukan dengan kata kunci "{{ searchQuery }}".
          </p>
        </div>
      </div>

      <div
        v-if="permissions.data.length > 0"
        class="flex-wrap card-header d-flex justify-content-between"
      >
        <div class="header-title">
          <h4 class="mb-2 card-title">Search Information</h4>
          <p class="mb-0">
            <svg
              class="me-2 text-primary icon-24"
              width="24"
              viewBox="0 0 24 24"
            >
              <path
                fill="currentColor"
                d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z"
              />
            </svg>
            {{ permissions.total }} data ditemukan dengan kata kunci "{{
              searchQuery
            }}".
          </p>
        </div>
      </div>

      <div class="p-0 card-body">
        <div class="card-header d-flex justify-content-between flex-wrap">
          <div class="header-title">
            <h4 class="card-title mb-0">Permissions Users</h4>
          </div>
          <div class="d-flex align-items-center gap-3">
            <form class="d-flex" @submit.prevent="searchHandler">
              <span class="input-group-text" id="search-input">
                <svg
                  class="icon-18"
                  width="18"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <circle
                    cx="11.7669"
                    cy="11.7666"
                    r="8.98856"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></circle>
                  <path
                    d="M18.0186 18.4851L21.5426 22"
                    stroke="currentColor"
                    stroke-width="1.5"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  ></path>
                </svg>
              </span>
              <input
                class="form-control me-2"
                type="search"
                placeholder="Search"
                aria-label="Search"
                v-model="searchQuery"
              />
              <button class="btn btn-outline-dark" type="submit">Search</button>
            </form>
          </div>
        </div>

        <div class="mt-4 table-responsive">
          <table
            id="basic-table"
            class="table mb-0 table-striped table-hover table-bordered"
            role="grid"
          >
            <thead>
              <tr>
                <th>No</th>
                <th>Permission Name</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(permission, index) in permissions.data" :key="index">
                <td width="1rem;">
                  <div class="iq-media-group iq-media-group-1">
                    <a href="#" class="iq-media-1">
                      <div class="icon iq-icon-box-3 rounded-pill">
                        {{ index + 1 }}
                      </div>
                    </a>
                  </div>
                </td>
                <td>
                  <div class="d-flex align-items-center">
                    <img
                      class="rounded bg-soft-primary img-fluid avatar-40 me-3"
                      src="/assets/images/shapes/01.png"
                      alt="profile"
                    />
                    <h6>{{ permission.name }}</h6>
                  </div>
                </td>
              </tr>

              <tr v-if="permissions.data.length <= 0">
                <td colspan="2">
                  <div
                    class="d-flex align-items-center text-danger text-center flex-column"
                  >
                    <h6>Data Not Found</h6>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>

          <Pagination :links="permissions.links" align="center" />
        </div>
      </div>
    </div>
  </div>

  <!-- akhir table list permissions -->
</template>

<script>
// import AOS library for animation on scroll
import AOS from "aos";

//import layout
import LayoutApp from "@/Layouts/App.vue";

//import component pagination
import Pagination from "@/Component/Pagination/Pagination.vue";

//import Heade and Link from Inertia
import { Head, Link, router } from "@inertiajs/vue3";

// import handler
import { onMounted, onUnmounted, ref } from "vue";

export default {
  //layout
  layout: LayoutApp,

  //register component
  components: {
    Head,
    Link,
    Pagination,
  },

  //props
  props: {
    permissions: Object,
  },

  // setup function for composition API
  setup() {
    // search query
    const searchQuery = ref(
      "" || new URL(document.location).searchParams.get("q")
    );

    // submit search handler
    const searchHandler = () => {
      router.get(
        "/apps/permissions",
        { q: searchQuery.value },
        { preserveState: true }
      );
    };

    onMounted(() => {
      AOS.init({
        disable: function () {
          var maxWidth = 996;
          return window.innerWidth < maxWidth;
        },
        once: true,
        duration: 800,
      });
    });

    onUnmounted(() => {
      // AOS.refresh();
    });

    return {
      searchQuery,
      searchHandler,
    };
  },
};
</script>

<style>
</style>
