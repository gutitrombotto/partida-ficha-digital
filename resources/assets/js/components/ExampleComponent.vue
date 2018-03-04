<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component! DALE WA8

                        
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
          <autocomplete
    :url=url
    :classes="{ wrapper: 'form-wrapper', input: 'form-control', list: 'data-list', item: 'data-list-item' }"
    anchor="nombre"
    label="email"
    param="query"
    :onAjaxLoaded="enter"
    :on-select="getData">
  </autocomplete>
            <!-- <vue-instant :suggestion-attribute="suggestionAttribute" v-model="value" :disabled="false"  @input="changed" @click-input="clickInput" @click-button="clickButton" @selected="selected"  @enter="enter" @key-up="keyUp" @key-down="keyDown" @key-right="keyRight" @clear="clear"  @escape="escape" :show-autocomplete="true" :autofocus="false" :suggestions="suggestions" name="customName" placeholder="custom placeholder" type="google"></vue-instant> -->
        </div>
    </div>
</template>

<script>
import Autocomplete from 'vue2-autocomplete-js';
require('vue2-autocomplete-js/dist/style/vue2-autocomplete.css')


export default {
  components: {
    Autocomplete
  },
  data: function() {
    return {
      value: "",
      suggestionAttribute: "nombre",
      suggestions: [],
      selectedEvent: "",
      url: window.ENV.APP_URL + "/autocomple-usuarios?"
    };
  },
  methods: {
    getData(obj){
        console.log(obj);
      },
    clickInput: function() {
      this.selectedEvent = "click input";
    },
    clickButton: function() {
      this.selectedEvent = "click button";
    },
    selected: function() {
      // alert(this.selectedSuggest);
      this.selectedEvent = "selection changed";
    },
    enter: function() {
      // alert("ENTEER")
      this.selectedEvent = "enter";
    },
    keyUp: function() {
      this.selectedEvent = "keyup pressed";
    },
    keyDown: function() {
      this.selectedEvent = "keyDown pressed";
    },
    keyRight: function() {
      this.selectedEvent = "keyRight pressed";
    },
    clear: function() {
      this.selectedEvent = "clear input";
    },
    escape: function() {
      this.selectedEvent = "escape";
    },
    changed: function() {
      var that = this;
      this.suggestions = [];
      axios
        .get(
          //   "https://api.themoviedb.org/3/search/movie?api_key=342d3061b70d2747a1e159ae9a7e9a36&query=" +
          //     this.value
          window.ENV.APP_URL + "/autocomple-usuarios?query=" + this.value
        )
        .then(function(response) {
          // console.log(response);
          //   response.data.results.forEach(function(a) {
          response.data.forEach(function(a) {
            //   console.log(a)
            that.suggestions.push(a);
          });
        });
    }
  },
  mounted() {
    console.log("Component mounted.");
    // this.enter();
    // console.log(window.ENV);
  }
};
</script>
