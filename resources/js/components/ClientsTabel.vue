<template>
    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8">
        <div class="px-4 sm:px-6 lg:px-8 my-12">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-xl font-semibold text-gray-900">Clienti</h1>
                    <!-- <p class="mt-2 text-sm text-gray-700">
                        A list of all the users in your account including their
                        name, title, email and role.
                    </p> -->
                </div>
                <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                    <button
                        type="button"
                        @click="open = !open"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto"
                    >
                        Adauga client
                    </button>
                </div>
            </div>

            <!-- Filtre -->
            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                        class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8"
                    >
                        <div class="text-xs">Filtreaza clientii</div>
                        <div class="grid grid-cols-12 gap-6">
                            <div
                                class="col-span-12 sm:col-span-12 lg:col-span-2"
                            >
                                <input
                                    type="text"
                                    name="id"
                                    id="id"
                                    autocomplete="id"
                                    placeholder="ID Client"
                                    v-model="state.filters.id"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div
                                class="col-span-12 sm:col-span-12 lg:col-span-2"
                            >
                                <input
                                    type="text"
                                    name="nume"
                                    id="nume"
                                    autocomplete="nume"
                                    placeholder="Nume"
                                    v-model="state.filters.nume"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div
                                class="col-span-12 sm:col-span-12 lg:col-span-2"
                            >
                                <input
                                    type="text"
                                    name="prenume"
                                    id="prenume"
                                    autocomplete="prenume"
                                    placeholder="Prenume"
                                    v-model="state.filters.prenume"
                                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                />
                            </div>

                            <div
                                class="col-span-12 sm:col-span-12 lg:col-span-2"
                            >
                                <select
                                    id="status"
                                    v-model="state.filters.status"
                                    name="status"
                                    placeholder="Filtreaza status"
                                    class="mt-1 block w-full rounded-md border-gray-300 py-2 pl-3 pr-10 text-base focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"
                                >
                                    <option
                                        v-for="status in statuses"
                                        :value="status.id"
                                        v-bind:key="status.id"
                                    >
                                        {{ status.name }}
                                    </option>
                                </select>
                            </div>

                            <div
                                class="col-span-12 sm:col-span-12 lg:col-span-2"
                            >
                                <button
                                    type="button"
                                    @click="fetchClients"
                                    class="w-full inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                >
                                    Filtreaza
                                </button>
                            </div>

                            <div
                                class="col-span-12 sm:col-span-12 lg:col-span-2"
                            >
                                <button
                                    type="button"
                                    @click="resetFilters"
                                    class="w-full inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                >
                                    Reseteaza filtre
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Filtre -->

            <div class="mt-8 flex flex-col">
                <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div
                        class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8"
                    >
                        <div
                            class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg"
                        >
                            <table class="min-w-full divide-y divide-gray-300">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th
                                            scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                        >
                                            ID client
                                        </th>
                                        <th
                                            scope="col"
                                            class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6"
                                        >
                                            Nume si prenume
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                        >
                                            Email
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                        >
                                            Telefon
                                        </th>
                                        <th
                                            scope="col"
                                            class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                        >
                                            Status
                                        </th>
                                        <th
                                            scope="col"
                                            class="relative py-3.5 pl-3 pr-4 sm:pr-6"
                                        >
                                            <span class="sr-only"
                                                >Vizualizeaza</span
                                            >
                                        </th>
                                    </tr>
                                </thead>
                                <tbody
                                    class="divide-y divide-gray-200 bg-white"
                                >
                                    <tr
                                        v-if="state.clients.length == 0"
                                        style=""
                                        class="w-full text-center"
                                    >
                                        <td colspan="4" class="py-4">
                                            Nu exista clienti in contul dvs.
                                        </td>
                                    </tr>
                                    <tr
                                        v-for="client in state.clients"
                                        :key="client.email"
                                    >
                                        <td
                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                        >
                                            {{ client.id }}
                                        </td>
                                        <td
                                            class="whitespace-nowrap py-4 pl-4 pr-3 text-sm sm:pl-6"
                                        >
                                            <div class="flex items-center">
                                                <div>
                                                    <div
                                                        class="font-medium text-gray-900"
                                                    >
                                                        {{ client.nume_client }}
                                                    </div>
                                                    <div class="text-gray-500">
                                                        {{
                                                            client.prenume_client
                                                        }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                        >
                                            <div class="text-gray-900">
                                                <a
                                                    :href="
                                                        'mailto:' +
                                                        client.email_client
                                                    "
                                                >
                                                    {{ client.email_client }}</a
                                                >
                                            </div>
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                        >
                                            <div class="text-gray-900">
                                                <a
                                                    :href="
                                                        'tel:' +
                                                        client.telefon_client
                                                    "
                                                    >{{
                                                        client.telefon_client
                                                    }}</a
                                                >
                                            </div>
                                        </td>
                                        <td
                                            class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"
                                        >
                                            <span
                                                class="inline-flex rounded-full bg-green-100 px-2 text-xs font-semibold leading-5 text-green-800"
                                                >{{
                                                    get_status_name(client)
                                                }}</span
                                            >
                                        </td>

                                        <td
                                            class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6"
                                        >
                                            <router-link
                                                :to="
                                                    '/edit-client/data/' +
                                                    client.id
                                                "
                                                class="font-medium text-indigo-600 hover:text-indigo-500"
                                                >Editeaza</router-link
                                            >
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{ clients }}
    <AddClientModal :open="open" :setopen="setopen" />
</template>

<script setup>
import { reactive, toRefs, computed, onMounted, ref } from "vue";
import AddClientModal from "@/components/sub-components/AddClientModal.vue";
import { statuses } from "../constants";

const state = reactive({
    clients: [],
    filters: {
        id: "",
        nume: "",
        prenume: "",
        status: "",
    },
});

const filterHandle = (e) => {
    console.log(e);
};

const open = ref(false);

const fetchClients = () => {
    const params = state.filters;
    axios.get("/api/clients", { params }).then(({ data }) => {
        console.log(params);
        state.clients = data;
        console.log(data);
    });
};

const resetFilters = () => {
    state.filters = {
        id: "",
        nume: "",
        prenume: "",
        status: "",
    };

    fetchClients();
};

const get_status_name = (client) => {
    const current_status = statuses.filter((item) => item.id == client.status);
    return current_status[0].name;
};

onMounted(() => {
    fetchClients();
});
</script>
