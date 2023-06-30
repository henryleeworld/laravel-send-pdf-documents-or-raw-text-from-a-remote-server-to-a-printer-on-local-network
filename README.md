# Laravel 10 將 PDF 文件或純文字從遠端伺服器發送到本地網路的印表機

引入 rawilk 的 laravel-printing 套件來擴增應用程式利用 [PrintNode](https://www.printnode.com/en) 提供將 PDF 文件或純文字從遠端伺服器發送到本地網路的印表機，PrintNode 是一項託管的列印服務，可以幫助快速，輕鬆且安全地向應用程式新增遠端列印。

## 使用方式
- 打開 php.ini 檔案，啟用 PHP 擴充模組 intl，並重啟服務器。
- 把整個專案複製一份到你的電腦裡，這裡指的「內容」不是只有檔案，而是指所有整個專案的歷史紀錄、分支、標籤等內容都會複製一份下來。
```sh
$ git clone
```
- 將 __.env.example__ 檔案重新命名成 __.env__，如果應用程式金鑰沒有被設定的話，你的使用者 sessions 和其他加密的資料都是不安全的！
- 當你的專案中已經有 composer.lock，可以直接執行指令以讓 Composer 安裝 composer.lock 中指定的套件及版本。
```sh
$ composer install
```
- 產生 Laravel 要使用的一組 32 字元長度的隨機字串 APP_KEY 並存在 .env 內。
```sh
$ php artisan key:generate
```
- 執行 __Artisan__ 指令的 __migrate__ 來執行所有未完成的遷移。
```sh
$ php artisan migrate
```
- 在瀏覽器中輸入已定義的路由 URL 來訪問，例如：http://127.0.0.1:8000。
- 你可以經由 `/printer` 來進行發送到本地網路的印表機。

----

## 畫面截圖
![](https://i.imgur.com/OVKatVz.png)
> 取得印表機清單並將 PDF 文件送到 Microsoft Print to PDF 虛擬印表機來瀏覽結果