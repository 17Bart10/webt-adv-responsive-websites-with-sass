<?php
namespace Htlw3r\Bootube;

interface VideoInterface{
    /**
     * @return string Returns given Video Name
     */
    public function getVideoName() : string;

    /**
     * @return string Returns source Platform of the Video
     */
    public function getVideoSource() : string;

    /**
     * @return string Returns HTMl Code for embedding Video on Page.
     *
     */
    public function getVideoEmbedCode() : string;
}
