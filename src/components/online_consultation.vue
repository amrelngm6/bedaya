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
                                        <th class="p-2 text-default " v-text="__('Doctor')"></th>
                                        <th class="p-2 text-center ">{{__('Action')}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr  :key="online_consultation" v-for="online_consultation in content.items" class="dark:bg-gray-800 text-center">
                                        <td class="p-2 border-1 border-t  border-gray-200 text-default">
                                            <div class="flex ">
                                                <div class="ml-3 text-default">
                                                    <div class="font-medium">{{online_consultation.id}}</div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2  text-default border-1 border-t  border-gray-200">
                                            <span class="px-2"> {{online_consultation.content ? online_consultation.content.title : ''}}</span>
                                        </td>
                                        <td class="p-2 border-1 border-t  border-gray-200 text-default" >
                                            <span class="px-2"> {{online_consultation.doctor_name}}</span>
                                        </td>
                                        <td class="p-2 border-1 border-t  border-gray-200">
                                            <a class="text-gray-400 hover:text-gray-100  mx-2 text-lg" :href="'/builder?prefix='+(online_consultation.content ? online_consultation.content.prefix : '')" target="_blank">
                                                <i class="fa fa-edit"></i>
                                            </a>

                                            <a @click="activeItem = null;showEditSide = true; activeItem = online_consultation; showAddSide = false;  " class="text-gray-400 hover:text-gray-100  mx-2" href="javascript:;">
                                                <i class="material-icons-outlined text-base">edit</i>
                                            </a>

                                            <a href="javascript:;"  @click="$parent.delete(online_consultation, 'OnlineConsultation.delete')" class="text-gray-400 hover:text-gray-100  ml-2" :title="__('delete')"><i class="material-icons-round text-base">delete_outline</i></a>
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
                                
                                <input name="params[content][ar][content]"  type="hidden"  value="-" >
                                <input name="params[content][en][content]"  type="hidden"  value="-" >

                                <div class="w-full flex">
                                    <h1 class="w-full m-auto max-w-xl text-base mb-10 ">{{__('ADD_NEW')}}</h1>
                                    <span class="cursor-pointer py-1 px-2" @click="showAddSide = false, activeItem = {}"><close_icon /></span>
                                </div>
                                <input name="type" type="hidden" value="OnlineConsultation.create">
                                <input name="params[status]" type="hidden" value="on">
                                
                                <span class="block my-2" v-text="__('Doctor')"></span>
                                <select name="params[doctor_id]" class="form-checkbox p-2 px-3 w-full text-orange-600 border border-1 border-gray-400 rounded-lg" v-if="content.doctors">
                                    <option  :key="index" v-for="(type, index) in content.doctors" :value="type.id" v-text="type.title"></option>
                                </select>

                                <span class="block my-2" v-text="__('Consultation sessions count')"></span>
                                <input name="params[field][consultation_sessions_count]" required="" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Consultation sessions count')" >

                                <span class="block my-2" v-text="__('Consultation_session_time')"></span>
                                <input name="params[field][consultation_session_time]" required="" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Consultation_session_time')" >

                                <span class="block my-2" v-text="__('Consultation_speciality')"></span>
                                <input name="params[field][consultation_speciality]" required="" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Consultation_speciality')" >

                                <span class="block my-2" v-text="__('Consultation_discount')"></span>
                                <input name="params[field][consultation_discount]" required="" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Consultation_discount')" >

                                <span class="block my-2" v-text="__('Consultation_old_price')"></span>
                                <input name="params[field][consultation_old_price]" required="" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="__('Consultation_old_price')" >

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

                                <div v-if="!activeItem.content">
                                    <input name="params[content][ar][content]"  type="hidden"  value="-" >
                                    <input name="params[content][en][content]"  type="hidden"  value="-" >
                                </div>
                                
                                <span class="block my-2" v-text="__('Doctor')"></span>
                                <select  v-model="activeItem.doctor_id" name="params[doctor_id]" class="form-checkbox p-2 px-3 w-full text-orange-600 border border-1 border-gray-400 rounded-lg" v-if="content.doctors">
                                    <option  :key="index" v-for="(type, index) in content.doctors" :value="type.id" v-text="type.content ? type.content.title : ''"></option>
                                </select>

                                <div v-for="field in activeItem.custom_fields">
                                    <span class="block my-2" v-text="__(field.code)"></span>
                                    <input :name="'params[field]['+field.code+']'" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600" :placeholder="field.title" :value="activeItem.field[field.code]" >
                                </div>

                                <input name="type" type="hidden" value="OnlineConsultation.update">
                                <input name="params[id]" type="hidden" v-model="activeItem.id">

                                <div class="py-2">
                                    <label for="sorting"><span v-text="__('sorting')"></span></label>
                                    <input :name="'params[sorting]'" type="text" class="h-12 mt-3 rounded w-full border px-3 text-gray-700  focus:border-blue-100 dark:bg-gray-800  dark:border-gray-600"  :value="activeItem.sorting" >
                                </div>
                                
                                <div class="py-2">
                                    <label for="status"><span v-text="__('status')"></span></label>
                                    <input class="mx-4" id="status" type="checkbox" v-model="activeItem.status" name="params[status]" />
                                </div>

                                <button class="uppercase h-10 mt-3 text-white w-full rounded bg-red-700 hover:bg-red-800">{{__('Update')}}</button>
                            </form>
                        
                            <a @click="$parent.delete(activeItem, 'OnlineConsultation.delete')" href="javascript:;" class=" my-2 py-2 uppercase block text-center  pb-1 mt-1 text-white w-full rounded text-gray-700 hover:bg-red-800 hover:text-white">{{__('Delete')}}</a>

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
    name:'online_consultation',
    data() {
        return {
            url: this.conf.url+'admin/online_consultation?load=json',
            content: {

                title: '',
                items: [],
                doctors: [],
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