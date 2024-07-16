<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function checkPhone() {

            //Retrieving the form data
            var number = document.getElementById("phone").value;

            //Creating the XMLHttpRequest object
            var xhr = new XMLHttpRequest();

            // Instantiating the request object
            xhr.open("POST", "check_phone.php", true);

            //Defining event listener for readystatechange event
            xhr.onload = function() {
                //check if the request is complete and successful
                if (this.readyState === 4 && this.status === 200) {
                    //inserting the response from server into an HTML element
                    document.getElementById("result").innerHTML = this.responseText;
                }else{
                    document.getElementById("result").innerHTML = "error";
                }
               
            }

            xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            //sending request to the server
           xhr.send("phone="+number);

        }
    </script>
</head>

<body>
    <form id="regForm">
        <label for="">Phone:</label>
        <div>
            <input type="number" name="phone" id="phone" onkeyup="checkPhone()">
            <p id="result"> </p>
        </div>
        <br>
    </form>

</body>

</html>

