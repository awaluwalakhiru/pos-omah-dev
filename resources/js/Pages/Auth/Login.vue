<template>
  <Head>
    <title>Login - POS OmahDev</title>
  </Head>

  <div class="row m-0 align-items-center bg-white vh-100">
    <div class="col-md-6">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div
            class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card"
          >
            <div class="card-body">
              <Link
                href="/"
                class="navbar-brand d-flex align-items-center mb-3"
              >
                <!--Logo start-->
                <div class="logo-main">
                  <div class="logo-normal">
                    <svg
                      class="text-primary icon-30"
                      viewBox="0 0 30 30"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <rect
                        x="-0.757324"
                        y="19.2427"
                        width="28"
                        height="4"
                        rx="2"
                        transform="rotate(-45 -0.757324 19.2427)"
                        fill="currentColor"
                      />
                      <rect
                        x="7.72803"
                        y="27.728"
                        width="28"
                        height="4"
                        rx="2"
                        transform="rotate(-45 7.72803 27.728)"
                        fill="currentColor"
                      />
                      <rect
                        x="10.5366"
                        y="16.3945"
                        width="16"
                        height="4"
                        rx="2"
                        transform="rotate(45 10.5366 16.3945)"
                        fill="currentColor"
                      />
                      <rect
                        x="10.5562"
                        y="-0.556152"
                        width="28"
                        height="4"
                        rx="2"
                        transform="rotate(45 10.5562 -0.556152)"
                        fill="currentColor"
                      />
                    </svg>
                  </div>
                  <div class="logo-mini">
                    <svg
                      class="text-primary icon-30"
                      viewBox="0 0 30 30"
                      fill="none"
                      xmlns="http://www.w3.org/2000/svg"
                    >
                      <rect
                        x="-0.757324"
                        y="19.2427"
                        width="28"
                        height="4"
                        rx="2"
                        transform="rotate(-45 -0.757324 19.2427)"
                        fill="currentColor"
                      />
                      <rect
                        x="7.72803"
                        y="27.728"
                        width="28"
                        height="4"
                        rx="2"
                        transform="rotate(-45 7.72803 27.728)"
                        fill="currentColor"
                      />
                      <rect
                        x="10.5366"
                        y="16.3945"
                        width="16"
                        height="4"
                        rx="2"
                        transform="rotate(45 10.5366 16.3945)"
                        fill="currentColor"
                      />
                      <rect
                        x="10.5562"
                        y="-0.556152"
                        width="28"
                        height="4"
                        rx="2"
                        transform="rotate(45 10.5562 -0.556152)"
                        fill="currentColor"
                      />
                    </svg>
                  </div>
                </div>
                <!--logo End-->

                <h4 class="logo-title ms-3">POS OmahDev</h4>
              </Link>

              <h2 class="mb-2 text-center">Sign In</h2>
              <p class="text-center">Login to stay connected.</p>

              <div
                v-if="session.status"
                class="alert alert-primary alert-dismissible fade show"
                role="alert"
              >
                <p>{{ session.status }}</p>
                <button
                  type="button"
                  class="btn-close"
                  data-bs-dismiss="alert"
                  aria-label="Close"
                ></button>
              </div>

              <form @submit.prevent="submit">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="email" class="form-label">Email</label>
                      <input
                        type="email"
                        :class="{
                          'form-control': true,
                          'is-invalid': errors.email,
                        }"
                        id="email"
                        aria-describedby="email"
                        placeholder=" "
                        v-model="form.email"
                      />
                      <div v-if="errors.email" class="invalid-feedback">
                        {{ errors.email }}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="password" class="form-label">Password</label>
                      <input
                        type="password"
                        :class="{
                          'form-control': true,
                          'is-invalid': errors.password,
                        }"
                        id="password"
                        aria-describedby="password"
                        placeholder=" "
                        v-model="form.password"
                      />
                      <div v-if="errors.password" class="invalid-feedback">
                        {{ errors.password }}
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12 d-flex justify-content-between">
                    <div class="form-check mb-3"></div>
                    <Link href="forgot-password" class="text-primary">
                      Forgot Password?
                    </Link>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="sign-bg">
        <svg
          width="280"
          height="230"
          viewBox="0 0 431 398"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <g opacity="0.05">
            <rect
              x="-157.085"
              y="193.773"
              width="543"
              height="77.5714"
              rx="38.7857"
              transform="rotate(-45 -157.085 193.773)"
              fill="#3B8AFF"
            />
            <rect
              x="7.46875"
              y="358.327"
              width="543"
              height="77.5714"
              rx="38.7857"
              transform="rotate(-45 7.46875 358.327)"
              fill="#3B8AFF"
            />
            <rect
              x="61.9355"
              y="138.545"
              width="310.286"
              height="77.5714"
              rx="38.7857"
              transform="rotate(45 61.9355 138.545)"
              fill="#3B8AFF"
            />
            <rect
              x="62.3154"
              y="-190.173"
              width="543"
              height="77.5714"
              rx="38.7857"
              transform="rotate(45 62.3154 -190.173)"
              fill="#3B8AFF"
            />
          </g>
        </svg>
      </div>
    </div>
    <div
      class="col-md-6 d-md-block d-none bg-primary p-0 mt-n1 vh-100 overflow-hidden"
    >
      <img
        src="/assets/images/auth/01.png"
        class="img-fluid gradient-main animated-scaleX"
        alt="images"
      />
    </div>
  </div>
</template>
<script>
import AuthLayout from "@/Layouts/Auth.vue";
import { Head, Link, router } from "@inertiajs/vue3";
import { reactive, onMounted, onUnmounted } from "vue";
// import { useScriptLoader } from "@/composables/useScriptLoader";
export default {
  layout: AuthLayout,
  components: {
    Head,
    Link,
  },

  props: {
    errors: Object,
    session: Object,
  },

  setup() {
    // const { loadScript, unloadScript } = useScriptLoader();

    const form = reactive({
      email: "",
      password: "",
    });

    const submit = () => {
      router.post("/login", {
        onSuccess: () => {
          console.log("Login successful");
        },
        onError: (errors) => {
          console.log("Login failed", errors);
        },

        email: form.email,
        password: form.password,
      });
    };

    // onMounted(async () => {
    //   // Load any scripts if necessary
    //   await loadScript("/assets/js/charts/widgetcharts.js");
    //   await loadScript("/assets/js/charts/vectore-chart.js");
    //   await loadScript("/assets/js/charts/dashboard.js");
    //   await loadScript("/assets/js/plugins/fslightbox.js");
    //   await loadScript("/assets/js/plugins/setting.js");
    //   await loadScript("/assets/js/plugins/slider-tabs.js");
    //   await loadScript("/assets/js/plugins/form-wizard.js");
    //   await loadScript("/assets/vendor/aos/dist/aos.js");
    // });

    // onUnmounted(() => {
    //   // Unload any scripts if necessary
    //   unloadScript("/assets/js/charts/widgetcharts.js");
    //   unloadScript("/assets/js/charts/vectore-chart.js");
    //   unloadScript("/assets/js/charts/dashboard.js");
    //   unloadScript("/assets/js/plugins/fslightbox.js");
    //   unloadScript("/assets/js/plugins/setting.js");
    //   unloadScript("/assets/js/plugins/slider-tabs.js");
    //   unloadScript("/assets/js/plugins/form-wizard.js");
    //   unloadScript("/assets/vendor/aos/dist/aos.js");
    // });

    return {
      form,
      submit,
      // loadScript,
      // unloadScript,
    };
  },
};
</script>
<style></style>