import Vue from 'vue';
import VueRouter from 'vue-router'

require('./bootstrap');

window.Vue = require('vue');
Vue.use(VueRouter)

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    el: '#app',
    data() {
        return {
            vowels: 'aeiou',
            reformat_text: '',
            formatedText: '',
            array_rep: [],
            outputArray: '',
            cur_bin: '',
            next_bin: ''
        }

    },
    methods: {
        reformat() {
            var ths = this
            var text = ths.reformat_text;
            text = text.replace(/\r/gi, '');
            text = ths.remvwls(text);
            ths.formatedText = text.charAt(0).toUpperCase() + text.slice(1).toLowerCase();
        },
        remvwls(text) {
            var vm = this
            var vowls = vm.vowels,
                lets = text.split('');
            var textlen = lets.length;
            var textout = new Array();
            for (var x = 0; x < textlen; x++) {
                if (vowls.indexOf(lets[x].toLowerCase()) == -1)
                    textout[x] = lets[x]; else textout[x] = '';
            }
            text = textout.join('');
            return text;
        },
        repeat(array_rep) {
            this.outputArray = '';
            var n = 3;
            while (n--) { this.outputArray = this.outputArray + ',' + array_rep; }
            this.outputArray = this.outputArray.substring(1);
        },
        next_binary_number(cur_bin) {
            var len = cur_bin.length;
            var cur_bin_array = cur_bin.split('');
  
            for (var i = len - 1; i >= 0; i--) {
                if (cur_bin_array[i] == "0") {
                    cur_bin_array[i] = 1;
                    break;
                }
                else {
                    cur_bin_array[i] = 0;
                }     
            }
            cur_bin = cur_bin_array.join('');

            if (i < 0)
                cur_bin = "1".concat(cur_bin);

            this.next_bin = cur_bin;
        }
    }
});
