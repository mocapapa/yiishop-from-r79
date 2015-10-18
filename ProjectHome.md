## Preface ##
Basically, I would not fork **yiishop**, just would like it working.

## Those who in trouble ##
To those who cannot install the original **yiishop** ([r79](https://code.google.com/p/yiishop-from-r79/source/detail?r=79)), please follow the steps as below.

  * Download **0.7rc3** from the extension page (http://www.yiiframework.com/extension/yiishop/) and extract as shop under modules.
  * Run 'shop/install', then you can create several tables in the specified MySQL database.
  * Remove shop (rm -rf shop).
  * Checkout the latest **yiishop** ([r79](https://code.google.com/p/yiishop-from-r79/source/detail?r=79)) (or **this module**) from google-code  under modules as shop.

**yiishop**: http://code.google.com/p/yii-shop/

## Installing this ##
Before the install issue in the original yiishop ([r79](https://code.google.com/p/yiishop-from-r79/source/detail?r=79)) being fixed, you may want to follow the instructions above. Only the difference is the 4th step. You may want to check out from this trunk instead of the original.
Or, as I have prepared the demo application using this as below, check out this demo for the starting point of your application.
http://code.google.com/p/yiishop-demo/