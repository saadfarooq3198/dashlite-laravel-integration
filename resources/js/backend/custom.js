// $(document).on('click', '.delete', function () {
//     let url = $(this).data('url');
//     let reload = $(this).data('reload');
//     let tableId = '#' + $(this).data('table');
//     let redirect = $(this).data('redirect');
//     let callback = $(this).data('callback');
//     let triggerred = $(this).data('triggerred');
//     deleteConfirmation(url, tableId, reload, redirect, callback, triggerred);
// });

// function deleteConfirmation(url, tableId, reload = false, redirect = false, callback = false, triggerred=false) {
//     window.swal.fire({
//         title: 'Are you sure?',
//         text: "You want to delete this record",
//         icon: 'warning',
//         showCancelButton: true,
//         confirmButtonColor: '#3085d6',
//         cancelButtonColor: '#d33',
//         confirmButtonText: "Yes, delete it!"
//     }).then((result) => {
//         if (result.value) {
//             window.swal.fire({
//                 title: "",
//                 text: "Please wait...",
//                 showConfirmButton: false,
//                 backdrop: true
//             });

//             window.axios.delete(url).then(response => {
//                 if (response.status === 200) {
//                     window.swal.close();
//                     // Show toast message
//                     Toast.fire({
//                         icon: 'success',
//                         title: response.data.message
//                     });
//                     if(triggerred){
//                         $(document).trigger(triggerred);
//                     }
//                     if (reload == true) {
//                         window.location.reload();
//                     }

//                     if (redirect) {
//                         window.location.href = redirect;
//                     }

//                     if(callback){
//                         window[callback]();
//                     }

//                     $(tableId).DataTable().ajax.reload();


//                 }
//             }).catch(error => {
//                 window.swal.close();
//                 // Show toast message
//                 Toast.fire({
//                     icon: 'error',
//                     title: error.response.data.message
//                 });
//             });
//         }
//     });
// }

function toastMessage(message = '', status = '') {
    status = status == '' ? 'error' : status;

    if (message == '')
        message = status == 'error' ? 'Something went wrong' : 'Success';

    Toast.fire({
        title: message,
        icon: status,
    });
}

$('body').on('click', '[data-act=ajax-modal]', function () {
    const _self = $(this);

    const content = $("#ajax_model_content");
    const spinner = $("#ajax_model_spinner");

    content.hide();
    spinner.show();

    $("#ajax_model").modal({ backdrop: "static" });
    $("#ajax_model_title").html(_self.attr('data-title'));
    var metaData = {};
    $(this).each(function () {
        $.each(this.attributes, function () {
            if (this.specified && this.name.match("^data-post-")) {
                var dataName = this.name.replace("data-post-", "");
                metaData[dataName] = this.value;
            }
        });
    });

    axios({
        method: _self.attr('data-method'),
        url: _self.attr('data-action-url'),
        data: metaData
    })
        .then(response => {
            spinner.hide();
            if (response.status === 200) {
                content.html(response.data).show();
                $('#ajax_model select').css('width', '100%');
                $('.form-select-modal').select2({
                    width: '100%',

                });
                $('.datepicker').datepicker({
                    format: "yyyy-mm-dd",

                });
                initMap('map-popup', 'searchInputPopup', 'latitude-popup', 'longitude-popup', false, '', 0, 0)
            }
            else toastMessage();
            $('input.open-time-picker').timepicker({
                timeFormat: 'HH:mm:ss',
            });
            $('input.close-time-picker').timepicker({
                timeFormat: 'HH:mm:ss',
            });
            $('textarea:not(.without-summernote)').summernote({
                height: 200
            });




        }).catch(error => {
            spinner.hide();
            // toastMessage(error.response.data.message);
        });
});

$('body').on('submit', '[data-form=ajax-form]', function (e) {
    e.preventDefault();
    const form = this;
    const confirm = $(form).data('confirm');

    if (confirm == 'yes') {
        window.swal.fire({
            title: 'Are you sure?',
            text: "Do you really want to submit this form?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: "Yes, do it!"
        }).then((result) => {
            if (result.value) sendAjaxForm(form);
        });
    } else {
        sendAjaxForm(form);
    }
});

