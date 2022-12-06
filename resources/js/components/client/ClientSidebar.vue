<template>
    <aside class="py-6 px-2 sm:px-6 lg:col-span-3 lg:py-0 lg:px-0">
        <li
            class="col-span-1 divide-y divide-gray-200 rounded-lg bg-white shadow mb-4"
        >
            <div class="flex w-full items-center justify-between space-x-6 p-6">
                <div class="flex-1 truncate">
                    <div class="">
                        <h5 class="truncate text-xs font-medium text-gray-900">
                            Client:
                        </h5>
                        <h3 class="truncate text-sm font-medium text-gray-900">
                            {{ client.nume_client }} {{ client.prenume_client }}
                        </h3>
                    </div>
                </div>
            </div>
            <div>
                <div class="-mt-px flex divide-x divide-gray-200">
                    <div class="flex w-0 flex-1">
                        <a
                            :href="`mailto:${client.email_client}`"
                            class="relative -mr-px inline-flex w-0 flex-1 items-center justify-center rounded-bl-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500"
                        >
                            <EnvelopeIcon
                                class="h-5 w-5 text-gray-400"
                                aria-hidden="true"
                            />
                            <span class="ml-3">Email</span>
                        </a>
                    </div>
                    <div class="-ml-px flex w-0 flex-1">
                        <a
                            :href="`tel:${client.telefon_client}`"
                            class="relative inline-flex w-0 flex-1 items-center justify-center rounded-br-lg border border-transparent py-4 text-sm font-medium text-gray-700 hover:text-gray-500"
                        >
                            <PhoneIcon
                                class="h-5 w-5 text-gray-400"
                                aria-hidden="true"
                            />
                            <span class="ml-3">Suna</span>
                        </a>
                    </div>
                </div>
            </div>
        </li>
        <nav class="space-y-1 my-6">
            <router-link
                v-for="item in navigation"
                :key="item.name"
                :to="item.to"
                :class="[
                    $route.fullPath == item.to
                        ? 'bg-gray-50 text-indigo-700 hover:text-indigo-700 hover:bg-white'
                        : 'text-gray-900 hover:text-gray-900 hover:bg-gray-50',
                    'group rounded-md px-3 py-2 flex items-center text-sm font-medium',
                ]"
                :aria-current="item.current ? 'page' : undefined"
            >
                <component
                    :is="item.icon"
                    :class="[
                        route.fullPath == item.to
                            ? 'text-indigo-500 group-hover:text-indigo-500'
                            : 'text-gray-400 group-hover:text-gray-500',
                        'flex-shrink-0 -ml-1 mr-3 h-6 w-6',
                    ]"
                    aria-hidden="true"
                />
                <span class="truncate">{{ item.name }}</span>
            </router-link>
        </nav>
        <div class="mb-4">
            <div>
                <label
                    for="status"
                    class="block text-sm font-medium text-gray-700"
                    >Status client</label
                >
                <select
                    id="status"
                    v-model="status"
                    name="status"
                    @change="change_status"
                    class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                >
                    <option
                        v-for="status in statuses"
                        :value="status.id"
                        v-bind:key="status.id"
                        :selected="status.id == client.status"
                    >
                        {{ status.name }}
                    </option>
                </select>
            </div>
        </div>

        <div class="mb-4">
            <div>
                <label
                    for="status"
                    class="block text-sm font-medium text-gray-700"
                    >Genereaza documente (BETA)</label
                >
                <div
                    class="h-[200px] mt-4 overflow-auto w-full border-gray-200 border-2 px-2 rounded-md"
                >
                    <div
                        v-for="document in documents"
                        v-bind:key="document.id"
                        class="flex items-center justify-between"
                        @click="
                            download_file_template(document.id, document.name)
                        "
                    >
                        <div class="items-center">
                            <span
                                class="ml-2 truncate font-xs text-indigo-600 hover:text-indigo-500 cursor-pointer hover:font-bold"
                            >
                                {{ document.name }}</span
                            ><br />
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </aside>
</template>

<script setup>
import {
    CreditCardIcon,
    KeyIcon,
    SquaresPlusIcon,
    UserCircleIcon,
    UserGroupIcon,
} from "@heroicons/vue/24/outline";
import { useRoute } from "vue-router";
import { EnvelopeIcon, PhoneIcon } from "@heroicons/vue/20/solid";
import { onMounted, reactive, ref } from "vue";
import { useToast } from "vue-toastification";
import { statuses } from "../../constants";
import { useStore } from "vuex";
import { get_documents } from "../../api/document.api";
import { download_file } from "../../api/file.api";
const route = useRoute();
const toast = useToast();

const client = ref({});
const documents = ref();
const store = useStore();

onMounted(() => {
    axios.get("/api/documents").then(({ data }) => {
        documents.value = data;
    });
});

const get_client = axios
    .post("/api/client/show", { id: route.params.id })
    .then(({ data }) => {
        client.value = data;

        status.value = data.status;
    });

function download_file_template(id, nume) {
    axios
        .post(
            `/api/document/generate/` + id,
            { user: store.state.auth.user, client: client.value },
            {
                responseType: "blob",
            }
        )
        .then(({ data, status }) => {
            if (status != 200) {
                toast.error("Eroare la descarcarea fisierului!");
                return;
            }

            const url = window.URL.createObjectURL(new Blob([data]));
            const link = document.createElement("a");
            link.href = url;
            link.setAttribute("download", nume + ".docx");
            link.click();
        });
}

const navigation = [
    {
        name: "Date client",
        to: `/edit-client/data/${route.params.id}`,
        icon: UserCircleIcon,
        current: true,
    },
    {
        name: "Fisiere client",
        to: `/edit-client/files/${route.params.id}`,
        icon: SquaresPlusIcon,
        current: false,
    },
    {
        name: "Comentarii client",
        to: `/edit-client/comments/${route.params.id}`,
        icon: UserGroupIcon,
        current: false,
    },
];
const status = ref();

const change_status = async () => {
    client.value.status = status.value;

    await axios
        .post("/api/client/update", {
            client: client.value,
            id: route.params.id,
        })
        .then(({ data }) => {
            toast.success(JSON.stringify(data));
        })
        .catch((err) => {
            toast.error(JSON.stringify(err.message));
            console.log(err);
        });
};
</script>
