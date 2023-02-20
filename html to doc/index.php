<?php
// Load library
include_once 'HtmlToDoc.class.php';

// Initialize class
$htd = new HTML_TO_DOC();

// HTML content
$htmlContent = '
<h1>Hello World!</h1>
<p>This document is created from HTML.</p>
ayam goreng mantul';

// Generate MS word document with HTML
// $wordDoc = $htd->createDoc($htmlContent, "my-document");

// if ($wordDoc) {
//     echo "Word Document created successfully!";
// } else {
//     echo "Word Document creation failed";
// }

// Generate MS word document with HTML and download
// $htd->createDoc($htmlContent, "my-document", 1);

// Convert HTML file content to MS word doc
// $htd->createDoc("source.html", "my-document");

// Word Document File Format
// If an extension is not mentioned in the file name passed in the createDoc() method, it will be saved as a .doc file format by default. To save a word document as a .docx file format, specify the file name with an extension.
// $htd->createDoc($htmlContent, "my-document.docx");
