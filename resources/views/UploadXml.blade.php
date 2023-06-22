<form action="upload.php" method="POST" enctype="multipart/form-data">
  <label for="file">Select a file:</label>
  <input type="file" id="file" name="file">
  <button type="submit" onclick="uploadFile();">Upload</button>
</form>

<script>
  function uploadFile() {
    let fileInput = document.getElementById('file');
    let file = fileInput.files[0];

    let formData = new FormData();
    formData.append('file', file);

    let xhr = new XMLHttpRequest();
    xhr.open('POST', '/xmltojson', true);

    xhr.onreadystatechange = function() {
      if (xhr.readyState === XMLHttpRequest.DONE && xhr.status === 200) {
        // Request successful
        console.log(xhr.responseText);
      }
    };

    xhr.send(formData);
  }
</script>