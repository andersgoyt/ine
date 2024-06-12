document.getElementById('download-btn').addEventListener('click', function() {
    // Initiate file download
    var link = document.createElement('a');
    link.href = 'path/to/your/file.zip'; // Update this to the correct path
    link.download = 'file.zip'; // This sets the name of the downloaded file
    document.body.appendChild(link);
    link.click();
    document.body.removeChild(link);

    // Redirect after a short delay to ensure download starts
    setTimeout(function() {
        window.location.href = 'https://www.example.com'; // Update this to your redirect URL
    }, 1000); // Adjust the delay as needed
});
