<?php

namespace Views;


class TestView extends View
{
    public function __construct()
    {
        $this->content = <<<END
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>This a tst</title>
    </head>
    <body>
    <h2>Test View</h2>
    <div>This is a test</div>
    </body>
</html>
END;
    }
}
