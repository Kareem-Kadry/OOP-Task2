<?php 
class FullStack extends Course{
    private $backend_frame_work;
    private $frontend_frame_work;
    public function set_languages($backend_frame_work,$frontend_frame_work)
    {
        $this->backend_frame_work = $backend_frame_work;
        $this->frontend_frame_work = $frontend_frame_work;
    }
    public function get_languages()
    {
        echo "We are going to learn $this->frontend_frame_work for frontend and $this->backend_frame_work for backend<br>";
    }

}