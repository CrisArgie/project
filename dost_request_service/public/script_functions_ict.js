const radioBtn = document.querySelectorAll('[data-input-radio]');

for (const radioButton of radioBtn) {
    radioButton.addEventListener('change', showSelected);
}

function showSelected(e) {
    const text = document.getElementById("other_req_type");
    if (e.target.checked == true && e.target.defaultValue === 'Other') {
        text.style.display = "block";
    } else if (e.target.checked == true && e.target.defaultValue === 'Upgrade' || (e.target.checked == true && e.target.defaultValue === 'Repair')) {
        text.style.display = "none";
    }
}



const realFileBtn = document.getElementById("real-file");
const customBtn = document.getElementById("custom-button");
const customTxt = document.getElementById("custom-text-1");
var contFile;

customBtn.addEventListener("click", function() {
    realFileBtn.click();
});

realFileBtn.addEventListener("change", function() {
    if (realFileBtn.value) {
        if (contFile = realFileBtn.files[0].name) {
            var contFileExten = contFile.substring(contFile.lastIndexOf('.') + 1);

            if (contFileExten === "ppt") {
                customTxt.innerHTML = contFile;
            } else if (contFileExten === "doc") {
                customTxt.innerHTML = contFile;
            } else if (contFileExten === "docx") {
                customTxt.innerHTML = contFile;
            } else {
                customTxt.innerHTML = "Only accepts docs and ppt file."
            }
        }
    } else {
        customTxt.innerHTML = "No file chosen, yet.";
    }
});


const realFileBtn2 = document.getElementById("multiple-file-img");
const customBtn2 = document.getElementById("custom-button-2");

customBtn2.addEventListener("click", function() {
    realFileBtn2.click();
});

realFileBtn2.addEventListener("change", function() {
    var numFiles = realFileBtn2.files.length;

    if (realFileBtn2.value) {
        customTxt.innerHTML = " ";
        for (i = 0; i < numFiles; i++) {
            if (contFile = realFileBtn2.files.item(i).name) {
                var contFileExten = contFile.substring(contFile.lastIndexOf('.') + 1);

                if (contFileExten === "png") {
                    customTxt.innerHTML = customTxt.innerHTML + contFile + " ";
                } else if (contFileExten === "jpeg") {
                    customTxt.innerHTML = customTxt.innerHTML + contFile + " ";
                } else if (contFileExten === "jpg") {
                    customTxt.innerHTML = customTxt.innerHTML + contFile + " ";
                } else {
                    customTxt.innerHTML = "Not recognize image format."
                }
            }
        }
    } else {
        customTxt.innerHTML = "No file chosen, yet.";
    }
});

// value.match(/[\/\\]([\w\d\s\.\-\(\)]+)$/)[1]