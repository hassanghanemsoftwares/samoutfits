jQuery(document).ready(function () {
    $('#minpr, #maxpr, .color, .sizes, .gender, .sub_category').on('change', function (e) {
        create_url_link_and_redirect(1)
    })
    $('.sort').on('click', function (e) {
        if ($(this).text() == 'Price DESC') {
            $('#sorting').val('priceDESC')
        } else {
            if ($(this).text() == 'Price ASC') {
                $('#sorting').val('priceASC')
            } else {
                $('#sorting').val($(this).text())
            }
        }
        create_url_link_and_redirect(1)
    })
    $('.page_nb').on('click', function (e) {
        // alert($(this).text())
        create_url_link_and_redirect($(this).text())
    })
    $('.page_prev').on('click', function (e) {
        var page = parseInt($('#page_nb_inp').val()) - 1;
        create_url_link_and_redirect(page)
    })
    $('.page_next').on('click', function (e) {
        var page = parseInt($('#page_nb_inp').val()) + 1;
        create_url_link_and_redirect(page)
    })
    $('.hide-filter-button-on-desktop').on('click', function (e) {
        $('.hide-filter-on-mobile').toggle();
        // document.getElementsById("filter_div").style.display === "Block";
    })
    $('.dropdown-item').on('click', function(){
        $('#navbar-vertical').hide();
    })
});

var x = window.matchMedia("(min-width: 768px)")
myFunction(x) // Call listener function at run time
x.addListener(myFunction) // Attach listener function on state changes
function myFunction(x) {
    if (x.matches) { // If media query matches
        $('.hide-filter-on-mobile').show()
    } else {
        $('.hide-filter-on-mobile').hide()
    }
}

function create_url_link_and_redirect(page) {
    let base_link = $('#url_link').val();
    // subcategory
    var subcategory = [];
    subcategory['0'] = 'All';
    var count = 1;
    $('.sub_category').each(function () {
        if (this.checked == true) {
            if (this.value !== 'All') {
                subcategory[count] = this.value.replace("&", "%26");
                count++;
            }
        }
    }
    )
    let subcategory_filter = subcategory.join("-");
    console.log(subcategory, subcategory_filter);
    // gender
    var gender = [];
    gender['0'] = 'All';
    var count = 1;
    $('.gender').each(function () {
        if (this.value !== 'All') {
            if (this.checked == true) {
                gender[count] = this.value;
                count++;
            }
        }
    }
    )
    let gender_filter = gender.join("-");
    //price
    let price_range = $('#minpr').val() + "/" + $('#maxpr').val();
    // colors
    var colors = [];
    var count = 0;
    $('.color').each(function () {
        if (this.checked == true) {
            let color_rep = this.value.replace("&", "%26");
            colors[count] = color_rep;
            count++;
        }
    }
    )
    let color_filter = colors.join("-");
    // sizes
    var sizes = [];
    sizes['0'] = 'All';
    var count = 1;
    $('.sizes').each(function () {
        if (this.checked == true) {
            if (this.value !== 'All') {
                sizes[count] = this.value;
                count++;
            }
        }
    }
    )
    let sizes_filter = sizes.join(":");
    let sorting = $('#sorting').val();
    window.location.href = base_link + "/" + subcategory_filter + "/" + gender_filter + "/" + price_range + "/" + color_filter + "/" + sizes_filter + "/" + sorting + "/" + page;
}
var rangeOne = document.querySelector('input[name="rangeOne"]'),
    rangeTwo = document.querySelector('input[name="rangeTwo"]'),
    outputOne = document.querySelector('.outputOne'),
    outputTwo = document.querySelector('.outputTwo'),
    inclRange = document.querySelector('.incl-range'),
    updateView = function () {
        if (this.getAttribute('name') === 'rangeOne') {
            outputOne.innerHTML = this.value + "$";
            outputOne.style.left = this.value / this.getAttribute('max') * 100 + '%';
            $('#minp').val(Math.round(this.value / this.getAttribute('max') * 100));
        } else {
            outputTwo.style.left = this.value / this.getAttribute('max') * 100 + '%';
            outputTwo.innerHTML = this.value + "$";
            $('#maxp').val(Math.round(this.value / this.getAttribute('max') * 100));
        }
        if (parseInt(rangeOne.value) > parseInt(rangeTwo.value)) {
            inclRange.style.width = (rangeOne.value - rangeTwo.value) / this.getAttribute('max') * 100 + '%';
            inclRange.style.left = rangeTwo.value / this.getAttribute('max') * 100 + '%';
        } else {
            inclRange.style.width = (rangeTwo.value - rangeOne.value) / this.getAttribute('max') * 100 + '%';
            inclRange.style.left = rangeOne.value / this.getAttribute('max') * 100 + '%';
        }
    };
document.addEventListener('DOMContentLoaded', function () {
    updateView.call(rangeOne);
    updateView.call(rangeTwo);
    $('input[type="range"]').on('mouseup', function () {
        this.blur();
    }).on('mousedown input', function () {
        updateView.call(this);
    });
});