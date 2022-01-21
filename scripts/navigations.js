$(document).ready(function () {
    /* BREADCRUMBS*/

    // send page name and path to breadcrumbs html page
    $("#breadcrumb-active").html($(".active").text());

    /* BUTTONS AND LINK REDIRECTIONS*/
    // redirect to sign up page
    $(".to-home").click(function () {
        window.location = index.php;
    });
    $(".to-sign-up").click(function () {
        window.location = "signup.php";
    });
    // redirect to login page
    $(".to-log-in").click(function () {
        window.location = "login.php";
    });
    $(".to-personal").click(function () {
        window.location = "personal.php";
    });
    $(".to-language").click(function () {
        window.location = "language.php";
    });
    $(".to-language-alt").click(function () {
        window.location = "language1.php";
    });
    $(".to-academic").click(function () {
        window.location = "academic.php";
    });
    $(".to-experience").click(function () {
        window.location = "experience.php";
    });
    $(".to-expertise").click(function () {
        window.location = "expertise.php";
    });
    $(".to-publications").click(function () {
        window.location = "publication.php";
    });

    /* COUNTRY DROPDOWN*/
    let countryofresidence = $("#country-of-residence");

    countryofresidence.append('<option selected="true" disabled>Select One</option>');
    $("#country-of-origin").append('<option selected="true" disabled>Select One</option>');
    // countryofresidence.prop('selectedIndex', 0);

    const countryjson = "scripts/countries.js";
    $.getJSON(countryjson, function (data) {
        $.each(data, function (key, entry) {
            countryofresidence.append($("<option></option>").attr("value", entry.alpha2).text(entry.en));
            $("#country-of-origin").append($("<option></option>").attr("value", entry.alpha2).text(entry.en));
        });
    });

    // Telephone Country code
    if ($("#phone").length) {
        // Vanilla Javascript
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
            utilsScript: "scripts/utils.js",
            preferredCountries: [],
            autoPlaceholder: "polite",
        });
    }

    /* Langugae proficiency*/
    // show added language list
    $("#show-added-langs").click(function (){
        $(".added-lang").removeClass("d-none");
    });
    // alt language page
    // Language proficiency list
    $.each(["Very Well", "Well", "Fair"], function (key, value) {
        $(".language-proficiency-list").append($("<option></option>").attr("value", value).text(value));
    });
    // add new row
    $("#alt-add-lang").click(function () {
        var cloneLang = $("#lang-row-1").clone().prop('id', "");
        cloneLang.find("input").val("");
        cloneLang.appendTo("tbody");
    });
    // var $elem = $("#lang-row-1").data("arr", [1]),
    //     $clone = $elem
    //         .clone(true)
    //         // Deep copy to prevent data 
    //         .data("arr", $.extend([], $elem.data("arr")));
    //         $clone.appendTo("tbody");

    //delete existing row
    $(".row-remove").click(function () {
        if (($(this).attr('id'))=="lang-row-1") {
            alert("Hi");
        }else
        alert("Not Hi");
        // $(this).closest("tr").remove();
    });
});