function sendAjaxForm(form) {
    const _self = $(form);
    const btn = _self.find('[data-button=submit]');
    const btnHtml = btn.html();
    const modal = _self.data('modal');
    const dt = _self.data('datatable');
    const reload = _self.data('reload');
    const redirect = _self.data('redirect');
    const formReset = _self.data('form-reset');
    const callback = _self.data('callback');
    const editFormCallback = _self.data('editform');

    btn.attr('disabled', 'disabled');
    btn.html(btnHtml + '&nbsp;&nbsp;<span class="spinner-border spinner-border-sm"></span>');

    axios({
        url: _self.attr('action'),
        method: _self.attr('method'),
        data: new FormData(_self[0]),
    })
        .then(response => {
            if (response.status == 200) {
                if (modal !== '') $(modal).modal('hide');
                if (dt !== '') $(dt).DataTable().ajax.reload();


                toastMessage(response.data.message, 'success');

                if (formReset == true) _self.trigger('reset');

                if (reload == true) window.location.reload();

                if (redirect) {
                    window.location.href = redirect;
                }
                if(callback){
                    window[callback]();
                }
                if(editFormCallback){
                    window[editFormCallback](response.data.model.uuid, response.data.model.id);
                }
                
            }

            else toastMessage();
        })
        .catch(error => {
            console.log(error);
            toastMessage(error.response.data.message);
            
        })
        .finally(response => {
            btn.removeAttr('disabled');
            btn.html(btnHtml);
        });
}

// setting up toast
const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.addEventListener('mouseenter', Swal.stopTimer)
        toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
});

// Logo Preview
$(document).on('click', '.modal-logo', function (e) {
    $(this).siblings('.logo').click();
});

$(document).on('change', '.logo', function (e) {


    var input = e.target;
    if (input.files && input.files[0]) {
        var file = input.files[0];

        var reader = new FileReader();

        reader.readAsDataURL(file);
        reader.onload = function (e) {
            $('.modalCompanyLgo').attr('src', reader.result).addClass('hasImage');
        }
    }
});

$(document).on('click', '#modal-logo', function (e) {
    $(this).siblings('#avatar').click();
});

$(document).on('change', '#avatar', function (e) {


    var input = e.target;
    if (input.files && input.files[0]) {
        var file = input.files[0];

        var reader = new FileReader();

        reader.readAsDataURL(file);
        reader.onload = function (e) {
            $('#modalAvatar').attr('src', reader.result).addClass('hasImage');
        }
    }
});

$(document).on('click', '#modal-logo', function (e) {
    $(this).siblings('#avatar-edit').click();
});

$(document).on('change', '#avatar-edit', function (e) {


    var input = e.target;
    if (input.files && input.files[0]) {
        var file = input.files[0];

        var reader = new FileReader();

        reader.readAsDataURL(file);
        reader.onload = function (e) {
            $('#modalAvatarEdit').attr('src', reader.result).addClass('hasImage');
        }
    }
});


function changeStatus(url, tableId, formData, message, inputField) {
    // alert(formData.status);
    newStatus = formData.status ? 'activate' : 'deactivate';
    window.swal.fire({
        title: 'Are you sure?',
        text: "You want to " + newStatus + " this record",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: "Yes"
    }).then((result) => {
        let toggleStatus = inputField.is(':checked') ? false : true;
        // if alert is confirmed
        if (result.isConfirmed) {
            // axios put method request here
            window.axios.put(url, formData).then(response => {
                if (response.status === 200) {
                    window.swal.close();
                    $(tableId).DataTable().ajax.reload(null, false);

                    // Show toast message
                    Toast.fire({
                        icon: 'success',
                        title: response.data.message
                    });
                }
            }).catch(error => {
                inputField.prop('checked', toggleStatus);

                // Show toast message
                Toast.fire({
                    icon: 'error',
                    title: error.response.data.message
                });
            });
        }

        // if alert is dismissed
        if (result.isDismissed) {
            inputField.prop('checked', toggleStatus);
        }
    });
}

$(document).on('click', '.toggle-clicked', function (e) {
    _self = $(this);
    var data = {
        'status': _self.data('status')
        // 'reason': $('[name=rejected_reason]').val(),
    }
    let url = _self.data('url');
    let table = _self.data('table');
    const message = ""

    changeStatus(url, table, data, message, _self);
});

// $('.language-item').on('click', function (e) {
//     e.preventDefault();
//     var locale = $(this).attr('data-code');
//     $.ajax({
//         url: "/set-locale/" + locale,
//         method: "get",
//         success: function (response) {
//             if (response.status) {
//                 window.location.reload();
//             }
//         }
//     });
// });

$(document).on('click','.action-button', function(){
    var preview = $(this).data('preview');
    var inputfile = $(this).data('fileinput');
    $(inputfile).click();
    $(inputfile).on('change', function(e){
        var input = e.target;
        if (input.files && input.files[0]) {
            var file = input.files[0];
            var reader = new FileReader();
            reader.readAsDataURL(file);
            reader.onload = function (e) {
                $(preview).attr('src', reader.result).addClass('hasImage');
            }
        }
    })
});
   