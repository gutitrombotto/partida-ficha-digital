<template>
  <autocomplete
    :url="url_data"
    :classes="{ wrapper: 'form-wrapper', input: 'form-control', list: 'data-list', item: 'data-list-item' }"
    :anchor="data_anchor"
    :label="data_label"
    param="query"
    :on-select="selected_data"
    >
  </autocomplete>
</template>

<script>
import Autocomplete from "vue2-autocomplete-js";
require("vue2-autocomplete-js/dist/style/vue2-autocomplete.css");

export default {
  components: {
    Autocomplete
  },
  props: {
    url_data: {
      default: window.ENV.APP_URL + "/autocomple-usuarios"
    },
    selected_data: {
      type: Function,
      default: function() {
        return ;
      }
    },
    data_anchor: {
      type: String,
      required: true
    },
    data_label: {
      type: String,
      required: false
    }
  },
  methods: {
    getData(obj) {
      console.log(obj);
    }
  },
  mounted() {
    console.log("Typeahead mounted.");
  }
};
</script>

