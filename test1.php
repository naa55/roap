<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Roaster of African Professionals">
    <meta name="keywords" content="Africa, African, Professional, Education">
    <title>ROAP</title>
    <link rel="stylesheet" href="css/intlTelInput.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/71885683d9.js" crossorigin="anonymous"></script>

    <script src="scripts/intlTelInput.js"></script>
    <!-- <script src="scripts/utils.js"></script> -->
    <!-- <style>
        .iti__flag {
            background-image: url("images/flags.png");
        }

        @media (-webkit-min-device-pixel-ratio: 2),
        (min-resolution: 192dpi) {
            .iti__flag {
                background-image: url("images/flags@2x.png");
            }
        }
    </style> -->
</head>

<body>
    <select name="dropdown" id="locality-dropdown"></select>

    <input type="tel" id="phone">





    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script>
        const url = 'scripts/countries.js';
        let dropdown = $('#locality-dropdown');

        dropdown.empty();

        dropdown.append('<option selected="true" disabled>Choose State/Province</option>');
        dropdown.prop('selectedIndex', 0);

        // Populate dropdown with list of provinces
        $.getJSON(url, function(data) {
            $.each(data, function(key, entry) {
                dropdown.append($('<option></option>').attr('value', entry.id).text(entry.en));
            })
        });
    </script>
    <script>
        // Vanilla Javascript
        var input = document.querySelector("#phone");
        window.intlTelInput(input, {
        });
    </script>
</body>

</html>