examples
========

A Symfony project created on November 5, 2016, 4:53 am.

<h1>Checklist</h1>
The following example is based upon the documentation that is found on the symfony site:
<a href="http://symfony.com/doc/current/index.html" target="_blank">http://symfony.com/doc/current/index.html</a>
<ol>
<li><h2>Setup</h2>
[<a href="http://symfony.com/doc/current/setup.html" target="_blank">Doc Link</a>]
    <ol>
        <li><strong>Installing symfony into user/local/bin</strong>
            <ol>
                <li>$ sudo mkdir -p /usr/local/bin</li>
                <li>$ sudo curl -LsS https://symfony.com/installer -o /usr/local/bin/symfony</li>
                <li>$ sudo chmod a+x /usr/local/bin/symfony</li>
            </ol>
        </li>

        <li><strong>Creating a new symfony app via the Symfony installer:</strong>
            <ol>
                <li>symfony new {my_project_name}</li>
                <li>symfony new {my_project_name} {version number, i.e. 3.1.}</li>
                <li>$ cd my_project_name/</li>
                <li>$ composer update</li>
                <li>$ bin/console security:check (to check for dependency vulnerabilities</li>
                <li><strong style="color:red">NEEDS TO BE WRITABLE:</strong> chmod -R 777 {my_project_name}/var/cache/</li>
                <li><strong style="color:red">NEEDS TO BE WRITABLE:</strong> chmod -R 777 {my_project_name}/var/logs/</li>
            </ol>
        </li>

        <li><strong>Other setup options</strong>
            <ol>
                <li><strong><a href="https://github.com/symfony/symfony-demo" target="_blank">Symfony Demo Application</a></strong> - This is a fully-functional application that shows the recommended way to develop Symfony applications. The app has been conceived as a learning tool for Symfony newcomers and its source code contains tons of comments and helpful notes.</li>
                <li><strong><a href="https://github.com/symfony-cmf/standard-edition" target="_blank">The Symfony CMF Standard Edition</a></strong> - The Symfony CMF is a project that helps make it easier for developers to add CMS functionality to their Symfony applications. This is a starting project containing the Symfony CMF.</li>
                <li><strong><a href="https://github.com/gimler/symfony-rest-edition" target="_blank">The Symfony REST Edition</a></strong> - Shows how to build an application that provides a RESTful API using the FOSRestBundle and several other related Bundles.</li>
            </ol>
        </li>


        <li><strong>Running the new Symfony app:</strong>
            <ol>
                <li>php bin/console server:run (to run the php server)</li>
                <li>Control + C (to quit the php server)</li>
            </ol>
        </li>
    </ol>
</li>

<li><h2>Creating Pages</h2>
[<a href="http://symfony.com/doc/current/page_creation.html" target="_blank">Doc Link</a>]
    <ol>
        <li><strong>Example Controller:</strong><br/>
            By creating a new controller in: app/src/AppBundle/Controller, we make it available via the web browser.<br/>
            For this example we use the controller, LuckyController.php, then we can go to the web address:<br/>
            <a href="http://localhost/symfony31byExample/examples/web/app_dev.php/lucky/number">http://localhost/symfony31byExample/examples/web/app_dev.php/lucky/number</a>
            <img src="https://github.com/generhim/symfony-31-by-Example/blob/master/examples/notes/LuckyController_example.png?raw=true"/><br/>
            (See the actual controller to copy, edit, analyze example.)
        </li>
    </ol>
</li>


<li><h2>Routing</h2>
[<a href="http://symfony.com/doc/current/routing.html" target="_blank">Doc Link</a>]
    <ol>
        <li></li>
    </ol>
</li>


<li><h2>Creating Pages</h2>
[<a href="http://symfony.com/doc/current/page_creation.html" target="_blank">Doc Link</a>]
    <ol>
        <li></li>
    </ol>
</li>

</ol>
