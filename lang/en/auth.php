<?php

return [
    'login' => [
        'title' => 'Login',
        'form' => [
            'email' => 'Email address',
            'password' => 'Password',
            'remember_me' => 'Remember me',
            'submit' => 'Login',
        ],
        'forgot_password' => 'Forgot your password?',
    ],
    'register' => [
        'title' => 'Register',
        'form' => [
            'name' => 'Full name',
            'email' => 'Email address',
            'address' => 'Address',
            'password' => 'Password',
            'confirm_password' => 'Confirm password',
            'submit' => 'Register',
        ],
    ],
    'verify' => [
        'title' => 'Verify Email Address',
        'messages' => [
            'verification_link_sent' => 'A verification link has been sent to your email address.',
            'check_email_for_verification' => 'Before proceeding, please check your email for a verification link.',
            'did_not_receive_email' => 'If you did not receive the email',
            'click_here_to_request_another' => 'click here to request another',
        ],
    ],
    'confirm' => [
        'title' => 'Confirm Password',
        'messages' => [
            'confirm_password_message' => 'Please confirm your password before continuing.',
        ],
        'form' => [
            'submit' => 'Confirm password',
        ],
    ],
    'password_reset' => [
        'email' => [
            'title' => 'Reset Password',
            'form' => [
                'submit' => 'Send password reset email',
            ],
        ],
        'reset' => [
            'title' => 'Reset Password',
            'form' => [
                'password' => 'New password',
                'confirm_password' => 'Confirm password',
                'submit' => 'Reset password',
            ],
        ],
    ],
];
