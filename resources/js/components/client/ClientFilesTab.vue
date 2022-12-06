<template>
    <Header />

    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8 my-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
            <ClientSidebar />

            <div class="space-y-6 sm:px-6 lg:col-span-9 lg:px-0">
                <form v-for="section in sections" :key="section.id">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="space-y-6 bg-white py-6 px-4 sm:p-6">
                            <div>
                                <h3
                                    class="text-lg font-medium leading-6 text-gray-900"
                                >
                                    {{ section.name }}
                                </h3>
                            </div>

                            <div class="grid grid-cols-3 gap-6">
                                <div class="col-span-3">
                                    <label
                                        class="block text-sm font-medium text-gray-700"
                                        >Fisiere incarcate</label
                                    >
                                    <div class="mt-2">
                                        <dd
                                            class="mt-1 text-sm text-gray-900 sm:col-span-2 sm:mt-0"
                                        >
                                            <ul
                                                role="list"
                                                class="divide-y divide-gray-200 rounded-md border border-gray-200"
                                            >
                                                <li
                                                    class="flex items-center justify-between py-3 pl-3 pr-4 text-sm"
                                                    v-if="
                                                        filter_by_category(
                                                            files,
                                                            section.id
                                                        ).length == 0
                                                    "
                                                >
                                                    Nu exista fisiere in aceasta
                                                    sectiune.
                                                </li>
                                                <li
                                                    class="flex items-center justify-between py-3 pl-3 pr-4 text-sm"
                                                    v-for="file in filter_by_category(
                                                        files,
                                                        section.id
                                                    )"
                                                    :key="file.id"
                                                >
                                                    <div class="items-center">
                                                        <span
                                                            class="ml-2 truncate"
                                                        >
                                                            <PaperClipIcon
                                                                class="h-5 w-5 flex-shrink-0 text-gray-400"
                                                                aria-hidden="true"
                                                            />{{
                                                                file.name
                                                            }}</span
                                                        ><br />
                                                        <span
                                                            class="ml-2 text-xs"
                                                            >Incarcat la
                                                            {{
                                                                new Date(
                                                                    file.created_at
                                                                ).toDateString()
                                                            }}</span
                                                        >
                                                    </div>
                                                    <div
                                                        class="ml-4 flex-shrink-0"
                                                    >
                                                        <div
                                                            @click="
                                                                download_file(
                                                                    file.name,
                                                                    file.id,
                                                                    this.$route
                                                                        .params
                                                                        .id
                                                                )
                                                            "
                                                            class="cursor-pointer font-medium text-indigo-600 hover:text-indigo-500"
                                                        >
                                                            Descarca
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="ml-4 flex-shrink-0"
                                                    >
                                                        <div
                                                            @click="
                                                                handleFileDelete(
                                                                    file.id
                                                                )
                                                            "
                                                            class="cursor-pointer font-medium text-indigo-600 hover:text-indigo-500"
                                                        >
                                                            Sterge
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </dd>
                                    </div>
                                </div>
                                <div class="col-span-3">
                                    <label
                                        class="block text-sm font-medium text-gray-700"
                                        >Incarca alte fisiere</label
                                    >
                                    <div
                                        class="mt-1 flex justify-center rounded-md border-2 border-dashed border-gray-300 px-6 pt-5 pb-6"
                                    >
                                        <div class="space-y-1 text-center">
                                            <svg
                                                class="mx-auto h-12 w-12 text-gray-400"
                                                stroke="currentColor"
                                                fill="none"
                                                viewBox="0 0 48 48"
                                                aria-hidden="true"
                                            >
                                                <path
                                                    d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02"
                                                    stroke-width="2"
                                                    stroke-linecap="round"
                                                    stroke-linejoin="round"
                                                />
                                            </svg>
                                            <div
                                                class="flex text-sm text-gray-600"
                                            >
                                                <label
                                                    :for="'input_' + section.id"
                                                    class="relative cursor-pointer rounded-md bg-white font-medium text-indigo-600 focus-within:outline-none focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:text-indigo-500"
                                                >
                                                    <span
                                                        >Incarca un fisier</span
                                                    >
                                                    <input
                                                        :id="
                                                            'input_' +
                                                            section.id
                                                        "
                                                        :name="
                                                            'input_' +
                                                            section.id
                                                        "
                                                        type="file"
                                                        class="sr-only"
                                                        @change="
                                                            handleFileUpload(
                                                                $event,
                                                                section.id
                                                            )
                                                        "
                                                    />
                                                </label>
                                                <p class="pl-1">
                                                    sau trage aici
                                                </p>
                                            </div>
                                            <p class="text-xs text-gray-500">
                                                PDF, Word, Poze, Maxim 10MB
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="bg-gray-50 px-4 py-3 text-right sm:px-6">
                            <button
                                type="submit"
                                class="inline-flex justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            >
                                Save
                            </button>
                        </div> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script>
import {
    CreditCardIcon,
    KeyIcon,
    SquaresPlusIcon,
    UserCircleIcon,
    UserGroupIcon,
    PaperClipIcon,
} from "@heroicons/vue/24/solid";
import ClientSidebar from "./ClientSidebar.vue";
import { mapActions } from "vuex";
import { useToast } from "vue-toastification";
import {
    download_file,
    delete_file,
    upload_file,
    get_files,
} from "../../api/file.api";
import { file_sections } from "../../constants";

export default {
    name: "ClientFilesTab",
    setup() {
        const toast = useToast();

        return { toast };
    },
    data: function () {
        return {
            data: this.$store.state.auth.user,
            files: [],
            sections: file_sections,
        };
    },
    methods: {
        async handleFileUpload(event, category) {
            await upload_file(
                this.$route.params.id,
                category,
                event.target.files[0]
            ).then((data) => {
                if (data.status == 200) {
                    // Adaugam la arary
                    this.files.push(data.data.file);
                    // Afisam modal
                    this.toast.success("Fisier incarcat cu succes!");
                } else {
                    this.toast.error("Eroare la incarcare!");
                }
                console.log(data);
            });
        },
        handleFileDelete(file_id) {
            delete_file(file_id, this.$route.params.id).then((data) => {
                if (data.status == 200) {
                    // Adaugam la arary
                    // this.files.push(data.data.file);
                    this.files = this.files.filter(
                        (item) => item.id != file_id
                    );
                    // Afisam modal
                    this.toast.success("Fisier sters cu succes!");
                } else {
                    this.toast.error("Eroare la stergere!");
                }
                console.log(data);
            });
        },
        download_file,
        filter_by_category(array, category_id) {
            if (!array.length) {
                return array;
            }
            return array.filter((item) => item.category == category_id);
        },
    },
    mounted: function () {
        axios.get(`/api/files/${this.$route.params.id}`).then(({ data }) => {
            console.log(data);
            this.files = data;
        });
    },
};
</script>
