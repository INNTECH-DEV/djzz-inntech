<template>
    <div @click="generate_document(2, { nume: 'nume' })">Generate</div>
    <div @click="get_documents">View documents</div>
    <div @click="get_files(1, 1)">GET FILES</div>
    <div @click="delete_file(45, 1)">DELETE FILES</div>
    <div @click="download_file('test_plmn.pdf', 45)">DOWNLOAD FILE</div>

    <div>
        <form @submit.prevent="upload_file">
            <div class="custom-file">
                <input
                    type="file"
                    ref="file"
                    name="file"
                    class="custom-file-input"
                    id="chooseFile"
                    @change="handleFileUpload($event)"
                />
                <label class="custom-file-label" for="chooseFile"
                    >Select file</label
                >
            </div>
            <button
                type="submit"
                name="submit"
                class="btn btn-primary btn-block mt-4"
            >
                Upload Files
            </button>
        </form>
    </div>

    <div @click="get_clients()">get clients</div>
    <div>
        <div v-for="client in clients" :key="client.id">
            {{ client.prenume_client }}
        </div>
    </div>
</template>

<script>
import {
    download_file,
    delete_file,
    upload_file,
    get_files,
} from "../api/file.api";
import { get_documents, generate_document } from "../api/document.api.js";

export default {
    name: "TestPage",
    data: function () {
        return {
            data: this.$store.state.auth.user,
            file: "",
            clients: [],
        };
    },

    methods: {
        handleFileUpload(event) {
            this.file = event.target.files[0];
        },
        generate_document,
        get_files,
        get_documents,
        upload_file,
        delete_file,
        download_file,
        get_clients(status) {
            axios.get("/api/clients?judet=Vra").then(({ data }) => {
                this.clients = data;
                console.log(data);
            });
        },
    },
};
</script>
