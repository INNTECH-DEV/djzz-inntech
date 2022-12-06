<template>
    <TransitionRoot as="template" :show="open">
        <Dialog as="div" class="relative z-10" @close="open = false">
            <TransitionChild
                as="template"
                enter="ease-out duration-300"
                enter-from="opacity-0"
                enter-to="opacity-100"
                leave="ease-in duration-200"
                leave-from="opacity-100"
                leave-to="opacity-0"
            >
                <div
                    class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"
                />
            </TransitionChild>

            <div class="fixed inset-0 z-10 overflow-y-auto">
                <div
                    class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0"
                >
                    <TransitionChild
                        as="template"
                        enter="ease-out duration-300"
                        enter-from="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                        enter-to="opacity-100 translate-y-0 sm:scale-100"
                        leave="ease-in duration-200"
                        leave-from="opacity-100 translate-y-0 sm:scale-100"
                        leave-to="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    >
                        <DialogPanel
                            class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg sm:p-6"
                        >
                            <form @submit.prevent="createClient">
                                <div>
                                    <div class="mt-3 sm:mt-5">
                                        <DialogTitle
                                            as="h3"
                                            class="text-center text-lg font-medium leading-6 text-gray-900"
                                            >Adauga client</DialogTitle
                                        >
                                        <div class="mt-2">
                                            <div class="mb-4">
                                                <label
                                                    for="nume_client"
                                                    class="block text-sm font-medium text-gray-700"
                                                    >Nume Client</label
                                                >
                                                <div class="mt-1">
                                                    <input
                                                        v-model="
                                                            data.nume_client
                                                        "
                                                        type="text"
                                                        name="nume_client"
                                                        id="nume_client"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                        placeholder="Ilie"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label
                                                    for="prenume_client"
                                                    class="block text-sm font-medium text-gray-700"
                                                    >Prenume Client</label
                                                >
                                                <div class="mt-1">
                                                    <input
                                                        v-model="
                                                            data.prenume_client
                                                        "
                                                        type="text"
                                                        name="prenume_client"
                                                        id="prenume_client"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                        placeholder="Andrei-Leonard"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label
                                                    for="email_client"
                                                    class="block text-sm font-medium text-gray-700"
                                                    >Email Client</label
                                                >
                                                <div class="mt-1">
                                                    <input
                                                        v-model="
                                                            data.email_client
                                                        "
                                                        type="email"
                                                        name="email_client"
                                                        id="email_client"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                        placeholder="office@inntech.dev"
                                                    />
                                                </div>
                                            </div>
                                            <div class="mb-4">
                                                <label
                                                    for="telefon_client"
                                                    class="block text-sm font-medium text-gray-700"
                                                    >Telefon Client</label
                                                >
                                                <div class="mt-1">
                                                    <input
                                                        v-model="
                                                            data.telefon_client
                                                        "
                                                        type="tel"
                                                        name="telefon_client"
                                                        id="telefon_client"
                                                        class="block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                                                        placeholder="+40770547858"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="mt-5 sm:mt-6 sm:grid sm:grid-flow-row-dense sm:grid-cols-2 sm:gap-3"
                                >
                                    <button
                                        type="submit"
                                        class="inline-flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-2 sm:text-sm"
                                    >
                                        Adauga client
                                    </button>
                                    <button
                                        type="button"
                                        class="mt-3 inline-flex w-full justify-center rounded-md border border-gray-300 bg-white px-4 py-2 text-base font-medium text-gray-700 shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:col-start-1 sm:mt-0 sm:text-sm"
                                        @click="open = false"
                                        ref="cancelButtonRef"
                                    >
                                        Anuleaza
                                    </button>
                                </div>
                            </form>

                            {{ telefon_client }}
                        </DialogPanel>
                    </TransitionChild>
                </div>
            </div>
        </Dialog>
    </TransitionRoot>
</template>

<script setup>
import { ref, nextTick, reactive } from "vue";
import {
    Dialog,
    DialogPanel,
    DialogTitle,
    TransitionChild,
    TransitionRoot,
} from "@headlessui/vue";
import { CheckIcon } from "@heroicons/vue/24/outline";

import { defineProps } from "vue";
import { useToast } from "vue-toastification";
import { useRoute, useRouter } from "vue-router";

const toast = useToast();
const router = useRoute();

const props = defineProps({
    open,
});

const data = reactive({
    nume_client: "",
    prenume_client: "",
    email_client: "",
    telefon_client: "",
    status: 0,
});

const createClient = async () => {
    await axios
        .post("/api/clients", data)
        .then(({ data }) => {
            toast.success("Client adaugat cu succes!");

            // TODO: De schimbat aici ca e jale
            window.location.reload();
        })
        .catch((err) => {
            toast.error("Eroare!");
        });
};
</script>
