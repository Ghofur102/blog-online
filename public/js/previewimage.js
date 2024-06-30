let previewimage = document.getElementById("preview-image");
let inputfileimage = document.getElementById("input-file-image");

inputfileimage.addEventListener('change', event => {
    if(event.target.files.length > 0 ) {
        previewimage.src = URL.createObjectURL(event.target.files[0]);
    }
})
