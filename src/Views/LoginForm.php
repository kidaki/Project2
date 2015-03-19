<?php

namespace Views;


class LoginForm extends View
{
    public function __construct()
    {
        $this->content = <<<LOGIN_FORM
<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <link rel="stylesheet" href="/css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/skeleton.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>
<body>
    <div class='container'>
        <h3 class='section-heading'> User Login Form</h3>
        <div class='row'>
            <form action='/auth' method='post'>
            <div class='two columns'>
                <label>Username</label>
            </div>
            <div class='six columns'>
                <input type='text' name='username' placeholder='david'/>
            </div>
        </div>
        <div class='row'>
            <div class='two columns'>
                <label>Password</label>
            </div>
            <div class='six columns'>
                <input type='password' name='password' placeholder='test'/>
            </div>
        </div>
        <div class='row'>
            <div class='two columns'>
                <label>Auth Choices</label>
            </div>
            <div class='two columns'>
            In Memory <input type='radio' name='auth' value='inmemory'/>
            </div>
            <div class='two columns'>
            File Based <input type='radio' name='auth' value='filebased'/>
            </div>
            <div class='two columns'>
                MySQL <input type='radio' name='auth' value='mysql'/>
            </div>
            <div class='two columns'>
            SQLite <input type='radio' name='auth' value='sqlite'/>
            </div>
        </div>
        <div class='row'>
            <div class='two columns'>&nbsp</div>
            <div class='six columns'>
                <button class='button'>Submit</button>
                <a class='red button' href='/'>Cancel</a>
            </div>
        </div>
    </div>
</body>
</html>
LOGIN_FORM;
    }
}
