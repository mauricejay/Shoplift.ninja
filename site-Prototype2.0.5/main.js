function empty() {
    var x, y, z;
    x = document.getElementById("input1").value;
    y = document.getElementById("input2").value;
    z = document.getElementById("input3").value;
    if (x == "") {
        alert("title is empty!");
        return false;
    } else if (y == "") {
        alert("url is empty!");
        return false;
    } else if (z == "") {
        alert("description is empty!");
        return false;
    } else {
        return true;
    }
}

// AJAX written by Kameron Robinson for the signup page
function checkUsers() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    if (username != '' || email != '') {
        $.ajax({
                method: "POST",
                url: "checkUsers.php",
                data: {
                    username: username,
                    email: email
                }
            })
            .done(function (msg) {
                if (msg == "uTrue") {
                    Materialize.toast(username + ' is yours!', 1000, 'gotIt');
                }
                if (msg == "uFalse") {
                    Materialize.toast('Sorry ' + username + ' is taken!', 4000, 'taken');
                }
                console.log(msg);
            });
    }
}

// Toggle link paste boxes on accountInfo page
$('#gear').click(function () {
    $('#photo, #backgroundPhoto').toggle();
    $('#userPrefForm').css("margin-top", "20px");
});


$("#userPrefForm").hover(function () {

    var photo = $('#photo').val();
    var backgroundPhoto = $('#backgroundPhoto').val();
    photo = $('#photo').val();
    backgroundPhoto = $('#backgroundPhoto').val();
    $('#profileImg').attr("src", photo);
    $('#headerImg').attr("src", backgroundPhoto);

    $.ajax({
            method: "POST",
            url: "setPrefs.php",
            data: {
                photo,
                backgroundPhoto
            }
        })
        .done(function (msg) {
            console.log(msg);
        });
});

$("#registerBtn").hover(function () {
    var password = document.getElementById("password").value;
    var email = document.getElementById("email").value;
    $.ajax({
            method: "POST",
            url: "loggedIn2.php",
            data: {
                password: password,
                email: email
            }
        })
        .done(function (msg) {
            Materialize.toast(msg, 4000, 'taken');
            console.log(msg);
        });
});

function offerBtn() {
    var currentOffer = prompt("How much would you like to offer?");
    var amt = document.getElementById("offerPrice").innerHTML = currentOffer;

    var test = /([0-9])+/.test(currentOffer);
    if (test) {
        $('table thead tr').append('<th class="black-text">Current Offer</th>');
        $('table tbody tr').append('<th class="black-text">$ <span>' + currentOffer + '</span></th>');
        $('#offer-btn').removeAttr("onclick");
        //console.log(amt);
        offerToDB(amt);
    } else {
        alert("Offers must be numbers");
    }
    //post val to DB
    $('#offer-btn').dblclick(function () {
        $('#offer-btn').attr("onclick", "offerBtn()");
    })
}

function offerToDB(amt) {
    var currentOffer = amt;
    var postID = document.getElementById("postId").value;
    //console.log(currentOffer);
    $.ajax({
            method: "POST",
            url: "updateOffer.php",
            data: {
                currentOffer, postID
            }
        })
        .done(function (msg) {
            console.log(msg);
            console.log(currentOffer);
            if (msg == currentOffer) {
                Materialize.toast('Your bid of $' + msg + ' is too low', 4000);
            }
        });
}

//$("#newPost").hover(function () {
//
//    var name = $("#input1").val();
//    var url = $("#input2").val();
//    var price = $("#input3").val();
//    var description = $("#input4").val();
//    var p = $("#p").is(":checked");
//    var b = $("#b").is(":checked");
//    var l = $("#l").is(":checked");
//    var postType;
//    if(p){
//        postType = 'p';
//    }
//    if(b){
//        postType = 'b';
//    }
//    if(l){
//        postType = 'l';
//    }
//    
//    $.ajax({
//            method: "POST",
//            url: "createIt.php",
//            data: {
//                name, url, price, description, postType
//            }
//        })
//        .done(function (msg) {
//            console.log(msg);
//        });
//});

function validateBuy() {
    /*
      var cardregex = /([0-9]){16}?/; //creditcard format
      var securityregex = /^([0-9]){3}?/; //securitycode format
      var zipregex = /^([0-9]){4}?/; //zipcode format
      var expregex = /^((0[1-9])|(1[0-2]))\/((2009)|(20[1-2][0-9]))$/; //expiration code format


      */
    var fnamecheck = document.getElementById("firstname").value;
    var lnamecheck = document.getElementById("lastname").value;
    var cardcheck = document.getElementById("cardnumber").value;
    var zipcheck = document.getElementById("zip").value;
    var securitycheck = document.getElementById("securitycode").value;
    /*
    var cardcheck = document.getElementById("cardnumber").value;
    var zipcheck = document.getElementById("zip").value;
    var expirecheck = document.getElementById("expire").value;
    var securitycheck = document.getElementById("securitycode").value;
    */




    if (fnamecheck == '') {
        console.log("hello");
        alert("First name is required.");
        return false;
    }


    if (lnamecheck == '') {

        alert("Last name is required.");
        return false;
    }


    if (cardcheck == '') {

        alert("Please provide a credit card information");
        return false;
    }


    if (cardcheck.length != 16) {

        alert("Please provide 16 digits for credit card information.");
        return false;
    }

    if (zipcheck == '') {

        alert("Zipcode required.");
        return false;
    }

    if (zipcheck.length != 5) {

        alert("Please provide 5 digit zipcode");
        return false;
    }

    if (securitycheck == '') {

        alert("Please provide security code");
        return false;
    }


    if (securitycheck.length != 3) {

        alert("Please provide 3 digit security code.");
        return false;
    }

}

function empty() {
    x = document.getElementById("input1").value;
    y = document.getElementById("input2").value;
    z = document.getElementById("input3").value;
    a = document.getElementById("input4").value;

    b1 = document.getElementById("p").checked;
    b2 = document.getElementById("l").checked;
    b3 = document.getElementById("b").checked;

    if (x == "") {
        alert("title is empty!");
        return false;
    } else if (y == "") {
        alert("url is empty!");
        return false;
    } else if (z == "") {
        alert("price is empty!");
        return false;
    } else if (a == "") {
        alert("description is empty!");
        return false;
    }
    if (!(b1 || b2 || b3)) {
        alert("select a type!");
        return false;
    } else {
        return true;
    }
}