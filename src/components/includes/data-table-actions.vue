<template>
    <div class="action-buttons flex gap-6 gap text-base">
        <button class=" hover:text-gray-600 text-purple" @click="handleAction('view')">
            <i class="fa fa-eye"></i>
        </button>
        <button class=" hover:text-gray-600 text-purple" @click="handleAction('edit')">
            <i class="fa fa-edit"></i>
        </button>
        <button class="hover:text-red-400 text-red-600" @click="handleAction('delete')">
            <i class="fa fa-trash"></i>
        </button>
    </div>
</template>
<script>
export default {
    name: "ActionButtons",
    methods: {
        handleAction(actionName) {
            /* when the user clicks a button, that will trigger a mutation on our Vuex store
            The mutation may show a form for editing a resource, or maybe a popup box asking
            the user to confirm deleting a resource, or open a new page for the user to view
            a resource.
             */
            this.$root.$children[0].$refs.activeTab.handleAction(actionName, this.data);

        }

    },
    props: {
        data: {
            type: Object,
            required: true,
        },
    },
};
</script>