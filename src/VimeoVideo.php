<?php
namespace Htlw3r\Bootube;

class VimeoVideo extends Video implements VideoInterface
{
    private string $id;
    private const VIDEOSOURCE = 'Vimeo';
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

        <div style="padding:60% 0 0 0;position:relative;"><iframe src="https://player.vimeo.com/video/{$this->id}?h=2727f0b010&title=0&byline=0&portrait=0" 
            style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
            </div><script src="https://player.vimeo.com/api/player.js"></script> 
            <p class="infos mt-1"><b><u>Title:</u></b> {$this->getVideoName()} <br> <b><u>Origin:</b></u> {$this->getVideoSource()}</p>
            
        VIDEO;
}


}