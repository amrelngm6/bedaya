<template>
    <div class="w-full overflow-auto relative" v-if="activeItem">
        
        <div class="py-2 ml-4 flex col-md-3 bg-white fixed right-0" >
            <h1 class="w-full m-auto max-w-xl text-base mb-2  " v-text="__('edit')"></h1>
            <span class="cursor-pointer py-1 px-2" @click="hideSidebar"><close_icon /></span>
        </div>
        <div class="pt-8">
            <form v-if="activeItem.field" action="/api/update" method="POST" data-refresh="1" id="add-device-form" class="action py-2 m-auto rounded-lg max-w-xl pb-10">

                <div v-if="field.code" v-for="field in activeItem.custom_fields">
                    <span class="block mt-4 text-gray-400" v-text="field.code ? __(field.code) : ''"></span>
                    <input :name="'params[field]['+field.code+']'"  type="text" class="h-12 my-2 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="field.title" :value="field.code ? activeItem.field[field.code] : ''" >
                </div>
                
                <div class="py-2">
                    <label for="status">
                        <span v-text="__('status')"></span>
                    </label>
                    <input class="mx-4" id="status" type="checkbox" v-model="activeItem.status" name="params[status]" />

                </div>
                <span class="block my-2" v-text="__('picture')"></span>
                <vue-medialibrary-field name="params[picture]" :key="activeItem.id" v-if="conf" :api_url="conf.url" v-model="activeItem.picture"></vue-medialibrary-field>

                <input name="type" type="hidden" :value="model+'.update'">
                <input name="params[id]" type="hidden" v-model="activeItem.id">

                <button class="uppercase h-10 mt-3 text-white w-full rounded bg-red-700 hover:bg-red-800">{{__('Update')}}</button>
            </form>
        
            <a @click="$parent.handleAction(model+'.delete', activeItem)" href="javascript:;" class=" my-2 py-2 uppercase block text-center  pb-1 mt-1 text-white w-full rounded text-gray-700 hover:bg-red-800 hover:text-white">{{__('Delete')}}</a>

        </div>
    </div>
</template>
<script>

export default 
{
    name:'Customers',
    data() {
        return {
            activeItem:{},
            showEditSide:false,
            showLoader: true,
        }
    },
    props: [
        'path',
        'lang',
        'setting',
        'conf',
        'auth',
        'model',
        'item',
    ],
    mounted() 
    {
        this.activeItem = this.item;
    },

    methods: 
    {
        /**
         * hideEditSide
        */
        hideSidebar()
        {
            this.$parent.hideSidebar()
        },
        __(i)
        {
            return this.$root.$children[0].__(i);
        }
    }
};
</script>