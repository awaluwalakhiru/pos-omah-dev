<template>
  <Head>
    <title>Reset - POS OmahDev</title>
  </Head>

  <div class="row m-0 align-items-center bg-white vh-100">
    <div class="col-md-6">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div
            class="card card-transparent shadow-none d-flex justify-content-center mb-0 auth-card"
          >
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

              <h2 class="mb-2 text-center">Reset Password</h2>
              <p class="text-center">Enter your new password below.</p>
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
                  <div class="col-lg-12">
                    <div class="form-group">
                      <label for="password_confirmation" class="form-label"
                        >Confirm Password</label
                      >
                      <input
                        type="password"
                        :class="{
                          'form-control': true,
                          'is-invalid': errors.password_confirmation,
                        }"
                        id="password_confirmation"
                        aria-describedby="password_confirmation"
                        placeholder=" "
                        v-model="form.password_confirmation"
                      />
                      <div
                        v-if="errors.password_confirmation"
                        class="invalid-feedback"
                      >
                        {{ errors.password_confirmation }}
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">
                    Reset Password
                  </button>
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
import AuthLayout from "@/layouts/Auth.vue";
import { Head, Link, router } from "@inertiajs/vue3";
import { reactive } from "vue";
export default {
  layout: AuthLayout,
  components: {
    Head,
    Link,
  },
  props: {
    errors: Object,
    session: Object,
    route: Object,
  },
  setup(props) {
    const form = reactive({
      email: props.route.query.email || "",
      password: "",
      password_confirmation: "",
      token: props.route.params.token || "",
    });

    const submit = () => {
      router.post("/reset-password", {
        email: form.email,
        password: form.password,
        password_confirmation: form.password_confirmation,
        token: form.token,
        onSuccess: () => {
          form.email = "";
          form.password = "";
          form.password_confirmation = "";
          form.token = "";
        },
        onError: () => {
          form.password = "";
          form.password_confirmation = "";
        },
      });
    };

    return {
      form,
      submit,
    };
  },
};
</script>
<style></style>