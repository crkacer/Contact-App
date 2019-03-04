<template>
    <div id="app" class="container">
        <div class="row">
            <div class="col-md-8"><ContactTable /></div>
            <div class="col-md-4"><CreateContact /></div>
        </div>

    </div>
</template>

<script>
    import CreateContact from './components/CreateContact.vue'
    import ContactTable from './components/ContactTable.vue'

    export default {
        components: {
            CreateContact,
            ContactTable
        }
    
    }
</script>

