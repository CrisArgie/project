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
}

function accordionFunc(page, faqbtns) {
    const faqDataElement = document.getElementById('faqData')
    const faqDeleteElement = document.getElementById('faqDeleteBtn')

    const faqCreateElement = document.getElementById('faqCreateBtn')

    if (page === 1) {

        var inputValQ = document.getElementById('question')
        var inputValA = document.getElementById('answer')

        let key = 'faqsComments'
        let keys = []

        var comment = {
            date: Date.now(),
            question: "",
            answer: "",
            status: "show"
        }

        function addFAQ() {
            if (inputValA.value == "" && inputValQ.value == "") {
                alert("Question and Answer must be filled out")
                return false
            } else if (inputValA.value == "" || inputValQ.value == "") {
                alert("Question or Answer must be filled out")
                return false
            }

            keys.push(comment)
            localStorage.setItem(key, JSON.stringify(keys));
            alert('Done Uploading.')
            window.location.reload()
        }

        if (faqbtns === 1) {
            faqCreateElement.addEventListener('click', function() {
                comment.question = inputValQ.value
                comment.answer = inputValA.value
                addFAQ()
            })
        }

        if (localStorage && localStorage.getItem(key)) {
            keys = JSON.parse(localStorage.getItem(key))
        }
        item = keys

        if (faqbtns === 1) {

            // Modal Delete FAQ
            faqDeleteElement.addEventListener('click', function() {
                let chsItem = faqDataElement.value
                let m = 0
                localStorage.removeItem(key)

                for (let x = 0; x < item.length; x++) {
                    if (item[x].question == chsItem) {
                        m = x
                    }
                }

                delete item[m]
                let gdata = item.filter(faqs => faqs.question && faqs.answer && faqs.status)
                localStorage.setItem(key, JSON.stringify(gdata));

                alert("Deletion Success!")
                window.location.reload()
            })

            for (let x = 0; x < item.length; x++) {
                let faqItem = document.createElement('option')
                if (item[x].status === "show") {
                    faqItem.value = item[x].question
                    faqItem.innerText = item[x].question
                    faqDataElement.appendChild(faqItem);
                }
            }
        }
    }
}
