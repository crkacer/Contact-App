<template>
    <div>
        <div class="panel panel-default">
            <div class="panel-heading my-completed">
                <h3 class="panel-title">New Contact</h3>
            </div>
            <div class="panel-body">
               <form @submit.prevent="addContact">
                    <div class="form-group">
                        <label for="usr">Name:</label>
                        <input type="text" class="form-control" v-model="name">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Phone:</label>
                        <input type="number" class="form-control" v-model="phone">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Address:</label>
                        <input type="text" class="form-control" v-model="address">
                    </div>
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus"></i> New Contact</button>
                </form>
                
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        data() {
            return {
                name: "",
                phone: "",
                address: ""
            }
        },
        methods: {
            addContact(){
                this.$store.dispatch('createContact', {
                    name: this.name,
                    phone: this.phone,
                    address: this.address
                })
            }
        }
    }
</script>
