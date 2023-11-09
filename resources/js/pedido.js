const pdfMake = require("pdfmake");

document.getElementById("generar-pdf").addEventListener("click", function() {
  // Generamos el PDF
  pdfMake.createPdf({
    // HTML del documento
    content: document.querySelector("#tabla").innerHTML,
    // Opciones del PDF
    options: {
      // Nombre del archivo
      filename: "boleta.pdf",
      // Orientación del papel
      orientation: "portrait",
      // Margen superior
      margins: { top: 20 },
    },
  }).then(function(pdf) {
    // Guardamos el PDF
    const fileSaver = require("file-saver");

    fileSaver.save(pdf, "boleta.pdf");
  });
});