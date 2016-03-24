<?php
    // INT to DEV
    // Module: Typography common style sample
?>

<article class="mod article">
    <h1 class="article_title"><?php echo((isset($pageTitle[$page])) ? $pageTitle[$page].' ' : 'Page : '.$page.' '); ?></h1>

    <div class="article_content">
        <h2>H2. Heading</h2>

        <h3>H3. Heading</h3>
        <h4>H4. Heading</h4>
        <h5>H5. Heading</h5>
        <h6>H6. Heading</h6>

        <h2>Paragraphs</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed condimentum tristique tortor, ut
                vulputate ligula mollis scelerisque</strong>. Suspendisse tincidunt, dui et dignissim posuere, <em>diam
                lectus ultricies arcu, sollicitudin elementum ante felis vitae urna</em>. Donec eleifend dapibus
            molestie. <a title="Titre du lien" href="#" target="_blank">Praesent sed odio eu ante faucibus dignissim in
                non velit</a>. Cras sit amet ornare est. Mauris a turpis metus. Nullam a leo sit amet libero vulputate
            ullamcorper. Pellentesque orci dolor, porta nec fringilla et, adipiscing sed nisl. Curabitur id urna nisl,
            sed cursus ante. Cras tincidunt neque sit amet nunc pellentesque tempus. Fusce suscipit velit id turpis
            euismod ac accumsan velit tincidunt.</p>

        <p><?php echo lipsum(70, 90, 'words', false); ?></p>

        <p>
            <img class="alignleft" alt="" src="http://placehold.it/100x100" height="100" width="100">
            <?php echo lipsum(70, 90, 'words', false); ?>
        </p>

        <p><?php echo lipsum(100, 110, 'words', false); ?></p>

        <p>
            <img class="alignright" alt="" src="http://placehold.it/100x100" height="100" width="100">
            <?php echo lipsum(100, 120, 'words', false); ?>
        </p>

        <p>
            <img class="aligncenter" alt="" src="http://placehold.it/360x150" height="150" width="360">
        </p>

        <h2>Lists</h2>

        <h3>Unordered list</h3>
        <ul>
            <li>Etiam a egestas sem</li>
            <li><a title="Titre du lien" href="#" target="_blank">Etiam a egestas sem</a></li>
            <li>Etiam a egestas sem
                <ul>
                    <li>Etiam a egestas sem</li>
                    <li><a title="Titre du lien" href="#" target="_blank">Etiam a egestas sem</a></li>
                    <li>Etiam a egestas sem</li>
                    <li>Etiam a egestas sem</li>
                    <li><strong>Etiam a egestas sem</strong></li>
                    <li>Etiam a egestas sem</li>
                </ul>
            </li>
            <li>Etiam a egestas sem</li>
            <li><strong>Etiam a egestas sem</strong></li>
            <li>Etiam a egestas sem</li>
        </ul>
        <h3>Ordered list</h3>
        <ol>
            <li>Etiam a egestas sem</li>
            <li><a title="Titre du lien" href="#" target="_blank">Etiam a egestas sem</a></li>
            <li>Etiam a egestas sem
                <ol>
                    <li>Etiam a egestas sem</li>
                    <li><a title="Titre du lien" href="#" target="_blank">Etiam a egestas sem</a></li>
                    <li>Etiam a egestas sem</li>
                    <li><strong>Etiam a egestas sem</strong></li>
                    <li>Etiam a egestas sem</li>
                    <li>Etiam a egestas sem</li>
                </ol>
            </li>
            <li><strong>Etiam a egestas sem</strong></li>
            <li>Etiam a egestas sem</li>
            <li>Etiam a egestas sem</li>
        </ol>
        <h2>Blockquote</h2>
        <blockquote>
            <p><?php echo lipsum(45, 65, 'words', false); ?></p>
        </blockquote>
        <h2>Table</h2>
        <table>
            <tbody>
            <tr>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
                <th>Header</th>
            </tr>
            <tr>
                <td>Lorem ipsum</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
            </tr>
            <tr>
                <td>Lorem ipsum</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
            </tr>
            <tr>
                <td>Lorem ipsum</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
            </tr>
            <tr>
                <td>Lorem ipsum</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
                <td>Lorem ipsum dolor sit amet, consectetur</td>
                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</td>
            </tr>
            </tbody>
        </table>
    </div>
</article>