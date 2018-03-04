<template>
  <typeahead :selected_data="selected_data" :data_anchor="ta_anchor" :data_label="ta_label"></typeahead>
</template>

<script>

// import Typeahead from "../../shared/typeahead.typeahead.vue"

// import Typeahead from "../shared/typeahead/typeahead.vue"
import Typeahead from "../../shared/typeahead/typeahead.vue"

export default {
  components: {
      Typeahead
  },
  props: {
      ta_anchor: {
          default : "nombre"
      },
      ta_label: {
          default: "email"
      }
  },
  methods: {
      selected_data: function(obj){
          console.log(obj)
      }

  }
}
</script>
