<?php
class Gun {

    // ↓フィールド============================
    // 銃の名前
    private $name;
    // 最大装弾数
    private $maxMagazine;
    // 残弾
    private $currentMagazine;
    //拡張マガジン
    private $setExtendedMagazine;
    // ↑フィールド============================

    // コンストラクタ
    function __construct($name, $maxMagazine,$currentMagazine,$setExtendedMagazine) {
        // 問題1
        $this->name = $name;
        $this->maxMagazine = $maxMagazine;
        $this->currentMagazine = 0;
        $this->setExtendedMagazine = $setExtendedMagazine;
    }

    // 現在の状態を表示
    function echoStatus() {
        echo "======現在の状態======". "\n";
        echo "武器名: " . $this->name . "\n";
        echo "最大装弾数: " . $this->maxMagazine . "\n";
        echo "残弾数: " . $this->currentMagazine . "\n";
        echo "======================". "\n";
    }


    // リロード
    function relaod() {
        // 問題2
        if ($this->currentMagazine == $this->maxMagazine) {
            $this->maxMagazine = $this->currentMagazine;
                echo "リロードの必要はありません\n";
        }
    }

    // 発砲
    function fire() {
        // 問題3
        if ($this->currentMagazine == 0) {
            echo "リロードしてください\n";
        } else {
            $this->currentMagazine --;
            echo "[$this->name]を発砲しました。残弾: [$this->currentMagazine] 発\n";
            if ($this->currentMagazine == 0) {
                echo "リロードしてください\n";
            }
        } 
    }

    // 拡張マガジンを装着
    function setExtendedMagazine($setExtendedMagazine) {
        // 問題4
        //if (is_int($setExtendedMagazine) > 0)←これはできない
       
        //is_int(value) => true or falseで表示される

        if (is_int($setExtendedMagazine) && $setExtendedMagazine > 0) {
            // 後続処理
            $this->maxMagazine += $setExtendedMagazine; 
            $this->relaod(); 
        } else {
            echo "引数が不正です\n";
            return;
            }
        
           
            
        

        //エラーメッセージ
        
        return;
    }

    // 拡張マガジンを取外し
    function unsetExtendedMagazine() {
        // 問題4
        $this->setExtendedMagazine = 0;
       echo "拡張マガジンは装着されていません\n";
    }
}