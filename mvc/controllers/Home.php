<?php
class Home extends Controller
{
    public function show()
    {
        $this->view("content_layout", [
            "page" => "home"
        ]);
    }
}

?>