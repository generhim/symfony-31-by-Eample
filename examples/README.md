examples
========

The purpose of this README.md is to give a more concise checklist of all the different parts of Symfony covered by their official documentation. <br/>

Why?

<ol>
<li>Because I believe that having a working example is far more instructive than simply reading documentation. When we see that actual code is working in an app we know that the documentation provided has a much higher probability of being reliable as a reference source.</li>
<li>There is a lot of information in the current Symfony Documentation. The purpose here is to make a checklist (of sorts) for people whom have already read the documentation and want a quick reference/refresher course.</li>
</ol>

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
                <li><strong>IMPORTANT!</strong> The following directories need to be writable by the system in order to save the cache and logs. If not the app will halt. If you can not fix the permissions of the app to work within the web server and simply working on a dev environment you can sometimes just chmod both directories recursively to 777. However that is just a band aid and should be discouraged.
                    <ol>
                        <li>{my_project_name}/var/cache/</li>
                        <li>{my_project_name}/var/logs/</li>
                    </ol>
                </li>
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
            <ol>
                <li><strong>Checklist</strong>
                    <ol>
                        <li><strong>Creating the route:</strong> The @Route("/lucky/number") determines the url pattern.
                        <li><strong>Create a controller:</strong> The method -- numberAction() is called a "controller" -- the function where you build the page and ultimately return a Response object. This seems to be kind of bullshit (IMHO) because we are now mixing up the use of the terminology: the class is known as the LuckyCONTROLLER, but the methods are also "controllers"? A rather weird choice by Symfony. But oh well...</li>
                    </ol>
                </li>

            </ol>
        </li>
        <li><strong>Example using Twig Templating:</strong><br/>
        The second method/"controller" here, twig_numberAction() is the focus here. We are going to create a new "controller" that uses the twig, $this->render() method.<br/>
            <img src="https://github.com/generhim/symfony-31-by-Example/blob/master/examples/notes/LuckyController_twigExample.png?raw=true" /><br/>
            <ol>
                    <li><strong>Checklist</strong>
                    <ol>
                        <li>use the Symfony\Bundle\FrameworkBundle\Controller\Controller base class.</li>
                        <li>Extend the controller with the base Controller class.</li>
                        <li>Use the twig, $this->render() method for passing values to the template.</li>
                        <li>Create the new twig template at {my_app}/app/Resource/views/{your_controller_name}/{your_twig_template_name}.twig</li>
                    </ol>
                </li>

            </ol>

        </li>
        <li><strong>Checklist of other useful stuff/context</strong><br/>
            <ol>
                <li><strong>The Web Debug Toolbar</strong> - very useful. And only visible if you're running the app through the app_dev.php front controller.<br/>For Example:<br/>
                    http://localhost/symfony31byExample/examples/web/app_dev.php/lucky/number<br/><br/>
                    The numberAction controller is run through the app_dev.php and therefore we see the toolbar on the bottom of the page.
                </li>
                <li><strong>Symfony functionality derives from "bundles." All plugins for Symfony are bundles.</strong></li>
                <li><strong>Bundles are registered in the {name_of_your_app}/app/AppKernel.php.</strong> Instances of each bundle is instantiated and available from the $bundles array created in the AppKernel.php.</li>
                <li><strong>The bundles give you more "tools" a.k.a. services... </strong></li>
                <li><strong>Configurations for bundle behavior is saved in app/config/config.yml</strong></li>
            </ol>
        </li>
    </ol>
</li>


<li><h2>Routing</h2>
[<a href="http://symfony.com/doc/current/routing.html" target="_blank">Doc Link</a>]
<ol>
    <li><strong>Highlights of Routes</strong><br/>
    <ol>
        <li>Create complex routes that map to controllers</li>
        <li>Generate URLs inside templates and controllers</li>
        <li>Load routing resources from bundles (or anywhere else)</li>
        <li>Debug your routes</li>
    </ol>
    </li>
    <li><strong>Routing Example 1 </strong>
        <ol>
            <li><img src="https://github.com/generhim/symfony-31-by-Example/blob/master/examples/notes/RoutingController_example001.png?raw=true"/></li>
            <li><strong>Checklist:</strong>
                <ol>
                    <li><strong>@Route("/blog", name="blog_list")</strong> - matches /blog exactly.</li>
                    <li><strong>@Route("/blog/{slug}", name="blog_show")</strong> - matches /blog/*</li>
                    <li><strong>Placeholders: {thisIsAPlaceholder} are counted as wildcards.</strong> - </li>
                    <li><strong>Routing can also happen in other formats such as YAML, XML, and PHP.</strong> In these formats the <strong>_controller</strong> defaults values is a special key which tells Symfony which controller to execute when a URL matches the route.</li>
                    <li><strong>_controller</strong> is known as the <strong>logical name</strong> which points to a specific PHP class and method.</li>
                    <li><strong>@Route("/blog/{page}", name="blog_list", requirements={"page": "\d+"})</strong> - Giving {placeholders} default values. In order to do that set up the param requirement in the route and then set the argument in the method with a default value.</li>
                    <li><strong>With routes, the first param of @Route(), is the url, the seccod are defaults, and the third are requirements.</strong> With the defaults and the requirements we pass JSON objects as the key-value pair to specify each. See the example below: <br/>
                    <img src="https://github.com/generhim/symfony-31-by-Example/blob/master/examples/notes/RoutingController_example002.png?raw=true"/></li>
                    <li><h3>Special Routing Parameters</h3>

                    <li><strong>Routing is "bidirectional."</strong> This means it is also used for generating URLs</li>
                </ol>
            </li>
        </ol>
    </li>
    <li><strong>Generating URLs</strong><br/>
        <ol>
            <li></li>
        </ol>
    </li>
</ol>
</li>


<li><h2>Controllers</h2>
[<a href="http://symfony.com/doc/current/controller.html" target="_blank">Doc Link</a>]
    <ol>
        <li>A controller reads the information from the Symfony Request object and creates a return Response object. </li>
        <li>The Response could be HTML, JSON, XML, a file download, a redirect, an 404 error, etc.</li>
        <li><h2>Some Controller Characteristics</h2>
            <ol>
                <li>It uses the namespace</li>
                <li>It uses the Symfony\Component\HttpFoundation\Response class</li>
                <li>The controller can be called anything, but should end with "Controller" -- not required but needed by some shortcuts.</li>
                <li>Each action method must end with "Action"</li>
                <li>The controller creates a Response object which is returned.</li>
                <li>Each method makes use of @Route("myUrl");</li>
            </ol>
        </li>
        <li><h2>The Base Controller</h2>
            <ol>
                <li>Makes a number of helper methods and the service container array-like object available for use.</li>
            </ol>
        </li>
    </ol>
</li>


<li><h2>Templates</h2>
[<a href="http://symfony.com/doc/current/templating.html" target="_blank">Doc Link</a>]
    <ol>
        <li></li>
    </ol>
</li>


<li><h2>Configuration</h2>
[<a href="http://symfony.com/doc/current/configuration.html" target="_blank">Doc Link</a>]
    <ol>
        <li></li>
    </ol>
</li>



</ol>
