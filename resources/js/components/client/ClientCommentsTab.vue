<template>
    <Header />

    <div class="mx-auto max-w-7xl px-2 sm:px-4 lg:px-8 my-12">
        <div class="lg:grid lg:grid-cols-12 lg:gap-x-5">
            <ClientSidebar />

            <div class="space-y-6 sm:px-6 lg:col-span-9 lg:px-0">
                <div
                    v-if="state.comments.length == 0"
                    class="w-full text-center text-gray-500 text-sm"
                >
                    Nu exista comentarii pentru acest client
                </div>
                <div
                    v-if="state.comments.length > 0"
                    class="min-h-[200px] max-h-[400px] overflow-y-auto"
                >
                    <div class="flow-root">
                        <ul role="list" class="-mb-8">
                            <li
                                v-for="(comment, commentIdx) in state.comments"
                                :key="comment.id"
                            >
                                <div class="relative pb-8">
                                    <span
                                        v-if="
                                            commentIdx !==
                                            state.comments.length - 1
                                        "
                                        class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200"
                                        aria-hidden="true"
                                    />
                                    <div class="relative flex space-x-3">
                                        <div>
                                            <span
                                                class="bg-green-500 h-8 w-8 rounded-full flex items-center justify-center ring-8 ring-white"
                                            >
                                                <CheckIcon
                                                    class="h-5 w-5 text-white"
                                                    aria-hidden="true"
                                                />
                                            </span>
                                        </div>
                                        <div
                                            class="flex min-w-0 flex-1 justify-between space-x-4 pt-1.5"
                                        >
                                            <div>
                                                <p
                                                    class="text-md text-gray-500"
                                                >
                                                    {{ comment.title }}
                                                </p>
                                                <p
                                                    class="text-sm text-gray-900"
                                                >
                                                    {{ comment.content }}
                                                </p>
                                                <p class="text-xs">
                                                    {{
                                                        comment.sendEmail
                                                            ? "A fost trimis si prin email catre client."
                                                            : "Nu a fost trimis prin email catre client"
                                                    }}
                                                </p>
                                            </div>
                                            <div></div>
                                            <div
                                                class="whitespace-nowrap text-right text-sm text-gray-500"
                                            >
                                                <time
                                                    :datetime="
                                                        comment.created_at
                                                    "
                                                    >{{
                                                        new Date(
                                                            comment.created_at
                                                        ).toDateString()
                                                    }}</time
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div>
                    <form class="relative" @submit.prevent="submitComment">
                        <div
                            class="overflow-hidden rounded-lg border border-gray-300 shadow-sm focus-within:border-indigo-500 focus-within:ring-1 focus-within:ring-indigo-500"
                        >
                            <label for="title" class="sr-only">Titlu</label>
                            <input
                                type="text"
                                name="title"
                                id="title"
                                v-model="state.submitable.title"
                                class="block w-full border-0 pt-2.5 text-lg font-medium placeholder-gray-500 focus:ring-0"
                                placeholder="Titlu"
                            />
                            <label for="description" class="sr-only"
                                >Continut</label
                            >
                            <textarea
                                rows="2"
                                name="description"
                                id="description"
                                v-model="state.submitable.content"
                                class="block w-full resize-none border-0 py-0 placeholder-gray-500 focus:ring-0 sm:text-sm"
                                placeholder="Scrie continutul acestui comentariu..."
                            />

                            <!-- Spacer element to match the height of the toolbar -->
                            <div aria-hidden="true">
                                <div class="py-2">
                                    <div class="h-9" />
                                </div>
                                <div class="h-px" />
                                <div class="py-2">
                                    <div class="py-px">
                                        <div class="h-9" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="md:absolute inset-x-px bottom-0">
                            <!-- Actions: These are just examples to demonstrate the concept, replace/wire these up however makes sense for your project. -->
                            <div
                                class="flex items-center justify-between space-x-3 border-t border-gray-200 px-2 py-2 sm:px-3"
                            >
                                <div class="relative flex items-start py-4">
                                    <div class="flex h-5 items-center">
                                        <input
                                            id="comments"
                                            aria-describedby="comments-description"
                                            name="comments"
                                            type="checkbox"
                                            v-model="state.submitable.sendEmail"
                                            class="h-4 w-4 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500"
                                        />
                                    </div>
                                    <div class="ml-3 text-sm">
                                        <label
                                            for="comments"
                                            class="font-medium text-gray-700"
                                            >Email</label
                                        >
                                        <p
                                            id="comments-description"
                                            class="text-gray-500"
                                        >
                                            Daca bifezi acest camp clientul va
                                            primi email cu acest comentariu.
                                        </p>
                                    </div>
                                </div>
                                <div class="flex-shrink-0">
                                    <button
                                        type="submit"
                                        class="inline-flex items-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                                    >
                                        Trimite comentariu
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <Footer />
</template>

<script setup>
import { CheckIcon, HandThumbUpIcon, UserIcon } from "@heroicons/vue/20/solid";
import { onMounted, reactive } from "vue";
import { useRoute } from "vue-router";
import { useToast } from "vue-toastification";
const route = useRoute();
const toast = useToast();

const state = reactive({
    submitable: {
        title: "",
        content: "",
        sendEmail: 0,
    },
    comments: [],
});

const fetchComments = () => {
    axios
        .get("/api/comments", { params: { id_client: route.params.id } })
        .then(({ data }) => {
            state.comments = data;
        });
};

const submitComment = () => {
    axios
        .post("/api/comments", {
            title: state.submitable.title,
            content: state.submitable.content,
            id_client: route.params.id,
            sendEmail: state.submitable.sendEmail,
        })
        .then(({ data }) => {
            state.comments.push(data);
            state.submitable = {
                title: "",
                content: "",
                sendEmail: false,
            };

            toast.success("Comentariu incarcat cu succes!");
        })
        .catch((error) => {
            console.log(error);
            toast.error("Eroare la incarcare!");
        });
};

onMounted(() => {
    fetchComments();
});
</script>
