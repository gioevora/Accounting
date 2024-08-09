$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
        },
    })

    start()

    $('.section-btn').on("click", function () {
        var section = $(this).text().toLowerCase().replace(' ', '-')
        $('.details .section').hide()
        $(`.details .${section}`).show()
    })
})

function start() {
    var segments = location.href.split('/')
    var id = segments[5] 
    get(id)
}

function get(id) {
    $.ajax({
        type: "GET",
        url: `/api/contacts/get/${id}`,
        success: function (res) {
            var record = res.record;
            console.log(record)
            details(record)
        },
        error: function (res) {

        }
    })
}

function details(record) {
    var person = record.people[0]

    var parent = '.details'

    var initials = ""
    var name = record.name.split(' ')
    for (var word of name) {
        initials += word.charAt(0)
    }

    var profile =   `
                        <div class='profile' style="background-color: ${record.profile_color};">${initials}</div>
                    `
    $(`${parent} .profile-div`).append(profile)

    var main_details =  `
                            <h4>${record.name}</h4>
                            <div class="d-inline-flex">
                                <div class="me-3">
                                    <i class="fa-solid fa-user"></i>
                                    <span>${person.first_name} ${person.last_name}</span>
                                </div>

                                <div class="me-3">
                                    <i class="fa-solid fa-envelope"></i>
                                    <span>${person.email}</span>
                                </div>

                                <div class="me-3">
                                    <i class="fa-solid fa-phone"></i>
                                    <span>${record.phone_country} ${record.phone_area} ${record.phone_number}</span>
                                </div>
                            </div>
                        `
    $(`${parent} .main-details-div`).append(main_details)

    var person_details =    `
                                <div class="me-3">
                                    <div class='profile' style="background-color: ${person.profile_color};">
                                        ${person.first_name.charAt(0)}${person.last_name.charAt(0)}
                                    </div>
                                </div>
                                <div class="">
                                    <h6>${person.first_name} ${person.last_name}</h6>
                                    <span>${person.email}</span>
                                </div>
                            `

    $(`${parent} .person-div`).append(person_details)            

    var contact_details =   `
                                <div class="me-3">
                                    <i class="fa-solid fa-phone"></i>
                                </div>
                                <div>
                                    <small>Phone</small>
                                    <p>(${record.phone_country}) ${record.phone_area} ${record.phone_number}</p>
                                </div>
                            `

    $(`${parent} .contact-details-div`).append(contact_details)  

    var currency =  `
                        <small>Currency</small>
                        <p>${record.currency}</p>
                    `
    $(`${parent} .currency-div`).append(currency)            
}
