<?php

class HtmlFormatter {

    function format($data) {
        echo "<html>
            <p> {$data['title']} </p>
            <article> {$data['content']} </article>
            </html>";
    }
}
