const container = document.getElementById("swagger-ui");

const ui = SwaggerUIBundle({
    url: container.getAttribute("data-url"),
    dom_id: "#"+container.id,
    deepLinking: true,
    presets: [
        SwaggerUIBundle.presets.apis,
        SwaggerUIStandalonePreset
    ],
    plugins: [
        SwaggerUIBundle.plugins.DownloadUrl
    ],
    layout: "StandaloneLayout"
});

window.ui = ui;