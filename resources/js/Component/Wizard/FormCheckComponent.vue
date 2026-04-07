<template>
  <fieldset>
    <div class="form-card text-start">
      <b-row>
        <div class="col-7">
          <h3 class="mb-4">{{ title }}:</h3>
        </div>
        <div class="col-5">
          <h2 class="steps">Step 2 - 4</h2>
        </div>
      </b-row>
      <b-row>
        <!-- <b-col md="6">
          <b-form-group label="First Name: *">
            <b-form-input
              type="text"
              class="form-control"
              name="fname"
              placeholder="First Name"
            />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group label="Last Name: *">
            <b-form-input
              type="text"
              class="form-control"
              name="lname"
              placeholder="Last Name"
            />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group label="Contact No.: *">
            <b-form-input
              type="text"
              class="form-control"
              name="phno"
              placeholder="Contact No."
            />
          </b-form-group>
        </b-col>
        <b-col md="6">
          <b-form-group label="Alternate Contact No.: *">
            <b-form-input
              type="text"
              class="form-control"
              name="phno_2"
              placeholder="Alternate Contact No."
            />
          </b-form-group>
        </b-col> -->

        <!-- awal list permission multi check box -->
        <!-- <b-col md="6">
          <div>
            <b-form-checkbox
              v-model="status"
              name="checkbox-1"
              class="form-check-input"
              type="checkbox"
              value="{{name}}"
              :id="`check-${id}`"
            >
              {{ name }}
            </b-form-checkbox>

            <div>
              State: <strong>{{ status }}</strong>
            </div>
          </div>
        </b-col> -->

        <!-- <b-col md="6"> -->
        <!-- <div class="form-check form-check-inline">
            <b-form-checkbox
              v-for="(permission, index) in listPermissions"
              :key="index"
              :name="permission.name"
              :id="permission.id"
            >
                {{ permission.name }}
            </b-form-checkbox>

            <div>
              State: <strong>{{ status }}</strong>
            </div>
          </div> -->
        <!-- </b-col> -->

        <!-- default multi checkbox -->
        <!-- <b-form-group
          label="Form-checkbox-group inline checkboxes (default)"
          v-slot="{ ariaDescribedby }"
        >
          <b-form-checkbox-group
            v-model="selected"
            :options="options"
            :aria-describedby="ariaDescribedby"
            name="flavour-1a"
          ></b-form-checkbox-group>
        </b-form-group> -->
        <!-- default multi checkbox -->

        <!-- v-for="(permission, index) in permissions"
                :key="index"
                :name="permission.name"
                :id="permission.id" -->

        <!-- akhir list permission multi check box -->
      </b-row>

      <!-- awal ui multicheckbox -->
      <div class="mb-3">
        <label class="fw-bold">Permissions</label>
        <br />
        <!-- <div
          class="form-check form-check-inline"
          v-for="(permission, index) in permissions"
          :key="index"
        > -->

        <div class="form-check form-check-inline">
          <!-- v-model="form.permissions" -->
          <input
            class="form-check-input"
            type="checkbox"
            value="{{name}}"
            :id="`check-${id}`"
          />
          <label class="form-check-label pl-2" :for="`check-${id}`">{{
            name
          }}</label>
        </div>
      </div>
      <!-- akhir ui multicheckbox -->
    </div>
    <a
      href="#payment"
      @click="changeTab(3)"
      class="btn btn-primary next action-button float-end"
      value="Next"
      >Next</a
    >
    <a
      href="#account"
      @click="changeTab(1)"
      class="btn btn-dark previous action-button-previous float-end me-1"
      value="Previous"
      >Previous</a
    >
  </fieldset>
</template>
<script>
export default {
  name: "PersonalComponent",
  props: {
    // title: String,
    // name: String,
    // id: String,
    listPermissions: Array,
  },
  data() {
    return {
      status: "not_accepted",
    };
  },
  setup(props, { emit }) {
    const changeTab = (value) => {
      emit("onClick", value);
    };
    return { props, changeTab };
  },
};
</script>
