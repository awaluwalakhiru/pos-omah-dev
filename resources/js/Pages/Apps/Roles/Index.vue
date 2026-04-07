<template>
  <Head>
    <title>Roles - Aplikasi Kasir</title>
  </Head>

  <!-- awal table list roles-->
  <div class="col-md-12 col-lg-12">
    <div class="overflow-hidden card" data-aos="fade-up" data-aos-delay="600">
      <div
        v-if="roles.data.length <= 0"
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
        v-if="roles.data.length > 0"
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
            {{ roles.total }} data ditemukan dengan kata kunci "{{
              searchQuery
            }}".
          </p>
        </div>
      </div>

      <div class="p-0 card-body">
        <div class="card-header d-flex justify-content-between flex-wrap">
          <div class="header-title">
            <h4 class="card-title mb-0">Roles Users</h4>
          </div>

          <div class="d-flex align-items-center gap-3">
            <Link
              href="/apps/roles/create"
              v-if="hasAnyPermission(['roles.create'])"
              class="btn btn-outline-primary"
            >
              Create Role
            </Link>

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
                <th scope="col">No</th>
                <th scope="col" width="25%">Role Name</th>
                <th scope="col" width="50%">Permission</th>
                <th scope="col" width="15%">Action</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="(role, index) in roles.data" :key="index">
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
                    <h6>{{ role.name }}</h6>
                  </div>
                </td>
                <td class="text-wrap">
                  <!-- <div class="d-flex align-items-center"> -->
                  <span
                    class="badge bg-primary rounded-pill mx-1 my-1"
                    v-for="(permission, index) in role.permissions"
                    :key="index"
                  >
                    {{ permission.name }}
                  </span>
                  <!-- </div> -->
                </td>

                <td>
                  <div class="d-flex align-items-center">
                    <Link
                      href="#"
                      v-if="hasAnyPermission(['roles.edit'])"
                      class="btn btn-outline-success btn-sm me-2"
                    >
                      <svg
                        class="icon-18"
                        width="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          fill-rule="evenodd"
                          clip-rule="evenodd"
                          d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M15.1655 4.60254L19.7315 9.16854"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>

                      EDIT</Link
                    >
                    <button
                      v-if="hasAnyPermission(['roles.delete'])"
                      class="btn btn-outline-danger btn-sm"
                    >
                      <svg
                        class="icon-18"
                        width="18"
                        viewBox="0 0 24 24"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                      >
                        <path
                          d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M20.708 6.23975H3.75"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                        <path
                          d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973"
                          stroke="currentColor"
                          stroke-width="1.5"
                          stroke-linecap="round"
                          stroke-linejoin="round"
                        ></path>
                      </svg>
                      DELETE
                    </button>
                  </div>
                </td>
              </tr>

              <tr v-if="roles.data.length <= 0">
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

          <Pagination :links="roles.links" align="center" />
        </div>
      </div>
    </div>
  </div>

  <!-- akhir table list roles -->
</template>
    
<script>
// import AOS library for animations on scroll
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
    roles: Object,
  },

  // setup function for composition API
  setup() {
    const searchQuery = ref(
      "" || new URL(document.location).searchParams.get("q")
    );

    const searchHandler = () => {
      router.get(
        "/apps/roles",
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
<style scoped>
</style>