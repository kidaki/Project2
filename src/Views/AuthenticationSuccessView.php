<?php

namespace Views;


class AuthenticationSuccessView extends View
{
    public function __construct()
    {
        $this->content = <<<END
<!DOCTYPE html>
<html>
<head>
    <title>Failed To Login</title>
    <link rel="stylesheet" href="/css/normalize.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/skeleton.css" type="text/css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="/css/styles.css" type="text/css" media="screen" title="no title" charset="utf-8">
</head>
<body>
<div class='container'>
    <div class='row'>
        <h2>Logged in successfully...</h2>
        <a href='/'>Go Home?</a>
    </div>
</div>
</body>
</html>
END;
    }
}
