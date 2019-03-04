import Vue from 'vue'
import Vuex from 'vuex'
import axios from 'axios'
Vue.use(Vuex)

export default new Vuex.Store({
    state: {
        contacts: []
    },
    getters: {
        contacts: state => state.contacts
    },
    mutations: {
        fetchContact(state, payload) {
            // payload ? (state.contacts = payload) : false;
            Vue.set(state, 'contacts', payload);
          },
        appendContact(state, payload) {
            state.contacts.push(payload);
        }
    },
    actions: {
        fetchContacts({commit}) {
            axios.get("http://localhost:4000/api/contacts?offset=0&limit=100")
              .then(function(contacts) {
                commit('fetchContact', contacts.data);
              });
          },
        createContact({commit}, contact) {
            axios.post("http://localhost:4000/api/contact", contact)
              .then(function(contact) {
                commit('appendContact', contact.data);
              })
              .catch(function (error) {
                const err = error;
              });
        }
    }
})
