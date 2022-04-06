function modalFunc(page) {
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

    if (page === 1) {

        inputChkbox.onclick = function() {

            if (inputChkbox.checked) {
                inputPass.setAttribute('type', 'text');
            } else {
                inputPass.setAttribute('type', 'password');

            }
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

    // function setTextValue(txtAns) {
    //     if (txtAns == "\\software checked") {
    //         document.getElementById("software_programs_txt").value = '';
    //     } else if (txtAns == "\\hardware checked") {
    //         document.getElementById("other_hardware_txt").value = '';
    //     } else if (txtAns == "\\usb checked") {
    //         document.getElementById("usb_device_txt").value = '';
    //     }
    // }
}

function accordionFunc(page, btn) {
    const listElement = document.getElementById('faqBox')
    const paginationElement = document.getElementById('pagination')
    const leftElement = document.getElementById('leftBtn')
    const rightElement = document.getElementById('rightBtn')

    const faqDataElement = document.getElementById('faqData')
    const faqDeleteElement = document.getElementById('faqDeleteBtn')

    if (page === 0) {

        let rows = 5;
        let curr_page = 1;
        let jsonItems = []
        let lenData = fqdata.length

        // console.log(fqdata[0])

        jsonItems = fqdata
        for (let x = 0; x < lenData; x++) {
            if (fqdata[x].status == 'show') {
                jsonItems[x] = fqdata[x]
            } else {
                delete jsonItems[x]
            }
        }

        let data = jsonItems.filter(faqs => faqs.question && faqs.answer && faqs.status)
        lenData = data.length

        function DisplayList(items, wrapper, rows_per_page, page) {
            wrapper.innerHTML = "";
            page--;

            let start = rows_per_page * page
            let end = start + rows_per_page

            let paginatedItems = items.slice(start, end);

            for (let i = 0; i < paginatedItems.length; i++) {
                let item = paginatedItems[i]
                let y = i + 1;

                if ("show" == item.status) {
                    wrapper.innerHTML += ' <div class="faq border-bottom-dark mt-2 mb-2"><input type="checkbox" id="' + "faq" + y + '" class="checkbox"><label class="faq-label mt-2 mb-2" for="' + "faq" + y + '"> ' + item.question + ' </label><div class="faq-content mb-3 w-90">' + item.answer + '</div></div> ';
                }

            }
        }

        function SetupPagination(items, wrapper, rows_per_page) {

            let page_count = Math.ceil(items.length / rows_per_page);
            wrapper.innerText = curr_page + "/" + page_count

            leftElement.addEventListener('click', function() {
                if (curr_page != 1) {
                    curr_page -= 1
                    wrapper.innerText = curr_page + "/" + page_count
                    PaginationButton(curr_page, data);
                } else {
                    alert('This the last page.')
                }
            })
            rightElement.addEventListener('click', function() {
                if (curr_page != page_count) {
                    curr_page += 1
                    wrapper.innerText = curr_page + "/" + page_count
                    PaginationButton(curr_page, data);
                } else {
                    alert('This the last page.')
                }
            })
        }

        function PaginationButton(page, items) {
            curr_page = page;
            DisplayList(items, listElement, rows, curr_page);
        }
        if (btn === 1) {

            let x = 0
            let y = 0
                // Modal Delete FAQ
            faqDeleteElement.addEventListener('click', function() {
                let datas = faqDataElement.value
                for (let x = 0; x < data.length; x++) {
                    if (data[x].question == datas) {
                        var result = confirm("Are you sure to delete this question?")
                        if (result === true) {
                            console.log(data)
                            data[x].status = 'deleted'
                        }
                    }
                }
                window.location.reload();
                let gdata = data.filter(faqs => faqs.question && faqs.answer && faqs.status)
                console.log(gdata)

                alert("Deletion Success!")
            })

            for (let x = 0; x < data.length; x++) {
                let faqItem = document.createElement('option')
                faqItem.value = data[x].question
                faqItem.innerText = data[x].question
                faqDataElement.appendChild(faqItem);
            }
        }

        DisplayList(data, listElement, rows, curr_page);
        SetupPagination(data, paginationElement, rows);
    }
}

var fqdata = [{
        question: "What Framework used in developing this Website1",
        answer: "Typically, used in creating this Website is HTML, CSS, and JavaScript for Front-end the Back-end is Laravel 9 framework",
        status: "show"
    },
    {
        question: "What Framework used in developing this Website2",
        answer: "Typically, used in creating this Website is HTML, CSS, and JavaScript for Front-end the Back-end is Laravel 9 framework",
        status: "show"
    },
    {
        question: "What Framework used in developing this Website3",
        answer: "Typically, used in creating this Website is HTML, CSS, and JavaScript for Front-end the Back-end is Laravel 9 framework",
        status: "show"
    },
    {
        question: "What Framework used in developing this Website4",
        answer: "Typically, used in creating this Website is HTML, CSS, and JavaScript for Front-end the Back-end is Laravel 9 framework",
        status: "show"
    },
    {
        question: "What Framework used in developing this Website5",
        answer: "Typically, used in creating this Website is HTML, CSS, and JavaScript for Front-end the Back-end is Laravel 9 framework",
        status: "show"
    },
    {
        question: "What Framework used in developing this Website6",
        answer: "Typically, used in creating this Website is HTML, CSS, and JavaScript for Front-end the Back-end is Laravel 9 framework",
        status: "deleted"
    },
    {
        question: "What Framework used in developing this Website7",
        answer: "Typically, used in creating this Website is HTML, CSS, and JavaScript for Front-end the Back-end is Laravel 9 framework",
        status: "show"
    },
    {
        question: "What Framework used in developing this Website8",
        answer: "Typically, used in creating this Website is HTML, CSS, and JavaScript for Front-end the Back-end is Laravel 9 framework",
        status: "show"
    }
]