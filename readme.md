# PHP 切樣版簡單範例

## 需求
1. 如何方便的把 HTML 切成樣版，讓組員不需要過多的複製貼上就有相同的樣版用呢？
2. 主頁`index.php`，各個組員的內容在主頁同層的資料夾內，各分類的主頁也是叫`index.php`
3. 共同的部份有側邊導覽，點擊過去該項要有明顯的不同
4. 共同的部份還有一個`<h1>`標籤，放該分類大標

## 切分
1. 將版型從 body 中一半，切成上半與下半，然後上半的導覽列再另外切分出去
2. 導覽列檔案是`template_nav.php`，放相對的 HTML 標籤及 CSS
3. 將需要共用的變數放在`vars.php`
4. 組合版型時依下列順序
    1. 載入變數`vars.php`
    2. 判別用變數設定
    3. 載入變數`template_top.php`
    4. 載入變數`template_nav.php`
    5. 各分類頁面各自不同的內容
    6. 載入變數`template_btm.php`
5. 在分類的資料夾中的`index.php`，載入的檔案要加上`../`
6. 如果有 css 檔或 js 檔，會需要在樣版的`head`或`body`的最後載入，可以用變數`$cssList`和`$jsList`以陣列型態記錄，詳見`cate/index.php`

## 導覽列
1. 依照分類判別用變數來判斷要不要加`btn-danger`，變成紅色按鈕
2. 依照分類判別用變數來判斷是不是在首頁還是在分類中，修改路徑為`./`或`../`

## Modal
1. 樣版中有個 modal1
2. 分類 1 中有一個 modal2
3. 分類 1 中有兩個按鈕開這兩個按鈕
4. 所以 Bootstrap 組件 `tooltips` 和 `Popovers` 以外的，不需要額外啟動，也不需要在 js 載入時就畫好 DOM


## 其他
1. [線上範例](https://sagedaben.com/iSpan/php/set_template_01/)
2. 點個星星讓老師知道有來過