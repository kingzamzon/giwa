console.log(document.querySelector('.modal-content'));

	document.querySelector('.modal-content').addEventListener('click', (e)=>{
		if (e.target.classList.contains('loginHere')){
			document.querySelector('.modal-content').innerHTML = `
			<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLongTitle">Log In and Get 5% off!</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
          <p>Enjoy the great style of comtemporary casuals here at Arcstores</p> <br>
					<div id="spinner" class=''></div>
					<form class='dynamicForm'>
						<div class="form-group">
							<label for="logEmail">Email</label>
							<input type="email" class="form-control" placeholder='Email Address' id='logEmail'>
						</div>
						<div class="form-group">
							<label for="logPwd">Password</label>
							<input type="password" class="form-control" placeholder='Password' id='logPwd'>
						</div>
					</form>

					<p>New here? <a href='#' class='signUpHere'>Sign Up for Free</a></p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary btn-block signUp">Log In</button>
				</div>
			`
			e.preventDefault();
		}
	})

	document.querySelector('.modal-content').addEventListener('click', (e)=>{
		if (e.target.classList.contains('signUpHere')){
			document.querySelector('.modal-content').innerHTML = `
			<div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Sign Up and Get 5% off!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<p>Be the first to know about the latest fashion news and get exclusive offers </p> <br>
				<form class='dynamicForm'>
					<div class="form-group row">
						<div class="col-md-6">
							<label for='signFirstName'>First Name</label>
							<input type="text" placeholder='Firstname' class='form-control' id='signFirstName'>
						</div>
						<div class="col-md-6">
							<label for='signLastName'>Last Name</label>
							<input type="text" placeholder='Lastname' class='form-control' id='signLastName'>
						</div>
          </div>
					<div id="spinner" class=''></div>
					<div class="form-group">
						<label for="signEmail">Email</label>
						<input type="email" class="form-control" placeholder='Email Address' id='signEmail'>
					</div>
					<div class="form-group row">
						<div class="col-md-6">
							<label for='signPwd'>Password</label>
							<input type="password" placeholder='Password' class='form-control' id='signPwd'>
						</div>
						<div class="col-md-6">
							<label for='signCpwd'>Confirm Password</label>
							<input type="password" placeholder='Confirm Password' class='form-control' id='signCpwd'>
						</div>
					</div>
				</form>

				<p>Already a user? <a href='#' class='loginHere'>Login here</a></p>
			</div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-block signUp">Sign Up</button>
      </div>
    </div>
			`
			e.preventDefault();
		}
	});

	document.querySelector('.modal-content').addEventListener('click',(e)=>{
		if(e.target.classList.contains('signUp')){
			if(e.target.innerText === 'Sign Up'){
				console.log('isSignUp');
				signUp();
			}else if(e.target.innerText === 'Log In'){
				console.log('isLogIn');
				logIn();
			}

			e.preventDefault();
		}
	})

	function logIn() {
		let email = document.querySelector('#logEmail').value;
		let  pwd = document.querySelector('#logPwd').value;

		console.log({email, pwd});
	}

	function signUp() {
		let email = document.querySelector('#signEmail').value;
		let  pwd = document.querySelector('#signPwd').value;
		let fname = document.querySelector('#signFirstName').value;
		let lname = document.querySelector('#signLastName').value;

		console.log({email, pwd, fname, lname});
	}