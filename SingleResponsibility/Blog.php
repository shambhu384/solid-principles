<?php

/**
 * Blog class
 */

class Blog {

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $content;

    /**
     * Constructor
     *
     * @param string $content
     */
    public function __construct($title, $content) {
        $this->title = $title;
        $this->content = $content;
    }

    /**
     * Show blog
     */
    public function render_deprecated($format = 'html') {
        switch ($format) {
            case 'html':
                echo "<html>
                        <p> $this->title </p>
                        <article> $this->content </article>
                      </html>";
                break;
            case 'json':
                echo json_encode(['title' => $this->title, 'content' => $this->content]);
            break;
            default:
                throw new exception('Unsupported format');
            break;
        }
    }

    /**
     * Show blog
     */
    public function render($formatter) {
        $formatter->format(['title' => $this->title, 'content' => $this->content]);
    }
}
