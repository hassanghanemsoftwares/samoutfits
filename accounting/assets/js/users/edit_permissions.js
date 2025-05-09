$(document).ready(function () {
    // auto check and uncheck all permissions start
    var totalCheckboxes = $('.permission').length;
    var checkedCheckboxes = $('.permission:checked').length;
    var notCheckedCheckboxes = totalCheckboxes - checkedCheckboxes;
    if (notCheckedCheckboxes == 0) {
        $("#all_permissions").prop('checked', true);
    }
    $(".permission").on("click", function () {
        totalCheckboxes = $('.permission').length;
        checkedCheckboxes = $('.permission:checked').length;
        notCheckedCheckboxes = totalCheckboxes - checkedCheckboxes;
        if (notCheckedCheckboxes == 0) {
            $("#all_permissions").prop('checked', true);
        } else {
            $("#all_permissions").prop('checked', false);
        }
        var permissionCard=$(this).parent().parent().parent().parent();
        var parentGroup = $(this).parent().parent().parent().parent().find('.group_page');
        var countPer = permissionCard.find('.permission').length;
        var countChecked = permissionCard.find('.permission:checked').length;
        if (countChecked == countPer) {
            parentGroup.prop('checked', true);
        } else {
            parentGroup.prop('checked', false);
        }

        //stuff group
        var stuffGroup=$(this).closest('.stuff_group_container');
        var stuffGroupPermissions = stuffGroup.find('.stuff_group_pages');
        var countStuffPer = stuffGroup.find('.permission').length;
        var countStuffChecked = stuffGroup.find('.permission:checked').length;
        if (countStuffPer == countStuffChecked) {
            stuffGroupPermissions.prop('checked', true);
        } else {
            stuffGroupPermissions.prop('checked', false);
        }

    })
    // auto check and uncheck all permissions end
    $("#all_permissions").on("click", function () {
        if ($(this).prop('checked')) {
            $(".permission").prop('checked', true);
            $(".group_page").prop('checked', true);
            $(".stuff_group_pages").prop('checked', true);
        } else {
            $(".permission").prop('checked', false);
            $(".group_page").prop('checked', false);
            $(".stuff_group_pages").prop('checked', false);
        }
    });
    $(".group_page").on("click", function () {
        if ($(this).prop('checked')) {
            $(this).closest('.permission_cards').find('.permission').prop('checked', true);
        } else {
            $(this).closest('.permission_cards').find('.permission').prop('checked', false);
        }
        totalCheckboxes = $('.permission').length;
        checkedCheckboxes = $('.permission:checked').length;
        notCheckedCheckboxes = totalCheckboxes - checkedCheckboxes;
        if (notCheckedCheckboxes == 0) {
            $("#all_permissions").prop('checked', true);
        } else {
            $("#all_permissions").prop('checked', false);
        }
    });
    $('.group_page').each(function () {
        var countPer = $(this).closest('.permission_cards').find('.permission').length;
        var countChecked = $(this).closest('.permission_cards').find('.permission:checked').length;
        if (countChecked == countPer) {
            $(this).prop('checked', true);
        } else {
            $(this).prop('checked', false);
        }
    });
    $(".stuff_group_pages").on("click",function(){
        if ($(this).prop('checked')) {
            $(this).closest('.stuff_group_container').find('.permission').prop('checked', true);
            $(this).closest('.stuff_group_container').find('.group_page').prop('checked', true);
        } else {
            $(this).closest('.stuff_group_container').find('.permission').prop('checked', false);
            $(this).closest('.stuff_group_container').find('.group_page').prop('checked', false);
        }
        totalCheckboxes = $('.permission').length;
        checkedCheckboxes = $('.permission:checked').length;
        notCheckedCheckboxes = totalCheckboxes - checkedCheckboxes;
        if (notCheckedCheckboxes == 0) {
            $("#all_permissions").prop('checked', true);
        } else {
            $("#all_permissions").prop('checked', false);
        }
    });
    $('.stuff_group_pages').each(function () {
        var countPer = $(this).closest('.stuff_group_container').find('.permission').length;
        var countChecked = $(this).closest('.stuff_group_container').find('.permission:checked').length;
        if (countChecked == countPer) {
            $(this).prop('checked', true);
        } else {
            $(this).prop('checked', false);
        }
    });
    $("#edit_permissions_form").on("submit", function () {
        var formData = new FormData(this);
        $.ajax({
            url: getAppURL("users/edit_permissions"),
            type: "POST",
            data: formData,
            processData: false,
            contentType: false,
            dataType: "json",
            success: function (dataResult) {
                if (dataResult.result) {
                    window.location.reload();
                } else {
                    alert("We Have Error");
                }
            },
            error: function (jqXHR, textStatus, errorThrown) {
                alert("We Have Error");
            },
        });
        return false;
    });
});