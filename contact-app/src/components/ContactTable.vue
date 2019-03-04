<template>
    <div id="list-tasks">
        <div class="panel panel-default">
            <div class="panel-heading my-task">
                  <h3 class="panel-title">My Contacts</h3>
            </div>
            <div class="panel-body">
                <v-data-table
                    :headers="headers"
                    :items="allContacts"
                    :search="search"
                    :pagination.sync="pagination"
                    hide-actions
                    class="elevation-1"
                >
                    <template v-slot:items="props">
                    <td>{{ props.item.name }}</td>
                    <td class="text-xs-right">{{ props.item.phone }}</td>
                    <td class="text-xs-right">{{ props.item.address }}</td>
                    </template>
                </v-data-table>
                <v-pagination v-model="pagination.page" :length="pages"></v-pagination>
            </div>
        </div>    
    </div>
</template>
<script>

    export default{
        data () {
            return {
                headers: [
                    { text: 'Name', value: 'name' },
                    { text: 'Phone Number', value: 'phone' },
                    { text: 'Address', value: 'address' },
                ],
                pagination: {},
            }
        },
        computed: {
            allContacts(){
              return this.$store.getters.contacts
            },
            pages () {
              return this.pagination.rowsPerPage ? Math.ceil(this.$store.getters.contacts.length / this.pagination.rowsPerPage) : 0
            }
        },
        created () {
            this.$store.dispatch('fetchContacts');
            console.log(this.$store);
        }
    }
</script>
<style>
    .btn-group{
        float: right;
    }
</style>
