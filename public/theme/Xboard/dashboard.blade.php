<!doctype html>
<html lang="zh-CN">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>{{$title}}</title>
    <script type="module" crossorigin src="/theme/{{$theme}}/assets/umi.js"></script>
  </head>
  <body>
    <div id="app"></div>
    <script>
        window.routerBase = "/";
        window.settings = {
            title: '{{$title}}',
            assets_path: '/theme/{{$theme}}/assets',
            version: '{{$version}}',
            background_url: '{{$theme_config['background_url']}}',
            description: '{{$description}}',
            i18n: [
                'zh-CN',
                'en-US',
                'ja-JP',
                'vi-VN',
                'ko-KR',
                'zh-TW',
                'fa-IR'
            ],
            logo: '{{$logo}}'
        }
    </script>
  </body>
</html>
