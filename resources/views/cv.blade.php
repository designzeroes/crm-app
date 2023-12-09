<!-- Your HTML markup -->

<input type="file" id="imageInput">
<button onclick="getImageDetails()">Get Image Details</button>
<p id="imageDetails"></p>

<script>
function getImageDetails() {
    // Assume you have an input element with the ID "imageInput"
    let imageInput = document.getElementById('imageInput');
    // Assume you have a paragraph element with the ID "imageDetails"
    let imageDetailsElement = document.getElementById('imageDetails');

    // Check if a file is selected
    if (imageInput.files.length > 0) {
        // Get the selected file
        let selectedFile = imageInput.files[0];

        // Log basic details
        console.log('File Name:', selectedFile.name);
        console.log('File Size:', selectedFile.size, 'bytes');
        console.log('File Type:', selectedFile.type);

        // Generate a temporary URL for preview
        let temporaryURL = URL.createObjectURL(selectedFile);
        console.log('Temporary URL:', temporaryURL);

        // Display the temporary URL in the HTML
        imageDetailsElement.textContent = 'Temporary URL: ' + temporaryURL;
    } else {
        imageDetailsElement.textContent = 'No file selected';
    }
}
</script>


