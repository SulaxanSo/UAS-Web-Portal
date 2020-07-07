var objPeople = [
	{ // Object @ 0 index
		username: "hallo",
		password: "hallo"
	}

]

function getInfo() {
	var username = document.getElementById('inputUsername').value
	var password = document.getElementById('inputPassword').value

	for(var i = 0; i < objPeople.length; i++) {
		// check is user input matches username and password of a current index of the objPeople array
		if(username == objPeople[i].username && password == objPeople[i].password) {
			console.log(username + " is logged in!!!")
			// stop the function if this is found to be true
			window.location.replace("index.html");
            return
		}
	}
	console.log("incorrect username or password")
}