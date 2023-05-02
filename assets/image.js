const image = document.getElementById("image");
const preview = document.getElementById("preview");

image.addEventListener("change", function() {
  const file = this.files[0];
  const reader = new FileReader();

  reader.addEventListener("load", function() {
    preview.innerHTML = "<img src='" + reader.result + "' alt='Preview Image'>";
  });

  reader.readAsDataURL(file);
});