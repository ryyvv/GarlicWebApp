


</div>
</body>
<script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle"),
            searchBtn = body.querySelector(".search-box"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");
            toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })
    </script>
    
<script>
function displayImage() {
    // Get the selected file
    var input = document.getElementById('imageInput');
    var file = input.files[0];

    if (file) {
        // Create a FileReader object
        var reader = new FileReader();

        // Set up the FileReader onload function
        reader.onload = function(e) {
            // Create an image element
            var img = document.createElement('img');
            img.src = e.target.result; // Set the image source to the FileReader result
            img.style.maxWidth = '100%'; // Optional: Adjust image size to fit container
            img.style.height = 'auto'; // Optional: Maintain aspect ratio
            // Append the image to the container
            var container = document.getElementById('imageContainer');
            container.innerHTML = ''; // Clear previous image (if any)
            container.appendChild(img);
        };

        // Read the file as a data URL (base64 encoded)
        reader.readAsDataURL(file);
    }
}
</script>

</html>