<template>
    <div>

    </div>
</template>


<script>
export default {
    data() {
        return {
            // Code...
        }
    },
    created() {
        this.$eventHub.$on('create-success', this.itemCreated)
        this.$eventHub.$on('update-success', this.itemUpdated)
        this.$eventHub.$on('delete-success', this.itemDeleted)
    },
    methods: {
        itemCreated() {
            this.$awn.success('Your item has been successfully saved.')
        },
        itemUpdated() {
            this.$awn.success('Your item has been successfully updated.')
        },
        itemDeleted() {
            this.$awn.success('Your item has been successfully deleted.')
        }
    }
}
</script>


<style scoped>

</style>
