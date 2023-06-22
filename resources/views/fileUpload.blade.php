<form>
  <label for="file">Select a JPG image:</label>
  <input type="file" id="file" name="file" accept=".jpg">
  <button type="button" onclick="uploadFile()">Upload</button>
</form>

<script>
  class FileUploader {
    constructor() {
      this.fileInput = document.getElementById('file');
      this.errorMessage = 'Please select a JPG image file.';
    }

    uploadFile() {
      let file = this.fileInput.files[0];

      if (!file || !this.isJpgImage(file)) {
        alert(this.errorMessage);
        return;
      }

      // Perform file upload logic here
      console.log('File upload logic');
    }

    isJpgImage(file) {
      return file.type === 'image/jpeg';
    }
  }

  const uploader = new FileUploader();

  function uploadFile() {
    uploader.uploadFile();
  }
</script>
