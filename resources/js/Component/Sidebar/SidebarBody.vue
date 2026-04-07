<template>
  <div class="sidebar-body pt-0 data-scrollbar">
    <div class="sidebar-list">
      <!-- Sidebar Menu Start -->
      <ul class="navbar-nav iq-main-menu" id="sidebar-menu">
        <li class="nav-item static-item">
          <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Home</span>
            <span class="mini-icon">-</span>
          </a>
        </li>
        <li class="nav-item">
          <Link
            class="nav-link"
            :class="{ active: $page.url.startsWith('/apps/dashboard') }"
            aria-current="page"
            href="/apps/dashboard"
          >
            <i class="icon">
              <svg
                width="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="icon-20"
              >
                <path
                  opacity="0.4"
                  d="M16.0756 2H19.4616C20.8639 2 22.0001 3.14585 22.0001 4.55996V7.97452C22.0001 9.38864 20.8639 10.5345 19.4616 10.5345H16.0756C14.6734 10.5345 13.5371 9.38864 13.5371 7.97452V4.55996C13.5371 3.14585 14.6734 2 16.0756 2Z"
                  fill="currentColor"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M4.53852 2H7.92449C9.32676 2 10.463 3.14585 10.463 4.55996V7.97452C10.463 9.38864 9.32676 10.5345 7.92449 10.5345H4.53852C3.13626 10.5345 2 9.38864 2 7.97452V4.55996C2 3.14585 3.13626 2 4.53852 2ZM4.53852 13.4655H7.92449C9.32676 13.4655 10.463 14.6114 10.463 16.0255V19.44C10.463 20.8532 9.32676 22 7.92449 22H4.53852C3.13626 22 2 20.8532 2 19.44V16.0255C2 14.6114 3.13626 13.4655 4.53852 13.4655ZM19.4615 13.4655H16.0755C14.6732 13.4655 13.537 14.6114 13.537 16.0255V19.44C13.537 20.8532 14.6732 22 16.0755 22H19.4615C20.8637 22 22 20.8532 22 19.44V16.0255C22 14.6114 20.8637 13.4655 19.4615 13.4655Z"
                  fill="currentColor"
                ></path>
              </svg>
            </i>
            <span class="item-name">Dashboard</span>
          </Link>
        </li>
        <li class="nav-item d-none UNTUK SAMPLE sidebar menu collapse">
          <a
            class="nav-link"
            data-bs-toggle="collapse"
            href="#horizontal-menu"
            role="button"
            aria-expanded="false"
            aria-controls="horizontal-menu"
          >
            <i class="icon">
              <svg
                width="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
                class="icon-20"
              >
                <path
                  opacity="0.4"
                  d="M10.0833 15.958H3.50777C2.67555 15.958 2 16.6217 2 17.4393C2 18.2559 2.67555 18.9207 3.50777 18.9207H10.0833C10.9155 18.9207 11.5911 18.2559 11.5911 17.4393C11.5911 16.6217 10.9155 15.958 10.0833 15.958Z"
                  fill="currentColor"
                ></path>
                <path
                  opacity="0.4"
                  d="M22.0001 6.37867C22.0001 5.56214 21.3246 4.89844 20.4934 4.89844H13.9179C13.0857 4.89844 12.4102 5.56214 12.4102 6.37867C12.4102 7.1963 13.0857 7.86 13.9179 7.86H20.4934C21.3246 7.86 22.0001 7.1963 22.0001 6.37867Z"
                  fill="currentColor"
                ></path>
                <path
                  d="M8.87774 6.37856C8.87774 8.24523 7.33886 9.75821 5.43887 9.75821C3.53999 9.75821 2 8.24523 2 6.37856C2 4.51298 3.53999 3 5.43887 3C7.33886 3 8.87774 4.51298 8.87774 6.37856Z"
                  fill="currentColor"
                ></path>
                <path
                  d="M21.9998 17.3992C21.9998 19.2648 20.4609 20.7777 18.5609 20.7777C16.6621 20.7777 15.1221 19.2648 15.1221 17.3992C15.1221 15.5325 16.6621 14.0195 18.5609 14.0195C20.4609 14.0195 21.9998 15.5325 21.9998 17.3992Z"
                  fill="currentColor"
                ></path>
              </svg>
            </i>
            <span class="item-name">Menu Style</span>
            <i class="right-icon">
              <svg
                class="icon-18"
                xmlns="http://www.w3.org/2000/svg"
                width="18"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M9 5l7 7-7 7"
                />
              </svg>
            </i>
          </a>
          <ul
            class="sub-nav collapse"
            id="horizontal-menu"
            data-bs-parent="#sidebar-menu"
          >
            <li class="nav-item">
              <a class="nav-link" href="../dashboard/index-horizontal.html">
                <i class="icon">
                  <svg
                    class="icon-10"
                    xmlns="http://www.w3.org/2000/svg"
                    width="10"
                    viewBox="0 0 24 24"
                    fill="currentColor"
                  >
                    <g>
                      <circle
                        cx="12"
                        cy="12"
                        r="8"
                        fill="currentColor"
                      ></circle>
                    </g>
                  </svg>
                </i>
                <i class="sidenav-mini-icon"> H </i>
                <span class="item-name"> Horizontal </span>
              </a>
            </li>
          </ul>
        </li>

        <li>
          <hr class="hr-horizontal" />
        </li>

        <li class="nav-item static-item">
          <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Master</span>
            <span class="mini-icon">-</span>
          </a>
        </li>

        <li>
          <hr class="hr-horizontal" />
        </li>

        <li class="nav-item static-item">
          <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Transactions</span>
            <span class="mini-icon">-</span>
          </a>
        </li>

        <li>
          <hr class="hr-horizontal" />
        </li>

        <li class="nav-item static-item">
          <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">Reports</span>
            <span class="mini-icon">-</span>
          </a>
        </li>

        <li>
          <hr class="hr-horizontal" />
        </li>

        <li class="nav-item static-item">
          <a class="nav-link static-item disabled" href="#" tabindex="-1">
            <span class="default-icon">User Management</span>
            <span class="mini-icon">-</span>
          </a>
        </li>

        <li class="nav-item">
          <Link
            class="nav-link"
            :class="{ active: $page.url.startsWith('/apps/roles') }"
            aria-current="page"
            href="/apps/roles"
          >
            <i class="icon">
              <svg
                class="icon-20"
                width="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M17.8877 10.8967C19.2827 10.7007 20.3567 9.50473 20.3597 8.05573C20.3597 6.62773 19.3187 5.44373 17.9537 5.21973"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M19.7285 14.2505C21.0795 14.4525 22.0225 14.9255 22.0225 15.9005C22.0225 16.5715 21.5785 17.0075 20.8605 17.2815"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M11.8867 14.6638C8.67273 14.6638 5.92773 15.1508 5.92773 17.0958C5.92773 19.0398 8.65573 19.5408 11.8867 19.5408C15.1007 19.5408 17.8447 19.0588 17.8447 17.1128C17.8447 15.1668 15.1177 14.6638 11.8867 14.6638Z"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M11.8869 11.888C13.9959 11.888 15.7059 10.179 15.7059 8.069C15.7059 5.96 13.9959 4.25 11.8869 4.25C9.7779 4.25 8.0679 5.96 8.0679 8.069C8.0599 10.171 9.7569 11.881 11.8589 11.888H11.8869Z"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M5.88509 10.8967C4.48909 10.7007 3.41609 9.50473 3.41309 8.05573C3.41309 6.62773 4.45409 5.44373 5.81909 5.21973"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M4.044 14.2505C2.693 14.4525 1.75 14.9255 1.75 15.9005C1.75 16.5715 2.194 17.0075 2.912 17.2815"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </i>
            <span class="item-name">Roles</span>
          </Link>
        </li>

        <li class="nav-item">
          <Link
            class="nav-link"
            :class="{ active: $page.url.startsWith('/apps/permissions') }"
            aria-current="page"
            href="/apps/permissions"
          >
            <i class="icon">
              <svg
                class="icon-20"
                width="20"
                viewBox="0 0 24 24"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M9.59151 15.2068C13.2805 15.2068 16.4335 15.7658 16.4335 17.9988C16.4335 20.2318 13.3015 20.8068 9.59151 20.8068C5.90151 20.8068 2.74951 20.2528 2.74951 18.0188C2.74951 15.7848 5.88051 15.2068 9.59151 15.2068Z"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M9.59157 12.0198C7.16957 12.0198 5.20557 10.0568 5.20557 7.63476C5.20557 5.21276 7.16957 3.24976 9.59157 3.24976C12.0126 3.24976 13.9766 5.21276 13.9766 7.63476C13.9856 10.0478 12.0356 12.0108 9.62257 12.0198H9.59157Z"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M16.4829 10.8815C18.0839 10.6565 19.3169 9.28253 19.3199 7.61953C19.3199 5.98053 18.1249 4.62053 16.5579 4.36353"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
                <path
                  d="M18.5952 14.7322C20.1462 14.9632 21.2292 15.5072 21.2292 16.6272C21.2292 17.3982 20.7192 17.8982 19.8952 18.2112"
                  stroke="currentColor"
                  stroke-width="1.5"
                  stroke-linecap="round"
                  stroke-linejoin="round"
                ></path>
              </svg>
            </i>
            <span class="item-name">Permissions</span>
          </Link>
        </li>
      </ul>
      <!-- Sidebar Menu End -->
    </div>
  </div>
</template>
<script>
import { Link } from "@inertiajs/vue3";
import Scrollbar from "smooth-scrollbar";
import { onMounted } from "vue";

export default {
  components: {
    Link,
  },
  setup() {
    onMounted(() => {
      Scrollbar.init(document.querySelector(".data-scrollbar"), {
        continuousScrolling: false,
      });
    });
  },
};
</script>
<style></style>