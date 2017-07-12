<!DOCTYPE html>
<html>

<head>
    <title>Validate Insert</title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<style type="text/css">
span {
    color: red;
    font: 13px bold;
}
</style>

<body>
    <div class="container">
        <form name="valForm" class="form-horizontal" onsubmit="return formValidation()" action="send_details.php" method="post">
            <fieldset>
                <!-- Form Name -->
                <legend class="text-center">Form</legend>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="name">Name</label>
                    <div class="col-md-8">
                        <input id="name" name="name" type="name" class="form-control input-md"> <span id="nameal"></span>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="email">Email</label>
                    <div class="col-md-8">
                        <input id="email" name="email" type="text" class="form-control input-md"> <span id="emailal"></span>
                    </div>
                </div>
                <!-- Text input-->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="phone">Phone number</label>
                    <div class="col-md-8">
                        <input id="phone" name="phone" type="text" class="form-control input-md"> <span id="phoneal"></span>
                    </div>
                </div>
                <!-- Textarea -->
                <div class="form-group">
                    <label class="col-md-2 control-label" for="comment">Comment</label>
                    <div class="col-md-8">
                        <textarea class="form-control" id="comment" name="comment" rows="5"></textarea> <span id="txtal"></span>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-2 col-md-offset-2">
                        <button class="btn btn-primary" type="submit">Submit</button>
                        <button class="btn btn-warning" type="reset">Reset</button>
                    </div>
                </div>
            </fieldset>
        </form>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" type="text/javascript"></script>
<script type="text/javascript">
function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

function formValidation() {
    var name = document.valForm.name.value;
    var email = document.valForm.email.value;
    var phone = document.valForm.phone.value;
    var comment = document.valForm.comment.value;
    var status = false;

    if (name.length < 1) {
        document.getElementById("nameal").innerHTML = "Please enter your name";
        status = false;
    } else {
        document.getElementById("nameal").innerHTML = "";
        status = true;
    }

    if (email.length < 1) {
        document.getElementById("emailal").innerHTML = "Please enter your email";
        status = false;
    } else {

        if (validateEmail(email)) {
            document.getElementById("emailal").innerHTML = "";
            status = true;
        } else {
            document.getElementById("emailal").innerHTML = "Incorrect email";
            status = false;
        }
    }

    if (phone.length < 10) {
        document.getElementById("phoneal").innerHTML = "Please enter your Phone number";
        status = false;
    } else {
        document.getElementById("phoneal").innerHTML = "";
        status = true;
    }

    if (comment.length < 1) {
        document.getElementById("txtal").innerHTML = "Please enter your comment";
        status = false;
    } else {
        document.getElementById("txtal").innerHTML = "";
        status = true;
    }

    return status;
}
</script>

</html>
