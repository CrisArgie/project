function modalFunc() {
    const openModalButtons = document.querySelectorAll('[data-modal-target]')
    const closeModalButtons = document.querySelectorAll('[data-close-button]')
    const overlay = document.getElementById('overlay')

    openModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = document.querySelector(button.dataset.modalTarget)
            openModal(modal)
        })
    })

    overlay.addEventListener('click', () => {
        const modals = document.querySelectorAll('.modal.active')
        modals.forEach(modal => {
            closeModal(modal)
        })
    })

    closeModalButtons.forEach(button => {
        button.addEventListener('click', () => {
            const modal = button.closest('.modal')
            closeModal(modal)
        })
    })

    function openModal(modal) {
        if (modal == null) return
        modal.classList.add('active')
        overlay.classList.add('active')
    }

    function closeModal(modal) {
        if (modal == null) return
        modal.classList.remove('active')
        overlay.classList.remove('active')
    }

    // Password hide and show function
    var inputChkbox = document.getElementById("password_cbox");
    var inputPass = document.getElementById("user_password");

    inputChkbox.onclick = function() {

        if (inputChkbox.checked) {
            inputPass.setAttribute('type', 'text');
        } else {
            inputPass.setAttribute('type', 'password');

        }
    }
}

function hoverFunc() {
    const openHoverButtons = document.querySelectorAll('[data-hover-target]')
    const closeHoverButtons = document.querySelectorAll('[data-close-button]')

    openHoverButtons.forEach(button => {
        button.addEventListener('click', () => {
            const hover = document.querySelector(button.dataset.hoverTarget)
            openHover(hover)
        })
    })

    closeHoverButtons.forEach(button => {
        button.addEventListener('click', () => {
            const hover = button.closest('.hoverbox')
            closeHover(hover)
        })
    })

    function openHover(hover) {
        if (hover == null) return
        hover.classList.add('display-block')
    }

    function closeHover(hover) {
        if (hover == null) return
        hover.classList.remove('display-block')
    }
}

function ict_job_request() {
    const requestType = document.getElementById("type_request");
    const displayRType = document.getElementById("type_request_display");
    var element = document.getElementById('request_type');


    // console.log(requestType.value);
    if (requestType.value == "repair") {
        element.style.display = 'none';
        displayRType.value = 'Repair';
    } else if (requestType.value == "upgrade") {
        element.style.display = 'none';
        displayRType.value = 'Upgrade';
    } else if (requestType.value == "other") {
        displayRType.value = 'Other';
        element.style.display = 'block';
    }

    // function checkRequest(val) {
    //   var element = document.getElementById('request_type');
    //   if (val == 'other'){
    //     element.style.display = 'block';
    //   }
    //   else if(val=='repair' || val=='upgrade')
    //   {
    //     element.style.display = 'none';
    //   }
    // }


    // function getText() {
    //     var text = document.getElementById("textareabox").value;
    //     alert(text);
    // }

    function setTextValue(txtAns) {
        if (txtAns == "\\software checked") {
            document.getElementById("software_programs_txt").value = '';
        } else if (txtAns == "\\hardware checked") {
            document.getElementById("other_hardware_txt").value = '';
        } else if (txtAns == "\\usb checked") {
            document.getElementById("usb_device_txt").value = '';
        }
    }
}



function aboutReadFunc(page) {
    const listElement = document.getElementById('faqBox')
    const paginationElement = document.getElementById('pagination');

    let curr_page = 0;
    let rows = 5;

    if (page == 1) {
        fetch("faq_script.json")
            .then(response => response.json())
            .then(data => {
                let numberFaqsData = data.faqs.length

                let start = rows * curr_page
                let end = start + rows
                let paginatedItems = data.faqs.slice(start, end)

                console.log(data.faqs)

                for (let x = 0; x < paginatedItems.length; x++) {

                    y = x + 1;
                    // console.log(paginatedItems[x]);
                    document.getElementById('faqBox').innerHTML += ' <div class="faq border-bottom-dark mt-2 mb-2"><input type="checkbox" id="' + "faq" + y + '" class="checkbox"><label class="faq-label mt-2 mb-2" for="' + "faq" + y + '"> ' + paginatedItems[x].question + ' </label><div class="faq-content mb-3 w-90">' + paginatedItems[x].answer + '</div></div> ';
                }

                fk_page = curr_page + 1
                let totalPage = Math.ceil(numberFaqsData / 5)
                paginationElement.innerHTML = fk_page + "/" + totalPage;
            })
    } else {
        fetch("../faq_script.json")
            .then(response => response.json())
            .then(data => {
                let numberFaqsData = data.faqs.length

                let start = rows * curr_page
                let end = start + rows
                let paginatedItems = data.faqs.slice(start, end)

                console.log(data.faqs)

                for (let x = 0; x < paginatedItems.length; x++) {

                    y = x + 1;
                    // console.log(paginatedItems[x]);
                    document.getElementById('faqBox').innerHTML += ' <div class="faq border-bottom-dark mt-2 mb-2"><input type="checkbox" id="' + "faq" + y + '" class="checkbox"><label class="faq-label mt-2 mb-2" for="' + "faq" + y + '"> ' + paginatedItems[x].question + ' </label><div class="faq-content mb-3 w-90">' + paginatedItems[x].answer + '</div></div> ';
                }

                fk_page = curr_page + 1
                let totalPage = Math.ceil(numberFaqsData / 5)
                paginationElement.innerHTML = fk_page + "/" + totalPage;
            })
    }

}