const dropZone = document.querySelector('.drop-zone');

dropZone.addEventListener('dragover', (event) => {
  event.preventDefault();
  dropZone.classList.add('dragover');
});

dropZone.addEventListener('dragleave', (event) => {
  dropZone.classList.remove('dragover');
});

dropZone.addEventListener('drop', (event) => {
  event.preventDefault();
  dropZone.classList.remove('dragover');

  const file = event.dataTransfer.files[0];
  const reader = new FileReader();

  reader.onload = (event) => {
    // Do something with the file data, e.g., display an image preview
    console.log(event.target.result); // File data as a base64-encoded string
  };

  reader.readAsDataURL(file);
});
