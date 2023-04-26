<?php
class About extends Controller
{
    public function show()
    {
        $this->view("content_layout", [
            "page" => "about"
        ]);
    }
}

?>