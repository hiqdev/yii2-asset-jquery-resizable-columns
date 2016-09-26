It's just a normal Yii2 asset bundle.

You can use it directly inside of a view:

```php
use hiqdev\yii2\assets\JqueryResizableColumns\ResizableColumnsAsset;

ResizableColumnsAsset::register($this);
```

Or you can add it as a dependency to other asset:

```php
class AppAsset extends \yii\web\AssetBundle
{
    public $depends = [
        \yii\web\YiiAsset::class,
        ...
        \hiqdev\yii2\assets\JqueryResizableColumns\ResizableColumnsAsset::class,
    ];
}
```
