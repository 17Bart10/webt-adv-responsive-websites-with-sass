<?php
namespace Htlw3r\Bootube;

class YouTubeVideo extends Video implements VideoInterface
{
    private string $id;
    private const VIDEOSOURCE = 'YouTube';
    private string $videoEmbedCode;

    function __construct($name, $id)
    {
        $this->id=$id;
        parent::__construct($name);
    }

    function getVideoName(): string
    {
        return parent::getVideoName();
    }

    function getVideoSource(): string
    {
        return self::VIDEOSOURCE;
    }

    function getVideoEmbedCode(): string
    {
        return <<<VIDEO

            <iframe src="https://www.youtube.com/embed/{$this->id}" title="{$this->getVideoName()}" frameborder="0" 
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
            <p class="infos mt-1"><b><u>Title:</u></b> {$this->getVideoName()} <br> <b><u>Origin:</b></u> {$this->getVideoSource()}</p>
            
        VIDEO;
}


}