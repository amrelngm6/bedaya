<template>
    <div class="w-full flex overflow-auto" style="height: 85vh; z-index: 9999;">
        <div class=" w-full">

            <main v-if="content && !showLoader" class=" flex-1 overflow-x-hidden overflow-y-auto  w-full">
                <!-- New releases -->
                <div class="px-4 mb-6 py-4 rounded-lg shadow-lg bg-white dark:bg-gray-700 flex w-full">
                    <h1 class="font-bold text-lg w-full" v-text="content.title"></h1>
                    <a href="javascript:;" class="uppercase p-2 mx-2 text-center text-white w-32 rounded bg-gradient-purple hover:bg-red-800" @click="showLoader = true, showAddSide = true,showLoader = false; activeItem = {} ">{{__('add_new')}}</a>
                </div>
                <hr class="mt-2" />
                <div class="w-full flex gap gap-6">
                    <div class="w-full">
                        <div v-if="content.items" class="px-4 mb-6 py-4 rounded-lg shadow-lg bg-white dark:bg-gray-700 ">
                            <table class="table dark:text-gray-400 text-gray-800 border-separate space-y-6 text-sm w-full">
                                <thead class="mb-10  text-gray-500 pb-10">
                                    <tr class=" ">
                                        <th class="p-2 text-default w-4 ">#</th>
                                        <th class="p-2 text-default " v-text="__('title')"></th>
                                        <th class="p-2 text-default " v-text="__('Status')"></th>
                                        <th class="p-2 text-default " v-text="__('Sorting')"></th>
                                        <th class="p-2 text-center ">{{__('Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr  :key="technology" v-for="technology in content.items" class="dark:bg-gray-800 text-center">
                                        <td class="p-2 border-1 border-t  border-gray-200 text-default">
                                            <div class="flex ">
                                                <div class="ml-3 text-default">
                                                    <div class="font-medium">{{technology.id}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2  text-default border-1 border-t  border-gray-200">
                                            <span class="px-2"> {{technology.content ? technology.content.title : ''}}</span>
                                        </td>
                                        <td class="p-2  text-default border-1 border-t  border-gray-200">
                                            <span class="px-2" :class="technology.status ? '' : 'text-red-400'" v-text="technology.status ? technology.status : 'Disabled'"></span>
                                        </td>
                                        <td class="p-2 border-1 border-t  border-gray-200 text-default" >
                                            <span class="px-2"> {{technology.sorting}}</span>
                                        </td>
                                        <td class="p-2 border-1 border-t  border-gray-200">
                                            <a class="text-gray-400 hover:text-gray-100  mx-2 text-lg" :href="'/builder?prefix='+(technology.content ? technology.content.prefix : '')" target="_blank">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a @click="activeItem = null;showEditSide = true; activeItem = technology; showAddSide = false;  " class="text-gray-400 hover:text-gray-100  mx-2" href="javascript:;">
                                                <i class="material-icons-outlined text-base">edit</i>
                                            </a>

                                            <a href="javascript:;"  @click="$parent.delete(technology, 'Technology.delete')" class="text-gray-400 hover:text-gray-100  ml-2" :title="__('delete')"><i class="material-icons-round text-base">delete_outline</i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div v-else >
                        <!-- {% include 'views/admin/includes/nodata.html.twig' %} -->
                        </div>
                    </div>
                    <div class="col-md-3 sidebar-create-form" v-if="showAddSide">
                        <div class="mb-6 p-4 rounded-lg shadow-lg bg-white dark:bg-gray-700 ">
                            <form action="/api/create" method="POST" data-refresh="1" id="add-device-form" class="action  py-0 m-auto rounded-lg max-w-xl pb-10">
                                <div class="w-full flex">
                                    <h1 class="w-full m-auto max-w-xl text-base mb-10 ">{{__('ADD_NEW')}}</h1>
                                    <span class="cursor-pointer py-1 px-2" @click="showAddSide = false, activeItem = {}"><close_icon /></span>
                                </div>
                                <input name="type" type="hidden" value="Technology.create">
                                
                                <span class="block my-2" v-text="__('title')+' AR'"></span>
                                <input name="params[content][ar][title]" required="" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Title')" >

                                <span class="block mb-2" v-text="__('title')+' EN'"></span>
                                <input name="params[content][en][title]" required="" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Title')" >

                                <span class="block mb-2" v-text="__('sorting')"></span>
                                <input name="params[sorting]" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Sorting')"  v-model="activeItem.sorting">

                                <label class="inline-flex w-full items-center mb-3">
                                    <input name="params[status]" type="checkbox" v-model="activeItem.status" class="form-checkbox h-5 w-5 text-orange-600">
                                    <span class="ml-2 text-gray-700  mx-2" v-text="__('PUBLISH')"></span>
                                </label>

                                <span class="block my-2" v-text="__('picture')"></span>
                                <vue-medialibrary-field name="params[picture]" :key="activeItem.id" :api_url="conf.url" v-model="activeItem.picture"></vue-medialibrary-field>

                                <button class="uppercase h-12 mt-3 text-white w-full rounded bg-red-700 hover:bg-red-800" v-text="__('save')"></button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-3 mb-6 p-4 rounded-lg shadow-lg bg-white dark:bg-gray-700 sidebar-edit-form" v-if="showEditSide && !showAddSide ">

                        <div class="w-full flex">
                            <h1 class="w-full m-auto max-w-xl text-base mb-10 " v-text="__('edit')"></h1>
                            <span class="cursor-pointer py-1 px-2" @click="showEditSide = false"><close_icon /></span>
                        </div>
                        <div >
                            <form v-if="activeItem.field" action="/api/update" method="POST" data-refresh="1" id="add-device-form" class="action py-0 m-auto rounded-lg max-w-xl pb-10">

                                <input name="type" type="hidden" value="Technology.update">
                                <input name="params[id]" type="hidden" v-model="activeItem.id">
                                
                                <span class="block mb-2" v-text="__('sorting')"></span>
                                <input name="params[sorting]" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Sorting')"  v-model="activeItem.sorting">
                                
                                <span class="block mb-2" v-text="__('Link')"></span>
                                <input name="params[url]" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Readmore URL')"  v-model="activeItem.url">
                                
                                <span class="block mb-2" v-text="__('English Link')"></span>
                                <input name="params[url_en]" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('English Readmore URL')"  v-model="activeItem.url_en">

                                <label class="inline-flex w-full items-center mb-3">
                                    <input name="params[status]" type="checkbox" v-model="activeItem.status" class="form-checkbox h-5 w-5 text-orange-600">
                                    <span class="ml-2 text-gray-700  mx-2" v-text="__('PUBLISH')"></span>
                                </label>

                                <span class="block my-2" v-text="__('picture')"></span>
                                <vue-medialibrary-field name="params[picture]" :key="activeItem.picture" :api_url="conf.url" v-model="activeItem.picture"></vue-medialibrary-field>

                                <button class="uppercase h-10 mt-3 text-white w-full rounded bg-red-700 hover:bg-red-800">{{__('Update')}}</button>
                            </form>
                        
                            <a @click="$parent.delete(activeItem, 'Technology.delete')" href="javascript:;" class=" my-2 py-2 uppercase block text-center  pb-1 mt-1 text-white w-full rounded text-gray-700 hover:bg-red-800 hover:text-white">{{__('Delete')}}</a>

                        </div>
                    </div>
                </div>
                <!-- END New releases -->
            </main>
        </div>
    </div>
</template>
<script>

export default 
{
    components: {
    },
    name:'technologies',
    data() {
        return {
            url: this.conf.url+'admin/technologies?load=json',
            content: {

                title: '',
                items: [],
                typesList: [],
            },

            activeItem:{},
            showAddSide:false,
            showEditSide:false,
            showLoader: false,
        }
    },
    props: [
        'lang',
        'setting',
        'conf',
        'auth',
    ],
    mounted() 
    {
        this.load()
    },

    methods: 
    {
        load()
        {
            this.showLoader = true;
            this.$parent.handleGetRequest( this.url ).then(response=> {
                this.setValues(response)
                this.showLoader = false;
                // this.$alert(response)
            });
        },
        
        setValues(data) {
            this.content = JSON.parse(JSON.stringify(data)); return this
        },
        __(i)
        {
            return this.$root.$children[0].__(i);
        }
    }
};
</script>
<style lang="css">
    .rtl #side-cart-container
    {
        right: auto;
        left:0;
    }
</style>