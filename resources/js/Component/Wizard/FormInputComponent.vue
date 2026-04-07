<template>
  <fieldset>
    <div class="form-card text-start">
      <b-row>
        <div class="col-7">
          <!-- <h3 class="mb-4">{{ 'sidebar.account-info' }}:</h3> -->
          <h3 class="mb-4">{{ title }}:</h3>
        </div>
        <div class="col-5">
          <h2 class="steps">Step 1 - 4</h2>
        </div>
      </b-row>
      <b-row>
        <b-col md="6">
          <b-form-group :label="label">
            <b-form-input
              type="text"
              :class="{
                'form-control': true,
                'is-invalid': errors.name,
              }"
              :placeholder="placeholder"
              v-model="form.name"
            />
            <b-form-invalid-feedback :state="errors.name">
              {{ errors.name }}
            </b-form-invalid-feedback>
          </b-form-group>
        </b-col>
        <!-- <b-col md="6">
          <b-form-group label="Username: *">
            <b-form-input type="text" class="form-control" name="uname" placeholder="UserName" />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group label="Password: *">
            <b-form-input type="password" class="form-control" name="new-password" placeholder="Password" />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group label="Confirm Password: *">
            <b-form-input type="password" class="form-control" name="confirm-new-password" placeholder="Confirm Password" />
          </b-form-group>
        </b-col> -->
      </b-row>
    </div>
    <a
      href="#personal"
      class="btn btn-primary next action-button float-end"
      @click="changeTab(2)"
      value="Next"
      >Next</a
    >
  </fieldset>
</template>
<script>
import { computed, reactive } from "vue";
export default {
  name: "AccountComponent",
  props: {
    title: String,
    label: String,
    placeholder: String,
    errors: Object,
    session: Object,
  },
  setup(props, { emit }) {
    //  computed: {
    //   validation() {
    //     return this.userId.length > 4 && this.userId.length < 13
    //   }
    // }
    const form = reactive({
      name: "",
    });
    const validation = computed(() => {
      return props.placeholder.length > 4 && props.placeholder.length < 13;
    });
    const changeTab = (value) => {
      emit("onClick", value);
    };
    return { props, changeTab, validation, form };
  },
};
</script>
