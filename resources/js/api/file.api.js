export const download_file = async (file_name, file_id, client_id) => {
    await axios
        .post(
            `/api/files/download/${file_id}`,
            { client_id },
            {
                responseType: "blob",
            }
        )
        .then(({ data }) => {
            //TODO: De testat daca a avut succes sau nu si de afisat diferit
            console.log(data);
            const url = window.URL.createObjectURL(new Blob([data])); // you can mention a type if you wish
            const link = document.createElement("a");
            link.href = url;
            link.setAttribute("download", file_name); //this is the name with which the file will be downloaded
            link.click();
        });
};

export const delete_file = async (file_id, client_id) => {
    const data = await axios.delete(`/api/files/${file_id}`, {
        params: { client_id },
    });

    return data;
};

export const get_files = async (client_id, category) => {
    const data = await axios.get(`/api/files/${client_id}`, {
        params: { category },
    });

    return data;
};

export const upload_file = async (client_id, category, file) => {
    let formData = new FormData();
    formData.append("file", file);
    formData.append("client_id", client_id);
    formData.append("category", category);

    const config = {
        headers: {
            "content-type": "multipart/form-data",
        },
    };
    const data = await axios.post("/api/file/upload", formData, config);
    return data;
};
