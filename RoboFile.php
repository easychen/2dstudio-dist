<?php
/**
 * This is project's console commands configuration for Robo task runner.
 *
 * @see https://robo.li/
 */
class RoboFile extends \Robo\Tasks
{
    // define public methods as commands
    // define public methods as commands
    public function buildImage()
    {
        $version = time();
        $this->_exec("docker build -t 2dstudio . && docker tag 2dstudio easychen/2dstudio:latest && docker push easychen/2dstudio:latest&& docker tag 2dstudio easychen/2dstudio:$version && docker push easychen/2dstudio:$version");
        $this->say("Build image easychen/2dstudio:$version");
    }
}
