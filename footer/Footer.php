<?php

/**
 * Created by PhpStorm.
 * User: miniwolf
 * Date: 23-09-2016
 * Time: 00:22
 */
class Footer {
    private $root;

    /**
     * Footer constructor.
     * @param string $root
     */
    public function __construct($root) {
        $this->root = $root;
    }

    public function PrintFooter() {
        $this->ConstructListElement("twitter", "@miniwolf", "http://twitter.com/miniwolf", "/i/twitter.png", "Twitter");
        $this->ConstructListElement("youtube", "YouTube Channel", "http://youtube.com/user/miniwolf1508", "/i/youtube.png", "Youtube");
        $this->ConstructListElement("inbox", "Mail to miniwolf1508@gmail.com", "mailto:miniwolf1508@gmail.com", "/i/inbox.png", "Inbox");
    }

    private function ConstructListElement($cssClass, $title, $url, $filePath, $alt) {
        printf('<li class="' . $cssClass . '" title="' . $title . '">' . $this->ConstructLink($url, $filePath, $alt) . '</li>');
    }

    private function ConstructLink($url, $filePath, $alt) {
        return '<a target="_blank" href="' . $url. '"><img src="' . $this->root . $filePath .'" alt="' . $alt . '"></a>';
    }
}