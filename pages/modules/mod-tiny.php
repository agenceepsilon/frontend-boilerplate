<?php
    // INT to DEV
    // Module : Style WYSIWYG général
    // Option : class "editor" obligatoire
?>

<article class="module article">
    <h1 class="title"><?php echo((isset($pageTitle[$page])) ? $pageTitle[$page].' ' : 'Page : '.$page.' '); ?></h1>

    <div class="editor">
        <h2>H2. Heading</h2>

        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. <strong>Sed condimentum tristique tortor, ut
                vulputate ligula mollis scelerisque</strong>. Suspendisse tincidunt, dui et dignissim posuere, diam
            lectus ultricies arcu, sollicitudin elementum ante felis vitae urna. <em>Donec eleifend dapibus
                molestie</em>. <a title="Titre du lien" href="#" target="_blank">Praesent sed odio eu ante faucibus
                dignissim in non velit</a>. Cras sit amet ornare est. Mauris a turpis metus. Nullam a leo sit amet
            libero vulputate ullamcorper. Pellentesque orci dolor, porta nec fringilla et, adipiscing sed nisl.
            Curabitur id urna nisl, sed cursus ante. Cras tincidunt neque sit amet nunc pellentesque tempus. Fusce
            suscipit velit id turpis euismod ac accumsan velit tincidunt.</p>

        <h2>H2. Heading</h2>

        <h3>H3. Heading</h3>
        <h4>H4. Heading</h4>
        <h5>H5. Heading</h5>
        <h6>H6. Heading</h6>

        <h2>H2. Heading</h2>

        <p><img class="alignleft" alt="" src="http://placehold.it/100x100" height="100" width="100">Praesent purus
            tortor, volutpat eu elementum rhoncus, facilisis eget dolor.Cras ut est magna, in mattis nulla. Etiam ut
            sapien ut neque egestas vulputate. Cras non elit at libero elementum posuere a id ante. Curabitur aliquet
            facilisis commodo. Pellentesque auctor, justo a sodales accumsan, diam eros dignissim libero, vitae porta
            neque diam pulvinar dui. Aliquam malesuada, dolor sit amet gravida vulputate, nisl urna placerat nisl, in
            hendrerit libero turpis ut lectus. Curabitur non arcu felis, sit amet elementum eros.</p>

        <h3><img class="alignleft" alt="" src="http://placehold.it/100x100" height="100" width="100">H3. Heading</h3>

        <p>Quisque vitae velit lectus, sed tempus elit. Etiam in est libero, vitae rhoncus diam. Maecenas et purus ante.
            Maecenas euismod mi sit amet odio porta convallis. Pellentesque porta nisl euismod diam sodales at
            pellentesque diam sodales. Duis ac molestie dolor. Cras fermentum fringilla est et tristique. Sed tristique
            odio eget sapien semper fringilla. Nam adipiscing consectetur blandit. Vestibulum scelerisque gravida
            ornare. Proin molestie volutpat sem, et consequat turpis dignissim quis. Pellentesque ornare tellus nec nisl
            ullamcorper venenatis. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
            Donec non laoreet est.</p>

        <p>
            <img class="aligncenter" alt="" src="http://placehold.it/360x150" height="150" width="360">
        </p>
        <h4>H4. Heading</h4>
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
        <blockquote><p>Donec varius lorem blandit diam consequat porttitor. Sed a tellus vel metus ultricies dictum.
                Donec pretium mollis metus, ut pretium mi aliquet eget. Nullam vehicula vehicula iaculis. Suspendisse
                pharetra nulla id arcu volutpat sit amet cursus elit fringilla. Sed ut erat in metus auctor ultricies id
                eu est. Quisque vitae sapien ut enim sagittis ullamcorper vitae in purus.</p></blockquote>
        <h5>H5. Heading</h5>

        <p><img class="alignright" alt="" src="http://placehold.it/100x100" height="100" width="100">Nullam velit ante,
            facilisis ut pellentesque nec, sollicitudin ac nunc. Aenean vestibulum velit id mauris laoreet non
            ullamcorper justo eleifend. Morbi id lectus eu mauris dignissim pretium. Nunc varius nulla mollis felis
            vehicula iaculis. Suspendisse a justo nisl. Praesent vitae enim ipsum, at pharetra lectus. Aenean bibendum
            aliquam velit, non mollis ipsum dignissim vel. Curabitur elementum quam eu odio porta vel pharetra dui
            sollicitudin. Sed faucibus odio eu nulla facilisis malesuada eu nec lectus. Curabitur ornare neque ut velit
            ornare id ultricies orci aliquam. Vestibulum consectetur varius massa et ultricies. Duis nec hendrerit
            velit. Nam rutrum sem id nibh sagittis nec pellentesque tellus sodales.</p>
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
        <p>Etiam a egestas sem. Praesent velit neque, semper et molestie vel, mattis id tellus. Cras convallis nulla id
            nunc suscipit sed pellentesque nisi pretium. Nam felis lectus, sodales nec pellentesque sit amet, consequat
            in sem. Sed pharetra pretium sagittis. Pellentesque habitant morbi tristique senectus et netus et malesuada
            fames ac turpis egestas. Aliquam volutpat augue vitae odio sagittis sed euismod felis semper. In
            sollicitudin massa eu nisl mollis ac ornare massa aliquam. Praesent at urna lacus, at pretium purus. Aliquam
            molestie mattis erat, feugiat sodales justo ornare a. Nulla facilisi. Aenean quam turpis, dignissim ac
            elementum eu, viverra hendrerit nisl. Donec tortor lorem, malesuada ac sagittis sit amet, ornare in
            ipsum.</p>
        <h6>H6. Heading</h6>
        <table>
            <tbody>
            <tr>
                <th>Titre</th>
                <th>Titre</th>
                <th>Titre</th>
                <th>Titre</th>
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