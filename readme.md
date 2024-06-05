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
5. 組合版型時依下列順序
  1. 載入變數`vars.php`
    2. 判別用變數設定
  3. 載入變數`template_top.php`
  4. 載入變數`template_nav.php`
  5. 各分類頁面各自不同的內容
  6. 載入變數`template_btm.php`




10. [線上範例](https://sagedaben.com/iSpan/php/set_template_01/)