var fakeSelects = document.querySelectorAll('.fake-select');

fakeSelects.forEach(function(fakeSelect) {
    var select = fakeSelect.querySelector('select');
    var selectedOption = select.options[select.selectedIndex].text;
    var fsi = document.createElement('div');
    fsi.className = 'fake-select-input';
    var fsv = document.createElement('div');
    fsv.className = 'fake-select-value';
    fsv.textContent = selectedOption;
    fsi.appendChild(fsv);
    var fsb = document.createElement('div');
    fsb.className = 'fake-select-body';
    fakeSelect.appendChild(fsi);
    fakeSelect.appendChild(fsb);

    for (var i = 1; i < select.options.length; i++) {
        var option = select.options[i];
        var val = option.value;
        var text = option.text;

        var fakeOption = document.createElement('div');
        fakeOption.className = 'fake-select-option';
        fakeOption.dataset.value = val;
        fakeOption.title = text;
        fakeOption.textContent = text;

        if (option.selected) {
            fakeOption.classList.add('fake-option-selected');
        }

        fsb.appendChild(fakeOption);
    }
});

document.querySelectorAll('.fake-select-input').forEach(function(fakeSelectInput) {
    fakeSelectInput.addEventListener('click', function() {
        var parentFakeSelect = this.closest('.fake-select');
        if (this.classList.contains('fake-select-open')) {
            parentFakeSelect.classList.remove('fake-open');
            this.classList.remove('fake-select-open');
        } else {
            document.querySelectorAll('.fake-select-input').forEach(function(element) {
                element.classList.remove('fake-select-open');
            });

            this.classList.add('fake-select-open');

            document.querySelectorAll('.fake-select').forEach(function(element) {
                element.classList.remove('fake-open');
            });

            parentFakeSelect.classList.add('fake-open');
        }
    });
});

document.querySelectorAll('.fake-select-option').forEach(function(fakeSelectOption) {
    fakeSelectOption.addEventListener('click', function() {
        var parentFakeSelect = this.closest('.fake-select');
        var select = parentFakeSelect.querySelector('select');
        var selectedOption = parentFakeSelect.querySelector('option:checked');
        selectedOption.removeAttribute('selected');
        select.querySelectorAll('option:checked').forEach(function(option) {
            option.removeAttribute('selected');
        });

        if (this.classList.contains('fake-option-selected')) {
            this.classList.remove('fake-option-selected');
            var v = parentFakeSelect.querySelector('select option:first-child').text;
            parentFakeSelect.querySelector('.fake-select-value').textContent = v;
        } else {
            parentFakeSelect.querySelectorAll('.fake-select-option').forEach(function(option) {
                option.classList.remove('fake-option-selected');
            });
            var b = this.title;
            var a = this.dataset.value;
            this.classList.add('fake-option-selected');
            parentFakeSelect.querySelector('.fake-select-input').classList.add('fake-selected');
            parentFakeSelect.querySelector('.fake-select-value').textContent = b;
            parentFakeSelect.querySelector("option[value='" + a + "']").setAttribute('selected', 'selected');
        }

        document.querySelectorAll('.fake-select-input').forEach(function(element) {
            element.classList.remove('fake-select-open');
        });
        document.querySelectorAll('.fake-select').forEach(function(element) {
            element.classList.remove('fake-open');
        });
    });
});

$(window).load(function() {
    if(window.location.hash) {
        const section = window.location.hash;
        const header = document.getElementById('header');
        const aboveHeight = header.offsetHeight;
        $('html, body').stop().animate({
            scrollTop: $(section).offset().top - aboveHeight
        }, 1500, 'easeInOutExpo');
        const uri = window.location.toString();
        if (uri.indexOf("#") > 0) {
            const clean_uri = uri.substring(0, uri.indexOf("#"));
            window.history.replaceState({}, document.title, clean_uri);
        }
    }
});

$(document).ready(function(){
    const slick_options = {
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        centerMode: true,
        centerPadding: '360px',
        dots: true,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    centerPadding: '160px'
                }
            },
            {
                breakpoint: 575,
                settings: {
                    centerPadding: '0'
                }
            }
        ]
    };
    $('.tab-pane').slick(slick_options);

    $('button[data-bs-toggle="pill"]').on('shown.bs.tab', function () {
        $('.tab-pane').slick('refresh');
    })
});
$(window).load(function() {
    $("#compare").twentytwenty({
        before_label: 'OBECNIE',
        after_label: 'W PLANIE',
        no_overlay: true
    });
});