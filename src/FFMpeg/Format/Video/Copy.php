<?php

namespace FFMpeg\Format\Video;

use FFMpeg\Format\Audio\DefaultAudio;
use FFMpeg\Format\VideoInterface;

class Copy extends DefaultAudio implements VideoInterface
{
    public function __construct($audioCodec = 'aac')
    {
        $this
            ->setAudioCodec($audioCodec);
    }

    public function getAvailableAudioCodecs()
    {
        return array('copy', 'aac', 'libvo_aacenc', 'libfaac', 'libmp3lame', 'libfdk_aac');
    }

    public function getKiloBitrate()
    {
        return 0;
    }

    public function getModulus()
    {
        return 1;
    }

    public function getVideoCodec()
    {
        return 'copy';
    }

    public function supportBFrames()
    {
        return false;
    }

    public function getAvailableVideoCodecs()
    {
        return ['copy'];
    }

    public function getAdditionalParameters()
    {
        return null;
    }

    public function getInitialParameters()
    {
        return null;
    }
}
