export const get_documents = async () => {
    const data = await axios.get("/api/documents").then(({ data }) => {
        return data;
    });
};

export const generate_document = async (id_document, document_data) => {
    await axios
        .post(`/api/document/generate/${id_document}`, document_data, {
            responseType: "blob",
        })
        .then(({ data }) => {
            //TODO: De testat daca a avut succes sau nu si de afisat diferit
            // console.log(JSON.stringify(data));
            const url = window.URL.createObjectURL(new Blob([data])); // you can mention a type if you wish
            const link = document.createElement("a");
            link.href = url;
            link.setAttribute("download", "dummy.docx"); //this is the name with which the file will be downloaded
            link.click();
        });
};
