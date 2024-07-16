<?php
declare(strict_types = 1);

namespace Embed\Adapters\Gist\Detectors;

use DateTime;
use Embed\Detectors\PublishedTime as Detector;

class PublishedTime extends Detector
{
    public function detect(): ?DateTime
    {
        $api = $this->extractor->getApi();

        return $api->time('created_at')
            ?: parent::detect();
    }
}
