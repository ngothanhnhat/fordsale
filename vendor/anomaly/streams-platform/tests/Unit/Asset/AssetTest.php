<?php

class AssetTest extends TestCase
{

    public function testCanDownload()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $target = 'https://gist.githubusercontent.com/RyanThompson/f75b540ecbd3bc9b5ee8614ccd4dc080/raw/01fc971eda86bd89cad8c91c9042261aeb0b5d18/test.scss';

        $path = $asset->download($target);

        $this->assertEquals(
            file_get_contents($target),
            file_get_contents($asset->realPath($path))
        );

        $content = $asset->inline($path, ["min"]);

        $this->assertEquals($content, '.test{color:#fff}.test .invert{color:#000}');
    }

    public function testPreCompilers()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        // @todo fix coffee or drop it
//        $this->assertEquals(
//            "\nalert('Hello');",
//            $asset->inline('anomaly.module.test::scripts/test.coffee')
//        );

        $this->assertEquals(
            '.test{color:#fff}.test .invert{color:#000}',
            $asset->inline('anomaly.module.test::styles/test.scss', ['min'])
        );

        $this->assertEquals(
            '.test{color:#ffffff}.test .invert{color:#000000}',
            $asset->inline('anomaly.module.test::styles/test.less', ['min'])
        );

        // @todo fix stylus or drop it
//        $this->assertEquals(
//            '.test{color:#ffffff}.test .invert{color:#000000}',
//            $asset->inline('anomaly.module.test::styles/test.styl', ['min'])
//        );

    }

    public function testInline()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $this->assertEquals(
            "\nalert('Hello');",
            $asset->inline('anomaly.module.test::scripts/test.js', ['min'])
        );

        $this->assertEquals(
            ".test{color:#ffffff}",
            $asset->inline('anomaly.module.test::styles/test.css', ['min'])
        );
    }

    public function testUrl()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $this->assertEquals(
            url('app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/scripts/test.js'),
            $asset->url('anomaly.module.test::scripts/test.js', ['noversion'])
        );
    }

    public function testPath()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $this->assertEquals(
            '/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/scripts/test.js',
            $asset->path('anomaly.module.test::scripts/test.js', ['noversion'])
        );
    }

    public function testAsset()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $this->assertEquals(
            '/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/scripts/test.js',
            $asset->asset('anomaly.module.test::scripts/test.js', ['noversion'])
        );
    }

    public function testScript()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $this->assertEquals(
            '<script foo="bar" src="/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/scripts/test.js"></script>',
            $asset->script('anomaly.module.test::scripts/test.js', ['noversion'], ['foo' => 'bar'])
        );
    }

    public function testStyle()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $this->assertEquals(
            '<link foo="bar" media="all" type="text/css" rel="stylesheet" href="/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/styles/test.css">',
            $asset->style('anomaly.module.test::styles/test.css', ['noversion'], ['foo' => 'bar'])
        );
    }

    public function testScripts()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $asset->add('test.js', 'anomaly.module.test::scripts/test.js');
        $asset->add('test.js', 'anomaly.module.test::scripts/test2.js');

        $this->assertEquals(
            [
                '<script foo="bar" src="/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/scripts/test.js"></script>',
                '<script foo="bar" src="/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/scripts/test2.js"></script>',
            ],
            $asset->scripts('test.js', ['noversion'], ['foo' => 'bar'])
        );
    }

    public function testStyles()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $asset->add('test.css', 'anomaly.module.test::styles/test.css');
        $asset->add('test.css', 'anomaly.module.test::styles/test2.css');

        $this->assertEquals(
            [
                '<link foo="bar" media="all" type="text/css" rel="stylesheet" href="/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/styles/test.css">',
                '<link foo="bar" media="all" type="text/css" rel="stylesheet" href="/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/styles/test2.css">',
            ],
            $asset->styles('test.css', ['noversion'], ['foo' => 'bar'])
        );
    }

    public function testPaths()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $asset->add('test.css', 'anomaly.module.test::styles/test.css');
        $asset->add('test.css', 'anomaly.module.test::styles/test2.css');

        $this->assertEquals(
            [
                '/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/styles/test.css',
                '/app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/styles/test2.css',
            ],
            $asset->paths('test.css', ['noversion'], ['foo' => 'bar'])
        );
    }

    public function testUrls()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $asset->add('test.css', 'anomaly.module.test::styles/test.css');
        $asset->add('test.css', 'anomaly.module.test::styles/test2.css');

        $this->assertEquals(
            [
                url(
                    'app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/styles/test.css'
                ),
                url(
                    'app/default/assets/anomaly/streams-platform/addons/anomaly/test-module/resources/styles/test2.css'
                ),
            ],
            $asset->urls('test.css', ['noversion'])
        );
    }

    public function testInlines()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $asset->add('test.css', 'anomaly.module.test::styles/test.css');
        $asset->add('test.css', 'anomaly.module.test::styles/test2.css');

        $this->assertEquals(
            [
                '.test{color:#ffffff}',
                '.test{color:#000000}',
            ],
            $asset->inlines('test.css', ['noversion', 'min'], ['foo' => 'bar'])
        );
    }

    public function testLastModifiedAt()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $time = time();

        touch($asset->realPath('anomaly.module.test::styles/test.css'), $time);

        $this->assertEquals(
            $time,
            $asset->lastModifiedAt('anomaly.module.test::styles/')
        );
    }

    public function testAddPath()
    {
        /* @var \Anomaly\Streams\Platform\Asset\Asset $asset */
        $asset = app(\Anomaly\Streams\Platform\Asset\Asset::class);

        $asset->addPath(
            'test',
            base_path('vendor/anomaly/streams-platform/addons/anomaly/test-module/resources')
        );

        $this->assertEquals(
            base_path('vendor/anomaly/streams-platform/addons/anomaly/test-module/resources/styles/test.css'),
            $asset->realPath('test::styles/test.css')
        );
    }
}
