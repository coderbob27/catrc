
        <?php
            require_once('vendor/autoload.php');
            use DiDom\Document;
            $document = new Document('https://pik.ru/search', true);
            $sub_headings = $document->find('.styles__PriceRowValue-sc-15v0uww-4::text()');

            foreach($sub_headings as $sub) {
                echo $sub;
            }
        ?>
