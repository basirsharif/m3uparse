<?php

namespace zikwall\m3uparse;

class Configure
{
    public $rootDirectory = '';
    /**
     * @var string
     */
    public $playlistUploadDirectory = '';
    /**
     * @var string
     */
    public $epgUploadDirectory = '';
    /**
     * @var string
     */
    public $channelsDirectory = '';

    /**
     * Configure constructor.
     * @param string $root
     * @param string $playlistUploadDir
     * @param string $epgUploadDir
     * @param string $channelsDir
     */
    public function __construct(string $root, string $playlistUploadDir = '', string $epgUploadDir = '', string $channelsDir)
    {
        $this->rootDirectory = $root;
        $this->playlistUploadDirectory = $playlistUploadDir;
        $this->epgUploadDirectory = $epgUploadDir;
        $this->channelsDirectory = $channelsDir;
    }
}