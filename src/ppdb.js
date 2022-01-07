import 'bootstrap';
import 'popper.js';
import $ from "jquery";

$(function () {
    let tabNavs = $('.nav-link.form-tab');
    let formSections = $('.setup-content');

    function navigation(event) {
        // ambil href target (id) form yang akan ditampilkan
        let targetId = event.target.dataset.toggle.slice(-7);
        // loop tiap nav
        tabNavs.each(function(){
            // cari yg tidak sesuai dengan Id target
            if($(this)[0].dataset.toggle.slice(-7) != targetId){
                $(this)[0].classList.remove('active');
            }else{
                $(this)[0].classList.add('active');
            }
        })
        
        formSections.each(function () {
            if ($(this).attr('id') == targetId.slice(1)) {
                $(targetId)[0].classList.remove('d-none');
            }else{
                // hide the element
                $(`#${$(this).attr('id')}`)[0].classList.add('d-none');
            }
        })
    }

    // tab click event
    tabNavs.on('click', ev => navigation(ev))

    // formbtn click event
    let formBtn = $('.form-btn');
    formBtn.on('click',ev => navigation(ev))

    $('#persetujuan').on('change',function (e) {
        if(e.target.checked == true){
            $('#submitBtn').removeAttr('disabled',true);
        }
        if(e.target.checked == false){
            $('#submitBtn').attr('disabled',true);
        }
    });

});
