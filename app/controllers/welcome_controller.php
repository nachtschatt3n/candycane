<?php
/**
 * welcome_controller.php
 *
 */
class WelcomeController extends AppController
{
    var $uses = array('User', 'News', 'Project');

    /**
     * index
     *
     */
    function index()
    {
        $this->set('news',$this->News->latest($this->current_user));
        $this->set('projects',$this->Project->latest($this->current_user));
    }
}
