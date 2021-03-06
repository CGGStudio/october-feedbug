<?php namespace Mrmlnc\Feedbug\Components;

use Cms\Classes\ComponentBase;
use lang;

class Feed extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'mrmlnc.feedbug::lang.component.name',
            'description' => 'mrmlnc.feedbug::lang.component.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'feedName' => [
                'title'       => 'mrmlnc.feedbug::lang.component.settings.name',
                'description' => 'mrmlnc.feedbug::lang.component.settings.name_description',
                'type'        => 'string',
                'default'     => ''
            ],
            'targetUrl' => [
                'title'       => 'mrmlnc.feedbug::lang.component.settings.target',
                'description' => 'mrmlnc.feedbug::lang.component.settings.target_description',
                'type'        => 'string',
                'default'     => 'http://'
            ],
            'maxItems' => [
                'title'             => 'mrmlnc.feedbug::lang.component.settings.max_feed',
                'description'       => 'mrmlnc.feedbug::lang.component.settings.max_feed_description',
                'type'              => 'string',
                'validationPattern' => '^[0-9]+$',
                'validationMessage' => 'mrmlnc.feedbug::lang.component.settings.max_feed_validation',
                'default'           => '10',
            ],
            'noFeedMessage' => [
                'title'        => 'mrmlnc.feedbug::lang.component.settings.feed_no_items',
                'description'  => 'mrmlnc.feedbug::lang.component.settings.feed_no_items_description',
                'type'         => 'string',
                'default'      => Lang::get('mrmlnc.feedbug::lang.component.settings.feed_no_items')
            ]
        ];
    }

    public function onRun()
    {
        $this->prepareVars();
        $this->feed = $this->page['feed'] = $this->loadFeedList();
    }

    protected function prepareVars()
    {
        $this->feedName = $this->page['feedName'] = $this->property('feedName');
        $this->targetUrl = $this->property('targetUrl');
        $this->maxItems = $this->property('maxItems');
        $this->noFeedMessage = $this->property('noFeedMessage');
    }

    protected function loadFeedList()
    {
        $url = $this->targetUrl;
        $urlHeaders = @get_headers($url);

        /**
         * Check if url is exist (HTTP:200) or not (HTTP:404)
         */
        if ($urlHeaders && (strpos($urlHeaders[0], '200'))) {
            $xml = @simplexml_load_file($url);

            for ($i=0; $i < $this->maxItems; $i++) {
                $items[$i] = $xml->channel->item[$i];
            }
        }

        /**
         * Error Output ($items -> null or empty)
         */
        if (!empty($items)) {
            $list = $items;
            $nameList = $this->property('feedName');
        }
        else {
            $list = [
                'item' => [
                    'title' => Lang::get('mrmlnc.feedbug::lang.component.error.title'),
                    'link' => $this->targetUrl,
                    'description' => Lang::get('mrmlnc.feedbug::lang.component.error.description')
                ]
            ];

            $nameList = $this->noFeedMessage;
        }

        return [
            'name' => $nameList,
            'items' => $list
        ];
    }

}
