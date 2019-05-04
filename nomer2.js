const is_username_valid = (input) => {
  if (input.length == 8 && /^[a-z]+$/.test(input) ){
  		return true;
  } else {
  		return false;
  }
}

const is_password_valid = (input) => {
	if (input.length >= 8 && /[a-z]/.test(input) && /[A-Z]/.test(input) && /[0-9]/.test(input) && /\W|_/g.test(input) ) {
		return true;
	} else {
		return false;
	}
}

