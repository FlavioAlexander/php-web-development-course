function LogIn(){
	
	var userID = prompt("Enter User ID");
	var pssw = prompt("Enter password");
	
	var theForm, newInput1, newInput2;

	theForm = document.createElement('form');
	theForm.action = 'loginValidator.php';
	theForm.method = 'post';

	newInput1 = document.createElement('input');
	newInput1.type = 'hidden';
	  newInput1.name = 'username';
	  newInput1.value = userID;

	newInput1 = document.createElement('input');
	  newInput1.type = 'hidden';
	  newInput1.name = 'password';
	  newInput1.value = pssw;	
		
	theForm.appendChild(newInput1);
	theForm.appendChild(newInput2);

	  document.getElementById('form_container').appendChild(theForm);

	  theForm.submit();
}

function Slider ()
{
    $(".slider #1").fadeIn(500);

    $(".slider #1").delay(3000).hide("slide", {
        direction: "left"
    }, 500);

    var counter = $(".slider img").length; // This should be a property, not a function.
    var count = 2;

    setInterval(function ()
    {
        $(".slider #" + count).fadeIn(500);
        $(".slider #" + count).delay(3000).hide("slide", {
            direction: "left"
        }, 500);

        if (count == counter) {
            count = 1;
        } else {
            count = count + 1;
        }
    }, 4000); // You were passing the interval time to the end of the else.
}