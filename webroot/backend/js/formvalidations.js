/* ****** ****** ****** ****** ****** **
 * ****** Register, Profile Edit Form ****** *
** ****** ****** ****** ****** ****** */ 
$(document).ready(function() {
    $('#reg_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        min: 2,
                    },
                        notEmpty: {
                        message: 'Please supply your first name'
                    }
                }
            },
             last_name: {
                validators: {
                     stringLength: {
                        min: 2,
                    },
                    notEmpty: {
                        message: 'Please supply your last name'
                    }
                }
            },
           
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            },
            address: {
                validators: {
                     stringLength: {
                        min: 8,
                    },
                    notEmpty: {
                        message: 'Please supply your street address'
                    }
                }
            },
            city: {
                validators: {
                     stringLength: {
                        min: 4,
                    },
                    notEmpty: {
                        message: 'Please supply your city'
                    }
                }
            },
            state: {
                validators: {
                    notEmpty: {
                        message: 'Please select your state'
                    }
                }
            },
            zip: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your zip code'
                    },
                    zipCode: {
                        country: 'US',
                        message: 'Please supply a vaild zip code'
                    }
                }
            },
		comment: {
                validators: {
                      stringLength: {
                        min: 10,
                        max: 200,
                        message:'Please enter at least 10 characters and no more than 200'
                    },
                    notEmpty: {
                        message: 'Please supply a description about yourself'
                    }
                    }
                 },	
	 email: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your email address'
                    },
                    emailAddress: {
                        message: 'Please supply a valid email address'
                    }
                }
            },
					
	password: {
            validators: {
                identical: {
                    field: 'confirmPassword',
                    message: 'Confirm your password below - type same password please'
                }
            }
        },
        confirmPassword: {
            validators: {
                identical: {
                    field: 'password',
                    message: 'The password and its confirm are not the same'
                }
            }
         },
			
            
            }
        })
		
 	
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
                $('#reg_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});    
/* ****** ****** ****** ****** ****** **
 * ****** Forgot Password Form ****** *
** ****** ****** ****** ****** ****** */
$(document).ready(function() {
    $('#ForgotPasswordForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            Email: {
                validators: {
					notEmpty: {
                        message: 'Please enter your Email Address'
                    },
                    emailAddress: {
                        message: 'Please enter a valid Email Address'
                    }
                }
            },  
            }
        })
		
 	
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#ForgotPasswordForm').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
        $("#btnReset").on("click", function () {
            $("#ForgotPasswordForm").bootstrapValidator("resetForm", true);
            // Form first field                              
            $('#ForgotPasswordForm').find('[name="Email"]').focus();
        });
}); 
/* ****** ****** ****** ****** ****** **
 * ****** Change Password Form ****** *
** ****** ****** ****** ****** ****** */
$(document).ready(function() {
    $('#changePwdFormID').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            CurrentPassword: {
                validators: { 
					stringLength: {
							min: 8,
							max: 20
					},
					notEmpty: {
                        message: 'Please enter your Current Password'
					},
                    regexp: {
                        regexp: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[$@!%?&]).{8,20}$/,
                        message: 'The username can only consist of alphabetical, number and special characters'
                    }
                }
            },  
			PasswordHash: {
				validators: {
					stringLength: {
								min: 8,
								max: 20,
								message:'Please enter at least 8 characters and no more than 20'
							},
					identical: {
					    field: 'ConfirmPasswordHash',
						message: 'Confirm your Password below - type same Password please'
					},
					notEmpty: {
					    message: 'Please enter your New Password'
					},
					regexp: {
					    regexp: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[$@!%?&]).{8,20}$/,
					    message: 'The username can only consist of alphabetical, number and special characters'
					}
				}
			}, 
			ConfirmPasswordHash: {
				validators: {
					stringLength: {
						min: 8,
						max: 20,
						message:'Please enter at least 8 characters and no more than 20'
					},
					identical: {
					    field: 'PasswordHash',
						message: 'The password and its confirm password are not the same'
					},
					notEmpty: {
						message: 'Please enter your Confirm New Password'
					}
                    ,
					regexp: {
					    regexp: /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[$@!%?&]).{8,20}$/,
					    message: 'The username can only consist of alphabetical, number and special characters'
					}
				}
			 },  
            }
        })
		
 	
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow") // Do something ...
            $('#changePwdFormID').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Get the BootstrapValidator instance
            var bv = $form.data('bootstrapValidator');

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
        $("#btnReset").on("click", function () {
            $("#changePwdFormID").bootstrapValidator("resetForm", true);
            // Form first field                              
            $('#changePwdFormID').find('[name="CurrentPassword"]').focus();
        });
}); 
 