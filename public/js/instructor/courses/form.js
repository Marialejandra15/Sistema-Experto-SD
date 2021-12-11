ClassicEditor.create(document.querySelector("#description"), {
    toolbar: [
        "heading",
        "|",
        "bold",
        "italic",
        "link",
        "bulletedList",
        "numberedList",
        "blockQuote",
    ],
    heading: {
        options: [
            {
                model: "paragraph",
                title: "Paragraph",
                class: "ck-heading_paragraph",
            },
            {
                model: "heading1",
                view: "h1",
                title: "Heading 1",
                class: "ck-heading_heading1",
            },
            {
                model: "heading2",
                view: "h2",
                title: "Heading 2",
                class: "ck-heading_heading2",
            },
        ],
    },
}).catch((error) => {
    console.log(error);
});

document.getElementById("title").addEventListener("keyup", () => {
    title = document.getElementById("title").value;
    document.getElementById("slug").value = slug(title);
});

const slug = (str) => {
    let $slug = "";
    let trimmed = str.trim(str);

    $slug = trimmed
        .replace(/[^a-z0-9-]/gi, "-")
        .replace(/-+/g, "-")
        .replace(/^-|-$/g, "");
    return $slug.toLowerCase();
};

document.getElementById("file").addEventListener("change", (event) => {
    let file = event.target.files[0];

    let reader = new FileReader();
    reader.onload = (event) => {
        document
            .getElementById("picture")
            .setAttribute("src", event.target.result);
    };

    reader.readAsDataURL(file);
});
